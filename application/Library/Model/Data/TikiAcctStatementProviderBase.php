<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiAcctStatementProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiAcctStatement($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiAcctStatement($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($statementId)
    {
        $strSql = 'SELECT * FROM `tiki_acct_statement` WHERE statementId=?';
        $params = array($statementId);
        return Model_Data_TikiAcctStatementProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_acct_statement` (
            statementBookId,
            statementAccountId,
            statementId,
            statementBookingDate,
            statementValueDate,
            statementBookingText,
            statementReason,
            statementCounterpart,
            statementCounterpartAccount,
            statementCounterpartBankCode,
            statementAmount,
            statementJournalId,
            statementStackId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getStatementbookid(),
            $objRecord->getStatementaccountid(),
            
            0,
            $objRecord->getStatementbookingdate(),
            $objRecord->getStatementvaluedate(),
            $objRecord->getStatementbookingtext(),
            $objRecord->getStatementreason(),
            $objRecord->getStatementcounterpart(),
            $objRecord->getStatementcounterpartaccount(),
            $objRecord->getStatementcounterpartbankcode(),
            $objRecord->getStatementamount(),
            $objRecord->getStatementjournalid(),
            $objRecord->getStatementstackid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setStatementid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_acct_statement` (
            statementBookId,
            statementAccountId,
            statementId,
            statementBookingDate,
            statementValueDate,
            statementBookingText,
            statementReason,
            statementCounterpart,
            statementCounterpartAccount,
            statementCounterpartBankCode,
            statementAmount,
            statementJournalId,
            statementStackId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getStatementbookid(),
            $objRecord->getStatementaccountid(),
            
            0,
            $objRecord->getStatementbookingdate(),
            $objRecord->getStatementvaluedate(),
            $objRecord->getStatementbookingtext(),
            $objRecord->getStatementreason(),
            $objRecord->getStatementcounterpart(),
            $objRecord->getStatementcounterpartaccount(),
            $objRecord->getStatementcounterpartbankcode(),
            $objRecord->getStatementamount(),
            $objRecord->getStatementjournalid(),
            $objRecord->getStatementstackid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setStatementid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_acct_statement` SET 
            statementBookId=?,
            statementAccountId=?,
            statementId=?,
            statementBookingDate=?,
            statementValueDate=?,
            statementBookingText=?,
            statementReason=?,
            statementCounterpart=?,
            statementCounterpartAccount=?,
            statementCounterpartBankCode=?,
            statementAmount=?,
            statementJournalId=?,
            statementStackId=?
        WHERE statementId=?';
        $arrSetParams = array(
            $objRecord->getStatementbookid(),
            $objRecord->getStatementaccountid(),
            $objRecord->getStatementid(),
            $objRecord->getStatementbookingdate(),
            $objRecord->getStatementvaluedate(),
            $objRecord->getStatementbookingtext(),
            $objRecord->getStatementreason(),
            $objRecord->getStatementcounterpart(),
            $objRecord->getStatementcounterpartaccount(),
            $objRecord->getStatementcounterpartbankcode(),
            $objRecord->getStatementamount(),
            $objRecord->getStatementjournalid(),
            $objRecord->getStatementstackid()
        );
        $arrKeyParams = array($objRecord->getOrigStatementid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_acct_statement` WHERE statementId=?';
        $params = array($objRecord->getStatementid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
