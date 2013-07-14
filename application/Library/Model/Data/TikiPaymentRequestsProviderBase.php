<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPaymentRequestsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPaymentRequests($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPaymentRequests($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($paymentRequestId)
    {
        $strSql = 'SELECT * FROM `tiki_payment_requests` WHERE paymentRequestId=?';
        $params = array($paymentRequestId);
        return Model_Data_TikiPaymentRequestsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_payment_requests` (
            paymentRequestId,
            amount,
            amount_paid,
            currency,
            request_date,
            due_date,
            cancel_date,
            description,
            actions,
            detail,
            userId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getAmount(),
            $objRecord->getAmountPaid(),
            $objRecord->getCurrency(),
            $objRecord->getRequestDate(),
            $objRecord->getDueDate(),
            $objRecord->getCancelDate(),
            $objRecord->getDescription(),
            $objRecord->getActions(),
            $objRecord->getDetail(),
            $objRecord->getUserid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPaymentrequestid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_payment_requests` (
            paymentRequestId,
            amount,
            amount_paid,
            currency,
            request_date,
            due_date,
            cancel_date,
            description,
            actions,
            detail,
            userId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getAmount(),
            $objRecord->getAmountPaid(),
            $objRecord->getCurrency(),
            $objRecord->getRequestDate(),
            $objRecord->getDueDate(),
            $objRecord->getCancelDate(),
            $objRecord->getDescription(),
            $objRecord->getActions(),
            $objRecord->getDetail(),
            $objRecord->getUserid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPaymentrequestid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_payment_requests` SET 
            paymentRequestId=?,
            amount=?,
            amount_paid=?,
            currency=?,
            request_date=?,
            due_date=?,
            cancel_date=?,
            description=?,
            actions=?,
            detail=?,
            userId=?
        WHERE paymentRequestId=?';
        $arrSetParams = array(
            $objRecord->getPaymentrequestid(),
            $objRecord->getAmount(),
            $objRecord->getAmountPaid(),
            $objRecord->getCurrency(),
            $objRecord->getRequestDate(),
            $objRecord->getDueDate(),
            $objRecord->getCancelDate(),
            $objRecord->getDescription(),
            $objRecord->getActions(),
            $objRecord->getDetail(),
            $objRecord->getUserid()
        );
        $arrKeyParams = array($objRecord->getOrigPaymentrequestid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_payment_requests` WHERE paymentRequestId=?';
        $params = array($objRecord->getPaymentrequestid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
