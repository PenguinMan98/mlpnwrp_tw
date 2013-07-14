<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiQuizQuestionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiQuizQuestions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiQuizQuestions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($questionId)
    {
        $strSql = 'SELECT * FROM `tiki_quiz_questions` WHERE questionId=?';
        $params = array($questionId);
        return Model_Data_TikiQuizQuestionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_quiz_questions` (
            questionId,
            quizId,
            question,
            position,
            type,
            maxPoints
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getQuizid(),
            $objRecord->getQuestion(),
            $objRecord->getPosition(),
            $objRecord->getType(),
            $objRecord->getMaxpoints()
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
        $strSql = ' REPLACE INTO `tiki_quiz_questions` (
            questionId,
            quizId,
            question,
            position,
            type,
            maxPoints
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getQuizid(),
            $objRecord->getQuestion(),
            $objRecord->getPosition(),
            $objRecord->getType(),
            $objRecord->getMaxpoints()
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
        $strSql = 'UPDATE `tiki_quiz_questions` SET 
            questionId=?,
            quizId=?,
            question=?,
            position=?,
            type=?,
            maxPoints=?
        WHERE questionId=?';
        $arrSetParams = array(
            $objRecord->getQuestionid(),
            $objRecord->getQuizid(),
            $objRecord->getQuestion(),
            $objRecord->getPosition(),
            $objRecord->getType(),
            $objRecord->getMaxpoints()
        );
        $arrKeyParams = array($objRecord->getOrigQuestionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_quiz_questions` WHERE questionId=?';
        $params = array($objRecord->getQuestionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
