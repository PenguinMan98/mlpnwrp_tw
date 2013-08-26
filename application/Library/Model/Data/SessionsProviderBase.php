<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_SessionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Sessions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Sessions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($sesskey)
    {
        $strSql = 'SELECT * FROM `sessions` WHERE sesskey=?';
        $params = array($sesskey);
        return Model_Data_SessionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `sessions` (
            sesskey,
            expiry,
            expireref,
            data
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getSesskey(),
            $objRecord->getExpiry(),
            $objRecord->getExpireref(),
            $objRecord->getData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `sessions` (
            sesskey,
            expiry,
            expireref,
            data
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getSesskey(),
            $objRecord->getExpiry(),
            $objRecord->getExpireref(),
            $objRecord->getData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `sessions` SET 
            sesskey=?,
            expiry=?,
            expireref=?,
            data=?
        WHERE sesskey=?';
        $arrSetParams = array(
            $objRecord->getSesskey(),
            $objRecord->getExpiry(),
            $objRecord->getExpireref(),
            $objRecord->getData()
        );
        $arrKeyParams = array($objRecord->getOrigSesskey());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `sessions` WHERE sesskey=?';
        $params = array($objRecord->getSesskey());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
