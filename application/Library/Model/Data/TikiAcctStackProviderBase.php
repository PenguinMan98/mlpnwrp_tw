<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiAcctStackProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiAcctStack($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiAcctStack($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($stackId)
    {
        $strSql = 'SELECT * FROM `tiki_acct_stack` WHERE stackId=?';
        $params = array($stackId);
        return Model_Data_TikiAcctStackProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_acct_stack` (
            stackBookId,
            stackId,
            stackDate,
            stackDescription,
            stackTs
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getStackbookid(),
            
            0,
            $objRecord->getStackdate(),
            $objRecord->getStackdescription(),
            $objRecord->getStackts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setStackid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_acct_stack` (
            stackBookId,
            stackId,
            stackDate,
            stackDescription,
            stackTs
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getStackbookid(),
            
            0,
            $objRecord->getStackdate(),
            $objRecord->getStackdescription(),
            $objRecord->getStackts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setStackid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_acct_stack` SET 
            stackBookId=?,
            stackId=?,
            stackDate=?,
            stackDescription=?,
            stackTs=?
        WHERE stackId=?';
        $arrSetParams = array(
            $objRecord->getStackbookid(),
            $objRecord->getStackid(),
            $objRecord->getStackdate(),
            $objRecord->getStackdescription(),
            $objRecord->getStackts()
        );
        $arrKeyParams = array($objRecord->getOrigStackid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_acct_stack` WHERE stackId=?';
        $params = array($objRecord->getStackid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
