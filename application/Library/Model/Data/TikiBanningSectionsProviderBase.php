<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiBanningSectionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiBanningSections($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiBanningSections($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($banId, $section)
    {
        $strSql = 'SELECT * FROM `tiki_banning_sections` WHERE banId=? AND section=?';
        $params = array($banId, $section);
        return Model_Data_TikiBanningSectionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_banning_sections` (
            banId,
            section
        ) VALUES  (?, ?)';
        $params = array($objRecord->getBanid(),
            $objRecord->getSection()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_banning_sections` (
            banId,
            section
        ) VALUES  (?, ?)';
        $params = array($objRecord->getBanid(),
            $objRecord->getSection()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_banning_sections` SET 
            banId=?,
            section=?
        WHERE banId=? AND section=?';
        $arrSetParams = array(
            $objRecord->getBanid(),
            $objRecord->getSection()
        );
        $arrKeyParams = array($objRecord->getOrigBanid(), $objRecord->getOrigSection());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_banning_sections` WHERE banId=? AND section=?';
        $params = array($objRecord->getBanid(), $objRecord->getSection());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
