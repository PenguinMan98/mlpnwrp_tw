<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCommentsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiComments($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiComments($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($threadId)
    {
        $strSql = 'SELECT * FROM `tiki_comments` WHERE threadId=?';
        $params = array($threadId);
        return Model_Data_TikiCommentsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_comments` (
            threadId,
            object,
            objectType,
            parentId,
            userName,
            commentDate,
            hits,
            type,
            points,
            votes,
            average,
            title,
            data,
            hash,
            email,
            website,
            user_ip,
            summary,
            smiley,
            message_id,
            in_reply_to,
            comment_rating,
            archived,
            approved,
            locked
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getObject(),
            $objRecord->getObjecttype(),
            $objRecord->getParentid(),
            $objRecord->getUsername(),
            $objRecord->getCommentdate(),
            $objRecord->getHits(),
            $objRecord->getType(),
            $objRecord->getPoints(),
            $objRecord->getVotes(),
            $objRecord->getAverage(),
            $objRecord->getTitle(),
            $objRecord->getData(),
            $objRecord->getHash(),
            $objRecord->getEmail(),
            $objRecord->getWebsite(),
            $objRecord->getUserIp(),
            $objRecord->getSummary(),
            $objRecord->getSmiley(),
            $objRecord->getMessageId(),
            $objRecord->getInReplyTo(),
            $objRecord->getCommentRating(),
            $objRecord->getArchived(),
            $objRecord->getApproved(),
            $objRecord->getLocked()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setThreadid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_comments` (
            threadId,
            object,
            objectType,
            parentId,
            userName,
            commentDate,
            hits,
            type,
            points,
            votes,
            average,
            title,
            data,
            hash,
            email,
            website,
            user_ip,
            summary,
            smiley,
            message_id,
            in_reply_to,
            comment_rating,
            archived,
            approved,
            locked
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getObject(),
            $objRecord->getObjecttype(),
            $objRecord->getParentid(),
            $objRecord->getUsername(),
            $objRecord->getCommentdate(),
            $objRecord->getHits(),
            $objRecord->getType(),
            $objRecord->getPoints(),
            $objRecord->getVotes(),
            $objRecord->getAverage(),
            $objRecord->getTitle(),
            $objRecord->getData(),
            $objRecord->getHash(),
            $objRecord->getEmail(),
            $objRecord->getWebsite(),
            $objRecord->getUserIp(),
            $objRecord->getSummary(),
            $objRecord->getSmiley(),
            $objRecord->getMessageId(),
            $objRecord->getInReplyTo(),
            $objRecord->getCommentRating(),
            $objRecord->getArchived(),
            $objRecord->getApproved(),
            $objRecord->getLocked()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setThreadid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_comments` SET 
            threadId=?,
            object=?,
            objectType=?,
            parentId=?,
            userName=?,
            commentDate=?,
            hits=?,
            type=?,
            points=?,
            votes=?,
            average=?,
            title=?,
            data=?,
            hash=?,
            email=?,
            website=?,
            user_ip=?,
            summary=?,
            smiley=?,
            message_id=?,
            in_reply_to=?,
            comment_rating=?,
            archived=?,
            approved=?,
            locked=?
        WHERE threadId=?';
        $arrSetParams = array(
            $objRecord->getThreadid(),
            $objRecord->getObject(),
            $objRecord->getObjecttype(),
            $objRecord->getParentid(),
            $objRecord->getUsername(),
            $objRecord->getCommentdate(),
            $objRecord->getHits(),
            $objRecord->getType(),
            $objRecord->getPoints(),
            $objRecord->getVotes(),
            $objRecord->getAverage(),
            $objRecord->getTitle(),
            $objRecord->getData(),
            $objRecord->getHash(),
            $objRecord->getEmail(),
            $objRecord->getWebsite(),
            $objRecord->getUserIp(),
            $objRecord->getSummary(),
            $objRecord->getSmiley(),
            $objRecord->getMessageId(),
            $objRecord->getInReplyTo(),
            $objRecord->getCommentRating(),
            $objRecord->getArchived(),
            $objRecord->getApproved(),
            $objRecord->getLocked()
        );
        $arrKeyParams = array($objRecord->getOrigThreadid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_comments` WHERE threadId=?';
        $params = array($objRecord->getThreadid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
