<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_UsersGrouppermissionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_UsersGrouppermissions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_UsersGrouppermissions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($groupName, $permName)
    {
        $strSql = 'SELECT * FROM `users_grouppermissions` WHERE groupName=? AND permName=?';
        $params = array($groupName, $permName);
        return Model_Data_UsersGrouppermissionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `users_grouppermissions` (
            groupName,
            permName,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getGroupname(),
            $objRecord->getPermname(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `users_grouppermissions` (
            groupName,
            permName,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getGroupname(),
            $objRecord->getPermname(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `users_grouppermissions` SET 
            groupName=?,
            permName=?,
            value=?
        WHERE groupName=? AND permName=?';
        $arrSetParams = array(
            $objRecord->getGroupname(),
            $objRecord->getPermname(),
            $objRecord->getValue()
        );
        $arrKeyParams = array($objRecord->getOrigGroupname(), $objRecord->getOrigPermname());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `users_grouppermissions` WHERE groupName=? AND permName=?';
        $params = array($objRecord->getGroupname(), $objRecord->getPermname());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
