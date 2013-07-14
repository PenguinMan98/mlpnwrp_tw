<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTopicsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTopics($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTopics($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($topicId)
    {
        $strSql = 'SELECT * FROM `tiki_topics` WHERE topicId=?';
        $params = array($topicId);
        return Model_Data_TikiTopicsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_topics` (
            topicId,
            name,
            image_name,
            image_type,
            image_size,
            image_data,
            active,
            created
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getImageName(),
            $objRecord->getImageType(),
            $objRecord->getImageSize(),
            $objRecord->getImageData(),
            $objRecord->getActive(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTopicid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_topics` (
            topicId,
            name,
            image_name,
            image_type,
            image_size,
            image_data,
            active,
            created
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getImageName(),
            $objRecord->getImageType(),
            $objRecord->getImageSize(),
            $objRecord->getImageData(),
            $objRecord->getActive(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTopicid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_topics` SET 
            topicId=?,
            name=?,
            image_name=?,
            image_type=?,
            image_size=?,
            image_data=?,
            active=?,
            created=?
        WHERE topicId=?';
        $arrSetParams = array(
            $objRecord->getTopicid(),
            $objRecord->getName(),
            $objRecord->getImageName(),
            $objRecord->getImageType(),
            $objRecord->getImageSize(),
            $objRecord->getImageData(),
            $objRecord->getActive(),
            $objRecord->getCreated()
        );
        $arrKeyParams = array($objRecord->getOrigTopicid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_topics` WHERE topicId=?';
        $params = array($objRecord->getTopicid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
