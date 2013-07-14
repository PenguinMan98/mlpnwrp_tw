<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCreditsTypesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCreditsTypes($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCreditsTypes($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($credit_type)
    {
        $strSql = 'SELECT * FROM `tiki_credits_types` WHERE credit_type=?';
        $params = array($credit_type);
        return Model_Data_TikiCreditsTypesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_credits_types` (
            credit_type,
            display_text,
            unit_text,
            is_static_level,
            scaling_divisor
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getCreditType(),
            $objRecord->getDisplayText(),
            $objRecord->getUnitText(),
            $objRecord->getIsStaticLevel(),
            $objRecord->getScalingDivisor()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_credits_types` (
            credit_type,
            display_text,
            unit_text,
            is_static_level,
            scaling_divisor
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getCreditType(),
            $objRecord->getDisplayText(),
            $objRecord->getUnitText(),
            $objRecord->getIsStaticLevel(),
            $objRecord->getScalingDivisor()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_credits_types` SET 
            credit_type=?,
            display_text=?,
            unit_text=?,
            is_static_level=?,
            scaling_divisor=?
        WHERE credit_type=?';
        $arrSetParams = array(
            $objRecord->getCreditType(),
            $objRecord->getDisplayText(),
            $objRecord->getUnitText(),
            $objRecord->getIsStaticLevel(),
            $objRecord->getScalingDivisor()
        );
        $arrKeyParams = array($objRecord->getOrigCreditType());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_credits_types` WHERE credit_type=?';
        $params = array($objRecord->getCreditType());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
