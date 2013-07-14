<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiAcctAccountProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiAcctAccount($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiAcctAccount($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($accountBookId, $accountId)
    {
        $strSql = 'SELECT * FROM `tiki_acct_account` WHERE accountBookId=? AND accountId=?';
        $params = array($accountBookId, $accountId);
        return Model_Data_TikiAcctAccountProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_acct_account` (
            accountBookId,
            accountId,
            accountName,
            accountNotes,
            accountBudget,
            accountLocked,
            accountTax,
            accountUserId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getAccountbookid(),
            $objRecord->getAccountid(),
            $objRecord->getAccountname(),
            $objRecord->getAccountnotes(),
            $objRecord->getAccountbudget(),
            $objRecord->getAccountlocked(),
            $objRecord->getAccounttax(),
            $objRecord->getAccountuserid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_acct_account` (
            accountBookId,
            accountId,
            accountName,
            accountNotes,
            accountBudget,
            accountLocked,
            accountTax,
            accountUserId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getAccountbookid(),
            $objRecord->getAccountid(),
            $objRecord->getAccountname(),
            $objRecord->getAccountnotes(),
            $objRecord->getAccountbudget(),
            $objRecord->getAccountlocked(),
            $objRecord->getAccounttax(),
            $objRecord->getAccountuserid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_acct_account` SET 
            accountBookId=?,
            accountId=?,
            accountName=?,
            accountNotes=?,
            accountBudget=?,
            accountLocked=?,
            accountTax=?,
            accountUserId=?
        WHERE accountBookId=? AND accountId=?';
        $arrSetParams = array(
            $objRecord->getAccountbookid(),
            $objRecord->getAccountid(),
            $objRecord->getAccountname(),
            $objRecord->getAccountnotes(),
            $objRecord->getAccountbudget(),
            $objRecord->getAccountlocked(),
            $objRecord->getAccounttax(),
            $objRecord->getAccountuserid()
        );
        $arrKeyParams = array($objRecord->getOrigAccountbookid(), $objRecord->getOrigAccountid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_acct_account` WHERE accountBookId=? AND accountId=?';
        $params = array($objRecord->getAccountbookid(), $objRecord->getAccountid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
