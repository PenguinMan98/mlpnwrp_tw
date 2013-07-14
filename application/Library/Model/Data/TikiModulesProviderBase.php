<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiModulesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiModules($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiModules($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($moduleId)
    {
        $strSql = 'SELECT * FROM `tiki_modules` WHERE moduleId=?';
        $params = array($moduleId);
        return Model_Data_TikiModulesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_modules` (
            moduleId,
            name,
            position,
            ord,
            type,
            title,
            cache_time,
            rows,
            params,
            groups
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getPosition(),
            $objRecord->getOrd(),
            $objRecord->getType(),
            $objRecord->getTitle(),
            $objRecord->getCacheTime(),
            $objRecord->getRows(),
            $objRecord->getParams(),
            $objRecord->getGroups()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setModuleid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_modules` (
            moduleId,
            name,
            position,
            ord,
            type,
            title,
            cache_time,
            rows,
            params,
            groups
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getPosition(),
            $objRecord->getOrd(),
            $objRecord->getType(),
            $objRecord->getTitle(),
            $objRecord->getCacheTime(),
            $objRecord->getRows(),
            $objRecord->getParams(),
            $objRecord->getGroups()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setModuleid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_modules` SET 
            moduleId=?,
            name=?,
            position=?,
            ord=?,
            type=?,
            title=?,
            cache_time=?,
            rows=?,
            params=?,
            groups=?
        WHERE moduleId=?';
        $arrSetParams = array(
            $objRecord->getModuleid(),
            $objRecord->getName(),
            $objRecord->getPosition(),
            $objRecord->getOrd(),
            $objRecord->getType(),
            $objRecord->getTitle(),
            $objRecord->getCacheTime(),
            $objRecord->getRows(),
            $objRecord->getParams(),
            $objRecord->getGroups()
        );
        $arrKeyParams = array($objRecord->getOrigModuleid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_modules` WHERE moduleId=?';
        $params = array($objRecord->getModuleid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
