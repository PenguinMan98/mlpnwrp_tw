<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_MetricsAssignedProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_MetricsAssigned($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_MetricsAssigned($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($assigned_id)
    {
        $strSql = 'SELECT * FROM `metrics_assigned` WHERE assigned_id=?';
        $params = array($assigned_id);
        return Model_Data_MetricsAssignedProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `metrics_assigned` (
            assigned_id,
            metric_id,
            tab_id
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMetricId(),
            $objRecord->getTabId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setAssignedId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `metrics_assigned` (
            assigned_id,
            metric_id,
            tab_id
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMetricId(),
            $objRecord->getTabId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setAssignedId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `metrics_assigned` SET 
            assigned_id=?,
            metric_id=?,
            tab_id=?
        WHERE assigned_id=?';
        $arrSetParams = array(
            $objRecord->getAssignedId(),
            $objRecord->getMetricId(),
            $objRecord->getTabId()
        );
        $arrKeyParams = array($objRecord->getOrigAssignedId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `metrics_assigned` WHERE assigned_id=?';
        $params = array($objRecord->getAssignedId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
