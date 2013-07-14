<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiRefererStatsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiRefererStats($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiRefererStats($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($referer)
    {
        $strSql = 'SELECT * FROM `tiki_referer_stats` WHERE referer=?';
        $params = array($referer);
        return Model_Data_TikiRefererStatsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_referer_stats` (
            referer,
            hits,
            last,
            lasturl
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getReferer(),
            $objRecord->getHits(),
            $objRecord->getLast(),
            $objRecord->getLasturl()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_referer_stats` (
            referer,
            hits,
            last,
            lasturl
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getReferer(),
            $objRecord->getHits(),
            $objRecord->getLast(),
            $objRecord->getLasturl()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_referer_stats` SET 
            referer=?,
            hits=?,
            last=?,
            lasturl=?
        WHERE referer=?';
        $arrSetParams = array(
            $objRecord->getReferer(),
            $objRecord->getHits(),
            $objRecord->getLast(),
            $objRecord->getLasturl()
        );
        $arrKeyParams = array($objRecord->getOrigReferer());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_referer_stats` WHERE referer=?';
        $params = array($objRecord->getReferer());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
