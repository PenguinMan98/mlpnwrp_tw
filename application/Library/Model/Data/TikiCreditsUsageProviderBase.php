<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCreditsUsageProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCreditsUsage($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCreditsUsage($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($usageId)
    {
        $strSql = 'SELECT * FROM `tiki_credits_usage` WHERE usageId=?';
        $params = array($usageId);
        return Model_Data_TikiCreditsUsageProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_credits_usage` (
            usageId,
            userId,
            usage_date,
            credit_type,
            used_amount,
            product_id
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserid(),
            $objRecord->getUsageDate(),
            $objRecord->getCreditType(),
            $objRecord->getUsedAmount(),
            $objRecord->getProductId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setUsageid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_credits_usage` (
            usageId,
            userId,
            usage_date,
            credit_type,
            used_amount,
            product_id
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserid(),
            $objRecord->getUsageDate(),
            $objRecord->getCreditType(),
            $objRecord->getUsedAmount(),
            $objRecord->getProductId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setUsageid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_credits_usage` SET 
            usageId=?,
            userId=?,
            usage_date=?,
            credit_type=?,
            used_amount=?,
            product_id=?
        WHERE usageId=?';
        $arrSetParams = array(
            $objRecord->getUsageid(),
            $objRecord->getUserid(),
            $objRecord->getUsageDate(),
            $objRecord->getCreditType(),
            $objRecord->getUsedAmount(),
            $objRecord->getProductId()
        );
        $arrKeyParams = array($objRecord->getOrigUsageid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_credits_usage` WHERE usageId=?';
        $params = array($objRecord->getUsageid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
