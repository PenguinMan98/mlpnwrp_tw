<?php
class Model_Data_CharacterAgeProvider extends Model_Data_CharacterAgeProviderBase
{
	private $ageList = array();
	
	public function getAgeList(){
		$retArray = array();
		if(empty($this->ageList)){
			$strSql = 'SELECT * FROM `character_age` order by `name` ASC';
			$params = array();
			$this->ageList = parent::getArrayFromQuery($strSql, $params);
		}
		return $this->ageList;
	}
}
