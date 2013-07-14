<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiAcctJournalProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiAcctJournal($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiAcctJournal($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($journalId)
    {
        $strSql = 'SELECT * FROM `tiki_acct_journal` WHERE journalId=?';
        $params = array($journalId);
        return Model_Data_TikiAcctJournalProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_acct_journal` (
            journalBookId,
            journalId,
            journalDate,
            journalDescription,
            journalCancelled,
            journalTs
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getJournalbookid(),
            
            0,
            $objRecord->getJournaldate(),
            $objRecord->getJournaldescription(),
            $objRecord->getJournalcancelled(),
            $objRecord->getJournalts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setJournalid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_acct_journal` (
            journalBookId,
            journalId,
            journalDate,
            journalDescription,
            journalCancelled,
            journalTs
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getJournalbookid(),
            
            0,
            $objRecord->getJournaldate(),
            $objRecord->getJournaldescription(),
            $objRecord->getJournalcancelled(),
            $objRecord->getJournalts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setJournalid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_acct_journal` SET 
            journalBookId=?,
            journalId=?,
            journalDate=?,
            journalDescription=?,
            journalCancelled=?,
            journalTs=?
        WHERE journalId=?';
        $arrSetParams = array(
            $objRecord->getJournalbookid(),
            $objRecord->getJournalid(),
            $objRecord->getJournaldate(),
            $objRecord->getJournaldescription(),
            $objRecord->getJournalcancelled(),
            $objRecord->getJournalts()
        );
        $arrKeyParams = array($objRecord->getOrigJournalid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_acct_journal` WHERE journalId=?';
        $params = array($objRecord->getJournalid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
