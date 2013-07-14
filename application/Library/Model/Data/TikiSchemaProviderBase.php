<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSchemaProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSchema($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSchema($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($patch_name)
    {
        $strSql = 'SELECT * FROM `tiki_schema` WHERE patch_name=?';
        $params = array($patch_name);
        return Model_Data_TikiSchemaProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_schema` (
            patch_name,
            install_date
        ) VALUES  (?, ?)';
        $params = array($objRecord->getPatchName(),
            $objRecord->getInstallDate()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_schema` (
            patch_name,
            install_date
        ) VALUES  (?, ?)';
        $params = array($objRecord->getPatchName(),
            $objRecord->getInstallDate()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_schema` SET 
            patch_name=?,
            install_date=?
        WHERE patch_name=?';
        $arrSetParams = array(
            $objRecord->getPatchName(),
            $objRecord->getInstallDate()
        );
        $arrKeyParams = array($objRecord->getOrigPatchName());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_schema` WHERE patch_name=?';
        $params = array($objRecord->getPatchName());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
