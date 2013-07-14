<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFreetagsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFreetags($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFreetags($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($tagId)
    {
        $strSql = 'SELECT * FROM `tiki_freetags` WHERE tagId=?';
        $params = array($tagId);
        return Model_Data_TikiFreetagsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_freetags` (
            tagId,
            tag,
            raw_tag,
            lang
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTag(),
            $objRecord->getRawTag(),
            $objRecord->getLang()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTagid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_freetags` (
            tagId,
            tag,
            raw_tag,
            lang
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTag(),
            $objRecord->getRawTag(),
            $objRecord->getLang()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTagid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_freetags` SET 
            tagId=?,
            tag=?,
            raw_tag=?,
            lang=?
        WHERE tagId=?';
        $arrSetParams = array(
            $objRecord->getTagid(),
            $objRecord->getTag(),
            $objRecord->getRawTag(),
            $objRecord->getLang()
        );
        $arrKeyParams = array($objRecord->getOrigTagid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_freetags` WHERE tagId=?';
        $params = array($objRecord->getTagid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
