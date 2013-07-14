<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiContentTemplatesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiContentTemplates($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiContentTemplates($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($templateId)
    {
        $strSql = 'SELECT * FROM `tiki_content_templates` WHERE templateId=?';
        $params = array($templateId);
        return Model_Data_TikiContentTemplatesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_content_templates` (
            templateId,
            template_type,
            content,
            name,
            created
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTemplateType(),
            $objRecord->getContent(),
            $objRecord->getName(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTemplateid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_content_templates` (
            templateId,
            template_type,
            content,
            name,
            created
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTemplateType(),
            $objRecord->getContent(),
            $objRecord->getName(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTemplateid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_content_templates` SET 
            templateId=?,
            template_type=?,
            content=?,
            name=?,
            created=?
        WHERE templateId=?';
        $arrSetParams = array(
            $objRecord->getTemplateid(),
            $objRecord->getTemplateType(),
            $objRecord->getContent(),
            $objRecord->getName(),
            $objRecord->getCreated()
        );
        $arrKeyParams = array($objRecord->getOrigTemplateid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_content_templates` WHERE templateId=?';
        $params = array($objRecord->getTemplateid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
