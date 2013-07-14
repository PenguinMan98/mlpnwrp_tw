<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiLiveSupportMessageCommentsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiLiveSupportMessageComments($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiLiveSupportMessageComments($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($cId)
    {
        $strSql = 'SELECT * FROM `tiki_live_support_message_comments` WHERE cId=?';
        $params = array($cId);
        return Model_Data_TikiLiveSupportMessageCommentsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_live_support_message_comments` (
            cId,
            msgId,
            data,
            timestamp
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMsgid(),
            $objRecord->getData(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_live_support_message_comments` (
            cId,
            msgId,
            data,
            timestamp
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMsgid(),
            $objRecord->getData(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_live_support_message_comments` SET 
            cId=?,
            msgId=?,
            data=?,
            timestamp=?
        WHERE cId=?';
        $arrSetParams = array(
            $objRecord->getCid(),
            $objRecord->getMsgid(),
            $objRecord->getData(),
            $objRecord->getTimestamp()
        );
        $arrKeyParams = array($objRecord->getOrigCid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_live_support_message_comments` WHERE cId=?';
        $params = array($objRecord->getCid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
