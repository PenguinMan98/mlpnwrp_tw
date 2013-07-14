<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiWebserviceTemplateProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiWebserviceTemplate($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiWebserviceTemplate($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($service, $template)
    {
        $strSql = 'SELECT * FROM `tiki_webservice_template` WHERE service=? AND template=?';
        $params = array($service, $template);
        return Model_Data_TikiWebserviceTemplateProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_webservice_template` (
            service,
            template,
            engine,
            output,
            content,
            last_modif
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getService(),
            $objRecord->getTemplate(),
            $objRecord->getEngine(),
            $objRecord->getOutput(),
            $objRecord->getContent(),
            $objRecord->getLastModif()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_webservice_template` (
            service,
            template,
            engine,
            output,
            content,
            last_modif
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getService(),
            $objRecord->getTemplate(),
            $objRecord->getEngine(),
            $objRecord->getOutput(),
            $objRecord->getContent(),
            $objRecord->getLastModif()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_webservice_template` SET 
            service=?,
            template=?,
            engine=?,
            output=?,
            content=?,
            last_modif=?
        WHERE service=? AND template=?';
        $arrSetParams = array(
            $objRecord->getService(),
            $objRecord->getTemplate(),
            $objRecord->getEngine(),
            $objRecord->getOutput(),
            $objRecord->getContent(),
            $objRecord->getLastModif()
        );
        $arrKeyParams = array($objRecord->getOrigService(), $objRecord->getOrigTemplate());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_webservice_template` WHERE service=? AND template=?';
        $params = array($objRecord->getService(), $objRecord->getTemplate());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
