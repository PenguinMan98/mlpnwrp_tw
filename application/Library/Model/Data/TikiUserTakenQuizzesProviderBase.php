<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserTakenQuizzesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserTakenQuizzes($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserTakenQuizzes($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user, $quizId)
    {
        $strSql = 'SELECT * FROM `tiki_user_taken_quizzes` WHERE user=? AND quizId=?';
        $params = array($user, $quizId);
        return Model_Data_TikiUserTakenQuizzesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_taken_quizzes` (
            user,
            quizId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getQuizid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_taken_quizzes` (
            user,
            quizId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getQuizid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_taken_quizzes` SET 
            user=?,
            quizId=?
        WHERE user=? AND quizId=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getQuizid()
        );
        $arrKeyParams = array($objRecord->getOrigUser(), $objRecord->getOrigQuizid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_taken_quizzes` WHERE user=? AND quizId=?';
        $params = array($objRecord->getUser(), $objRecord->getQuizid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
