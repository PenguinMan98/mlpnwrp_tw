<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFileHandlersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFileHandlers($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFileHandlers($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($mime_type, $cmd)
    {
        $strSql = 'SELECT * FROM `tiki_file_handlers` WHERE mime_type=? AND cmd=?';
        $params = array($mime_type, $cmd);
        return Model_Data_TikiFileHandlersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_file_handlers` (
            mime_type,
            cmd
        ) VALUES  (?, ?)';
        $params = array($objRecord->getMimeType(),
            $objRecord->getCmd()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_file_handlers` (
            mime_type,
            cmd
        ) VALUES  (?, ?)';
        $params = array($objRecord->getMimeType(),
            $objRecord->getCmd()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_file_handlers` SET 
            mime_type=?,
            cmd=?
        WHERE mime_type=? AND cmd=?';
        $arrSetParams = array(
            $objRecord->getMimeType(),
            $objRecord->getCmd()
        );
        $arrKeyParams = array($objRecord->getOrigMimeType(), $objRecord->getOrigCmd());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_file_handlers` WHERE mime_type=? AND cmd=?';
        $params = array($objRecord->getMimeType(), $objRecord->getCmd());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
