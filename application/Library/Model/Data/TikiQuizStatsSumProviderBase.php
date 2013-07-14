<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiQuizStatsSumProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiQuizStatsSum($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiQuizStatsSum($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($quizId)
    {
        $strSql = 'SELECT * FROM `tiki_quiz_stats_sum` WHERE quizId=?';
        $params = array($quizId);
        return Model_Data_TikiQuizStatsSumProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_quiz_stats_sum` (
            quizId,
            quizName,
            timesTaken,
            avgpoints,
            avgavg,
            avgtime
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getQuizid(),
            $objRecord->getQuizname(),
            $objRecord->getTimestaken(),
            $objRecord->getAvgpoints(),
            $objRecord->getAvgavg(),
            $objRecord->getAvgtime()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_quiz_stats_sum` (
            quizId,
            quizName,
            timesTaken,
            avgpoints,
            avgavg,
            avgtime
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getQuizid(),
            $objRecord->getQuizname(),
            $objRecord->getTimestaken(),
            $objRecord->getAvgpoints(),
            $objRecord->getAvgavg(),
            $objRecord->getAvgtime()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_quiz_stats_sum` SET 
            quizId=?,
            quizName=?,
            timesTaken=?,
            avgpoints=?,
            avgavg=?,
            avgtime=?
        WHERE quizId=?';
        $arrSetParams = array(
            $objRecord->getQuizid(),
            $objRecord->getQuizname(),
            $objRecord->getTimestaken(),
            $objRecord->getAvgpoints(),
            $objRecord->getAvgavg(),
            $objRecord->getAvgtime()
        );
        $arrKeyParams = array($objRecord->getOrigQuizid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_quiz_stats_sum` WHERE quizId=?';
        $params = array($objRecord->getQuizid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
