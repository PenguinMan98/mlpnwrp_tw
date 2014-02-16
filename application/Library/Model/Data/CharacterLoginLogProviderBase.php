<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_CharacterLoginLogProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_CharacterLoginLog($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_CharacterLoginLog($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($character_login_log_id)
    {
        $strSql = 'SELECT * FROM `character_login_log` WHERE character_login_log_id=?';
        $params = array($character_login_log_id);
        return Model_Data_CharacterLoginLogProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `character_login_log` (
            character_login_log_id,
            character_id,
            handle,
            user_id,
            user_ip,
            login_time
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCharacterId(),
            $objRecord->getHandle(),
            $objRecord->getUserId(),
            $objRecord->getUserIp(),
            $objRecord->getLoginTime()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCharacterLoginLogId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `character_login_log` (
            character_login_log_id,
            character_id,
            handle,
            user_id,
            user_ip,
            login_time
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCharacterId(),
            $objRecord->getHandle(),
            $objRecord->getUserId(),
            $objRecord->getUserIp(),
            $objRecord->getLoginTime()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCharacterLoginLogId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `character_login_log` SET 
            character_login_log_id=?,
            character_id=?,
            handle=?,
            user_id=?,
            user_ip=?,
            login_time=?
        WHERE character_login_log_id=?';
        $arrSetParams = array(
            $objRecord->getCharacterLoginLogId(),
            $objRecord->getCharacterId(),
            $objRecord->getHandle(),
            $objRecord->getUserId(),
            $objRecord->getUserIp(),
            $objRecord->getLoginTime()
        );
        $arrKeyParams = array($objRecord->getOrigCharacterLoginLogId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `character_login_log` WHERE character_login_log_id=?';
        $params = array($objRecord->getCharacterLoginLogId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
