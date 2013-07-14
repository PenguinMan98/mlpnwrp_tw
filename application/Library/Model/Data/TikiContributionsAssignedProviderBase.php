<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiContributionsAssignedProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiContributionsAssigned($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiContributionsAssigned($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($contributionId, $objectId)
    {
        $strSql = 'SELECT * FROM `tiki_contributions_assigned` WHERE contributionId=? AND objectId=?';
        $params = array($contributionId, $objectId);
        return Model_Data_TikiContributionsAssignedProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_contributions_assigned` (
            contributionId,
            objectId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getContributionid(),
            $objRecord->getObjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_contributions_assigned` (
            contributionId,
            objectId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getContributionid(),
            $objRecord->getObjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_contributions_assigned` SET 
            contributionId=?,
            objectId=?
        WHERE contributionId=? AND objectId=?';
        $arrSetParams = array(
            $objRecord->getContributionid(),
            $objRecord->getObjectid()
        );
        $arrKeyParams = array($objRecord->getOrigContributionid(), $objRecord->getOrigObjectid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_contributions_assigned` WHERE contributionId=? AND objectId=?';
        $params = array($objRecord->getContributionid(), $objRecord->getObjectid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
