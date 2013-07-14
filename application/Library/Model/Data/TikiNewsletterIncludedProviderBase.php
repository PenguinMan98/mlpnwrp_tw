<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiNewsletterIncludedProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiNewsletterIncluded($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiNewsletterIncluded($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($nlId, $includedId)
    {
        $strSql = 'SELECT * FROM `tiki_newsletter_included` WHERE nlId=? AND includedId=?';
        $params = array($nlId, $includedId);
        return Model_Data_TikiNewsletterIncludedProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_newsletter_included` (
            nlId,
            includedId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getNlid(),
            $objRecord->getIncludedid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_newsletter_included` (
            nlId,
            includedId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getNlid(),
            $objRecord->getIncludedid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_newsletter_included` SET 
            nlId=?,
            includedId=?
        WHERE nlId=? AND includedId=?';
        $arrSetParams = array(
            $objRecord->getNlid(),
            $objRecord->getIncludedid()
        );
        $arrKeyParams = array($objRecord->getOrigNlid(), $objRecord->getOrigIncludedid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_newsletter_included` WHERE nlId=? AND includedId=?';
        $params = array($objRecord->getNlid(), $objRecord->getIncludedid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
