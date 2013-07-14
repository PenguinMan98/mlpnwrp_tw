<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPluginSecurityProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPluginSecurity($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPluginSecurity($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($fingerprint)
    {
        $strSql = 'SELECT * FROM `tiki_plugin_security` WHERE fingerprint=?';
        $params = array($fingerprint);
        return Model_Data_TikiPluginSecurityProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_plugin_security` (
            fingerprint,
            status,
            added_by,
            approval_by,
            last_update,
            last_objectType,
            last_objectId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getFingerprint(),
            $objRecord->getStatus(),
            $objRecord->getAddedBy(),
            $objRecord->getApprovalBy(),
            $objRecord->getLastUpdate(),
            $objRecord->getLastObjecttype(),
            $objRecord->getLastObjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_plugin_security` (
            fingerprint,
            status,
            added_by,
            approval_by,
            last_update,
            last_objectType,
            last_objectId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getFingerprint(),
            $objRecord->getStatus(),
            $objRecord->getAddedBy(),
            $objRecord->getApprovalBy(),
            $objRecord->getLastUpdate(),
            $objRecord->getLastObjecttype(),
            $objRecord->getLastObjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_plugin_security` SET 
            fingerprint=?,
            status=?,
            added_by=?,
            approval_by=?,
            last_update=?,
            last_objectType=?,
            last_objectId=?
        WHERE fingerprint=?';
        $arrSetParams = array(
            $objRecord->getFingerprint(),
            $objRecord->getStatus(),
            $objRecord->getAddedBy(),
            $objRecord->getApprovalBy(),
            $objRecord->getLastUpdate(),
            $objRecord->getLastObjecttype(),
            $objRecord->getLastObjectid()
        );
        $arrKeyParams = array($objRecord->getOrigFingerprint());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_plugin_security` WHERE fingerprint=?';
        $params = array($objRecord->getFingerprint());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
