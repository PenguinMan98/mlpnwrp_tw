<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFreetaggedObjectsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFreetaggedObjects($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFreetaggedObjects($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($tagId, $objectId, $user)
    {
        $strSql = 'SELECT * FROM `tiki_freetagged_objects` WHERE tagId=? AND objectId=? AND user=?';
        $params = array($tagId, $objectId, $user);
        return Model_Data_TikiFreetaggedObjectsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_freetagged_objects` (
            tagId,
            objectId,
            user,
            created
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getObjectid(),
            $objRecord->getUser(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTagid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_freetagged_objects` (
            tagId,
            objectId,
            user,
            created
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getObjectid(),
            $objRecord->getUser(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTagid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_freetagged_objects` SET 
            tagId=?,
            objectId=?,
            user=?,
            created=?
        WHERE tagId=? AND objectId=? AND user=?';
        $arrSetParams = array(
            $objRecord->getTagid(),
            $objRecord->getObjectid(),
            $objRecord->getUser(),
            $objRecord->getCreated()
        );
        $arrKeyParams = array($objRecord->getOrigTagid(), $objRecord->getOrigObjectid(), $objRecord->getOrigUser());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_freetagged_objects` WHERE tagId=? AND objectId=? AND user=?';
        $params = array($objRecord->getTagid(), $objRecord->getObjectid(), $objRecord->getUser());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
