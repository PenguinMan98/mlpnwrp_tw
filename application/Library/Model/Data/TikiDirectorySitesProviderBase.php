<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiDirectorySitesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiDirectorySites($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiDirectorySites($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($siteId)
    {
        $strSql = 'SELECT * FROM `tiki_directory_sites` WHERE siteId=?';
        $params = array($siteId);
        return Model_Data_TikiDirectorySitesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_directory_sites` (
            siteId,
            name,
            description,
            url,
            country,
            hits,
            isValid,
            created,
            lastModif,
            cache,
            cache_timestamp
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getUrl(),
            $objRecord->getCountry(),
            $objRecord->getHits(),
            $objRecord->getIsvalid(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getCache(),
            $objRecord->getCacheTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSiteid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_directory_sites` (
            siteId,
            name,
            description,
            url,
            country,
            hits,
            isValid,
            created,
            lastModif,
            cache,
            cache_timestamp
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getUrl(),
            $objRecord->getCountry(),
            $objRecord->getHits(),
            $objRecord->getIsvalid(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getCache(),
            $objRecord->getCacheTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSiteid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_directory_sites` SET 
            siteId=?,
            name=?,
            description=?,
            url=?,
            country=?,
            hits=?,
            isValid=?,
            created=?,
            lastModif=?,
            cache=?,
            cache_timestamp=?
        WHERE siteId=?';
        $arrSetParams = array(
            $objRecord->getSiteid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getUrl(),
            $objRecord->getCountry(),
            $objRecord->getHits(),
            $objRecord->getIsvalid(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getCache(),
            $objRecord->getCacheTimestamp()
        );
        $arrKeyParams = array($objRecord->getOrigSiteid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_directory_sites` WHERE siteId=?';
        $params = array($objRecord->getSiteid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
