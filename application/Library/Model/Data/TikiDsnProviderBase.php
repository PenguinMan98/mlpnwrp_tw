<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiDsnProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiDsn($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiDsn($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($dsnId)
    {
        $strSql = 'SELECT * FROM `tiki_dsn` WHERE dsnId=?';
        $params = array($dsnId);
        return Model_Data_TikiDsnProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_dsn` (
            dsnId,
            name,
            dsn
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDsn()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setDsnid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_dsn` (
            dsnId,
            name,
            dsn
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDsn()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setDsnid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_dsn` SET 
            dsnId=?,
            name=?,
            dsn=?
        WHERE dsnId=?';
        $arrSetParams = array(
            $objRecord->getDsnid(),
            $objRecord->getName(),
            $objRecord->getDsn()
        );
        $arrKeyParams = array($objRecord->getOrigDsnid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_dsn` WHERE dsnId=?';
        $params = array($objRecord->getDsnid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
