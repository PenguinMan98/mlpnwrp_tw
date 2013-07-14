<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiActionlogParamsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiActionlogParams($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiActionlogParams($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($actionId, $name, $value)
    {
        $strSql = 'SELECT * FROM `tiki_actionlog_params` WHERE actionId=? AND name=? AND value=?';
        $params = array($actionId, $name, $value);
        return Model_Data_TikiActionlogParamsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_actionlog_params` (
            actionId,
            name,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getActionid(),
            $objRecord->getName(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_actionlog_params` (
            actionId,
            name,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getActionid(),
            $objRecord->getName(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_actionlog_params` SET 
            actionId=?,
            name=?,
            value=?
        WHERE actionId=? AND name=? AND value=?';
        $arrSetParams = array(
            $objRecord->getActionid(),
            $objRecord->getName(),
            $objRecord->getValue()
        );
        $arrKeyParams = array($objRecord->getOrigActionid(), $objRecord->getOrigName(), $objRecord->getOrigValue());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_actionlog_params` WHERE actionId=? AND name=? AND value=?';
        $params = array($objRecord->getActionid(), $objRecord->getName(), $objRecord->getValue());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
