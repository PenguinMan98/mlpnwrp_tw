<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiForumsReportedProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiForumsReported($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiForumsReported($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($threadId)
    {
        $strSql = 'SELECT * FROM `tiki_forums_reported` WHERE threadId=?';
        $params = array($threadId);
        return Model_Data_TikiForumsReportedProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_forums_reported` (
            threadId,
            forumId,
            parentId,
            user,
            timestamp,
            reason
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getThreadid(),
            $objRecord->getForumid(),
            $objRecord->getParentid(),
            $objRecord->getUser(),
            $objRecord->getTimestamp(),
            $objRecord->getReason()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_forums_reported` (
            threadId,
            forumId,
            parentId,
            user,
            timestamp,
            reason
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getThreadid(),
            $objRecord->getForumid(),
            $objRecord->getParentid(),
            $objRecord->getUser(),
            $objRecord->getTimestamp(),
            $objRecord->getReason()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_forums_reported` SET 
            threadId=?,
            forumId=?,
            parentId=?,
            user=?,
            timestamp=?,
            reason=?
        WHERE threadId=?';
        $arrSetParams = array(
            $objRecord->getThreadid(),
            $objRecord->getForumid(),
            $objRecord->getParentid(),
            $objRecord->getUser(),
            $objRecord->getTimestamp(),
            $objRecord->getReason()
        );
        $arrKeyParams = array($objRecord->getOrigThreadid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_forums_reported` WHERE threadId=?';
        $params = array($objRecord->getThreadid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
