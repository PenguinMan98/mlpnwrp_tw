<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiMinicalTopicsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiMinicalTopics($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiMinicalTopics($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($topicId)
    {
        $strSql = 'SELECT * FROM `tiki_minical_topics` WHERE topicId=?';
        $params = array($topicId);
        return Model_Data_TikiMinicalTopicsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_minical_topics` (
            user,
            topicId,
            name,
            filename,
            filetype,
            filesize,
            data,
            path,
            isIcon
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            
            0,
            $objRecord->getName(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData(),
            $objRecord->getPath(),
            $objRecord->getIsicon()
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
        $strSql = ' REPLACE INTO `tiki_minical_topics` (
            user,
            topicId,
            name,
            filename,
            filetype,
            filesize,
            data,
            path,
            isIcon
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            
            0,
            $objRecord->getName(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData(),
            $objRecord->getPath(),
            $objRecord->getIsicon()
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
        $strSql = 'UPDATE `tiki_minical_topics` SET 
            user=?,
            topicId=?,
            name=?,
            filename=?,
            filetype=?,
            filesize=?,
            data=?,
            path=?,
            isIcon=?
        WHERE topicId=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getTopicid(),
            $objRecord->getName(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData(),
            $objRecord->getPath(),
            $objRecord->getIsicon()
        );
        $arrKeyParams = array($objRecord->getOrigTopicid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_minical_topics` WHERE topicId=?';
        $params = array($objRecord->getTopicid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
