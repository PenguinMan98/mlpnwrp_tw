<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_CharacterUserProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_CharacterUser($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_CharacterUser($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($character_id, $user_id)
    {
        $strSql = 'SELECT * FROM `character_user` WHERE character_id=? AND user_id=?';
        $params = array($character_id, $user_id);
        return Model_Data_CharacterUserProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `character_user` (
            character_id,
            user_id
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCharacterId(),
            $objRecord->getUserId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `character_user` (
            character_id,
            user_id
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCharacterId(),
            $objRecord->getUserId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `character_user` SET 
            character_id=?,
            user_id=?
        WHERE character_id=? AND user_id=?';
        $arrSetParams = array(
            $objRecord->getCharacterId(),
            $objRecord->getUserId()
        );
        $arrKeyParams = array($objRecord->getOrigCharacterId(), $objRecord->getOrigUserId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `character_user` WHERE character_id=? AND user_id=?';
        $params = array($objRecord->getCharacterId(), $objRecord->getUserId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
