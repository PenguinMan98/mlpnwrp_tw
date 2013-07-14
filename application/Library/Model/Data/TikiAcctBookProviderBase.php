<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiAcctBookProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiAcctBook($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiAcctBook($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($bookId)
    {
        $strSql = 'SELECT * FROM `tiki_acct_book` WHERE bookId=?';
        $params = array($bookId);
        return Model_Data_TikiAcctBookProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_acct_book` (
            bookId,
            bookName,
            bookClosed,
            bookStartDate,
            bookEndDate,
            bookCurrency,
            bookCurrencyPos,
            bookDecimals,
            bookDecPoint,
            bookThousand,
            exportSeparator,
            exportEOL,
            exportQuote,
            bookAutoTax
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getBookname(),
            $objRecord->getBookclosed(),
            $objRecord->getBookstartdate(),
            $objRecord->getBookenddate(),
            $objRecord->getBookcurrency(),
            $objRecord->getBookcurrencypos(),
            $objRecord->getBookdecimals(),
            $objRecord->getBookdecpoint(),
            $objRecord->getBookthousand(),
            $objRecord->getExportseparator(),
            $objRecord->getExporteol(),
            $objRecord->getExportquote(),
            $objRecord->getBookautotax()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBookid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_acct_book` (
            bookId,
            bookName,
            bookClosed,
            bookStartDate,
            bookEndDate,
            bookCurrency,
            bookCurrencyPos,
            bookDecimals,
            bookDecPoint,
            bookThousand,
            exportSeparator,
            exportEOL,
            exportQuote,
            bookAutoTax
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getBookname(),
            $objRecord->getBookclosed(),
            $objRecord->getBookstartdate(),
            $objRecord->getBookenddate(),
            $objRecord->getBookcurrency(),
            $objRecord->getBookcurrencypos(),
            $objRecord->getBookdecimals(),
            $objRecord->getBookdecpoint(),
            $objRecord->getBookthousand(),
            $objRecord->getExportseparator(),
            $objRecord->getExporteol(),
            $objRecord->getExportquote(),
            $objRecord->getBookautotax()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBookid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_acct_book` SET 
            bookId=?,
            bookName=?,
            bookClosed=?,
            bookStartDate=?,
            bookEndDate=?,
            bookCurrency=?,
            bookCurrencyPos=?,
            bookDecimals=?,
            bookDecPoint=?,
            bookThousand=?,
            exportSeparator=?,
            exportEOL=?,
            exportQuote=?,
            bookAutoTax=?
        WHERE bookId=?';
        $arrSetParams = array(
            $objRecord->getBookid(),
            $objRecord->getBookname(),
            $objRecord->getBookclosed(),
            $objRecord->getBookstartdate(),
            $objRecord->getBookenddate(),
            $objRecord->getBookcurrency(),
            $objRecord->getBookcurrencypos(),
            $objRecord->getBookdecimals(),
            $objRecord->getBookdecpoint(),
            $objRecord->getBookthousand(),
            $objRecord->getExportseparator(),
            $objRecord->getExporteol(),
            $objRecord->getExportquote(),
            $objRecord->getBookautotax()
        );
        $arrKeyParams = array($objRecord->getOrigBookid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_acct_book` WHERE bookId=?';
        $params = array($objRecord->getBookid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
