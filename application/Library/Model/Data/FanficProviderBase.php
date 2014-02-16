<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_FanficProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Fanfic($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Fanfic($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($fanfic_id)
    {
        $strSql = 'SELECT * FROM `fanfic` WHERE fanfic_id=?';
        $params = array($fanfic_id);
        return Model_Data_FanficProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `fanfic` (
            fanfic_id,
            title,
            text,
            fanfic_type_id,
            setting,
            ic
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTitle(),
            $objRecord->getText(),
            $objRecord->getFanficTypeId(),
            $objRecord->getSetting(),
            $objRecord->getIc()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFanficId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `fanfic` (
            fanfic_id,
            title,
            text,
            fanfic_type_id,
            setting,
            ic
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTitle(),
            $objRecord->getText(),
            $objRecord->getFanficTypeId(),
            $objRecord->getSetting(),
            $objRecord->getIc()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFanficId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `fanfic` SET 
            fanfic_id=?,
            title=?,
            text=?,
            fanfic_type_id=?,
            setting=?,
            ic=?
        WHERE fanfic_id=?';
        $arrSetParams = array(
            $objRecord->getFanficId(),
            $objRecord->getTitle(),
            $objRecord->getText(),
            $objRecord->getFanficTypeId(),
            $objRecord->getSetting(),
            $objRecord->getIc()
        );
        $arrKeyParams = array($objRecord->getOrigFanficId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `fanfic` WHERE fanfic_id=?';
        $params = array($objRecord->getFanficId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
