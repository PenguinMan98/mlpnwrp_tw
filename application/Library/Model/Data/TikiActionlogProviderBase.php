<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiActionlogProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiActionlog($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiActionlog($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($actionId)
    {
        $strSql = 'SELECT * FROM `tiki_actionlog` WHERE actionId=?';
        $params = array($actionId);
        return Model_Data_TikiActionlogProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_actionlog` (
            actionId,
            action,
            lastModif,
            object,
            objectType,
            user,
            ip,
            comment,
            categId,
            client
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getAction(),
            $objRecord->getLastmodif(),
            $objRecord->getObject(),
            $objRecord->getObjecttype(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getComment(),
            $objRecord->getCategid(),
            $objRecord->getClient()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setActionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_actionlog` (
            actionId,
            action,
            lastModif,
            object,
            objectType,
            user,
            ip,
            comment,
            categId,
            client
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getAction(),
            $objRecord->getLastmodif(),
            $objRecord->getObject(),
            $objRecord->getObjecttype(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getComment(),
            $objRecord->getCategid(),
            $objRecord->getClient()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setActionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_actionlog` SET 
            actionId=?,
            action=?,
            lastModif=?,
            object=?,
            objectType=?,
            user=?,
            ip=?,
            comment=?,
            categId=?,
            client=?
        WHERE actionId=?';
        $arrSetParams = array(
            $objRecord->getActionid(),
            $objRecord->getAction(),
            $objRecord->getLastmodif(),
            $objRecord->getObject(),
            $objRecord->getObjecttype(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getComment(),
            $objRecord->getCategid(),
            $objRecord->getClient()
        );
        $arrKeyParams = array($objRecord->getOrigActionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_actionlog` WHERE actionId=?';
        $params = array($objRecord->getActionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
