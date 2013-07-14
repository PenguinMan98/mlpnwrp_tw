<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserAssignedModulesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserAssignedModules($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserAssignedModules($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($name, $position, $ord, $user)
    {
        $strSql = 'SELECT * FROM `tiki_user_assigned_modules` WHERE name=? AND position=? AND ord=? AND user=?';
        $params = array($name, $position, $ord, $user);
        return Model_Data_TikiUserAssignedModulesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_assigned_modules` (
            moduleId,
            name,
            position,
            ord,
            type,
            user
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getModuleid(),
            $objRecord->getName(),
            $objRecord->getPosition(),
            $objRecord->getOrd(),
            $objRecord->getType(),
            $objRecord->getUser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_assigned_modules` (
            moduleId,
            name,
            position,
            ord,
            type,
            user
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getModuleid(),
            $objRecord->getName(),
            $objRecord->getPosition(),
            $objRecord->getOrd(),
            $objRecord->getType(),
            $objRecord->getUser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_assigned_modules` SET 
            moduleId=?,
            name=?,
            position=?,
            ord=?,
            type=?,
            user=?
        WHERE name=? AND position=? AND ord=? AND user=?';
        $arrSetParams = array(
            $objRecord->getModuleid(),
            $objRecord->getName(),
            $objRecord->getPosition(),
            $objRecord->getOrd(),
            $objRecord->getType(),
            $objRecord->getUser()
        );
        $arrKeyParams = array($objRecord->getOrigName(), $objRecord->getOrigPosition(), $objRecord->getOrigOrd(), $objRecord->getOrigUser());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_assigned_modules` WHERE name=? AND position=? AND ord=? AND user=?';
        $params = array($objRecord->getName(), $objRecord->getPosition(), $objRecord->getOrd(), $objRecord->getUser());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
