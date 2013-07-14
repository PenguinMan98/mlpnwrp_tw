<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiGroupInclusionProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiGroupInclusion($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiGroupInclusion($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($groupName, $includeGroup)
    {
        $strSql = 'SELECT * FROM `tiki_group_inclusion` WHERE groupName=? AND includeGroup=?';
        $params = array($groupName, $includeGroup);
        return Model_Data_TikiGroupInclusionProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_group_inclusion` (
            groupName,
            includeGroup
        ) VALUES  (?, ?)';
        $params = array($objRecord->getGroupname(),
            $objRecord->getIncludegroup()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_group_inclusion` (
            groupName,
            includeGroup
        ) VALUES  (?, ?)';
        $params = array($objRecord->getGroupname(),
            $objRecord->getIncludegroup()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_group_inclusion` SET 
            groupName=?,
            includeGroup=?
        WHERE groupName=? AND includeGroup=?';
        $arrSetParams = array(
            $objRecord->getGroupname(),
            $objRecord->getIncludegroup()
        );
        $arrKeyParams = array($objRecord->getOrigGroupname(), $objRecord->getOrigIncludegroup());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_group_inclusion` WHERE groupName=? AND includeGroup=?';
        $params = array($objRecord->getGroupname(), $objRecord->getIncludegroup());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
