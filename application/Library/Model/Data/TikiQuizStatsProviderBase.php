<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiQuizStatsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiQuizStats($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiQuizStats($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($quizId, $questionId, $optionId)
    {
        $strSql = 'SELECT * FROM `tiki_quiz_stats` WHERE quizId=? AND questionId=? AND optionId=?';
        $params = array($quizId, $questionId, $optionId);
        return Model_Data_TikiQuizStatsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_quiz_stats` (
            quizId,
            questionId,
            optionId,
            votes
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getQuizid(),
            $objRecord->getQuestionid(),
            $objRecord->getOptionid(),
            $objRecord->getVotes()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_quiz_stats` (
            quizId,
            questionId,
            optionId,
            votes
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getQuizid(),
            $objRecord->getQuestionid(),
            $objRecord->getOptionid(),
            $objRecord->getVotes()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_quiz_stats` SET 
            quizId=?,
            questionId=?,
            optionId=?,
            votes=?
        WHERE quizId=? AND questionId=? AND optionId=?';
        $arrSetParams = array(
            $objRecord->getQuizid(),
            $objRecord->getQuestionid(),
            $objRecord->getOptionid(),
            $objRecord->getVotes()
        );
        $arrKeyParams = array($objRecord->getOrigQuizid(), $objRecord->getOrigQuestionid(), $objRecord->getOrigOptionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_quiz_stats` WHERE quizId=? AND questionId=? AND optionId=?';
        $params = array($objRecord->getQuizid(), $objRecord->getQuestionid(), $objRecord->getOptionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
