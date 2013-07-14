<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiHtmlPagesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiHtmlPages($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiHtmlPages($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($pageName)
    {
        $strSql = 'SELECT * FROM `tiki_html_pages` WHERE pageName=?';
        $params = array($pageName);
        return Model_Data_TikiHtmlPagesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_html_pages` (
            pageName,
            content,
            refresh,
            type,
            created
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getPagename(),
            $objRecord->getContent(),
            $objRecord->getRefresh(),
            $objRecord->getType(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_html_pages` (
            pageName,
            content,
            refresh,
            type,
            created
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getPagename(),
            $objRecord->getContent(),
            $objRecord->getRefresh(),
            $objRecord->getType(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_html_pages` SET 
            pageName=?,
            content=?,
            refresh=?,
            type=?,
            created=?
        WHERE pageName=?';
        $arrSetParams = array(
            $objRecord->getPagename(),
            $objRecord->getContent(),
            $objRecord->getRefresh(),
            $objRecord->getType(),
            $objRecord->getCreated()
        );
        $arrKeyParams = array($objRecord->getOrigPagename());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_html_pages` WHERE pageName=?';
        $params = array($objRecord->getPagename());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
