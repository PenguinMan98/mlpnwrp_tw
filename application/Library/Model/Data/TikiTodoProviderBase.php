<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTodoProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTodo($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTodo($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($todoId)
    {
        $strSql = 'SELECT * FROM `tiki_todo` WHERE todoId=?';
        $params = array($todoId);
        return Model_Data_TikiTodoProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_todo` (
            todoId,
            after,
            event,
            objectType,
            objectId,
            from,
            to
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getAfter(),
            $objRecord->getEvent(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid(),
            $objRecord->getFrom(),
            $objRecord->getTo()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTodoid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_todo` (
            todoId,
            after,
            event,
            objectType,
            objectId,
            from,
            to
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getAfter(),
            $objRecord->getEvent(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid(),
            $objRecord->getFrom(),
            $objRecord->getTo()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTodoid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_todo` SET 
            todoId=?,
            after=?,
            event=?,
            objectType=?,
            objectId=?,
            from=?,
            to=?
        WHERE todoId=?';
        $arrSetParams = array(
            $objRecord->getTodoid(),
            $objRecord->getAfter(),
            $objRecord->getEvent(),
            $objRecord->getObjecttype(),
            $objRecord->getObjectid(),
            $objRecord->getFrom(),
            $objRecord->getTo()
        );
        $arrKeyParams = array($objRecord->getOrigTodoid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_todo` WHERE todoId=?';
        $params = array($objRecord->getTodoid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
