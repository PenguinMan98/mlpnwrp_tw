<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiImagesDataProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiImagesData($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiImagesData($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($imageId, $xsize, $ysize, $type)
    {
        $strSql = 'SELECT * FROM `tiki_images_data` WHERE imageId=? AND xsize=? AND ysize=? AND type=?';
        $params = array($imageId, $xsize, $ysize, $type);
        return Model_Data_TikiImagesDataProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_images_data` (
            imageId,
            xsize,
            ysize,
            type,
            filesize,
            filetype,
            filename,
            data,
            etag
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getImageid(),
            $objRecord->getXsize(),
            $objRecord->getYsize(),
            $objRecord->getType(),
            $objRecord->getFilesize(),
            $objRecord->getFiletype(),
            $objRecord->getFilename(),
            $objRecord->getData(),
            $objRecord->getEtag()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_images_data` (
            imageId,
            xsize,
            ysize,
            type,
            filesize,
            filetype,
            filename,
            data,
            etag
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getImageid(),
            $objRecord->getXsize(),
            $objRecord->getYsize(),
            $objRecord->getType(),
            $objRecord->getFilesize(),
            $objRecord->getFiletype(),
            $objRecord->getFilename(),
            $objRecord->getData(),
            $objRecord->getEtag()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_images_data` SET 
            imageId=?,
            xsize=?,
            ysize=?,
            type=?,
            filesize=?,
            filetype=?,
            filename=?,
            data=?,
            etag=?
        WHERE imageId=? AND xsize=? AND ysize=? AND type=?';
        $arrSetParams = array(
            $objRecord->getImageid(),
            $objRecord->getXsize(),
            $objRecord->getYsize(),
            $objRecord->getType(),
            $objRecord->getFilesize(),
            $objRecord->getFiletype(),
            $objRecord->getFilename(),
            $objRecord->getData(),
            $objRecord->getEtag()
        );
        $arrKeyParams = array($objRecord->getOrigImageid(), $objRecord->getOrigXsize(), $objRecord->getOrigYsize(), $objRecord->getOrigType());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_images_data` WHERE imageId=? AND xsize=? AND ysize=? AND type=?';
        $params = array($objRecord->getImageid(), $objRecord->getXsize(), $objRecord->getYsize(), $objRecord->getType());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
