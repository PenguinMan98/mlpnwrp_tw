<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSurveysProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSurveys($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSurveys($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($surveyId)
    {
        $strSql = 'SELECT * FROM `tiki_surveys` WHERE surveyId=?';
        $params = array($surveyId);
        return Model_Data_TikiSurveysProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_surveys` (
            surveyId,
            name,
            description,
            taken,
            lastTaken,
            created,
            status
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getTaken(),
            $objRecord->getLasttaken(),
            $objRecord->getCreated(),
            $objRecord->getStatus()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSurveyid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_surveys` (
            surveyId,
            name,
            description,
            taken,
            lastTaken,
            created,
            status
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getTaken(),
            $objRecord->getLasttaken(),
            $objRecord->getCreated(),
            $objRecord->getStatus()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSurveyid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_surveys` SET 
            surveyId=?,
            name=?,
            description=?,
            taken=?,
            lastTaken=?,
            created=?,
            status=?
        WHERE surveyId=?';
        $arrSetParams = array(
            $objRecord->getSurveyid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getTaken(),
            $objRecord->getLasttaken(),
            $objRecord->getCreated(),
            $objRecord->getStatus()
        );
        $arrKeyParams = array($objRecord->getOrigSurveyid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_surveys` WHERE surveyId=?';
        $params = array($objRecord->getSurveyid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
