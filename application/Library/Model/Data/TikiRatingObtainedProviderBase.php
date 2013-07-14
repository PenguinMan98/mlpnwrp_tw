<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiRatingObtainedProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiRatingObtained($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiRatingObtained($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($ratingId)
    {
        $strSql = 'SELECT * FROM `tiki_rating_obtained` WHERE ratingId=?';
        $params = array($ratingId);
        return Model_Data_TikiRatingObtainedProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_rating_obtained` (
            ratingId,
            ratingConfigId,
            type,
            object,
            expire,
            value
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRatingconfigid(),
            $objRecord->getType(),
            $objRecord->getObject(),
            $objRecord->getExpire(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRatingid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_rating_obtained` (
            ratingId,
            ratingConfigId,
            type,
            object,
            expire,
            value
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRatingconfigid(),
            $objRecord->getType(),
            $objRecord->getObject(),
            $objRecord->getExpire(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRatingid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_rating_obtained` SET 
            ratingId=?,
            ratingConfigId=?,
            type=?,
            object=?,
            expire=?,
            value=?
        WHERE ratingId=?';
        $arrSetParams = array(
            $objRecord->getRatingid(),
            $objRecord->getRatingconfigid(),
            $objRecord->getType(),
            $objRecord->getObject(),
            $objRecord->getExpire(),
            $objRecord->getValue()
        );
        $arrKeyParams = array($objRecord->getOrigRatingid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_rating_obtained` WHERE ratingId=?';
        $params = array($objRecord->getRatingid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
