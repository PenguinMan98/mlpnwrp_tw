<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSessionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSessions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSessions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($sessionId)
    {
        $strSql = 'SELECT * FROM `tiki_sessions` WHERE sessionId=?';
        $params = array($sessionId);
        return Model_Data_TikiSessionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_sessions` (
            sessionId,
            user,
            timestamp,
            tikihost
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getSessionid(),
            $objRecord->getUser(),
            $objRecord->getTimestamp(),
            $objRecord->getTikihost()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_sessions` (
            sessionId,
            user,
            timestamp,
            tikihost
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getSessionid(),
            $objRecord->getUser(),
            $objRecord->getTimestamp(),
            $objRecord->getTikihost()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_sessions` SET 
            sessionId=?,
            user=?,
            timestamp=?,
            tikihost=?
        WHERE sessionId=?';
        $arrSetParams = array(
            $objRecord->getSessionid(),
            $objRecord->getUser(),
            $objRecord->getTimestamp(),
            $objRecord->getTikihost()
        );
        $arrKeyParams = array($objRecord->getOrigSessionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_sessions` WHERE sessionId=?';
        $params = array($objRecord->getSessionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
