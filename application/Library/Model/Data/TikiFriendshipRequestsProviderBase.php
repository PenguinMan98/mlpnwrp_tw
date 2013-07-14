<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFriendshipRequestsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFriendshipRequests($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFriendshipRequests($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($userFrom, $userTo)
    {
        $strSql = 'SELECT * FROM `tiki_friendship_requests` WHERE userFrom=? AND userTo=?';
        $params = array($userFrom, $userTo);
        return Model_Data_TikiFriendshipRequestsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_friendship_requests` (
            userFrom,
            userTo,
            tstamp
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getUserfrom(),
            $objRecord->getUserto(),
            $objRecord->getTstamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_friendship_requests` (
            userFrom,
            userTo,
            tstamp
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getUserfrom(),
            $objRecord->getUserto(),
            $objRecord->getTstamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_friendship_requests` SET 
            userFrom=?,
            userTo=?,
            tstamp=?
        WHERE userFrom=? AND userTo=?';
        $arrSetParams = array(
            $objRecord->getUserfrom(),
            $objRecord->getUserto(),
            $objRecord->getTstamp()
        );
        $arrKeyParams = array($objRecord->getOrigUserfrom(), $objRecord->getOrigUserto());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_friendship_requests` WHERE userFrom=? AND userTo=?';
        $params = array($objRecord->getUserfrom(), $objRecord->getUserto());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
