<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_CharacterRaceProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_CharacterRace($arrResults[0]);
            }
        }
        return null;
    }

    protected function getArrayFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            $arrRecordList = array();
            foreach ($arrResults as $arrRecord) {
                $arrRecordList[] = new Model_Structure_CharacterRace($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($character_race_id)
    {
        $strSql = 'SELECT * FROM `character_race` WHERE character_race_id=?';
        $params = array($character_race_id);
        return Model_Data_CharacterRaceProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `character_race` (
            character_race_id,
            name,
            description,
            restricted
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getRestricted()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCharacterRaceId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `character_race` (
            character_race_id,
            name,
            description,
            restricted
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getRestricted()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCharacterRaceId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `character_race` SET 
            character_race_id=?,
            name=?,
            description=?,
            restricted=?
        WHERE character_race_id=?';
        $arrSetParams = array(
            $objRecord->getCharacterRaceId(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getRestricted()
        );
        $arrKeyParams = array($objRecord->getOrigCharacterRaceId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `character_race` WHERE character_race_id=?';
        $params = array($objRecord->getCharacterRaceId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
