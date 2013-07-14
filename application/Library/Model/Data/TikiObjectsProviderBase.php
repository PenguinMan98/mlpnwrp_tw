<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiObjectsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiObjects($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiObjects($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($objectId)
    {
        $strSql = 'SELECT * FROM `tiki_objects` WHERE objectId=?';
        $params = array($objectId);
        return Model_Data_TikiObjectsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_objects` (
            objectId,
            type,
            itemId,
            description,
            created,
            name,
            href,
            hits,
            comments_locked
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getType(),
            $objRecord->getItemid(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getName(),
            $objRecord->getHref(),
            $objRecord->getHits(),
            $objRecord->getCommentsLocked()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setObjectid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_objects` (
            objectId,
            type,
            itemId,
            description,
            created,
            name,
            href,
            hits,
            comments_locked
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getType(),
            $objRecord->getItemid(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getName(),
            $objRecord->getHref(),
            $objRecord->getHits(),
            $objRecord->getCommentsLocked()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setObjectid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_objects` SET 
            objectId=?,
            type=?,
            itemId=?,
            description=?,
            created=?,
            name=?,
            href=?,
            hits=?,
            comments_locked=?
        WHERE objectId=?';
        $arrSetParams = array(
            $objRecord->getObjectid(),
            $objRecord->getType(),
            $objRecord->getItemid(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getName(),
            $objRecord->getHref(),
            $objRecord->getHits(),
            $objRecord->getCommentsLocked()
        );
        $arrKeyParams = array($objRecord->getOrigObjectid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_objects` WHERE objectId=?';
        $params = array($objRecord->getObjectid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
