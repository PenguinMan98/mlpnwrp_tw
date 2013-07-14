<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTrackersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTrackers($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTrackers($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($trackerId)
    {
        $strSql = 'SELECT * FROM `tiki_trackers` WHERE trackerId=?';
        $params = array($trackerId);
        return Model_Data_TikiTrackersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_trackers` (
            trackerId,
            name,
            description,
            descriptionIsParsed,
            created,
            lastModif,
            items
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getDescriptionisparsed(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getItems()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTrackerid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_trackers` (
            trackerId,
            name,
            description,
            descriptionIsParsed,
            created,
            lastModif,
            items
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getDescriptionisparsed(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getItems()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTrackerid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_trackers` SET 
            trackerId=?,
            name=?,
            description=?,
            descriptionIsParsed=?,
            created=?,
            lastModif=?,
            items=?
        WHERE trackerId=?';
        $arrSetParams = array(
            $objRecord->getTrackerid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getDescriptionisparsed(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getItems()
        );
        $arrKeyParams = array($objRecord->getOrigTrackerid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_trackers` WHERE trackerId=?';
        $params = array($objRecord->getTrackerid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
