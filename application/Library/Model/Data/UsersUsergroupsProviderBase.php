<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_UsersUsergroupsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_UsersUsergroups($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_UsersUsergroups($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($userId, $groupName)
    {
        $strSql = 'SELECT * FROM `users_usergroups` WHERE userId=? AND groupName=?';
        $params = array($userId, $groupName);
        return Model_Data_UsersUsergroupsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `users_usergroups` (
            userId,
            groupName,
            created,
            expire
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getUserid(),
            $objRecord->getGroupname(),
            $objRecord->getCreated(),
            $objRecord->getExpire()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `users_usergroups` (
            userId,
            groupName,
            created,
            expire
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getUserid(),
            $objRecord->getGroupname(),
            $objRecord->getCreated(),
            $objRecord->getExpire()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `users_usergroups` SET 
            userId=?,
            groupName=?,
            created=?,
            expire=?
        WHERE userId=? AND groupName=?';
        $arrSetParams = array(
            $objRecord->getUserid(),
            $objRecord->getGroupname(),
            $objRecord->getCreated(),
            $objRecord->getExpire()
        );
        $arrKeyParams = array($objRecord->getOrigUserid(), $objRecord->getOrigGroupname());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `users_usergroups` WHERE userId=? AND groupName=?';
        $params = array($objRecord->getUserid(), $objRecord->getGroupname());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
