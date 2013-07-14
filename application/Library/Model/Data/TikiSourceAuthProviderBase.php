<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSourceAuthProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSourceAuth($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSourceAuth($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($identifier)
    {
        $strSql = 'SELECT * FROM `tiki_source_auth` WHERE identifier=?';
        $params = array($identifier);
        return Model_Data_TikiSourceAuthProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_source_auth` (
            identifier,
            scheme,
            domain,
            path,
            method,
            arguments
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getIdentifier(),
            $objRecord->getScheme(),
            $objRecord->getDomain(),
            $objRecord->getPath(),
            $objRecord->getMethod(),
            $objRecord->getArguments()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_source_auth` (
            identifier,
            scheme,
            domain,
            path,
            method,
            arguments
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getIdentifier(),
            $objRecord->getScheme(),
            $objRecord->getDomain(),
            $objRecord->getPath(),
            $objRecord->getMethod(),
            $objRecord->getArguments()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_source_auth` SET 
            identifier=?,
            scheme=?,
            domain=?,
            path=?,
            method=?,
            arguments=?
        WHERE identifier=?';
        $arrSetParams = array(
            $objRecord->getIdentifier(),
            $objRecord->getScheme(),
            $objRecord->getDomain(),
            $objRecord->getPath(),
            $objRecord->getMethod(),
            $objRecord->getArguments()
        );
        $arrKeyParams = array($objRecord->getOrigIdentifier());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_source_auth` WHERE identifier=?';
        $params = array($objRecord->getIdentifier());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
