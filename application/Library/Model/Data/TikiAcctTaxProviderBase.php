<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiAcctTaxProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiAcctTax($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiAcctTax($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($taxId)
    {
        $strSql = 'SELECT * FROM `tiki_acct_tax` WHERE taxId=?';
        $params = array($taxId);
        return Model_Data_TikiAcctTaxProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_acct_tax` (
            taxBookId,
            taxId,
            taxText,
            taxAmount,
            taxIsFix
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getTaxbookid(),
            
            0,
            $objRecord->getTaxtext(),
            $objRecord->getTaxamount(),
            $objRecord->getTaxisfix()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTaxid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_acct_tax` (
            taxBookId,
            taxId,
            taxText,
            taxAmount,
            taxIsFix
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getTaxbookid(),
            
            0,
            $objRecord->getTaxtext(),
            $objRecord->getTaxamount(),
            $objRecord->getTaxisfix()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTaxid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_acct_tax` SET 
            taxBookId=?,
            taxId=?,
            taxText=?,
            taxAmount=?,
            taxIsFix=?
        WHERE taxId=?';
        $arrSetParams = array(
            $objRecord->getTaxbookid(),
            $objRecord->getTaxid(),
            $objRecord->getTaxtext(),
            $objRecord->getTaxamount(),
            $objRecord->getTaxisfix()
        );
        $arrKeyParams = array($objRecord->getOrigTaxid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_acct_tax` WHERE taxId=?';
        $params = array($objRecord->getTaxid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
