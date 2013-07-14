<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiContentProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiContent($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiContent($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($contentId)
    {
        $strSql = 'SELECT * FROM `tiki_content` WHERE contentId=?';
        $params = array($contentId);
        return Model_Data_TikiContentProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_content` (
            contentId,
            description,
            contentLabel
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getDescription(),
            $objRecord->getContentlabel()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setContentid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_content` (
            contentId,
            description,
            contentLabel
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getDescription(),
            $objRecord->getContentlabel()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setContentid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_content` SET 
            contentId=?,
            description=?,
            contentLabel=?
        WHERE contentId=?';
        $arrSetParams = array(
            $objRecord->getContentid(),
            $objRecord->getDescription(),
            $objRecord->getContentlabel()
        );
        $arrKeyParams = array($objRecord->getOrigContentid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_content` WHERE contentId=?';
        $params = array($objRecord->getContentid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
