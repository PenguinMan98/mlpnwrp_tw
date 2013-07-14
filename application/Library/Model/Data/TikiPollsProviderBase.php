<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPollsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPolls($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPolls($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($pollId)
    {
        $strSql = 'SELECT * FROM `tiki_polls` WHERE pollId=?';
        $params = array($pollId);
        return Model_Data_TikiPollsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_polls` (
            pollId,
            title,
            votes,
            active,
            publishDate,
            voteConsiderationSpan
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTitle(),
            $objRecord->getVotes(),
            $objRecord->getActive(),
            $objRecord->getPublishdate(),
            $objRecord->getVoteconsiderationspan()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPollid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_polls` (
            pollId,
            title,
            votes,
            active,
            publishDate,
            voteConsiderationSpan
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTitle(),
            $objRecord->getVotes(),
            $objRecord->getActive(),
            $objRecord->getPublishdate(),
            $objRecord->getVoteconsiderationspan()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPollid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_polls` SET 
            pollId=?,
            title=?,
            votes=?,
            active=?,
            publishDate=?,
            voteConsiderationSpan=?
        WHERE pollId=?';
        $arrSetParams = array(
            $objRecord->getPollid(),
            $objRecord->getTitle(),
            $objRecord->getVotes(),
            $objRecord->getActive(),
            $objRecord->getPublishdate(),
            $objRecord->getVoteconsiderationspan()
        );
        $arrKeyParams = array($objRecord->getOrigPollid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_polls` WHERE pollId=?';
        $params = array($objRecord->getPollid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
