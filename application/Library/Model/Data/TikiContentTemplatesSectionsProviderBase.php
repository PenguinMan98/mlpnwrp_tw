<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiContentTemplatesSectionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiContentTemplatesSections($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiContentTemplatesSections($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($templateId, $section)
    {
        $strSql = 'SELECT * FROM `tiki_content_templates_sections` WHERE templateId=? AND section=?';
        $params = array($templateId, $section);
        return Model_Data_TikiContentTemplatesSectionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_content_templates_sections` (
            templateId,
            section
        ) VALUES  (?, ?)';
        $params = array($objRecord->getTemplateid(),
            $objRecord->getSection()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_content_templates_sections` (
            templateId,
            section
        ) VALUES  (?, ?)';
        $params = array($objRecord->getTemplateid(),
            $objRecord->getSection()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_content_templates_sections` SET 
            templateId=?,
            section=?
        WHERE templateId=? AND section=?';
        $arrSetParams = array(
            $objRecord->getTemplateid(),
            $objRecord->getSection()
        );
        $arrKeyParams = array($objRecord->getOrigTemplateid(), $objRecord->getOrigSection());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_content_templates_sections` WHERE templateId=? AND section=?';
        $params = array($objRecord->getTemplateid(), $objRecord->getSection());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
