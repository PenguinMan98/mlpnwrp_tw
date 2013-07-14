<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiExtwikiProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiExtwiki($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiExtwiki($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($extwikiId)
    {
        $strSql = 'SELECT * FROM `tiki_extwiki` WHERE extwikiId=?';
        $params = array($extwikiId);
        return Model_Data_TikiExtwikiProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_extwiki` (
            extwikiId,
            name,
            extwiki
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getExtwiki()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setExtwikiid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_extwiki` (
            extwikiId,
            name,
            extwiki
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getExtwiki()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setExtwikiid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_extwiki` SET 
            extwikiId=?,
            name=?,
            extwiki=?
        WHERE extwikiId=?';
        $arrSetParams = array(
            $objRecord->getExtwikiid(),
            $objRecord->getName(),
            $objRecord->getExtwiki()
        );
        $arrKeyParams = array($objRecord->getOrigExtwikiid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_extwiki` WHERE extwikiId=?';
        $params = array($objRecord->getExtwikiid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
