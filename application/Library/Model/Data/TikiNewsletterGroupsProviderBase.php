<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiNewsletterGroupsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiNewsletterGroups($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiNewsletterGroups($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($nlId, $groupName)
    {
        $strSql = 'SELECT * FROM `tiki_newsletter_groups` WHERE nlId=? AND groupName=?';
        $params = array($nlId, $groupName);
        return Model_Data_TikiNewsletterGroupsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_newsletter_groups` (
            nlId,
            groupName,
            code,
            include_groups
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getNlid(),
            $objRecord->getGroupname(),
            $objRecord->getCode(),
            $objRecord->getIncludeGroups()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_newsletter_groups` (
            nlId,
            groupName,
            code,
            include_groups
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getNlid(),
            $objRecord->getGroupname(),
            $objRecord->getCode(),
            $objRecord->getIncludeGroups()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_newsletter_groups` SET 
            nlId=?,
            groupName=?,
            code=?,
            include_groups=?
        WHERE nlId=? AND groupName=?';
        $arrSetParams = array(
            $objRecord->getNlid(),
            $objRecord->getGroupname(),
            $objRecord->getCode(),
            $objRecord->getIncludeGroups()
        );
        $arrKeyParams = array($objRecord->getOrigNlid(), $objRecord->getOrigGroupname());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_newsletter_groups` WHERE nlId=? AND groupName=?';
        $params = array($objRecord->getNlid(), $objRecord->getGroupname());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
