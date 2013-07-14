<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiGalleriesScalesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiGalleriesScales($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiGalleriesScales($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($galleryId, $scale)
    {
        $strSql = 'SELECT * FROM `tiki_galleries_scales` WHERE galleryId=? AND scale=?';
        $params = array($galleryId, $scale);
        return Model_Data_TikiGalleriesScalesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_galleries_scales` (
            galleryId,
            scale
        ) VALUES  (?, ?)';
        $params = array($objRecord->getGalleryid(),
            $objRecord->getScale()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_galleries_scales` (
            galleryId,
            scale
        ) VALUES  (?, ?)';
        $params = array($objRecord->getGalleryid(),
            $objRecord->getScale()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_galleries_scales` SET 
            galleryId=?,
            scale=?
        WHERE galleryId=? AND scale=?';
        $arrSetParams = array(
            $objRecord->getGalleryid(),
            $objRecord->getScale()
        );
        $arrKeyParams = array($objRecord->getOrigGalleryid(), $objRecord->getOrigScale());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_galleries_scales` WHERE galleryId=? AND scale=?';
        $params = array($objRecord->getGalleryid(), $objRecord->getScale());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
