<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserQuizzesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserQuizzes($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserQuizzes($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($userResultId)
    {
        $strSql = 'SELECT * FROM `tiki_user_quizzes` WHERE userResultId=?';
        $params = array($userResultId);
        return Model_Data_TikiUserQuizzesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_quizzes` (
            user,
            quizId,
            timestamp,
            timeTaken,
            points,
            maxPoints,
            resultId,
            userResultId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getQuizid(),
            $objRecord->getTimestamp(),
            $objRecord->getTimetaken(),
            $objRecord->getPoints(),
            $objRecord->getMaxpoints(),
            $objRecord->getResultid(),
            
            0
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setUserresultid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_quizzes` (
            user,
            quizId,
            timestamp,
            timeTaken,
            points,
            maxPoints,
            resultId,
            userResultId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getQuizid(),
            $objRecord->getTimestamp(),
            $objRecord->getTimetaken(),
            $objRecord->getPoints(),
            $objRecord->getMaxpoints(),
            $objRecord->getResultid(),
            
            0
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setUserresultid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_quizzes` SET 
            user=?,
            quizId=?,
            timestamp=?,
            timeTaken=?,
            points=?,
            maxPoints=?,
            resultId=?,
            userResultId=?
        WHERE userResultId=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getQuizid(),
            $objRecord->getTimestamp(),
            $objRecord->getTimetaken(),
            $objRecord->getPoints(),
            $objRecord->getMaxpoints(),
            $objRecord->getResultid(),
            $objRecord->getUserresultid()
        );
        $arrKeyParams = array($objRecord->getOrigUserresultid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_quizzes` WHERE userResultId=?';
        $params = array($objRecord->getUserresultid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
