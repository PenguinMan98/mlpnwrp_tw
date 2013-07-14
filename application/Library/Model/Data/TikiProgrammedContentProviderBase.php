<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiProgrammedContentProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiProgrammedContent($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiProgrammedContent($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($pId)
    {
        $strSql = 'SELECT * FROM `tiki_programmed_content` WHERE pId=?';
        $params = array($pId);
        return Model_Data_TikiProgrammedContentProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_programmed_content` (
            pId,
            contentId,
            content_type,
            publishDate,
            data
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getContentid(),
            $objRecord->getContentType(),
            $objRecord->getPublishdate(),
            $objRecord->getData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_programmed_content` (
            pId,
            contentId,
            content_type,
            publishDate,
            data
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getContentid(),
            $objRecord->getContentType(),
            $objRecord->getPublishdate(),
            $objRecord->getData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_programmed_content` SET 
            pId=?,
            contentId=?,
            content_type=?,
            publishDate=?,
            data=?
        WHERE pId=?';
        $arrSetParams = array(
            $objRecord->getPid(),
            $objRecord->getContentid(),
            $objRecord->getContentType(),
            $objRecord->getPublishdate(),
            $objRecord->getData()
        );
        $arrKeyParams = array($objRecord->getOrigPid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_programmed_content` WHERE pId=?';
        $params = array($objRecord->getPid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
