<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSheetsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSheets($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSheets($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($sheetId)
    {
        $strSql = 'SELECT * FROM `tiki_sheets` WHERE sheetId=?';
        $params = array($sheetId);
        return Model_Data_TikiSheetsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_sheets` (
            sheetId,
            title,
            description,
            author,
            parentSheetId,
            clonedSheetId
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getAuthor(),
            $objRecord->getParentsheetid(),
            $objRecord->getClonedsheetid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSheetid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_sheets` (
            sheetId,
            title,
            description,
            author,
            parentSheetId,
            clonedSheetId
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getAuthor(),
            $objRecord->getParentsheetid(),
            $objRecord->getClonedsheetid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSheetid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_sheets` SET 
            sheetId=?,
            title=?,
            description=?,
            author=?,
            parentSheetId=?,
            clonedSheetId=?
        WHERE sheetId=?';
        $arrSetParams = array(
            $objRecord->getSheetid(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getAuthor(),
            $objRecord->getParentsheetid(),
            $objRecord->getClonedsheetid()
        );
        $arrKeyParams = array($objRecord->getOrigSheetid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_sheets` WHERE sheetId=?';
        $params = array($objRecord->getSheetid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
