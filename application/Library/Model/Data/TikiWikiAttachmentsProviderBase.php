<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiWikiAttachmentsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiWikiAttachments($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiWikiAttachments($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($attId)
    {
        $strSql = 'SELECT * FROM `tiki_wiki_attachments` WHERE attId=?';
        $params = array($attId);
        return Model_Data_TikiWikiAttachmentsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_wiki_attachments` (
            attId,
            page,
            filename,
            filetype,
            filesize,
            user,
            data,
            path,
            hits,
            created,
            comment
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPage(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getUser(),
            $objRecord->getData(),
            $objRecord->getPath(),
            $objRecord->getHits(),
            $objRecord->getCreated(),
            $objRecord->getComment()
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
        $strSql = ' REPLACE INTO `tiki_wiki_attachments` (
            attId,
            page,
            filename,
            filetype,
            filesize,
            user,
            data,
            path,
            hits,
            created,
            comment
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPage(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getUser(),
            $objRecord->getData(),
            $objRecord->getPath(),
            $objRecord->getHits(),
            $objRecord->getCreated(),
            $objRecord->getComment()
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
        $strSql = 'UPDATE `tiki_wiki_attachments` SET 
            attId=?,
            page=?,
            filename=?,
            filetype=?,
            filesize=?,
            user=?,
            data=?,
            path=?,
            hits=?,
            created=?,
            comment=?
        WHERE attId=?';
        $arrSetParams = array(
            $objRecord->getAttid(),
            $objRecord->getPage(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getUser(),
            $objRecord->getData(),
            $objRecord->getPath(),
            $objRecord->getHits(),
            $objRecord->getCreated(),
            $objRecord->getComment()
        );
        $arrKeyParams = array($objRecord->getOrigAttid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_wiki_attachments` WHERE attId=?';
        $params = array($objRecord->getAttid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
