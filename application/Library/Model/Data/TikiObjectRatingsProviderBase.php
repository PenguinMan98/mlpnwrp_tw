<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiObjectRatingsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiObjectRatings($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiObjectRatings($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($catObjectId, $pollId)
    {
        $strSql = 'SELECT * FROM `tiki_object_ratings` WHERE catObjectId=? AND pollId=?';
        $params = array($catObjectId, $pollId);
        return Model_Data_TikiObjectRatingsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_object_ratings` (
            catObjectId,
            pollId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCatobjectid(),
            $objRecord->getPollid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_object_ratings` (
            catObjectId,
            pollId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCatobjectid(),
            $objRecord->getPollid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_object_ratings` SET 
            catObjectId=?,
            pollId=?
        WHERE catObjectId=? AND pollId=?';
        $arrSetParams = array(
            $objRecord->getCatobjectid(),
            $objRecord->getPollid()
        );
        $arrKeyParams = array($objRecord->getOrigCatobjectid(), $objRecord->getOrigPollid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_object_ratings` WHERE catObjectId=? AND pollId=?';
        $params = array($objRecord->getCatobjectid(), $objRecord->getPollid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
