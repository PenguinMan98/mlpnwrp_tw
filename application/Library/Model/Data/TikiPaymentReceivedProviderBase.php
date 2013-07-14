<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPaymentReceivedProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPaymentReceived($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPaymentReceived($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($paymentReceivedId)
    {
        $strSql = 'SELECT * FROM `tiki_payment_received` WHERE paymentReceivedId=?';
        $params = array($paymentReceivedId);
        return Model_Data_TikiPaymentReceivedProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_payment_received` (
            paymentReceivedId,
            paymentRequestId,
            payment_date,
            amount,
            type,
            details,
            userId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPaymentrequestid(),
            $objRecord->getPaymentDate(),
            $objRecord->getAmount(),
            $objRecord->getType(),
            $objRecord->getDetails(),
            $objRecord->getUserid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPaymentreceivedid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_payment_received` (
            paymentReceivedId,
            paymentRequestId,
            payment_date,
            amount,
            type,
            details,
            userId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPaymentrequestid(),
            $objRecord->getPaymentDate(),
            $objRecord->getAmount(),
            $objRecord->getType(),
            $objRecord->getDetails(),
            $objRecord->getUserid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPaymentreceivedid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_payment_received` SET 
            paymentReceivedId=?,
            paymentRequestId=?,
            payment_date=?,
            amount=?,
            type=?,
            details=?,
            userId=?
        WHERE paymentReceivedId=?';
        $arrSetParams = array(
            $objRecord->getPaymentreceivedid(),
            $objRecord->getPaymentrequestid(),
            $objRecord->getPaymentDate(),
            $objRecord->getAmount(),
            $objRecord->getType(),
            $objRecord->getDetails(),
            $objRecord->getUserid()
        );
        $arrKeyParams = array($objRecord->getOrigPaymentreceivedid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_payment_received` WHERE paymentReceivedId=?';
        $params = array($objRecord->getPaymentreceivedid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
