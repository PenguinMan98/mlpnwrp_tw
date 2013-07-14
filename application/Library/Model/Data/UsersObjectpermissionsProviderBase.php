<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_UsersObjectpermissionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_UsersObjectpermissions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_UsersObjectpermissions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($groupName, $permName, $objectType, $objectId)
    {
        $strSql = 'SELECT * FROM `users_objectpermissions` WHERE groupName=? AND permName=? AND objectType=? AND objectId=?';
        $params = array($groupName, $permName, $objectType, $objectId);
        return Model_Data_UsersObjectpermissionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `users_objectpermissions` (
            groupName,
            permName,
            objectType,
            objectId
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getGroupname(),
            $objRecord->getPermname(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `users_objectpermissions` (
            groupName,
            permName,
            objectType,
            objectId
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getGroupname(),
            $objRecord->getPermname(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `users_objectpermissions` SET 
            groupName=?,
            permName=?,
            objectType=?,
            objectId=?
        WHERE groupName=? AND permName=? AND objectType=? AND objectId=?';
        $arrSetParams = array(
            $objRecord->getGroupname(),
            $objRecord->getPermname(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid()
        );
        $arrKeyParams = array($objRecord->getOrigGroupname(), $objRecord->getOrigPermname(), $objRecord->getOrigObjecttype(), $objRecord->getOrigObjectid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `users_objectpermissions` WHERE groupName=? AND permName=? AND objectType=? AND objectId=?';
        $params = array($objRecord->getGroupname(), $objRecord->getPermname(), $objRecord->getObjecttype(), $objRecord->getObjectid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
