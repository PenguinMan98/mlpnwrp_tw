<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiForumsQueueProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiForumsQueue($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiForumsQueue($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($qId)
    {
        $strSql = 'SELECT * FROM `tiki_forums_queue` WHERE qId=?';
        $params = array($qId);
        return Model_Data_TikiForumsQueueProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_forums_queue` (
            qId,
            object,
            parentId,
            forumId,
            timestamp,
            user,
            title,
            data,
            type,
            hash,
            topic_smiley,
            topic_title,
            summary,
            in_reply_to,
            tags,
            email
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getObject(),
            $objRecord->getParentid(),
            $objRecord->getForumid(),
            $objRecord->getTimestamp(),
            $objRecord->getUser(),
            $objRecord->getTitle(),
            $objRecord->getData(),
            $objRecord->getType(),
            $objRecord->getHash(),
            $objRecord->getTopicSmiley(),
            $objRecord->getTopicTitle(),
            $objRecord->getSummary(),
            $objRecord->getInReplyTo(),
            $objRecord->getTags(),
            $objRecord->getEmail()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setQid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_forums_queue` (
            qId,
            object,
            parentId,
            forumId,
            timestamp,
            user,
            title,
            data,
            type,
            hash,
            topic_smiley,
            topic_title,
            summary,
            in_reply_to,
            tags,
            email
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getObject(),
            $objRecord->getParentid(),
            $objRecord->getForumid(),
            $objRecord->getTimestamp(),
            $objRecord->getUser(),
            $objRecord->getTitle(),
            $objRecord->getData(),
            $objRecord->getType(),
            $objRecord->getHash(),
            $objRecord->getTopicSmiley(),
            $objRecord->getTopicTitle(),
            $objRecord->getSummary(),
            $objRecord->getInReplyTo(),
            $objRecord->getTags(),
            $objRecord->getEmail()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setQid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_forums_queue` SET 
            qId=?,
            object=?,
            parentId=?,
            forumId=?,
            timestamp=?,
            user=?,
            title=?,
            data=?,
            type=?,
            hash=?,
            topic_smiley=?,
            topic_title=?,
            summary=?,
            in_reply_to=?,
            tags=?,
            email=?
        WHERE qId=?';
        $arrSetParams = array(
            $objRecord->getQid(),
            $objRecord->getObject(),
            $objRecord->getParentid(),
            $objRecord->getForumid(),
            $objRecord->getTimestamp(),
            $objRecord->getUser(),
            $objRecord->getTitle(),
            $objRecord->getData(),
            $objRecord->getType(),
            $objRecord->getHash(),
            $objRecord->getTopicSmiley(),
            $objRecord->getTopicTitle(),
            $objRecord->getSummary(),
            $objRecord->getInReplyTo(),
            $objRecord->getTags(),
            $objRecord->getEmail()
        );
        $arrKeyParams = array($objRecord->getOrigQid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_forums_queue` WHERE qId=?';
        $params = array($objRecord->getQid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
