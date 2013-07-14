<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFileBacklinksProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFileBacklinks($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFileBacklinks($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($fileId, $objectId)
    {
        $strSql = 'SELECT * FROM `tiki_file_backlinks` WHERE fileId=? AND objectId=?';
        $params = array($fileId, $objectId);
        return Model_Data_TikiFileBacklinksProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_file_backlinks` (
            fileId,
            objectId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getFileid(),
            $objRecord->getObjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_file_backlinks` (
            fileId,
            objectId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getFileid(),
            $objRecord->getObjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_file_backlinks` SET 
            fileId=?,
            objectId=?
        WHERE fileId=? AND objectId=?';
        $arrSetParams = array(
            $objRecord->getFileid(),
            $objRecord->getObjectid()
        );
        $arrKeyParams = array($objRecord->getOrigFileid(), $objRecord->getOrigObjectid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_file_backlinks` WHERE fileId=? AND objectId=?';
        $params = array($objRecord->getFileid(), $objRecord->getObjectid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
