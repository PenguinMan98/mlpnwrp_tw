<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_UsersGroupsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_UsersGroups($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_UsersGroups($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($id)
    {
        $strSql = 'SELECT * FROM `users_groups` WHERE id=?';
        $params = array($id);
        return Model_Data_UsersGroupsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `users_groups` (
            id,
            groupName,
            groupDesc,
            groupHome,
            usersTrackerId,
            groupTrackerId,
            usersFieldId,
            groupFieldId,
            registrationChoice,
            registrationUsersFieldIds,
            userChoice,
            groupDefCat,
            groupTheme,
            isExternal,
            expireAfter,
            emailPattern,
            anniversary,
            prorateInterval
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGroupname(),
            $objRecord->getGroupdesc(),
            $objRecord->getGrouphome(),
            $objRecord->getUserstrackerid(),
            $objRecord->getGrouptrackerid(),
            $objRecord->getUsersfieldid(),
            $objRecord->getGroupfieldid(),
            $objRecord->getRegistrationchoice(),
            $objRecord->getRegistrationusersfieldids(),
            $objRecord->getUserchoice(),
            $objRecord->getGroupdefcat(),
            $objRecord->getGrouptheme(),
            $objRecord->getIsexternal(),
            $objRecord->getExpireafter(),
            $objRecord->getEmailpattern(),
            $objRecord->getAnniversary(),
            $objRecord->getProrateinterval()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `users_groups` (
            id,
            groupName,
            groupDesc,
            groupHome,
            usersTrackerId,
            groupTrackerId,
            usersFieldId,
            groupFieldId,
            registrationChoice,
            registrationUsersFieldIds,
            userChoice,
            groupDefCat,
            groupTheme,
            isExternal,
            expireAfter,
            emailPattern,
            anniversary,
            prorateInterval
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGroupname(),
            $objRecord->getGroupdesc(),
            $objRecord->getGrouphome(),
            $objRecord->getUserstrackerid(),
            $objRecord->getGrouptrackerid(),
            $objRecord->getUsersfieldid(),
            $objRecord->getGroupfieldid(),
            $objRecord->getRegistrationchoice(),
            $objRecord->getRegistrationusersfieldids(),
            $objRecord->getUserchoice(),
            $objRecord->getGroupdefcat(),
            $objRecord->getGrouptheme(),
            $objRecord->getIsexternal(),
            $objRecord->getExpireafter(),
            $objRecord->getEmailpattern(),
            $objRecord->getAnniversary(),
            $objRecord->getProrateinterval()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `users_groups` SET 
            id=?,
            groupName=?,
            groupDesc=?,
            groupHome=?,
            usersTrackerId=?,
            groupTrackerId=?,
            usersFieldId=?,
            groupFieldId=?,
            registrationChoice=?,
            registrationUsersFieldIds=?,
            userChoice=?,
            groupDefCat=?,
            groupTheme=?,
            isExternal=?,
            expireAfter=?,
            emailPattern=?,
            anniversary=?,
            prorateInterval=?
        WHERE id=?';
        $arrSetParams = array(
            $objRecord->getId(),
            $objRecord->getGroupname(),
            $objRecord->getGroupdesc(),
            $objRecord->getGrouphome(),
            $objRecord->getUserstrackerid(),
            $objRecord->getGrouptrackerid(),
            $objRecord->getUsersfieldid(),
            $objRecord->getGroupfieldid(),
            $objRecord->getRegistrationchoice(),
            $objRecord->getRegistrationusersfieldids(),
            $objRecord->getUserchoice(),
            $objRecord->getGroupdefcat(),
            $objRecord->getGrouptheme(),
            $objRecord->getIsexternal(),
            $objRecord->getExpireafter(),
            $objRecord->getEmailpattern(),
            $objRecord->getAnniversary(),
            $objRecord->getProrateinterval()
        );
        $arrKeyParams = array($objRecord->getOrigId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `users_groups` WHERE id=?';
        $params = array($objRecord->getId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
