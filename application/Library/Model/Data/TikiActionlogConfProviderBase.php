<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiActionlogConfProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiActionlogConf($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiActionlogConf($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($action, $objectType)
    {
        $strSql = 'SELECT * FROM `tiki_actionlog_conf` WHERE action=? AND objectType=?';
        $params = array($action, $objectType);
        return Model_Data_TikiActionlogConfProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_actionlog_conf` (
            id,
            action,
            objectType,
            status
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getAction(),
            $objRecord->getObjecttype(),
            $objRecord->getStatus()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_actionlog_conf` (
            id,
            action,
            objectType,
            status
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getAction(),
            $objRecord->getObjecttype(),
            $objRecord->getStatus()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_actionlog_conf` SET 
            id=?,
            action=?,
            objectType=?,
            status=?
        WHERE action=? AND objectType=?';
        $arrSetParams = array(
            $objRecord->getId(),
            $objRecord->getAction(),
            $objRecord->getObjecttype(),
            $objRecord->getStatus()
        );
        $arrKeyParams = array($objRecord->getOrigAction(), $objRecord->getOrigObjecttype());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_actionlog_conf` WHERE action=? AND objectType=?';
        $params = array($objRecord->getAction(), $objRecord->getObjecttype());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
