<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_UsersUsersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_UsersUsers($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_UsersUsers($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($userId)
    {
        $strSql = 'SELECT * FROM `users_users` WHERE userId=?';
        $params = array($userId);
        return Model_Data_UsersUsersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `users_users` (
            userId,
            email,
            login,
            password,
            provpass,
            default_group,
            lastLogin,
            currentLogin,
            registrationDate,
            challenge,
            pass_confirm,
            email_confirm,
            hash,
            created,
            avatarName,
            avatarSize,
            avatarFileType,
            avatarData,
            avatarLibName,
            avatarType,
            score,
            valid,
            unsuccessful_logins,
            openid_url,
            waiting
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getEmail(),
            $objRecord->getLogin(),
            $objRecord->getPassword(),
            $objRecord->getProvpass(),
            $objRecord->getDefaultGroup(),
            $objRecord->getLastlogin(),
            $objRecord->getCurrentlogin(),
            $objRecord->getRegistrationdate(),
            $objRecord->getChallenge(),
            $objRecord->getPassConfirm(),
            $objRecord->getEmailConfirm(),
            $objRecord->getHash(),
            $objRecord->getCreated(),
            $objRecord->getAvatarname(),
            $objRecord->getAvatarsize(),
            $objRecord->getAvatarfiletype(),
            $objRecord->getAvatardata(),
            $objRecord->getAvatarlibname(),
            $objRecord->getAvatartype(),
            $objRecord->getScore(),
            $objRecord->getValid(),
            $objRecord->getUnsuccessfulLogins(),
            $objRecord->getOpenidUrl(),
            $objRecord->getWaiting()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setUserid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `users_users` (
            userId,
            email,
            login,
            password,
            provpass,
            default_group,
            lastLogin,
            currentLogin,
            registrationDate,
            challenge,
            pass_confirm,
            email_confirm,
            hash,
            created,
            avatarName,
            avatarSize,
            avatarFileType,
            avatarData,
            avatarLibName,
            avatarType,
            score,
            valid,
            unsuccessful_logins,
            openid_url,
            waiting
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getEmail(),
            $objRecord->getLogin(),
            $objRecord->getPassword(),
            $objRecord->getProvpass(),
            $objRecord->getDefaultGroup(),
            $objRecord->getLastlogin(),
            $objRecord->getCurrentlogin(),
            $objRecord->getRegistrationdate(),
            $objRecord->getChallenge(),
            $objRecord->getPassConfirm(),
            $objRecord->getEmailConfirm(),
            $objRecord->getHash(),
            $objRecord->getCreated(),
            $objRecord->getAvatarname(),
            $objRecord->getAvatarsize(),
            $objRecord->getAvatarfiletype(),
            $objRecord->getAvatardata(),
            $objRecord->getAvatarlibname(),
            $objRecord->getAvatartype(),
            $objRecord->getScore(),
            $objRecord->getValid(),
            $objRecord->getUnsuccessfulLogins(),
            $objRecord->getOpenidUrl(),
            $objRecord->getWaiting()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setUserid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `users_users` SET 
            userId=?,
            email=?,
            login=?,
            password=?,
            provpass=?,
            default_group=?,
            lastLogin=?,
            currentLogin=?,
            registrationDate=?,
            challenge=?,
            pass_confirm=?,
            email_confirm=?,
            hash=?,
            created=?,
            avatarName=?,
            avatarSize=?,
            avatarFileType=?,
            avatarData=?,
            avatarLibName=?,
            avatarType=?,
            score=?,
            valid=?,
            unsuccessful_logins=?,
            openid_url=?,
            waiting=?
        WHERE userId=?';
        $arrSetParams = array(
            $objRecord->getUserid(),
            $objRecord->getEmail(),
            $objRecord->getLogin(),
            $objRecord->getPassword(),
            $objRecord->getProvpass(),
            $objRecord->getDefaultGroup(),
            $objRecord->getLastlogin(),
            $objRecord->getCurrentlogin(),
            $objRecord->getRegistrationdate(),
            $objRecord->getChallenge(),
            $objRecord->getPassConfirm(),
            $objRecord->getEmailConfirm(),
            $objRecord->getHash(),
            $objRecord->getCreated(),
            $objRecord->getAvatarname(),
            $objRecord->getAvatarsize(),
            $objRecord->getAvatarfiletype(),
            $objRecord->getAvatardata(),
            $objRecord->getAvatarlibname(),
            $objRecord->getAvatartype(),
            $objRecord->getScore(),
            $objRecord->getValid(),
            $objRecord->getUnsuccessfulLogins(),
            $objRecord->getOpenidUrl(),
            $objRecord->getWaiting()
        );
        $arrKeyParams = array($objRecord->getOrigUserid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `users_users` WHERE userId=?';
        $params = array($objRecord->getUserid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
