<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiForumAttachmentsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiForumAttachments($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiForumAttachments($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($attId)
    {
        $strSql = 'SELECT * FROM `tiki_forum_attachments` WHERE attId=?';
        $params = array($attId);
        return Model_Data_TikiForumAttachmentsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_forum_attachments` (
            attId,
            threadId,
            qId,
            forumId,
            filename,
            filetype,
            filesize,
            data,
            dir,
            created,
            path
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getThreadid(),
            $objRecord->getQid(),
            $objRecord->getForumid(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData(),
            $objRecord->getDir(),
            $objRecord->getCreated(),
            $objRecord->getPath()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setAttid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_forum_attachments` (
            attId,
            threadId,
            qId,
            forumId,
            filename,
            filetype,
            filesize,
            data,
            dir,
            created,
            path
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getThreadid(),
            $objRecord->getQid(),
            $objRecord->getForumid(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData(),
            $objRecord->getDir(),
            $objRecord->getCreated(),
            $objRecord->getPath()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setAttid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_forum_attachments` SET 
            attId=?,
            threadId=?,
            qId=?,
            forumId=?,
            filename=?,
            filetype=?,
            filesize=?,
            data=?,
            dir=?,
            created=?,
            path=?
        WHERE attId=?';
        $arrSetParams = array(
            $objRecord->getAttid(),
            $objRecord->getThreadid(),
            $objRecord->getQid(),
            $objRecord->getForumid(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData(),
            $objRecord->getDir(),
            $objRecord->getCreated(),
            $objRecord->getPath()
        );
        $arrKeyParams = array($objRecord->getOrigAttid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_forum_attachments` WHERE attId=?';
        $params = array($objRecord->getAttid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
