<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTrackerItemFieldsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTrackerItemFields($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTrackerItemFields($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($itemId, $fieldId)
    {
        $strSql = 'SELECT * FROM `tiki_tracker_item_fields` WHERE itemId=? AND fieldId=?';
        $params = array($itemId, $fieldId);
        return Model_Data_TikiTrackerItemFieldsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_tracker_item_fields` (
            itemId,
            fieldId,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getItemid(),
            $objRecord->getFieldid(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_tracker_item_fields` (
            itemId,
            fieldId,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getItemid(),
            $objRecord->getFieldid(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_tracker_item_fields` SET 
            itemId=?,
            fieldId=?,
            value=?
        WHERE itemId=? AND fieldId=?';
        $arrSetParams = array(
            $objRecord->getItemid(),
            $objRecord->getFieldid(),
            $objRecord->getValue()
        );
        $arrKeyParams = array($objRecord->getOrigItemid(), $objRecord->getOrigFieldid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_tracker_item_fields` WHERE itemId=? AND fieldId=?';
        $params = array($objRecord->getItemid(), $objRecord->getFieldid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
