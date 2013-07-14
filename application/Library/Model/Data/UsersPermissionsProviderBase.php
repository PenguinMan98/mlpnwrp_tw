<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_UsersPermissionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_UsersPermissions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_UsersPermissions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($permName)
    {
        $strSql = 'SELECT * FROM `users_permissions` WHERE permName=?';
        $params = array($permName);
        return Model_Data_UsersPermissionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `users_permissions` (
            permName,
            level
        ) VALUES  (?, ?)';
        $params = array($objRecord->getPermname(),
            $objRecord->getLevel()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `users_permissions` (
            permName,
            level
        ) VALUES  (?, ?)';
        $params = array($objRecord->getPermname(),
            $objRecord->getLevel()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `users_permissions` SET 
            permName=?,
            level=?
        WHERE permName=?';
        $arrSetParams = array(
            $objRecord->getPermname(),
            $objRecord->getLevel()
        );
        $arrKeyParams = array($objRecord->getOrigPermname());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `users_permissions` WHERE permName=?';
        $params = array($objRecord->getPermname());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
