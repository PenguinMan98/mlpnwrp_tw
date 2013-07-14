<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPollOptionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPollOptions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPollOptions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($optionId)
    {
        $strSql = 'SELECT * FROM `tiki_poll_options` WHERE optionId=?';
        $params = array($optionId);
        return Model_Data_TikiPollOptionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_poll_options` (
            pollId,
            optionId,
            title,
            position,
            votes
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getPollid(),
            
            0,
            $objRecord->getTitle(),
            $objRecord->getPosition(),
            $objRecord->getVotes()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setOptionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_poll_options` (
            pollId,
            optionId,
            title,
            position,
            votes
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getPollid(),
            
            0,
            $objRecord->getTitle(),
            $objRecord->getPosition(),
            $objRecord->getVotes()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setOptionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_poll_options` SET 
            pollId=?,
            optionId=?,
            title=?,
            position=?,
            votes=?
        WHERE optionId=?';
        $arrSetParams = array(
            $objRecord->getPollid(),
            $objRecord->getOptionid(),
            $objRecord->getTitle(),
            $objRecord->getPosition(),
            $objRecord->getVotes()
        );
        $arrKeyParams = array($objRecord->getOrigOptionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_poll_options` WHERE optionId=?';
        $params = array($objRecord->getOptionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
