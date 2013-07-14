<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserfilesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserfiles($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserfiles($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($fileId)
    {
        $strSql = 'SELECT * FROM `tiki_userfiles` WHERE fileId=?';
        $params = array($fileId);
        return Model_Data_TikiUserfilesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_userfiles` (
            user,
            fileId,
            name,
            filename,
            filetype,
            filesize,
            data,
            hits,
            isFile,
            path,
            created
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            
            0,
            $objRecord->getName(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData(),
            $objRecord->getHits(),
            $objRecord->getIsfile(),
            $objRecord->getPath(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFileid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_userfiles` (
            user,
            fileId,
            name,
            filename,
            filetype,
            filesize,
            data,
            hits,
            isFile,
            path,
            created
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            
            0,
            $objRecord->getName(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData(),
            $objRecord->getHits(),
            $objRecord->getIsfile(),
            $objRecord->getPath(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFileid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_userfiles` SET 
            user=?,
            fileId=?,
            name=?,
            filename=?,
            filetype=?,
            filesize=?,
            data=?,
            hits=?,
            isFile=?,
            path=?,
            created=?
        WHERE fileId=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getFileid(),
            $objRecord->getName(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData(),
            $objRecord->getHits(),
            $objRecord->getIsfile(),
            $objRecord->getPath(),
            $objRecord->getCreated()
        );
        $arrKeyParams = array($objRecord->getOrigFileid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_userfiles` WHERE fileId=?';
        $params = array($objRecord->getFileid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
