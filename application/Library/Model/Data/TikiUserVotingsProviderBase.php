<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserVotingsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserVotings($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserVotings($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user, $ip, $id, $optionId, $time)
    {
        $strSql = 'SELECT * FROM `tiki_user_votings` WHERE user=? AND ip=? AND id=? AND optionId=? AND time=?';
        $params = array($user, $ip, $id, $optionId, $time);
        return Model_Data_TikiUserVotingsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_votings` (
            user,
            ip,
            id,
            optionId,
            time
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getId(),
            $objRecord->getOptionid(),
            $objRecord->getTime()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_votings` (
            user,
            ip,
            id,
            optionId,
            time
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getId(),
            $objRecord->getOptionid(),
            $objRecord->getTime()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_votings` SET 
            user=?,
            ip=?,
            id=?,
            optionId=?,
            time=?
        WHERE user=? AND ip=? AND id=? AND optionId=? AND time=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getId(),
            $objRecord->getOptionid(),
            $objRecord->getTime()
        );
        $arrKeyParams = array($objRecord->getOrigUser(), $objRecord->getOrigIp(), $objRecord->getOrigId(), $objRecord->getOrigOptionid(), $objRecord->getOrigTime());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_votings` WHERE user=? AND ip=? AND id=? AND optionId=? AND time=?';
        $params = array($objRecord->getUser(), $objRecord->getIp(), $objRecord->getId(), $objRecord->getOptionid(), $objRecord->getTime());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
