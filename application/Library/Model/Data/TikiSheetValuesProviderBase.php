<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSheetValuesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSheetValues($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSheetValues($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($sheetId, $begin, $rowIndex, $columnIndex)
    {
        $strSql = 'SELECT * FROM `tiki_sheet_values` WHERE sheetId=? AND begin=? AND rowIndex=? AND columnIndex=?';
        $params = array($sheetId, $begin, $rowIndex, $columnIndex);
        return Model_Data_TikiSheetValuesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_sheet_values` (
            sheetId,
            begin,
            end,
            rowIndex,
            columnIndex,
            value,
            calculation,
            width,
            height,
            format,
            user,
            style,
            class,
            clonedSheetId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getSheetid(),
            $objRecord->getBegin(),
            $objRecord->getEnd(),
            $objRecord->getRowindex(),
            $objRecord->getColumnindex(),
            $objRecord->getValue(),
            $objRecord->getCalculation(),
            $objRecord->getWidth(),
            $objRecord->getHeight(),
            $objRecord->getFormat(),
            $objRecord->getUser(),
            $objRecord->getStyle(),
            $objRecord->getClass(),
            $objRecord->getClonedsheetid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_sheet_values` (
            sheetId,
            begin,
            end,
            rowIndex,
            columnIndex,
            value,
            calculation,
            width,
            height,
            format,
            user,
            style,
            class,
            clonedSheetId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getSheetid(),
            $objRecord->getBegin(),
            $objRecord->getEnd(),
            $objRecord->getRowindex(),
            $objRecord->getColumnindex(),
            $objRecord->getValue(),
            $objRecord->getCalculation(),
            $objRecord->getWidth(),
            $objRecord->getHeight(),
            $objRecord->getFormat(),
            $objRecord->getUser(),
            $objRecord->getStyle(),
            $objRecord->getClass(),
            $objRecord->getClonedsheetid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_sheet_values` SET 
            sheetId=?,
            begin=?,
            end=?,
            rowIndex=?,
            columnIndex=?,
            value=?,
            calculation=?,
            width=?,
            height=?,
            format=?,
            user=?,
            style=?,
            class=?,
            clonedSheetId=?
        WHERE sheetId=? AND begin=? AND rowIndex=? AND columnIndex=?';
        $arrSetParams = array(
            $objRecord->getSheetid(),
            $objRecord->getBegin(),
            $objRecord->getEnd(),
            $objRecord->getRowindex(),
            $objRecord->getColumnindex(),
            $objRecord->getValue(),
            $objRecord->getCalculation(),
            $objRecord->getWidth(),
            $objRecord->getHeight(),
            $objRecord->getFormat(),
            $objRecord->getUser(),
            $objRecord->getStyle(),
            $objRecord->getClass(),
            $objRecord->getClonedsheetid()
        );
        $arrKeyParams = array($objRecord->getOrigSheetid(), $objRecord->getOrigBegin(), $objRecord->getOrigRowindex(), $objRecord->getOrigColumnindex());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_sheet_values` WHERE sheetId=? AND begin=? AND rowIndex=? AND columnIndex=?';
        $params = array($objRecord->getSheetid(), $objRecord->getBegin(), $objRecord->getRowindex(), $objRecord->getColumnindex());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
