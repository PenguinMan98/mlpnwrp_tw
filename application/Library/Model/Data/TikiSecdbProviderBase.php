<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSecdbProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSecdb($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSecdb($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($md5_value, $filename, $tiki_version)
    {
        $strSql = 'SELECT * FROM `tiki_secdb` WHERE md5_value=? AND filename=? AND tiki_version=?';
        $params = array($md5_value, $filename, $tiki_version);
        return Model_Data_TikiSecdbProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_secdb` (
            md5_value,
            filename,
            tiki_version,
            severity
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getMd5Value(),
            $objRecord->getFilename(),
            $objRecord->getTikiVersion(),
            $objRecord->getSeverity()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_secdb` (
            md5_value,
            filename,
            tiki_version,
            severity
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getMd5Value(),
            $objRecord->getFilename(),
            $objRecord->getTikiVersion(),
            $objRecord->getSeverity()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_secdb` SET 
            md5_value=?,
            filename=?,
            tiki_version=?,
            severity=?
        WHERE md5_value=? AND filename=? AND tiki_version=?';
        $arrSetParams = array(
            $objRecord->getMd5Value(),
            $objRecord->getFilename(),
            $objRecord->getTikiVersion(),
            $objRecord->getSeverity()
        );
        $arrKeyParams = array($objRecord->getOrigMd5Value(), $objRecord->getOrigFilename(), $objRecord->getOrigTikiVersion());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_secdb` WHERE md5_value=? AND filename=? AND tiki_version=?';
        $params = array($objRecord->getMd5Value(), $objRecord->getFilename(), $objRecord->getTikiVersion());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
