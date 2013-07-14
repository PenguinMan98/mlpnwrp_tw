<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFileDraftsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFileDrafts($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFileDrafts($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($fileId, $user)
    {
        $strSql = 'SELECT * FROM `tiki_file_drafts` WHERE fileId=? AND user=?';
        $params = array($fileId, $user);
        return Model_Data_TikiFileDraftsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_file_drafts` (
            fileId,
            filename,
            filesize,
            filetype,
            data,
            user,
            path,
            hash,
            metadata,
            lastModif,
            lockedby
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getFileid(),
            $objRecord->getFilename(),
            $objRecord->getFilesize(),
            $objRecord->getFiletype(),
            $objRecord->getData(),
            $objRecord->getUser(),
            $objRecord->getPath(),
            $objRecord->getHash(),
            $objRecord->getMetadata(),
            $objRecord->getLastmodif(),
            $objRecord->getLockedby()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_file_drafts` (
            fileId,
            filename,
            filesize,
            filetype,
            data,
            user,
            path,
            hash,
            metadata,
            lastModif,
            lockedby
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getFileid(),
            $objRecord->getFilename(),
            $objRecord->getFilesize(),
            $objRecord->getFiletype(),
            $objRecord->getData(),
            $objRecord->getUser(),
            $objRecord->getPath(),
            $objRecord->getHash(),
            $objRecord->getMetadata(),
            $objRecord->getLastmodif(),
            $objRecord->getLockedby()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_file_drafts` SET 
            fileId=?,
            filename=?,
            filesize=?,
            filetype=?,
            data=?,
            user=?,
            path=?,
            hash=?,
            metadata=?,
            lastModif=?,
            lockedby=?
        WHERE fileId=? AND user=?';
        $arrSetParams = array(
            $objRecord->getFileid(),
            $objRecord->getFilename(),
            $objRecord->getFilesize(),
            $objRecord->getFiletype(),
            $objRecord->getData(),
            $objRecord->getUser(),
            $objRecord->getPath(),
            $objRecord->getHash(),
            $objRecord->getMetadata(),
            $objRecord->getLastmodif(),
            $objRecord->getLockedby()
        );
        $arrKeyParams = array($objRecord->getOrigFileid(), $objRecord->getOrigUser());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_file_drafts` WHERE fileId=? AND user=?';
        $params = array($objRecord->getFileid(), $objRecord->getUser());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
