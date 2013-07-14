<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiLiveSupportMessagesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiLiveSupportMessages($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiLiveSupportMessages($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($msgId)
    {
        $strSql = 'SELECT * FROM `tiki_live_support_messages` WHERE msgId=?';
        $params = array($msgId);
        return Model_Data_TikiLiveSupportMessagesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_live_support_messages` (
            msgId,
            data,
            timestamp,
            user,
            username,
            priority,
            status,
            assigned_to,
            resolution,
            title,
            module,
            email
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getData(),
            $objRecord->getTimestamp(),
            $objRecord->getUser(),
            $objRecord->getUsername(),
            $objRecord->getPriority(),
            $objRecord->getStatus(),
            $objRecord->getAssignedTo(),
            $objRecord->getResolution(),
            $objRecord->getTitle(),
            $objRecord->getModule(),
            $objRecord->getEmail()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMsgid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_live_support_messages` (
            msgId,
            data,
            timestamp,
            user,
            username,
            priority,
            status,
            assigned_to,
            resolution,
            title,
            module,
            email
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getData(),
            $objRecord->getTimestamp(),
            $objRecord->getUser(),
            $objRecord->getUsername(),
            $objRecord->getPriority(),
            $objRecord->getStatus(),
            $objRecord->getAssignedTo(),
            $objRecord->getResolution(),
            $objRecord->getTitle(),
            $objRecord->getModule(),
            $objRecord->getEmail()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMsgid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_live_support_messages` SET 
            msgId=?,
            data=?,
            timestamp=?,
            user=?,
            username=?,
            priority=?,
            status=?,
            assigned_to=?,
            resolution=?,
            title=?,
            module=?,
            email=?
        WHERE msgId=?';
        $arrSetParams = array(
            $objRecord->getMsgid(),
            $objRecord->getData(),
            $objRecord->getTimestamp(),
            $objRecord->getUser(),
            $objRecord->getUsername(),
            $objRecord->getPriority(),
            $objRecord->getStatus(),
            $objRecord->getAssignedTo(),
            $objRecord->getResolution(),
            $objRecord->getTitle(),
            $objRecord->getModule(),
            $objRecord->getEmail()
        );
        $arrKeyParams = array($objRecord->getOrigMsgid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_live_support_messages` WHERE msgId=?';
        $params = array($objRecord->getMsgid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
