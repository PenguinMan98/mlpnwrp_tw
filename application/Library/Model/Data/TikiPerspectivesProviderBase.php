<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPerspectivesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPerspectives($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPerspectives($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($perspectiveId)
    {
        $strSql = 'SELECT * FROM `tiki_perspectives` WHERE perspectiveId=?';
        $params = array($perspectiveId);
        return Model_Data_TikiPerspectivesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_perspectives` (
            perspectiveId,
            name
        ) VALUES  (?, ?)';
        $params = array(
            0,
            $objRecord->getName()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPerspectiveid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_perspectives` (
            perspectiveId,
            name
        ) VALUES  (?, ?)';
        $params = array(
            0,
            $objRecord->getName()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPerspectiveid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_perspectives` SET 
            perspectiveId=?,
            name=?
        WHERE perspectiveId=?';
        $arrSetParams = array(
            $objRecord->getPerspectiveid(),
            $objRecord->getName()
        );
        $arrKeyParams = array($objRecord->getOrigPerspectiveid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_perspectives` WHERE perspectiveId=?';
        $params = array($objRecord->getPerspectiveid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
