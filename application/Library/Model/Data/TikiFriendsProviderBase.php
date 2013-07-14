<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFriendsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFriends($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFriends($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user, $friend)
    {
        $strSql = 'SELECT * FROM `tiki_friends` WHERE user=? AND friend=?';
        $params = array($user, $friend);
        return Model_Data_TikiFriendsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_friends` (
            user,
            friend
        ) VALUES  (?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getFriend()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_friends` (
            user,
            friend
        ) VALUES  (?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getFriend()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_friends` SET 
            user=?,
            friend=?
        WHERE user=? AND friend=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getFriend()
        );
        $arrKeyParams = array($objRecord->getOrigUser(), $objRecord->getOrigFriend());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_friends` WHERE user=? AND friend=?';
        $params = array($objRecord->getUser(), $objRecord->getFriend());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
