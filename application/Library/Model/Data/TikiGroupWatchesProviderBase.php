<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiGroupWatchesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiGroupWatches($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiGroupWatches($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($watchId)
    {
        $strSql = 'SELECT * FROM `tiki_group_watches` WHERE watchId=?';
        $params = array($watchId);
        return Model_Data_TikiGroupWatchesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_group_watches` (
            watchId,
            group,
            event,
            object,
            title,
            type,
            url
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGroup(),
            $objRecord->getEvent(),
            $objRecord->getObject(),
            $objRecord->getTitle(),
            $objRecord->getType(),
            $objRecord->getUrl()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setWatchid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_group_watches` (
            watchId,
            group,
            event,
            object,
            title,
            type,
            url
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGroup(),
            $objRecord->getEvent(),
            $objRecord->getObject(),
            $objRecord->getTitle(),
            $objRecord->getType(),
            $objRecord->getUrl()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setWatchid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_group_watches` SET 
            watchId=?,
            group=?,
            event=?,
            object=?,
            title=?,
            type=?,
            url=?
        WHERE watchId=?';
        $arrSetParams = array(
            $objRecord->getWatchid(),
            $objRecord->getGroup(),
            $objRecord->getEvent(),
            $objRecord->getObject(),
            $objRecord->getTitle(),
            $objRecord->getType(),
            $objRecord->getUrl()
        );
        $arrKeyParams = array($objRecord->getOrigWatchid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_group_watches` WHERE watchId=?';
        $params = array($objRecord->getWatchid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
