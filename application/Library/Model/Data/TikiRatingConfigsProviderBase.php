<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiRatingConfigsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiRatingConfigs($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiRatingConfigs($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($ratingConfigId)
    {
        $strSql = 'SELECT * FROM `tiki_rating_configs` WHERE ratingConfigId=?';
        $params = array($ratingConfigId);
        return Model_Data_TikiRatingConfigsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_rating_configs` (
            ratingConfigId,
            name,
            expiry,
            formula,
            callbacks
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getExpiry(),
            $objRecord->getFormula(),
            $objRecord->getCallbacks()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRatingconfigid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_rating_configs` (
            ratingConfigId,
            name,
            expiry,
            formula,
            callbacks
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getExpiry(),
            $objRecord->getFormula(),
            $objRecord->getCallbacks()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRatingconfigid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_rating_configs` SET 
            ratingConfigId=?,
            name=?,
            expiry=?,
            formula=?,
            callbacks=?
        WHERE ratingConfigId=?';
        $arrSetParams = array(
            $objRecord->getRatingconfigid(),
            $objRecord->getName(),
            $objRecord->getExpiry(),
            $objRecord->getFormula(),
            $objRecord->getCallbacks()
        );
        $arrKeyParams = array($objRecord->getOrigRatingconfigid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_rating_configs` WHERE ratingConfigId=?';
        $params = array($objRecord->getRatingconfigid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
