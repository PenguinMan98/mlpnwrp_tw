<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiHistoryProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiHistory($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiHistory($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($pageName, $version)
    {
        $strSql = 'SELECT * FROM `tiki_history` WHERE pageName=? AND version=?';
        $params = array($pageName, $version);
        return Model_Data_TikiHistoryProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_history` (
            historyId,
            pageName,
            version,
            version_minor,
            lastModif,
            description,
            user,
            ip,
            comment,
            data,
            type,
            is_html
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPagename(),
            $objRecord->getVersion(),
            $objRecord->getVersionMinor(),
            $objRecord->getLastmodif(),
            $objRecord->getDescription(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getComment(),
            $objRecord->getData(),
            $objRecord->getType(),
            $objRecord->getIsHtml()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setHistoryid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_history` (
            historyId,
            pageName,
            version,
            version_minor,
            lastModif,
            description,
            user,
            ip,
            comment,
            data,
            type,
            is_html
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPagename(),
            $objRecord->getVersion(),
            $objRecord->getVersionMinor(),
            $objRecord->getLastmodif(),
            $objRecord->getDescription(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getComment(),
            $objRecord->getData(),
            $objRecord->getType(),
            $objRecord->getIsHtml()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setHistoryid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_history` SET 
            historyId=?,
            pageName=?,
            version=?,
            version_minor=?,
            lastModif=?,
            description=?,
            user=?,
            ip=?,
            comment=?,
            data=?,
            type=?,
            is_html=?
        WHERE pageName=? AND version=?';
        $arrSetParams = array(
            $objRecord->getHistoryid(),
            $objRecord->getPagename(),
            $objRecord->getVersion(),
            $objRecord->getVersionMinor(),
            $objRecord->getLastmodif(),
            $objRecord->getDescription(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getComment(),
            $objRecord->getData(),
            $objRecord->getType(),
            $objRecord->getIsHtml()
        );
        $arrKeyParams = array($objRecord->getOrigPagename(), $objRecord->getOrigVersion());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_history` WHERE pageName=? AND version=?';
        $params = array($objRecord->getPagename(), $objRecord->getVersion());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
