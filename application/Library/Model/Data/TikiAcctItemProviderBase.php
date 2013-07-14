<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiAcctItemProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiAcctItem($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiAcctItem($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($itemBookId, $itemJournalId, $itemAccountId, $itemType)
    {
        $strSql = 'SELECT * FROM `tiki_acct_item` WHERE itemBookId=? AND itemJournalId=? AND itemAccountId=? AND itemType=?';
        $params = array($itemBookId, $itemJournalId, $itemAccountId, $itemType);
        return Model_Data_TikiAcctItemProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_acct_item` (
            itemBookId,
            itemJournalId,
            itemAccountId,
            itemType,
            itemAmount,
            itemText,
            itemTs
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getItembookid(),
            $objRecord->getItemjournalid(),
            $objRecord->getItemaccountid(),
            $objRecord->getItemtype(),
            $objRecord->getItemamount(),
            $objRecord->getItemtext(),
            $objRecord->getItemts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_acct_item` (
            itemBookId,
            itemJournalId,
            itemAccountId,
            itemType,
            itemAmount,
            itemText,
            itemTs
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getItembookid(),
            $objRecord->getItemjournalid(),
            $objRecord->getItemaccountid(),
            $objRecord->getItemtype(),
            $objRecord->getItemamount(),
            $objRecord->getItemtext(),
            $objRecord->getItemts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_acct_item` SET 
            itemBookId=?,
            itemJournalId=?,
            itemAccountId=?,
            itemType=?,
            itemAmount=?,
            itemText=?,
            itemTs=?
        WHERE itemBookId=? AND itemJournalId=? AND itemAccountId=? AND itemType=?';
        $arrSetParams = array(
            $objRecord->getItembookid(),
            $objRecord->getItemjournalid(),
            $objRecord->getItemaccountid(),
            $objRecord->getItemtype(),
            $objRecord->getItemamount(),
            $objRecord->getItemtext(),
            $objRecord->getItemts()
        );
        $arrKeyParams = array($objRecord->getOrigItembookid(), $objRecord->getOrigItemjournalid(), $objRecord->getOrigItemaccountid(), $objRecord->getOrigItemtype());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_acct_item` WHERE itemBookId=? AND itemJournalId=? AND itemAccountId=? AND itemType=?';
        $params = array($objRecord->getItembookid(), $objRecord->getItemjournalid(), $objRecord->getItemaccountid(), $objRecord->getItemtype());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
