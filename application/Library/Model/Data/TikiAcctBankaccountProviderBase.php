<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiAcctBankaccountProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiAcctBankaccount($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiAcctBankaccount($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($bankBookId, $bankAccountId)
    {
        $strSql = 'SELECT * FROM `tiki_acct_bankaccount` WHERE bankBookId=? AND bankAccountId=?';
        $params = array($bankBookId, $bankAccountId);
        return Model_Data_TikiAcctBankaccountProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_acct_bankaccount` (
            bankBookId,
            bankAccountId,
            externalNumber,
            bankCountry,
            bankCode,
            bankIBAN,
            bankBIC,
            bankDelimeter,
            bankDecPoint,
            bankThousand,
            bankHasHeader,
            fieldNameAccount,
            fieldNameBookingDate,
            formatBookingDate,
            fieldNameValueDate,
            formatValueDate,
            fieldNameBookingText,
            fieldNameReason,
            fieldNameCounterpartName,
            fieldNameCounterpartAccount,
            fieldNameCounterpartBankCode,
            fieldNameAmount,
            amountType,
            fieldNameAmountSign,
            SignPositive,
            SignNegative
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getBankbookid(),
            $objRecord->getBankaccountid(),
            $objRecord->getExternalnumber(),
            $objRecord->getBankcountry(),
            $objRecord->getBankcode(),
            $objRecord->getBankiban(),
            $objRecord->getBankbic(),
            $objRecord->getBankdelimeter(),
            $objRecord->getBankdecpoint(),
            $objRecord->getBankthousand(),
            $objRecord->getBankhasheader(),
            $objRecord->getFieldnameaccount(),
            $objRecord->getFieldnamebookingdate(),
            $objRecord->getFormatbookingdate(),
            $objRecord->getFieldnamevaluedate(),
            $objRecord->getFormatvaluedate(),
            $objRecord->getFieldnamebookingtext(),
            $objRecord->getFieldnamereason(),
            $objRecord->getFieldnamecounterpartname(),
            $objRecord->getFieldnamecounterpartaccount(),
            $objRecord->getFieldnamecounterpartbankcode(),
            $objRecord->getFieldnameamount(),
            $objRecord->getAmounttype(),
            $objRecord->getFieldnameamountsign(),
            $objRecord->getSignpositive(),
            $objRecord->getSignnegative()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_acct_bankaccount` (
            bankBookId,
            bankAccountId,
            externalNumber,
            bankCountry,
            bankCode,
            bankIBAN,
            bankBIC,
            bankDelimeter,
            bankDecPoint,
            bankThousand,
            bankHasHeader,
            fieldNameAccount,
            fieldNameBookingDate,
            formatBookingDate,
            fieldNameValueDate,
            formatValueDate,
            fieldNameBookingText,
            fieldNameReason,
            fieldNameCounterpartName,
            fieldNameCounterpartAccount,
            fieldNameCounterpartBankCode,
            fieldNameAmount,
            amountType,
            fieldNameAmountSign,
            SignPositive,
            SignNegative
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getBankbookid(),
            $objRecord->getBankaccountid(),
            $objRecord->getExternalnumber(),
            $objRecord->getBankcountry(),
            $objRecord->getBankcode(),
            $objRecord->getBankiban(),
            $objRecord->getBankbic(),
            $objRecord->getBankdelimeter(),
            $objRecord->getBankdecpoint(),
            $objRecord->getBankthousand(),
            $objRecord->getBankhasheader(),
            $objRecord->getFieldnameaccount(),
            $objRecord->getFieldnamebookingdate(),
            $objRecord->getFormatbookingdate(),
            $objRecord->getFieldnamevaluedate(),
            $objRecord->getFormatvaluedate(),
            $objRecord->getFieldnamebookingtext(),
            $objRecord->getFieldnamereason(),
            $objRecord->getFieldnamecounterpartname(),
            $objRecord->getFieldnamecounterpartaccount(),
            $objRecord->getFieldnamecounterpartbankcode(),
            $objRecord->getFieldnameamount(),
            $objRecord->getAmounttype(),
            $objRecord->getFieldnameamountsign(),
            $objRecord->getSignpositive(),
            $objRecord->getSignnegative()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_acct_bankaccount` SET 
            bankBookId=?,
            bankAccountId=?,
            externalNumber=?,
            bankCountry=?,
            bankCode=?,
            bankIBAN=?,
            bankBIC=?,
            bankDelimeter=?,
            bankDecPoint=?,
            bankThousand=?,
            bankHasHeader=?,
            fieldNameAccount=?,
            fieldNameBookingDate=?,
            formatBookingDate=?,
            fieldNameValueDate=?,
            formatValueDate=?,
            fieldNameBookingText=?,
            fieldNameReason=?,
            fieldNameCounterpartName=?,
            fieldNameCounterpartAccount=?,
            fieldNameCounterpartBankCode=?,
            fieldNameAmount=?,
            amountType=?,
            fieldNameAmountSign=?,
            SignPositive=?,
            SignNegative=?
        WHERE bankBookId=? AND bankAccountId=?';
        $arrSetParams = array(
            $objRecord->getBankbookid(),
            $objRecord->getBankaccountid(),
            $objRecord->getExternalnumber(),
            $objRecord->getBankcountry(),
            $objRecord->getBankcode(),
            $objRecord->getBankiban(),
            $objRecord->getBankbic(),
            $objRecord->getBankdelimeter(),
            $objRecord->getBankdecpoint(),
            $objRecord->getBankthousand(),
            $objRecord->getBankhasheader(),
            $objRecord->getFieldnameaccount(),
            $objRecord->getFieldnamebookingdate(),
            $objRecord->getFormatbookingdate(),
            $objRecord->getFieldnamevaluedate(),
            $objRecord->getFormatvaluedate(),
            $objRecord->getFieldnamebookingtext(),
            $objRecord->getFieldnamereason(),
            $objRecord->getFieldnamecounterpartname(),
            $objRecord->getFieldnamecounterpartaccount(),
            $objRecord->getFieldnamecounterpartbankcode(),
            $objRecord->getFieldnameamount(),
            $objRecord->getAmounttype(),
            $objRecord->getFieldnameamountsign(),
            $objRecord->getSignpositive(),
            $objRecord->getSignnegative()
        );
        $arrKeyParams = array($objRecord->getOrigBankbookid(), $objRecord->getOrigBankaccountid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_acct_bankaccount` WHERE bankBookId=? AND bankAccountId=?';
        $params = array($objRecord->getBankbookid(), $objRecord->getBankaccountid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
