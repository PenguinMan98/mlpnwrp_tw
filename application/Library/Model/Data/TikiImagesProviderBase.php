<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiImagesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiImages($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiImages($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($imageId)
    {
        $strSql = 'SELECT * FROM `tiki_images` WHERE imageId=?';
        $params = array($imageId);
        return Model_Data_TikiImagesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_images` (
            imageId,
            galleryId,
            name,
            description,
            lon,
            lat,
            created,
            user,
            hits,
            path
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGalleryid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getLon(),
            $objRecord->getLat(),
            $objRecord->getCreated(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getPath()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setImageid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_images` (
            imageId,
            galleryId,
            name,
            description,
            lon,
            lat,
            created,
            user,
            hits,
            path
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGalleryid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getLon(),
            $objRecord->getLat(),
            $objRecord->getCreated(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getPath()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setImageid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_images` SET 
            imageId=?,
            galleryId=?,
            name=?,
            description=?,
            lon=?,
            lat=?,
            created=?,
            user=?,
            hits=?,
            path=?
        WHERE imageId=?';
        $arrSetParams = array(
            $objRecord->getImageid(),
            $objRecord->getGalleryid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getLon(),
            $objRecord->getLat(),
            $objRecord->getCreated(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getPath()
        );
        $arrKeyParams = array($objRecord->getOrigImageid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_images` WHERE imageId=?';
        $params = array($objRecord->getImageid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
