<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPagesChangesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPagesChanges($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPagesChanges($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($page_id, $version)
    {
        $strSql = 'SELECT * FROM `tiki_pages_changes` WHERE page_id=? AND version=?';
        $params = array($page_id, $version);
        return Model_Data_TikiPagesChangesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_pages_changes` (
            page_id,
            version,
            segments_added,
            segments_removed,
            segments_total
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getPageId(),
            $objRecord->getVersion(),
            $objRecord->getSegmentsAdded(),
            $objRecord->getSegmentsRemoved(),
            $objRecord->getSegmentsTotal()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_pages_changes` (
            page_id,
            version,
            segments_added,
            segments_removed,
            segments_total
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getPageId(),
            $objRecord->getVersion(),
            $objRecord->getSegmentsAdded(),
            $objRecord->getSegmentsRemoved(),
            $objRecord->getSegmentsTotal()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_pages_changes` SET 
            page_id=?,
            version=?,
            segments_added=?,
            segments_removed=?,
            segments_total=?
        WHERE page_id=? AND version=?';
        $arrSetParams = array(
            $objRecord->getPageId(),
            $objRecord->getVersion(),
            $objRecord->getSegmentsAdded(),
            $objRecord->getSegmentsRemoved(),
            $objRecord->getSegmentsTotal()
        );
        $arrKeyParams = array($objRecord->getOrigPageId(), $objRecord->getOrigVersion());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_pages_changes` WHERE page_id=? AND version=?';
        $params = array($objRecord->getPageId(), $objRecord->getVersion());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
