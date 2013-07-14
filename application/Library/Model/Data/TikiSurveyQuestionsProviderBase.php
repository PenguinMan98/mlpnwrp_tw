<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSurveyQuestionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSurveyQuestions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSurveyQuestions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($questionId)
    {
        $strSql = 'SELECT * FROM `tiki_survey_questions` WHERE questionId=?';
        $params = array($questionId);
        return Model_Data_TikiSurveyQuestionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_survey_questions` (
            questionId,
            surveyId,
            question,
            options,
            type,
            position,
            votes,
            value,
            average,
            mandatory,
            max_answers,
            min_answers
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getSurveyid(),
            $objRecord->getQuestion(),
            $objRecord->getOptions(),
            $objRecord->getType(),
            $objRecord->getPosition(),
            $objRecord->getVotes(),
            $objRecord->getValue(),
            $objRecord->getAverage(),
            $objRecord->getMandatory(),
            $objRecord->getMaxAnswers(),
            $objRecord->getMinAnswers()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setQuestionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_survey_questions` (
            questionId,
            surveyId,
            question,
            options,
            type,
            position,
            votes,
            value,
            average,
            mandatory,
            max_answers,
            min_answers
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getSurveyid(),
            $objRecord->getQuestion(),
            $objRecord->getOptions(),
            $objRecord->getType(),
            $objRecord->getPosition(),
            $objRecord->getVotes(),
            $objRecord->getValue(),
            $objRecord->getAverage(),
            $objRecord->getMandatory(),
            $objRecord->getMaxAnswers(),
            $objRecord->getMinAnswers()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setQuestionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_survey_questions` SET 
            questionId=?,
            surveyId=?,
            question=?,
            options=?,
            type=?,
            position=?,
            votes=?,
            value=?,
            average=?,
            mandatory=?,
            max_answers=?,
            min_answers=?
        WHERE questionId=?';
        $arrSetParams = array(
            $objRecord->getQuestionid(),
            $objRecord->getSurveyid(),
            $objRecord->getQuestion(),
            $objRecord->getOptions(),
            $objRecord->getType(),
            $objRecord->getPosition(),
            $objRecord->getVotes(),
            $objRecord->getValue(),
            $objRecord->getAverage(),
            $objRecord->getMandatory(),
            $objRecord->getMaxAnswers(),
            $objRecord->getMinAnswers()
        );
        $arrKeyParams = array($objRecord->getOrigQuestionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_survey_questions` WHERE questionId=?';
        $params = array($objRecord->getQuestionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
