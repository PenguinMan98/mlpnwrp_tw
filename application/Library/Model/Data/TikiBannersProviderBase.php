<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiBannersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiBanners($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiBanners($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($bannerId)
    {
        $strSql = 'SELECT * FROM `tiki_banners` WHERE bannerId=?';
        $params = array($bannerId);
        return Model_Data_TikiBannersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_banners` (
            bannerId,
            client,
            url,
            title,
            alt,
            which,
            imageData,
            imageType,
            imageName,
            HTMLData,
            fixedURLData,
            textData,
            fromDate,
            toDate,
            useDates,
            mon,
            tue,
            wed,
            thu,
            fri,
            sat,
            sun,
            hourFrom,
            hourTo,
            created,
            maxImpressions,
            impressions,
            maxUserImpressions,
            maxClicks,
            clicks,
            zone,
            onlyInURIs,
            exceptInURIs
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getClient(),
            $objRecord->getUrl(),
            $objRecord->getTitle(),
            $objRecord->getAlt(),
            $objRecord->getWhich(),
            $objRecord->getImagedata(),
            $objRecord->getImagetype(),
            $objRecord->getImagename(),
            $objRecord->getHtmldata(),
            $objRecord->getFixedurldata(),
            $objRecord->getTextdata(),
            $objRecord->getFromdate(),
            $objRecord->getTodate(),
            $objRecord->getUsedates(),
            $objRecord->getMon(),
            $objRecord->getTue(),
            $objRecord->getWed(),
            $objRecord->getThu(),
            $objRecord->getFri(),
            $objRecord->getSat(),
            $objRecord->getSun(),
            $objRecord->getHourfrom(),
            $objRecord->getHourto(),
            $objRecord->getCreated(),
            $objRecord->getMaximpressions(),
            $objRecord->getImpressions(),
            $objRecord->getMaxuserimpressions(),
            $objRecord->getMaxclicks(),
            $objRecord->getClicks(),
            $objRecord->getZone(),
            $objRecord->getOnlyinuris(),
            $objRecord->getExceptinuris()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBannerid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_banners` (
            bannerId,
            client,
            url,
            title,
            alt,
            which,
            imageData,
            imageType,
            imageName,
            HTMLData,
            fixedURLData,
            textData,
            fromDate,
            toDate,
            useDates,
            mon,
            tue,
            wed,
            thu,
            fri,
            sat,
            sun,
            hourFrom,
            hourTo,
            created,
            maxImpressions,
            impressions,
            maxUserImpressions,
            maxClicks,
            clicks,
            zone,
            onlyInURIs,
            exceptInURIs
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getClient(),
            $objRecord->getUrl(),
            $objRecord->getTitle(),
            $objRecord->getAlt(),
            $objRecord->getWhich(),
            $objRecord->getImagedata(),
            $objRecord->getImagetype(),
            $objRecord->getImagename(),
            $objRecord->getHtmldata(),
            $objRecord->getFixedurldata(),
            $objRecord->getTextdata(),
            $objRecord->getFromdate(),
            $objRecord->getTodate(),
            $objRecord->getUsedates(),
            $objRecord->getMon(),
            $objRecord->getTue(),
            $objRecord->getWed(),
            $objRecord->getThu(),
            $objRecord->getFri(),
            $objRecord->getSat(),
            $objRecord->getSun(),
            $objRecord->getHourfrom(),
            $objRecord->getHourto(),
            $objRecord->getCreated(),
            $objRecord->getMaximpressions(),
            $objRecord->getImpressions(),
            $objRecord->getMaxuserimpressions(),
            $objRecord->getMaxclicks(),
            $objRecord->getClicks(),
            $objRecord->getZone(),
            $objRecord->getOnlyinuris(),
            $objRecord->getExceptinuris()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBannerid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_banners` SET 
            bannerId=?,
            client=?,
            url=?,
            title=?,
            alt=?,
            which=?,
            imageData=?,
            imageType=?,
            imageName=?,
            HTMLData=?,
            fixedURLData=?,
            textData=?,
            fromDate=?,
            toDate=?,
            useDates=?,
            mon=?,
            tue=?,
            wed=?,
            thu=?,
            fri=?,
            sat=?,
            sun=?,
            hourFrom=?,
            hourTo=?,
            created=?,
            maxImpressions=?,
            impressions=?,
            maxUserImpressions=?,
            maxClicks=?,
            clicks=?,
            zone=?,
            onlyInURIs=?,
            exceptInURIs=?
        WHERE bannerId=?';
        $arrSetParams = array(
            $objRecord->getBannerid(),
            $objRecord->getClient(),
            $objRecord->getUrl(),
            $objRecord->getTitle(),
            $objRecord->getAlt(),
            $objRecord->getWhich(),
            $objRecord->getImagedata(),
            $objRecord->getImagetype(),
            $objRecord->getImagename(),
            $objRecord->getHtmldata(),
            $objRecord->getFixedurldata(),
            $objRecord->getTextdata(),
            $objRecord->getFromdate(),
            $objRecord->getTodate(),
            $objRecord->getUsedates(),
            $objRecord->getMon(),
            $objRecord->getTue(),
            $objRecord->getWed(),
            $objRecord->getThu(),
            $objRecord->getFri(),
            $objRecord->getSat(),
            $objRecord->getSun(),
            $objRecord->getHourfrom(),
            $objRecord->getHourto(),
            $objRecord->getCreated(),
            $objRecord->getMaximpressions(),
            $objRecord->getImpressions(),
            $objRecord->getMaxuserimpressions(),
            $objRecord->getMaxclicks(),
            $objRecord->getClicks(),
            $objRecord->getZone(),
            $objRecord->getOnlyinuris(),
            $objRecord->getExceptinuris()
        );
        $arrKeyParams = array($objRecord->getOrigBannerid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_banners` WHERE bannerId=?';
        $params = array($objRecord->getBannerid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
