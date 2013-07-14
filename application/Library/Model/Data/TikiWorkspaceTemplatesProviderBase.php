<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiWorkspaceTemplatesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiWorkspaceTemplates($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiWorkspaceTemplates($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($templateId)
    {
        $strSql = 'SELECT * FROM `tiki_workspace_templates` WHERE templateId=?';
        $params = array($templateId);
        return Model_Data_TikiWorkspaceTemplatesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_workspace_templates` (
            templateId,
            name,
            definition,
            is_advanced
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDefinition(),
            $objRecord->getIsAdvanced()
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
        $strSql = ' REPLACE INTO `tiki_workspace_templates` (
            templateId,
            name,
            definition,
            is_advanced
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDefinition(),
            $objRecord->getIsAdvanced()
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
        $strSql = 'UPDATE `tiki_workspace_templates` SET 
            templateId=?,
            name=?,
            definition=?,
            is_advanced=?
        WHERE templateId=?';
        $arrSetParams = array(
            $objRecord->getTemplateid(),
            $objRecord->getName(),
            $objRecord->getDefinition(),
            $objRecord->getIsAdvanced()
        );
        $arrKeyParams = array($objRecord->getOrigTemplateid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_workspace_templates` WHERE templateId=?';
        $params = array($objRecord->getTemplateid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
