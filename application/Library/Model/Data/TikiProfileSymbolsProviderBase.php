<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiProfileSymbolsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiProfileSymbols($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiProfileSymbols($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($domain, $profile, $object)
    {
        $strSql = 'SELECT * FROM `tiki_profile_symbols` WHERE domain=? AND profile=? AND object=?';
        $params = array($domain, $profile, $object);
        return Model_Data_TikiProfileSymbolsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_profile_symbols` (
            domain,
            profile,
            object,
            type,
            value,
            named,
            creation_date
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getDomain(),
            $objRecord->getProfile(),
            $objRecord->getObject(),
            $objRecord->getType(),
            $objRecord->getValue(),
            $objRecord->getNamed(),
            $objRecord->getCreationDate()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_profile_symbols` (
            domain,
            profile,
            object,
            type,
            value,
            named,
            creation_date
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getDomain(),
            $objRecord->getProfile(),
            $objRecord->getObject(),
            $objRecord->getType(),
            $objRecord->getValue(),
            $objRecord->getNamed(),
            $objRecord->getCreationDate()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_profile_symbols` SET 
            domain=?,
            profile=?,
            object=?,
            type=?,
            value=?,
            named=?,
            creation_date=?
        WHERE domain=? AND profile=? AND object=?';
        $arrSetParams = array(
            $objRecord->getDomain(),
            $objRecord->getProfile(),
            $objRecord->getObject(),
            $objRecord->getType(),
            $objRecord->getValue(),
            $objRecord->getNamed(),
            $objRecord->getCreationDate()
        );
        $arrKeyParams = array($objRecord->getOrigDomain(), $objRecord->getOrigProfile(), $objRecord->getOrigObject());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_profile_symbols` WHERE domain=? AND profile=? AND object=?';
        $params = array($objRecord->getDomain(), $objRecord->getProfile(), $objRecord->getObject());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
