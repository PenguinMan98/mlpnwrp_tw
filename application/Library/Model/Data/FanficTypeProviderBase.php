<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_FanficTypeProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_FanficType($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_FanficType($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($fanfic_type_id)
    {
        $strSql = 'SELECT * FROM `fanfic_type` WHERE fanfic_type_id=?';
        $params = array($fanfic_type_id);
        return Model_Data_FanficTypeProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `fanfic_type` (
            fanfic_type_id,
            name,
            description
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFanficTypeId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `fanfic_type` (
            fanfic_type_id,
            name,
            description
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFanficTypeId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `fanfic_type` SET 
            fanfic_type_id=?,
            name=?,
            description=?
        WHERE fanfic_type_id=?';
        $arrSetParams = array(
            $objRecord->getFanficTypeId(),
            $objRecord->getName(),
            $objRecord->getDescription()
        );
        $arrKeyParams = array($objRecord->getOrigFanficTypeId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `fanfic_type` WHERE fanfic_type_id=?';
        $params = array($objRecord->getFanficTypeId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
