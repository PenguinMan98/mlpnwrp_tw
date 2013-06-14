<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_CharacterAgeProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_CharacterAge($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_CharacterAge($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($character_age_id)
    {
        $strSql = 'SELECT * FROM `character_age` WHERE character_age_id=?';
        $params = array($character_age_id);
        return Model_Data_CharacterAgeProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `character_age` (
            character_age_id,
            name,
            adult,
            description
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getAdult(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCharacterAgeId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `character_age` (
            character_age_id,
            name,
            adult,
            description
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getAdult(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCharacterAgeId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `character_age` SET 
            character_age_id=?,
            name=?,
            adult=?,
            description=?
        WHERE character_age_id=?';
        $arrSetParams = array(
            $objRecord->getCharacterAgeId(),
            $objRecord->getName(),
            $objRecord->getAdult(),
            $objRecord->getDescription()
        );
        $arrKeyParams = array($objRecord->getOrigCharacterAgeId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `character_age` WHERE character_age_id=?';
        $params = array($objRecord->getCharacterAgeId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
