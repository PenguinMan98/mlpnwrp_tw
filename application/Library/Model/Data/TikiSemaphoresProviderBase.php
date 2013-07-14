<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSemaphoresProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSemaphores($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSemaphores($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($semName)
    {
        $strSql = 'SELECT * FROM `tiki_semaphores` WHERE semName=?';
        $params = array($semName);
        return Model_Data_TikiSemaphoresProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_semaphores` (
            semName,
            objectType,
            user,
            timestamp
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getSemname(),
            $objRecord->getObjecttype(),
            $objRecord->getUser(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_semaphores` (
            semName,
            objectType,
            user,
            timestamp
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getSemname(),
            $objRecord->getObjecttype(),
            $objRecord->getUser(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_semaphores` SET 
            semName=?,
            objectType=?,
            user=?,
            timestamp=?
        WHERE semName=?';
        $arrSetParams = array(
            $objRecord->getSemname(),
            $objRecord->getObjecttype(),
            $objRecord->getUser(),
            $objRecord->getTimestamp()
        );
        $arrKeyParams = array($objRecord->getOrigSemname());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_semaphores` WHERE semName=?';
        $params = array($objRecord->getSemname());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
