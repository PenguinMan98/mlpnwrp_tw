<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiGroupalertProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiGroupalert($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiGroupalert($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($groupName, $objectType, $objectId)
    {
        $strSql = 'SELECT * FROM `tiki_groupalert` WHERE groupName=? AND objectType=? AND objectId=?';
        $params = array($groupName, $objectType, $objectId);
        return Model_Data_TikiGroupalertProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_groupalert` (
            groupName,
            objectType,
            objectId,
            displayEachuser
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getGroupname(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid(),
            $objRecord->getDisplayeachuser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_groupalert` (
            groupName,
            objectType,
            objectId,
            displayEachuser
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getGroupname(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid(),
            $objRecord->getDisplayeachuser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_groupalert` SET 
            groupName=?,
            objectType=?,
            objectId=?,
            displayEachuser=?
        WHERE groupName=? AND objectType=? AND objectId=?';
        $arrSetParams = array(
            $objRecord->getGroupname(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid(),
            $objRecord->getDisplayeachuser()
        );
        $arrKeyParams = array($objRecord->getOrigGroupname(), $objRecord->getOrigObjecttype(), $objRecord->getOrigObjectid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_groupalert` WHERE groupName=? AND objectType=? AND objectId=?';
        $params = array($objRecord->getGroupname(), $objRecord->getObjecttype(), $objRecord->getObjectid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
