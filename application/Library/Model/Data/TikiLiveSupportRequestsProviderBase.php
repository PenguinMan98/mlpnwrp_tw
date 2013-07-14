<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiLiveSupportRequestsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiLiveSupportRequests($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiLiveSupportRequests($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($reqId)
    {
        $strSql = 'SELECT * FROM `tiki_live_support_requests` WHERE reqId=?';
        $params = array($reqId);
        return Model_Data_TikiLiveSupportRequestsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_live_support_requests` (
            reqId,
            user,
            tiki_user,
            email,
            operator,
            operator_id,
            user_id,
            reason,
            req_timestamp,
            timestamp,
            status,
            resolution,
            chat_started,
            chat_ended
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getReqid(),
            $objRecord->getUser(),
            $objRecord->getTikiUser(),
            $objRecord->getEmail(),
            $objRecord->getOperator(),
            $objRecord->getOperatorId(),
            $objRecord->getUserId(),
            $objRecord->getReason(),
            $objRecord->getReqTimestamp(),
            $objRecord->getTimestamp(),
            $objRecord->getStatus(),
            $objRecord->getResolution(),
            $objRecord->getChatStarted(),
            $objRecord->getChatEnded()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_live_support_requests` (
            reqId,
            user,
            tiki_user,
            email,
            operator,
            operator_id,
            user_id,
            reason,
            req_timestamp,
            timestamp,
            status,
            resolution,
            chat_started,
            chat_ended
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getReqid(),
            $objRecord->getUser(),
            $objRecord->getTikiUser(),
            $objRecord->getEmail(),
            $objRecord->getOperator(),
            $objRecord->getOperatorId(),
            $objRecord->getUserId(),
            $objRecord->getReason(),
            $objRecord->getReqTimestamp(),
            $objRecord->getTimestamp(),
            $objRecord->getStatus(),
            $objRecord->getResolution(),
            $objRecord->getChatStarted(),
            $objRecord->getChatEnded()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_live_support_requests` SET 
            reqId=?,
            user=?,
            tiki_user=?,
            email=?,
            operator=?,
            operator_id=?,
            user_id=?,
            reason=?,
            req_timestamp=?,
            timestamp=?,
            status=?,
            resolution=?,
            chat_started=?,
            chat_ended=?
        WHERE reqId=?';
        $arrSetParams = array(
            $objRecord->getReqid(),
            $objRecord->getUser(),
            $objRecord->getTikiUser(),
            $objRecord->getEmail(),
            $objRecord->getOperator(),
            $objRecord->getOperatorId(),
            $objRecord->getUserId(),
            $objRecord->getReason(),
            $objRecord->getReqTimestamp(),
            $objRecord->getTimestamp(),
            $objRecord->getStatus(),
            $objRecord->getResolution(),
            $objRecord->getChatStarted(),
            $objRecord->getChatEnded()
        );
        $arrKeyParams = array($objRecord->getOrigReqid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_live_support_requests` WHERE reqId=?';
        $params = array($objRecord->getReqid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
