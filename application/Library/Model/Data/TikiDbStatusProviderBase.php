<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiDbStatusProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiDbStatus($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiDbStatus($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($id)
    {
        $strSql = 'SELECT * FROM `tiki_db_status` WHERE id=?';
        $params = array($id);
        return Model_Data_TikiDbStatusProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_db_status` (
            id,
            objectId,
            tableName,
            status,
            other
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getObjectid(),
            $objRecord->getTablename(),
            $objRecord->getStatus(),
            $objRecord->getOther()
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
        $strSql = ' REPLACE INTO `tiki_db_status` (
            id,
            objectId,
            tableName,
            status,
            other
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getObjectid(),
            $objRecord->getTablename(),
            $objRecord->getStatus(),
            $objRecord->getOther()
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
        $strSql = 'UPDATE `tiki_db_status` SET 
            id=?,
            objectId=?,
            tableName=?,
            status=?,
            other=?
        WHERE id=?';
        $arrSetParams = array(
            $objRecord->getId(),
            $objRecord->getObjectid(),
            $objRecord->getTablename(),
            $objRecord->getStatus(),
            $objRecord->getOther()
        );
        $arrKeyParams = array($objRecord->getOrigId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_db_status` WHERE id=?';
        $params = array($objRecord->getId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
