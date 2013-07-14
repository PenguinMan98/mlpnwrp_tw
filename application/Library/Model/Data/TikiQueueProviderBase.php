<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiQueueProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiQueue($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiQueue($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($entryId)
    {
        $strSql = 'SELECT * FROM `tiki_queue` WHERE entryId=?';
        $params = array($entryId);
        return Model_Data_TikiQueueProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_queue` (
            entryId,
            queue,
            timestamp,
            handler,
            message
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getQueue(),
            $objRecord->getTimestamp(),
            $objRecord->getHandler(),
            $objRecord->getMessage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setEntryid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_queue` (
            entryId,
            queue,
            timestamp,
            handler,
            message
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getQueue(),
            $objRecord->getTimestamp(),
            $objRecord->getHandler(),
            $objRecord->getMessage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setEntryid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_queue` SET 
            entryId=?,
            queue=?,
            timestamp=?,
            handler=?,
            message=?
        WHERE entryId=?';
        $arrSetParams = array(
            $objRecord->getEntryid(),
            $objRecord->getQueue(),
            $objRecord->getTimestamp(),
            $objRecord->getHandler(),
            $objRecord->getMessage()
        );
        $arrKeyParams = array($objRecord->getOrigEntryid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_queue` WHERE entryId=?';
        $params = array($objRecord->getEntryid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
