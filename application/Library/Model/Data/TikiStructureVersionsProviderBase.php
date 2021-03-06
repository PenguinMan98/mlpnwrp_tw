<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiStructureVersionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiStructureVersions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiStructureVersions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($structure_id)
    {
        $strSql = 'SELECT * FROM `tiki_structure_versions` WHERE structure_id=?';
        $params = array($structure_id);
        return Model_Data_TikiStructureVersionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_structure_versions` (
            structure_id,
            version
        ) VALUES  (?, ?)';
        $params = array(
            0,
            $objRecord->getVersion()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setStructureId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_structure_versions` (
            structure_id,
            version
        ) VALUES  (?, ?)';
        $params = array(
            0,
            $objRecord->getVersion()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setStructureId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_structure_versions` SET 
            structure_id=?,
            version=?
        WHERE structure_id=?';
        $arrSetParams = array(
            $objRecord->getStructureId(),
            $objRecord->getVersion()
        );
        $arrKeyParams = array($objRecord->getOrigStructureId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_structure_versions` WHERE structure_id=?';
        $params = array($objRecord->getStructureId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
