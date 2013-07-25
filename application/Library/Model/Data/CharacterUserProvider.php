<?php
class Model_Data_CharacterUserProvider extends Model_Data_CharacterUserProviderBase
{
	/*
	 * Grant Character!
	 * This gives a player access to a character without removing other access to that character.  
	 * It also creates the character if it wasn't there before.
	 * May throw three exceptions:
	 * - The player doesn't exist
	 * - The character couldn't be created
	 * - The relationship couldn't be created
	 * */
	public function grantCharacter($playerName, $characterName){
		// verify the player exists. If not, throw an error.
		$uProvider = new Model_Data_UsersUsersProvider();
		$player = $uProvider->getOneByPlayerName($playerName);
		if(!is_object($player)){
			throw new Exception("Player does not Exist");
		}
		// verify the Character exists. If not, create it.
		$cProvider = new Model_Data_CharacterProvider();
		$character = $cProvider->getOneByCharacterName($characterName);
		$arrErrors = array();
		
		try{ // all database stuff in a try/catch transaction block.  Either do both or neither.
			DAO::startTransaction();
			if(!is_object($character)){
				$character = new Model_Structure_Character(array(
						'creator_user_id' => 1,
						'name' => $characterName,
						'bio' => 'Hello Everypony!  I\'m new!',
						'status' => 'Normal',
						'logged_in' => 0,
						'chat_name_color' => "#ffffff",
						'chat_name_formatted' => $characterName,
						'chat_text_color' => "#ffffff",
						'character_race_id' => 1,
						'character_age_id' => 4,
						'created_date' => date('Y-m-d H:i:s'),
						'chat_room_id' => 1
					));
				
				$cProvider->insertOne($character, $arrErrors);
				if(!empty($arrErrors)){
					throw new Exception("Error creating character: " . implode("|", $arrErrors));
				}
			}
			// Now I have a player and a character
			// make the assignment by creating a character user record.
			$cu = new Model_Structure_CharacterUser(array(
					'character_id' => $character->getCharacterId(),
					'user_id' => $player->getUserid()
				));
			$this->replaceOne($cu, $arrErrors); // use replace into to avoid the mess of 
			if(!empty($arrErrors)){
				throw new Exception("Error creating character user relationship: " . implode("|", $arrErrors));
			}
			
			DAO::commit();
		}catch(Exception $e){
			DAO::rollback();
			throw $e;
		}
	}
	
	/*
	 * Transfer Character!
	 * This gives a player exclusive access to a character
	 * It also creates the character if it wasn't there before.
	 * May throw three exceptions:
	 * - The player doesn't exist
	 * - The character couldn't be created
	 * - The relationship couldn't be created
	 * */
	public function transferCharacter($playerName, $characterName){
		// verify the player exists. If not, throw an error.
		$uProvider = new Model_Data_UsersUsersProvider();
		$player = $uProvider->getOneByPlayerName($playerName);
		if(!is_object($player)){
			throw new Exception("Player does not Exist");
		}
		// verify the Character exists. If not, create it.
		$cProvider = new Model_Data_CharacterProvider();
		$character = $cProvider->getOneByCharacterName($characterName);
		$arrErrors = array();
		
		try{ // all database stuff in a try/catch transaction block.  Either do both or neither.
			DAO::startTransaction();
			if(!is_object($character)){
				$character = new Model_Structure_Character(array(
						'creator_user_id' => 1,
						'name' => $characterName,
						'bio' => 'Hello Everypony!  I\'m new!',
						'status' => 'Normal',
						'logged_in' => 0,
						'chat_name_color' => "#ffffff",
						'chat_name_formatted' => $characterName,
						'chat_text_color' => "#ffffff",
						'character_race_id' => 1,
						'character_age_id' => 4,
						'created_date' => date('Y-m-d H:i:s'),
						'chat_room_id' => 1
				));
		
				$cProvider->insertOne($character, $arrErrors);
				if(!empty($arrErrors)){
					throw new Exception("Error creating character: " . implode("|", $arrErrors));
				}
			}
			// Now I have a player and a character
			// first remove all previous assignments
			$this->removeByCharacterId($character->getCharacterId());
			
			// finally, make the assignment by creating a character user record.
			$cu = new Model_Structure_CharacterUser(array(
					'character_id' => $character->getCharacterId(),
					'user_id' => $player->getUserid()
			));
			$this->replaceOne($cu, $arrErrors); // use replace into to avoid the mess of
			if(!empty($arrErrors)){
				throw new Exception("Error creating character user relationship: " . implode("|", $arrErrors));
			}
				
			DAO::commit();
		}catch(Exception $e){
			DAO::rollback();
			throw $e;
		}
	}
	
	public function removeByCharacterId($characterId){
		$strSql = 'DELETE FROM `character_user` WHERE character_id=?';
        $arrParams = array($characterId);
        $arrErrors = array();
        DAO::execute($strSql, $arrParams, $arrErrors);
        if(!empty($arrErrors)){
        	throw new Exception("Error deleting relationships to character $characterId: " . implode('|', $arrErrors));
        }
        return true;
	}
}
