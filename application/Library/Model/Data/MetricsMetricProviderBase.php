<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_MetricsMetricProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_MetricsMetric($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_MetricsMetric($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($metric_id)
    {
        $strSql = 'SELECT * FROM `metrics_metric` WHERE metric_id=?';
        $params = array($metric_id);
        return Model_Data_MetricsMetricProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `metrics_metric` (
            metric_id,
            metric_name,
            metric_range,
            metric_datatype,
            metric_lastupdate,
            metric_query,
            metric_dsn
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMetricName(),
            $objRecord->getMetricRange(),
            $objRecord->getMetricDatatype(),
            $objRecord->getMetricLastupdate(),
            $objRecord->getMetricQuery(),
            $objRecord->getMetricDsn()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMetricId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `metrics_metric` (
            metric_id,
            metric_name,
            metric_range,
            metric_datatype,
            metric_lastupdate,
            metric_query,
            metric_dsn
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMetricName(),
            $objRecord->getMetricRange(),
            $objRecord->getMetricDatatype(),
            $objRecord->getMetricLastupdate(),
            $objRecord->getMetricQuery(),
            $objRecord->getMetricDsn()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMetricId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `metrics_metric` SET 
            metric_id=?,
            metric_name=?,
            metric_range=?,
            metric_datatype=?,
            metric_lastupdate=?,
            metric_query=?,
            metric_dsn=?
        WHERE metric_id=?';
        $arrSetParams = array(
            $objRecord->getMetricId(),
            $objRecord->getMetricName(),
            $objRecord->getMetricRange(),
            $objRecord->getMetricDatatype(),
            $objRecord->getMetricLastupdate(),
            $objRecord->getMetricQuery(),
            $objRecord->getMetricDsn()
        );
        $arrKeyParams = array($objRecord->getOrigMetricId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `metrics_metric` WHERE metric_id=?';
        $params = array($objRecord->getMetricId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
