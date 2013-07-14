<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserBookmarksFoldersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserBookmarksFolders($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserBookmarksFolders($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($folderId, $user)
    {
        $strSql = 'SELECT * FROM `tiki_user_bookmarks_folders` WHERE folderId=? AND user=?';
        $params = array($folderId, $user);
        return Model_Data_TikiUserBookmarksFoldersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_bookmarks_folders` (
            folderId,
            parentId,
            user,
            name
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getFolderid(),
            $objRecord->getParentid(),
            $objRecord->getUser(),
            $objRecord->getName()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_bookmarks_folders` (
            folderId,
            parentId,
            user,
            name
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getFolderid(),
            $objRecord->getParentid(),
            $objRecord->getUser(),
            $objRecord->getName()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_bookmarks_folders` SET 
            folderId=?,
            parentId=?,
            user=?,
            name=?
        WHERE folderId=? AND user=?';
        $arrSetParams = array(
            $objRecord->getFolderid(),
            $objRecord->getParentid(),
            $objRecord->getUser(),
            $objRecord->getName()
        );
        $arrKeyParams = array($objRecord->getOrigFolderid(), $objRecord->getOrigUser());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_bookmarks_folders` WHERE folderId=? AND user=?';
        $params = array($objRecord->getFolderid(), $objRecord->getUser());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
