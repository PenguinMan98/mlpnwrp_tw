<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiAcctStackitemProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiAcctStackitem($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiAcctStackitem($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($stackBookId, $stackItemStackId, $stackItemAccountId, $stackItemType)
    {
        $strSql = 'SELECT * FROM `tiki_acct_stackitem` WHERE stackBookId=? AND stackItemStackId=? AND stackItemAccountId=? AND stackItemType=?';
        $params = array($stackBookId, $stackItemStackId, $stackItemAccountId, $stackItemType);
        return Model_Data_TikiAcctStackitemProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_acct_stackitem` (
            stackBookId,
            stackItemStackId,
            stackItemAccountId,
            stackItemType,
            stackItemAmount,
            stackItemText
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getStackbookid(),
            $objRecord->getStackitemstackid(),
            $objRecord->getStackitemaccountid(),
            $objRecord->getStackitemtype(),
            $objRecord->getStackitemamount(),
            $objRecord->getStackitemtext()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_acct_stackitem` (
            stackBookId,
            stackItemStackId,
            stackItemAccountId,
            stackItemType,
            stackItemAmount,
            stackItemText
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getStackbookid(),
            $objRecord->getStackitemstackid(),
            $objRecord->getStackitemaccountid(),
            $objRecord->getStackitemtype(),
            $objRecord->getStackitemamount(),
            $objRecord->getStackitemtext()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_acct_stackitem` SET 
            stackBookId=?,
            stackItemStackId=?,
            stackItemAccountId=?,
            stackItemType=?,
            stackItemAmount=?,
            stackItemText=?
        WHERE stackBookId=? AND stackItemStackId=? AND stackItemAccountId=? AND stackItemType=?';
        $arrSetParams = array(
            $objRecord->getStackbookid(),
            $objRecord->getStackitemstackid(),
            $objRecord->getStackitemaccountid(),
            $objRecord->getStackitemtype(),
            $objRecord->getStackitemamount(),
            $objRecord->getStackitemtext()
        );
        $arrKeyParams = array($objRecord->getOrigStackbookid(), $objRecord->getOrigStackitemstackid(), $objRecord->getOrigStackitemaccountid(), $objRecord->getOrigStackitemtype());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_acct_stackitem` WHERE stackBookId=? AND stackItemStackId=? AND stackItemAccountId=? AND stackItemType=?';
        $params = array($objRecord->getStackbookid(), $objRecord->getStackitemstackid(), $objRecord->getStackitemaccountid(), $objRecord->getStackitemtype());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
