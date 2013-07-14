<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSheetLayoutProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSheetLayout($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSheetLayout($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($sheetId, $begin)
    {
        $strSql = 'SELECT * FROM `tiki_sheet_layout` WHERE sheetId=? AND begin=?';
        $params = array($sheetId, $begin);
        return Model_Data_TikiSheetLayoutProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_sheet_layout` (
            sheetId,
            begin,
            end,
            headerRow,
            footerRow,
            className,
            parseValues,
            clonedSheetId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getSheetid(),
            $objRecord->getBegin(),
            $objRecord->getEnd(),
            $objRecord->getHeaderrow(),
            $objRecord->getFooterrow(),
            $objRecord->getClassname(),
            $objRecord->getParsevalues(),
            $objRecord->getClonedsheetid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_sheet_layout` (
            sheetId,
            begin,
            end,
            headerRow,
            footerRow,
            className,
            parseValues,
            clonedSheetId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getSheetid(),
            $objRecord->getBegin(),
            $objRecord->getEnd(),
            $objRecord->getHeaderrow(),
            $objRecord->getFooterrow(),
            $objRecord->getClassname(),
            $objRecord->getParsevalues(),
            $objRecord->getClonedsheetid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_sheet_layout` SET 
            sheetId=?,
            begin=?,
            end=?,
            headerRow=?,
            footerRow=?,
            className=?,
            parseValues=?,
            clonedSheetId=?
        WHERE sheetId=? AND begin=?';
        $arrSetParams = array(
            $objRecord->getSheetid(),
            $objRecord->getBegin(),
            $objRecord->getEnd(),
            $objRecord->getHeaderrow(),
            $objRecord->getFooterrow(),
            $objRecord->getClassname(),
            $objRecord->getParsevalues(),
            $objRecord->getClonedsheetid()
        );
        $arrKeyParams = array($objRecord->getOrigSheetid(), $objRecord->getOrigBegin());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_sheet_layout` WHERE sheetId=? AND begin=?';
        $params = array($objRecord->getSheetid(), $objRecord->getBegin());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
