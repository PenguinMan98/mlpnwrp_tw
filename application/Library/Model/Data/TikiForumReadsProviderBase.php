<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiForumReadsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiForumReads($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiForumReads($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user, $threadId)
    {
        $strSql = 'SELECT * FROM `tiki_forum_reads` WHERE user=? AND threadId=?';
        $params = array($user, $threadId);
        return Model_Data_TikiForumReadsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_forum_reads` (
            user,
            threadId,
            forumId,
            timestamp
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getThreadid(),
            $objRecord->getForumid(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_forum_reads` (
            user,
            threadId,
            forumId,
            timestamp
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getThreadid(),
            $objRecord->getForumid(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_forum_reads` SET 
            user=?,
            threadId=?,
            forumId=?,
            timestamp=?
        WHERE user=? AND threadId=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getThreadid(),
            $objRecord->getForumid(),
            $objRecord->getTimestamp()
        );
        $arrKeyParams = array($objRecord->getOrigUser(), $objRecord->getOrigThreadid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_forum_reads` WHERE user=? AND threadId=?';
        $params = array($objRecord->getUser(), $objRecord->getThreadid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
