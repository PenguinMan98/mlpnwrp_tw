<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiReceivedPagesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiReceivedPages($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiReceivedPages($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($receivedPageId)
    {
        $strSql = 'SELECT * FROM `tiki_received_pages` WHERE receivedPageId=?';
        $params = array($receivedPageId);
        return Model_Data_TikiReceivedPagesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_received_pages` (
            receivedPageId,
            pageName,
            data,
            description,
            comment,
            receivedFromSite,
            receivedFromUser,
            receivedDate,
            parent,
            position,
            alias,
            structureName,
            parentName,
            page_alias,
            pos
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPagename(),
            $objRecord->getData(),
            $objRecord->getDescription(),
            $objRecord->getComment(),
            $objRecord->getReceivedfromsite(),
            $objRecord->getReceivedfromuser(),
            $objRecord->getReceiveddate(),
            $objRecord->getParent(),
            $objRecord->getPosition(),
            $objRecord->getAlias(),
            $objRecord->getStructurename(),
            $objRecord->getParentname(),
            $objRecord->getPageAlias(),
            $objRecord->getPos()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setReceivedpageid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_received_pages` (
            receivedPageId,
            pageName,
            data,
            description,
            comment,
            receivedFromSite,
            receivedFromUser,
            receivedDate,
            parent,
            position,
            alias,
            structureName,
            parentName,
            page_alias,
            pos
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPagename(),
            $objRecord->getData(),
            $objRecord->getDescription(),
            $objRecord->getComment(),
            $objRecord->getReceivedfromsite(),
            $objRecord->getReceivedfromuser(),
            $objRecord->getReceiveddate(),
            $objRecord->getParent(),
            $objRecord->getPosition(),
            $objRecord->getAlias(),
            $objRecord->getStructurename(),
            $objRecord->getParentname(),
            $objRecord->getPageAlias(),
            $objRecord->getPos()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setReceivedpageid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_received_pages` SET 
            receivedPageId=?,
            pageName=?,
            data=?,
            description=?,
            comment=?,
            receivedFromSite=?,
            receivedFromUser=?,
            receivedDate=?,
            parent=?,
            position=?,
            alias=?,
            structureName=?,
            parentName=?,
            page_alias=?,
            pos=?
        WHERE receivedPageId=?';
        $arrSetParams = array(
            $objRecord->getReceivedpageid(),
            $objRecord->getPagename(),
            $objRecord->getData(),
            $objRecord->getDescription(),
            $objRecord->getComment(),
            $objRecord->getReceivedfromsite(),
            $objRecord->getReceivedfromuser(),
            $objRecord->getReceiveddate(),
            $objRecord->getParent(),
            $objRecord->getPosition(),
            $objRecord->getAlias(),
            $objRecord->getStructurename(),
            $objRecord->getParentname(),
            $objRecord->getPageAlias(),
            $objRecord->getPos()
        );
        $arrKeyParams = array($objRecord->getOrigReceivedpageid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_received_pages` WHERE receivedPageId=?';
        $params = array($objRecord->getReceivedpageid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
