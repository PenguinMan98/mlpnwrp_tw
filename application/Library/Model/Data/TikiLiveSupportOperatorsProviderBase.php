<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiLiveSupportOperatorsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiLiveSupportOperators($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiLiveSupportOperators($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user)
    {
        $strSql = 'SELECT * FROM `tiki_live_support_operators` WHERE user=?';
        $params = array($user);
        return Model_Data_TikiLiveSupportOperatorsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_live_support_operators` (
            user,
            accepted_requests,
            status,
            longest_chat,
            shortest_chat,
            average_chat,
            last_chat,
            time_online,
            votes,
            points,
            status_since
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getAcceptedRequests(),
            $objRecord->getStatus(),
            $objRecord->getLongestChat(),
            $objRecord->getShortestChat(),
            $objRecord->getAverageChat(),
            $objRecord->getLastChat(),
            $objRecord->getTimeOnline(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getStatusSince()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_live_support_operators` (
            user,
            accepted_requests,
            status,
            longest_chat,
            shortest_chat,
            average_chat,
            last_chat,
            time_online,
            votes,
            points,
            status_since
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getAcceptedRequests(),
            $objRecord->getStatus(),
            $objRecord->getLongestChat(),
            $objRecord->getShortestChat(),
            $objRecord->getAverageChat(),
            $objRecord->getLastChat(),
            $objRecord->getTimeOnline(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getStatusSince()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_live_support_operators` SET 
            user=?,
            accepted_requests=?,
            status=?,
            longest_chat=?,
            shortest_chat=?,
            average_chat=?,
            last_chat=?,
            time_online=?,
            votes=?,
            points=?,
            status_since=?
        WHERE user=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getAcceptedRequests(),
            $objRecord->getStatus(),
            $objRecord->getLongestChat(),
            $objRecord->getShortestChat(),
            $objRecord->getAverageChat(),
            $objRecord->getLastChat(),
            $objRecord->getTimeOnline(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getStatusSince()
        );
        $arrKeyParams = array($objRecord->getOrigUser());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_live_support_operators` WHERE user=?';
        $params = array($objRecord->getUser());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
