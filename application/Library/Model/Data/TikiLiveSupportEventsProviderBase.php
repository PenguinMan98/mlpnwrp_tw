<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiLiveSupportEventsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiLiveSupportEvents($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiLiveSupportEvents($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($eventId)
    {
        $strSql = 'SELECT * FROM `tiki_live_support_events` WHERE eventId=?';
        $params = array($eventId);
        return Model_Data_TikiLiveSupportEventsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_live_support_events` (
            eventId,
            reqId,
            type,
            seqId,
            senderId,
            data,
            timestamp
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getReqid(),
            $objRecord->getType(),
            $objRecord->getSeqid(),
            $objRecord->getSenderid(),
            $objRecord->getData(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setEventid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_live_support_events` (
            eventId,
            reqId,
            type,
            seqId,
            senderId,
            data,
            timestamp
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getReqid(),
            $objRecord->getType(),
            $objRecord->getSeqid(),
            $objRecord->getSenderid(),
            $objRecord->getData(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setEventid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_live_support_events` SET 
            eventId=?,
            reqId=?,
            type=?,
            seqId=?,
            senderId=?,
            data=?,
            timestamp=?
        WHERE eventId=?';
        $arrSetParams = array(
            $objRecord->getEventid(),
            $objRecord->getReqid(),
            $objRecord->getType(),
            $objRecord->getSeqid(),
            $objRecord->getSenderid(),
            $objRecord->getData(),
            $objRecord->getTimestamp()
        );
        $arrKeyParams = array($objRecord->getOrigEventid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_live_support_events` WHERE eventId=?';
        $params = array($objRecord->getEventid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
