<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiQuizResultsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiQuizResults($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiQuizResults($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($resultId)
    {
        $strSql = 'SELECT * FROM `tiki_quiz_results` WHERE resultId=?';
        $params = array($resultId);
        return Model_Data_TikiQuizResultsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_quiz_results` (
            resultId,
            quizId,
            fromPoints,
            toPoints,
            answer
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getQuizid(),
            $objRecord->getFrompoints(),
            $objRecord->getTopoints(),
            $objRecord->getAnswer()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setResultid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_quiz_results` (
            resultId,
            quizId,
            fromPoints,
            toPoints,
            answer
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getQuizid(),
            $objRecord->getFrompoints(),
            $objRecord->getTopoints(),
            $objRecord->getAnswer()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setResultid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_quiz_results` SET 
            resultId=?,
            quizId=?,
            fromPoints=?,
            toPoints=?,
            answer=?
        WHERE resultId=?';
        $arrSetParams = array(
            $objRecord->getResultid(),
            $objRecord->getQuizid(),
            $objRecord->getFrompoints(),
            $objRecord->getTopoints(),
            $objRecord->getAnswer()
        );
        $arrKeyParams = array($objRecord->getOrigResultid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_quiz_results` WHERE resultId=?';
        $params = array($objRecord->getResultid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
