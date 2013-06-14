<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_LogProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Log($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Log($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($log_id)
    {
        $strSql = 'SELECT * FROM `log` WHERE log_id=?';
        $params = array($log_id);
        return Model_Data_LogProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `log` (
            log_id,
            file,
            log_entry,
            severity,
            timestamp
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getFile(),
            $objRecord->getLogEntry(),
            $objRecord->getSeverity(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setLogId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `log` (
            log_id,
            file,
            log_entry,
            severity,
            timestamp
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getFile(),
            $objRecord->getLogEntry(),
            $objRecord->getSeverity(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setLogId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `log` SET 
            log_id=?,
            file=?,
            log_entry=?,
            severity=?,
            timestamp=?
        WHERE log_id=?';
        $arrSetParams = array(
            $objRecord->getLogId(),
            $objRecord->getFile(),
            $objRecord->getLogEntry(),
            $objRecord->getSeverity(),
            $objRecord->getTimestamp()
        );
        $arrKeyParams = array($objRecord->getOrigLogId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `log` WHERE log_id=?';
        $params = array($objRecord->getLogId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
