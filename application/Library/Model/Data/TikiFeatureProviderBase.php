<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFeatureProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFeature($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFeature($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($feature_id)
    {
        $strSql = 'SELECT * FROM `tiki_feature` WHERE feature_id=?';
        $params = array($feature_id);
        return Model_Data_TikiFeatureProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_feature` (
            feature_id,
            feature_name,
            parent_id,
            status,
            setting_name,
            feature_type,
            template,
            permission,
            ordinal,
            depends_on,
            keyword,
            tip,
            feature_count,
            feature_path
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getFeatureName(),
            $objRecord->getParentId(),
            $objRecord->getStatus(),
            $objRecord->getSettingName(),
            $objRecord->getFeatureType(),
            $objRecord->getTemplate(),
            $objRecord->getPermission(),
            $objRecord->getOrdinal(),
            $objRecord->getDependsOn(),
            $objRecord->getKeyword(),
            $objRecord->getTip(),
            $objRecord->getFeatureCount(),
            $objRecord->getFeaturePath()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFeatureId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_feature` (
            feature_id,
            feature_name,
            parent_id,
            status,
            setting_name,
            feature_type,
            template,
            permission,
            ordinal,
            depends_on,
            keyword,
            tip,
            feature_count,
            feature_path
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getFeatureName(),
            $objRecord->getParentId(),
            $objRecord->getStatus(),
            $objRecord->getSettingName(),
            $objRecord->getFeatureType(),
            $objRecord->getTemplate(),
            $objRecord->getPermission(),
            $objRecord->getOrdinal(),
            $objRecord->getDependsOn(),
            $objRecord->getKeyword(),
            $objRecord->getTip(),
            $objRecord->getFeatureCount(),
            $objRecord->getFeaturePath()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFeatureId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_feature` SET 
            feature_id=?,
            feature_name=?,
            parent_id=?,
            status=?,
            setting_name=?,
            feature_type=?,
            template=?,
            permission=?,
            ordinal=?,
            depends_on=?,
            keyword=?,
            tip=?,
            feature_count=?,
            feature_path=?
        WHERE feature_id=?';
        $arrSetParams = array(
            $objRecord->getFeatureId(),
            $objRecord->getFeatureName(),
            $objRecord->getParentId(),
            $objRecord->getStatus(),
            $objRecord->getSettingName(),
            $objRecord->getFeatureType(),
            $objRecord->getTemplate(),
            $objRecord->getPermission(),
            $objRecord->getOrdinal(),
            $objRecord->getDependsOn(),
            $objRecord->getKeyword(),
            $objRecord->getTip(),
            $objRecord->getFeatureCount(),
            $objRecord->getFeaturePath()
        );
        $arrKeyParams = array($objRecord->getOrigFeatureId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_feature` WHERE feature_id=?';
        $params = array($objRecord->getFeatureId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
