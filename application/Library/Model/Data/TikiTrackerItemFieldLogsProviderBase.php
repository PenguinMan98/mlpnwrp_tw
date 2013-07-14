<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTrackerItemFieldLogsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTrackerItemFieldLogs($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTrackerItemFieldLogs($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($version, $itemId, $fieldId, $value)
    {
        $strSql = 'SELECT * FROM `tiki_tracker_item_field_logs` WHERE version=? AND itemId=? AND fieldId=? AND value=?';
        $params = array($version, $itemId, $fieldId, $value);
        return Model_Data_TikiTrackerItemFieldLogsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_tracker_item_field_logs` (
            version,
            itemId,
            fieldId,
            value
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getVersion(),
            $objRecord->getItemid(),
            $objRecord->getFieldid(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_tracker_item_field_logs` (
            version,
            itemId,
            fieldId,
            value
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getVersion(),
            $objRecord->getItemid(),
            $objRecord->getFieldid(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_tracker_item_field_logs` SET 
            version=?,
            itemId=?,
            fieldId=?,
            value=?
        WHERE version=? AND itemId=? AND fieldId=? AND value=?';
        $arrSetParams = array(
            $objRecord->getVersion(),
            $objRecord->getItemid(),
            $objRecord->getFieldid(),
            $objRecord->getValue()
        );
        $arrKeyParams = array($objRecord->getOrigVersion(), $objRecord->getOrigItemid(), $objRecord->getOrigFieldid(), $objRecord->getOrigValue());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_tracker_item_field_logs` WHERE version=? AND itemId=? AND fieldId=? AND value=?';
        $params = array($objRecord->getVersion(), $objRecord->getItemid(), $objRecord->getFieldid(), $objRecord->getValue());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
