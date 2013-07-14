<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSurveyQuestionOptionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSurveyQuestionOptions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSurveyQuestionOptions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($optionId)
    {
        $strSql = 'SELECT * FROM `tiki_survey_question_options` WHERE optionId=?';
        $params = array($optionId);
        return Model_Data_TikiSurveyQuestionOptionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_survey_question_options` (
            optionId,
            questionId,
            qoption,
            votes
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getQuestionid(),
            $objRecord->getQoption(),
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
        $strSql = ' REPLACE INTO `tiki_survey_question_options` (
            optionId,
            questionId,
            qoption,
            votes
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getQuestionid(),
            $objRecord->getQoption(),
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
        $strSql = 'UPDATE `tiki_survey_question_options` SET 
            optionId=?,
            questionId=?,
            qoption=?,
            votes=?
        WHERE optionId=?';
        $arrSetParams = array(
            $objRecord->getOptionid(),
            $objRecord->getQuestionid(),
            $objRecord->getQoption(),
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
        $strSql = 'DELETE FROM `tiki_survey_question_options` WHERE optionId=?';
        $params = array($objRecord->getOptionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
