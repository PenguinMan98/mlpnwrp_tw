<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiWebserviceProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiWebservice($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiWebservice($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($service)
    {
        $strSql = 'SELECT * FROM `tiki_webservice` WHERE service=?';
        $params = array($service);
        return Model_Data_TikiWebserviceProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_webservice` (
            service,
            url,
            wstype,
            operation,
            body,
            schema_version,
            schema_documentation
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getService(),
            $objRecord->getUrl(),
            $objRecord->getWstype(),
            $objRecord->getOperation(),
            $objRecord->getBody(),
            $objRecord->getSchemaVersion(),
            $objRecord->getSchemaDocumentation()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_webservice` (
            service,
            url,
            wstype,
            operation,
            body,
            schema_version,
            schema_documentation
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getService(),
            $objRecord->getUrl(),
            $objRecord->getWstype(),
            $objRecord->getOperation(),
            $objRecord->getBody(),
            $objRecord->getSchemaVersion(),
            $objRecord->getSchemaDocumentation()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_webservice` SET 
            service=?,
            url=?,
            wstype=?,
            operation=?,
            body=?,
            schema_version=?,
            schema_documentation=?
        WHERE service=?';
        $arrSetParams = array(
            $objRecord->getService(),
            $objRecord->getUrl(),
            $objRecord->getWstype(),
            $objRecord->getOperation(),
            $objRecord->getBody(),
            $objRecord->getSchemaVersion(),
            $objRecord->getSchemaDocumentation()
        );
        $arrKeyParams = array($objRecord->getOrigService());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_webservice` WHERE service=?';
        $params = array($objRecord->getService());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
