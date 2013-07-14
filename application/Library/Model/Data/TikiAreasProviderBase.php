<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiAreasProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiAreas($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiAreas($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($categId, $perspectives, $exclusive, $share_common, $enabled)
    {
        $strSql = 'SELECT * FROM `tiki_areas` WHERE categId=? AND perspectives=? AND exclusive=? AND share_common=? AND enabled=?';
        $params = array($categId, $perspectives, $exclusive, $share_common, $enabled);
        return Model_Data_TikiAreasProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_areas` (
            categId,
            perspectives,
            exclusive,
            share_common,
            enabled
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getCategid(),
            $objRecord->getPerspectives(),
            $objRecord->getExclusive(),
            $objRecord->getShareCommon(),
            $objRecord->getEnabled()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_areas` (
            categId,
            perspectives,
            exclusive,
            share_common,
            enabled
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getCategid(),
            $objRecord->getPerspectives(),
            $objRecord->getExclusive(),
            $objRecord->getShareCommon(),
            $objRecord->getEnabled()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_areas` SET 
            categId=?,
            perspectives=?,
            exclusive=?,
            share_common=?,
            enabled=?
        WHERE categId=? AND perspectives=? AND exclusive=? AND share_common=? AND enabled=?';
        $arrSetParams = array(
            $objRecord->getCategid(),
            $objRecord->getPerspectives(),
            $objRecord->getExclusive(),
            $objRecord->getShareCommon(),
            $objRecord->getEnabled()
        );
        $arrKeyParams = array($objRecord->getOrigCategid(), $objRecord->getOrigPerspectives(), $objRecord->getOrigExclusive(), $objRecord->getOrigShareCommon(), $objRecord->getOrigEnabled());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_areas` WHERE categId=? AND perspectives=? AND exclusive=? AND share_common=? AND enabled=?';
        $params = array($objRecord->getCategid(), $objRecord->getPerspectives(), $objRecord->getExclusive(), $objRecord->getShareCommon(), $objRecord->getEnabled());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
