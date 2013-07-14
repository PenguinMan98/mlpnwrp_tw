<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiHtmlPagesDynamicZonesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiHtmlPagesDynamicZones($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiHtmlPagesDynamicZones($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($pageName, $zone)
    {
        $strSql = 'SELECT * FROM `tiki_html_pages_dynamic_zones` WHERE pageName=? AND zone=?';
        $params = array($pageName, $zone);
        return Model_Data_TikiHtmlPagesDynamicZonesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_html_pages_dynamic_zones` (
            pageName,
            zone,
            type,
            content
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getPagename(),
            $objRecord->getZone(),
            $objRecord->getType(),
            $objRecord->getContent()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_html_pages_dynamic_zones` (
            pageName,
            zone,
            type,
            content
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getPagename(),
            $objRecord->getZone(),
            $objRecord->getType(),
            $objRecord->getContent()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_html_pages_dynamic_zones` SET 
            pageName=?,
            zone=?,
            type=?,
            content=?
        WHERE pageName=? AND zone=?';
        $arrSetParams = array(
            $objRecord->getPagename(),
            $objRecord->getZone(),
            $objRecord->getType(),
            $objRecord->getContent()
        );
        $arrKeyParams = array($objRecord->getOrigPagename(), $objRecord->getOrigZone());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_html_pages_dynamic_zones` WHERE pageName=? AND zone=?';
        $params = array($objRecord->getPagename(), $objRecord->getZone());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
