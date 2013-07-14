<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTodoNotifProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTodoNotif($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTodoNotif($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($todoId, $objectType, $objectId)
    {
        $strSql = 'SELECT * FROM `tiki_todo_notif` WHERE todoId=? AND objectType=? AND objectId=?';
        $params = array($todoId, $objectType, $objectId);
        return Model_Data_TikiTodoNotifProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_todo_notif` (
            todoId,
            objectType,
            objectId
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getTodoid(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_todo_notif` (
            todoId,
            objectType,
            objectId
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getTodoid(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_todo_notif` SET 
            todoId=?,
            objectType=?,
            objectId=?
        WHERE todoId=? AND objectType=? AND objectId=?';
        $arrSetParams = array(
            $objRecord->getTodoid(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid()
        );
        $arrKeyParams = array($objRecord->getOrigTodoid(), $objRecord->getOrigObjecttype(), $objRecord->getOrigObjectid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_todo_notif` WHERE todoId=? AND objectType=? AND objectId=?';
        $params = array($objRecord->getTodoid(), $objRecord->getObjecttype(), $objRecord->getObjectid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
