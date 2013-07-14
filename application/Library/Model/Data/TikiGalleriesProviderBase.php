<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiGalleriesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiGalleries($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiGalleries($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($galleryId)
    {
        $strSql = 'SELECT * FROM `tiki_galleries` WHERE galleryId=?';
        $params = array($galleryId);
        return Model_Data_TikiGalleriesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_galleries` (
            galleryId,
            name,
            description,
            created,
            lastModif,
            visible,
            geographic,
            theme,
            user,
            hits,
            maxRows,
            rowImages,
            thumbSizeX,
            thumbSizeY,
            public,
            sortorder,
            sortdirection,
            galleryimage,
            parentgallery,
            showname,
            showimageid,
            showdescription,
            showcreated,
            showuser,
            showhits,
            showxysize,
            showfilesize,
            showfilename,
            defaultscale,
            showcategories
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getVisible(),
            $objRecord->getGeographic(),
            $objRecord->getTheme(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getMaxrows(),
            $objRecord->getRowimages(),
            $objRecord->getThumbsizex(),
            $objRecord->getThumbsizey(),
            $objRecord->getPublic(),
            $objRecord->getSortorder(),
            $objRecord->getSortdirection(),
            $objRecord->getGalleryimage(),
            $objRecord->getParentgallery(),
            $objRecord->getShowname(),
            $objRecord->getShowimageid(),
            $objRecord->getShowdescription(),
            $objRecord->getShowcreated(),
            $objRecord->getShowuser(),
            $objRecord->getShowhits(),
            $objRecord->getShowxysize(),
            $objRecord->getShowfilesize(),
            $objRecord->getShowfilename(),
            $objRecord->getDefaultscale(),
            $objRecord->getShowcategories()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setGalleryid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_galleries` (
            galleryId,
            name,
            description,
            created,
            lastModif,
            visible,
            geographic,
            theme,
            user,
            hits,
            maxRows,
            rowImages,
            thumbSizeX,
            thumbSizeY,
            public,
            sortorder,
            sortdirection,
            galleryimage,
            parentgallery,
            showname,
            showimageid,
            showdescription,
            showcreated,
            showuser,
            showhits,
            showxysize,
            showfilesize,
            showfilename,
            defaultscale,
            showcategories
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getVisible(),
            $objRecord->getGeographic(),
            $objRecord->getTheme(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getMaxrows(),
            $objRecord->getRowimages(),
            $objRecord->getThumbsizex(),
            $objRecord->getThumbsizey(),
            $objRecord->getPublic(),
            $objRecord->getSortorder(),
            $objRecord->getSortdirection(),
            $objRecord->getGalleryimage(),
            $objRecord->getParentgallery(),
            $objRecord->getShowname(),
            $objRecord->getShowimageid(),
            $objRecord->getShowdescription(),
            $objRecord->getShowcreated(),
            $objRecord->getShowuser(),
            $objRecord->getShowhits(),
            $objRecord->getShowxysize(),
            $objRecord->getShowfilesize(),
            $objRecord->getShowfilename(),
            $objRecord->getDefaultscale(),
            $objRecord->getShowcategories()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setGalleryid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_galleries` SET 
            galleryId=?,
            name=?,
            description=?,
            created=?,
            lastModif=?,
            visible=?,
            geographic=?,
            theme=?,
            user=?,
            hits=?,
            maxRows=?,
            rowImages=?,
            thumbSizeX=?,
            thumbSizeY=?,
            public=?,
            sortorder=?,
            sortdirection=?,
            galleryimage=?,
            parentgallery=?,
            showname=?,
            showimageid=?,
            showdescription=?,
            showcreated=?,
            showuser=?,
            showhits=?,
            showxysize=?,
            showfilesize=?,
            showfilename=?,
            defaultscale=?,
            showcategories=?
        WHERE galleryId=?';
        $arrSetParams = array(
            $objRecord->getGalleryid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getVisible(),
            $objRecord->getGeographic(),
            $objRecord->getTheme(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getMaxrows(),
            $objRecord->getRowimages(),
            $objRecord->getThumbsizex(),
            $objRecord->getThumbsizey(),
            $objRecord->getPublic(),
            $objRecord->getSortorder(),
            $objRecord->getSortdirection(),
            $objRecord->getGalleryimage(),
            $objRecord->getParentgallery(),
            $objRecord->getShowname(),
            $objRecord->getShowimageid(),
            $objRecord->getShowdescription(),
            $objRecord->getShowcreated(),
            $objRecord->getShowuser(),
            $objRecord->getShowhits(),
            $objRecord->getShowxysize(),
            $objRecord->getShowfilesize(),
            $objRecord->getShowfilename(),
            $objRecord->getDefaultscale(),
            $objRecord->getShowcategories()
        );
        $arrKeyParams = array($objRecord->getOrigGalleryid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_galleries` WHERE galleryId=?';
        $params = array($objRecord->getGalleryid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
