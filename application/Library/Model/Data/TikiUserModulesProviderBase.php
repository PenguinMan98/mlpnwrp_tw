<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserModulesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserModules($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserModules($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($name)
    {
        $strSql = 'SELECT * FROM `tiki_user_modules` WHERE name=?';
        $params = array($name);
        return Model_Data_TikiUserModulesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_modules` (
            name,
            title,
            data,
            parse,
            status
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getName(),
            $objRecord->getTitle(),
            $objRecord->getData(),
            $objRecord->getParse(),
            $objRecord->getStatus()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_modules` (
            name,
            title,
            data,
            parse,
            status
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getName(),
            $objRecord->getTitle(),
            $objRecord->getData(),
            $objRecord->getParse(),
            $objRecord->getStatus()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_modules` SET 
            name=?,
            title=?,
            data=?,
            parse=?,
            status=?
        WHERE name=?';
        $arrSetParams = array(
            $objRecord->getName(),
            $objRecord->getTitle(),
            $objRecord->getData(),
            $objRecord->getParse(),
            $objRecord->getStatus()
        );
        $arrKeyParams = array($objRecord->getOrigName());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_modules` WHERE name=?';
        $params = array($objRecord->getName());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
