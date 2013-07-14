<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTrackerItemsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTrackerItems($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTrackerItems($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($itemId)
    {
        $strSql = 'SELECT * FROM `tiki_tracker_items` WHERE itemId=?';
        $params = array($itemId);
        return Model_Data_TikiTrackerItemsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_tracker_items` (
            itemId,
            trackerId,
            created,
            createdBy,
            status,
            lastModif,
            lastModifBy
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTrackerid(),
            $objRecord->getCreated(),
            $objRecord->getCreatedby(),
            $objRecord->getStatus(),
            $objRecord->getLastmodif(),
            $objRecord->getLastmodifby()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setItemid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_tracker_items` (
            itemId,
            trackerId,
            created,
            createdBy,
            status,
            lastModif,
            lastModifBy
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTrackerid(),
            $objRecord->getCreated(),
            $objRecord->getCreatedby(),
            $objRecord->getStatus(),
            $objRecord->getLastmodif(),
            $objRecord->getLastmodifby()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setItemid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_tracker_items` SET 
            itemId=?,
            trackerId=?,
            created=?,
            createdBy=?,
            status=?,
            lastModif=?,
            lastModifBy=?
        WHERE itemId=?';
        $arrSetParams = array(
            $objRecord->getItemid(),
            $objRecord->getTrackerid(),
            $objRecord->getCreated(),
            $objRecord->getCreatedby(),
            $objRecord->getStatus(),
            $objRecord->getLastmodif(),
            $objRecord->getLastmodifby()
        );
        $arrKeyParams = array($objRecord->getOrigItemid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_tracker_items` WHERE itemId=?';
        $params = array($objRecord->getItemid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
