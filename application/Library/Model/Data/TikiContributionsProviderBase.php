<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiContributionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiContributions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiContributions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($contributionId)
    {
        $strSql = 'SELECT * FROM `tiki_contributions` WHERE contributionId=?';
        $params = array($contributionId);
        return Model_Data_TikiContributionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_contributions` (
            contributionId,
            name,
            description
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setContributionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_contributions` (
            contributionId,
            name,
            description
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setContributionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_contributions` SET 
            contributionId=?,
            name=?,
            description=?
        WHERE contributionId=?';
        $arrSetParams = array(
            $objRecord->getContributionid(),
            $objRecord->getName(),
            $objRecord->getDescription()
        );
        $arrKeyParams = array($objRecord->getOrigContributionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_contributions` WHERE contributionId=?';
        $params = array($objRecord->getContributionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
