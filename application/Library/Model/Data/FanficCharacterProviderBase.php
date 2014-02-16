<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_FanficCharacterProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_FanficCharacter($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_FanficCharacter($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($character_id, $fanfic_id)
    {
        $strSql = 'SELECT * FROM `fanfic_character` WHERE character_id=? AND fanfic_id=?';
        $params = array($character_id, $fanfic_id);
        return Model_Data_FanficCharacterProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `fanfic_character` (
            character_id,
            fanfic_id
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCharacterId(),
            $objRecord->getFanficId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `fanfic_character` (
            character_id,
            fanfic_id
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCharacterId(),
            $objRecord->getFanficId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `fanfic_character` SET 
            character_id=?,
            fanfic_id=?
        WHERE character_id=? AND fanfic_id=?';
        $arrSetParams = array(
            $objRecord->getCharacterId(),
            $objRecord->getFanficId()
        );
        $arrKeyParams = array($objRecord->getOrigCharacterId(), $objRecord->getOrigFanficId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `fanfic_character` WHERE character_id=? AND fanfic_id=?';
        $params = array($objRecord->getCharacterId(), $objRecord->getFanficId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
