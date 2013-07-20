<?php
class Model_Data_CharacterRaceProvider extends Model_Data_CharacterRaceProviderBase
{
	private $raceList = array();
	
	public function getRaceList(){
		$retArray = array();
		if(empty($this->raceList)){
			$strSql = 'SELECT * FROM `character_race` WHERE `restricted`=0 order by `name` ASC';
			$params = array();
			$this->raceList = parent::getArrayFromQuery($strSql, $params);
		}
		return $this->raceList;
	}
	
	public function getOneByRaceName( $raceName ) {
		$strSql = 'SELECT * FROM `character_race` WHERE `name`=?';
		$params = array($raceName);
		return $this->getOneFromQuery($strSql, $params);
	}
	
	/*
	* Sets the race to the named Character.
	* If the character doesn't exist, throw an error.
	* If the race doesn't exist, create it and make the assignment.
	* */
	public function setRace( $characterName, $newRace, &$messages){
		// get character
		$cProvider = new Model_Data_CharacterProvider();
		GLOBAL $character;
		if(!is_object($character) || $characterName != $character->getName()){ // If I'm changing anyone but me or calling from an external script,
			$character = $cProvider->getOneByCharacterName($characterName); // get the character I'm changing
		}
	
		if(!is_object($character)){
			throw new Exception("There is no $characterName.");
		}

		// now that we have a character, we're good to try getting the race
		$race = $this->getOneByRaceName($newRace);
		try{
			DAO::startTransaction();  // always smart to undo what you did if something goes wrong
			$arrErrors = array();
			if(!is_object($race)){  // if the race doesn't exist
				$race = new Model_Structure_CharacterRace(array('name'=>$newRace, 'restricted'=>1)); // create a race object with the new race
				$this->insertOne($race, $arrErrors); // create one and return its id.
				if(!empty($arrErrors)){
					throw new Exception("Error creating race: " . implode('|',$arrErrors));
				}
			}
			$character->setCharacterRaceId($race->getCharacterRaceId()); // set the new race id into the character
			$cProvider->updateOne($character, $arrErrors); // update it.
			
			if(!empty($arrErrors)){
				$messages[] = "errors: ".implode('|',$arrErrors)."";
				throw new Exception("Error setting race: " . implode('|',$arrErrors));
			}
	
			DAO::commit(); // save the changes
		}catch(Exception $e){
			DAO::rollback(); // undo the changes
			throw $e; // I want the error message to bubble out.
		}

		return true;
	}
}
