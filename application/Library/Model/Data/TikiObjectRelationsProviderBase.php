<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiObjectRelationsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiObjectRelations($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiObjectRelations($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($relationId)
    {
        $strSql = 'SELECT * FROM `tiki_object_relations` WHERE relationId=?';
        $params = array($relationId);
        return Model_Data_TikiObjectRelationsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_object_relations` (
            relationId,
            relation,
            source_type,
            source_itemId,
            target_type,
            target_itemId
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRelation(),
            $objRecord->getSourceType(),
            $objRecord->getSourceItemid(),
            $objRecord->getTargetType(),
            $objRecord->getTargetItemid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRelationid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_object_relations` (
            relationId,
            relation,
            source_type,
            source_itemId,
            target_type,
            target_itemId
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRelation(),
            $objRecord->getSourceType(),
            $objRecord->getSourceItemid(),
            $objRecord->getTargetType(),
            $objRecord->getTargetItemid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRelationid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_object_relations` SET 
            relationId=?,
            relation=?,
            source_type=?,
            source_itemId=?,
            target_type=?,
            target_itemId=?
        WHERE relationId=?';
        $arrSetParams = array(
            $objRecord->getRelationid(),
            $objRecord->getRelation(),
            $objRecord->getSourceType(),
            $objRecord->getSourceItemid(),
            $objRecord->getTargetType(),
            $objRecord->getTargetItemid()
        );
        $arrKeyParams = array($objRecord->getOrigRelationid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_object_relations` WHERE relationId=?';
        $params = array($objRecord->getRelationid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
