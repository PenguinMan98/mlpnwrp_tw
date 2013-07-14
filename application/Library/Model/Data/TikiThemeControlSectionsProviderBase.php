<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiThemeControlSectionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiThemeControlSections($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiThemeControlSections($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($section)
    {
        $strSql = 'SELECT * FROM `tiki_theme_control_sections` WHERE section=?';
        $params = array($section);
        return Model_Data_TikiThemeControlSectionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_theme_control_sections` (
            section,
            theme
        ) VALUES  (?, ?)';
        $params = array($objRecord->getSection(),
            $objRecord->getTheme()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_theme_control_sections` (
            section,
            theme
        ) VALUES  (?, ?)';
        $params = array($objRecord->getSection(),
            $objRecord->getTheme()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_theme_control_sections` SET 
            section=?,
            theme=?
        WHERE section=?';
        $arrSetParams = array(
            $objRecord->getSection(),
            $objRecord->getTheme()
        );
        $arrKeyParams = array($objRecord->getOrigSection());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_theme_control_sections` WHERE section=?';
        $params = array($objRecord->getSection());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
