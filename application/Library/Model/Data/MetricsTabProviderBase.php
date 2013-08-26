<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_MetricsTabProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_MetricsTab($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_MetricsTab($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($tab_id)
    {
        $strSql = 'SELECT * FROM `metrics_tab` WHERE tab_id=?';
        $params = array($tab_id);
        return Model_Data_MetricsTabProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `metrics_tab` (
            tab_id,
            tab_name,
            tab_order,
            tab_content
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTabName(),
            $objRecord->getTabOrder(),
            $objRecord->getTabContent()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTabId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `metrics_tab` (
            tab_id,
            tab_name,
            tab_order,
            tab_content
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTabName(),
            $objRecord->getTabOrder(),
            $objRecord->getTabContent()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTabId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `metrics_tab` SET 
            tab_id=?,
            tab_name=?,
            tab_order=?,
            tab_content=?
        WHERE tab_id=?';
        $arrSetParams = array(
            $objRecord->getTabId(),
            $objRecord->getTabName(),
            $objRecord->getTabOrder(),
            $objRecord->getTabContent()
        );
        $arrKeyParams = array($objRecord->getOrigTabId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `metrics_tab` WHERE tab_id=?';
        $params = array($objRecord->getTabId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
