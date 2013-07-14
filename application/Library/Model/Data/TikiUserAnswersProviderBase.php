<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserAnswersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserAnswers($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserAnswers($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($userResultId, $quizId, $questionId, $optionId)
    {
        $strSql = 'SELECT * FROM `tiki_user_answers` WHERE userResultId=? AND quizId=? AND questionId=? AND optionId=?';
        $params = array($userResultId, $quizId, $questionId, $optionId);
        return Model_Data_TikiUserAnswersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_answers` (
            userResultId,
            quizId,
            questionId,
            optionId
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getUserresultid(),
            $objRecord->getQuizid(),
            $objRecord->getQuestionid(),
            $objRecord->getOptionid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_answers` (
            userResultId,
            quizId,
            questionId,
            optionId
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getUserresultid(),
            $objRecord->getQuizid(),
            $objRecord->getQuestionid(),
            $objRecord->getOptionid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_answers` SET 
            userResultId=?,
            quizId=?,
            questionId=?,
            optionId=?
        WHERE userResultId=? AND quizId=? AND questionId=? AND optionId=?';
        $arrSetParams = array(
            $objRecord->getUserresultid(),
            $objRecord->getQuizid(),
            $objRecord->getQuestionid(),
            $objRecord->getOptionid()
        );
        $arrKeyParams = array($objRecord->getOrigUserresultid(), $objRecord->getOrigQuizid(), $objRecord->getOrigQuestionid(), $objRecord->getOrigOptionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_answers` WHERE userResultId=? AND quizId=? AND questionId=? AND optionId=?';
        $params = array($objRecord->getUserresultid(), $objRecord->getQuizid(), $objRecord->getQuestionid(), $objRecord->getOptionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
