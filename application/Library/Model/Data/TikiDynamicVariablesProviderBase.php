<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiDynamicVariablesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiDynamicVariables($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiDynamicVariables($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($name, $data, $lang)
    {
        $strSql = 'SELECT * FROM `tiki_dynamic_variables` WHERE name=? AND data=? AND lang=?';
        $params = array($name, $data, $lang);
        return Model_Data_TikiDynamicVariablesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_dynamic_variables` (
            name,
            data,
            lang
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getName(),
            $objRecord->getData(),
            $objRecord->getLang()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_dynamic_variables` (
            name,
            data,
            lang
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getName(),
            $objRecord->getData(),
            $objRecord->getLang()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_dynamic_variables` SET 
            name=?,
            data=?,
            lang=?
        WHERE name=? AND data=? AND lang=?';
        $arrSetParams = array(
            $objRecord->getName(),
            $objRecord->getData(),
            $objRecord->getLang()
        );
        $arrKeyParams = array($objRecord->getOrigName(), $objRecord->getOrigData(), $objRecord->getOrigLang());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_dynamic_variables` WHERE name=? AND data=? AND lang=?';
        $params = array($objRecord->getName(), $objRecord->getData(), $objRecord->getLang());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
