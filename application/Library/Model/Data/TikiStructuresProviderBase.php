<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiStructuresProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiStructures($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiStructures($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($page_ref_id)
    {
        $strSql = 'SELECT * FROM `tiki_structures` WHERE page_ref_id=?';
        $params = array($page_ref_id);
        return Model_Data_TikiStructuresProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_structures` (
            page_ref_id,
            structure_id,
            parent_id,
            page_id,
            page_version,
            page_alias,
            pos
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getStructureId(),
            $objRecord->getParentId(),
            $objRecord->getPageId(),
            $objRecord->getPageVersion(),
            $objRecord->getPageAlias(),
            $objRecord->getPos()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPageRefId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_structures` (
            page_ref_id,
            structure_id,
            parent_id,
            page_id,
            page_version,
            page_alias,
            pos
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getStructureId(),
            $objRecord->getParentId(),
            $objRecord->getPageId(),
            $objRecord->getPageVersion(),
            $objRecord->getPageAlias(),
            $objRecord->getPos()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPageRefId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_structures` SET 
            page_ref_id=?,
            structure_id=?,
            parent_id=?,
            page_id=?,
            page_version=?,
            page_alias=?,
            pos=?
        WHERE page_ref_id=?';
        $arrSetParams = array(
            $objRecord->getPageRefId(),
            $objRecord->getStructureId(),
            $objRecord->getParentId(),
            $objRecord->getPageId(),
            $objRecord->getPageVersion(),
            $objRecord->getPageAlias(),
            $objRecord->getPos()
        );
        $arrKeyParams = array($objRecord->getOrigPageRefId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_structures` WHERE page_ref_id=?';
        $params = array($objRecord->getPageRefId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
