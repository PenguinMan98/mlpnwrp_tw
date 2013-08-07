<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_UserChastisementProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_UserChastisement($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_UserChastisement($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($userId)
    {
        $strSql = 'SELECT * FROM `user_chastisement` WHERE userId=?';
        $params = array($userId);
        return Model_Data_UserChastisementProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `user_chastisement` (
            userId,
            type,
            duration,
            creation_date,
            reason
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getUserid(),
            $objRecord->getType(),
            $objRecord->getDuration(),
            $objRecord->getCreationDate(),
            $objRecord->getReason()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `user_chastisement` (
            userId,
            type,
            duration,
            creation_date,
            reason
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getUserid(),
            $objRecord->getType(),
            $objRecord->getDuration(),
            $objRecord->getCreationDate(),
            $objRecord->getReason()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `user_chastisement` SET 
            userId=?,
            type=?,
            duration=?,
            creation_date=?,
            reason=?
        WHERE userId=?';
        $arrSetParams = array(
            $objRecord->getUserid(),
            $objRecord->getType(),
            $objRecord->getDuration(),
            $objRecord->getCreationDate(),
            $objRecord->getReason()
        );
        $arrKeyParams = array($objRecord->getOrigUserid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `user_chastisement` WHERE userId=?';
        $params = array($objRecord->getUserid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
