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
	
}
