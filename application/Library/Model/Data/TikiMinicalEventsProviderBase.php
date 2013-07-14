<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiMinicalEventsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiMinicalEvents($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiMinicalEvents($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($eventId)
    {
        $strSql = 'SELECT * FROM `tiki_minical_events` WHERE eventId=?';
        $params = array($eventId);
        return Model_Data_TikiMinicalEventsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_minical_events` (
            user,
            eventId,
            title,
            description,
            start,
            end,
            security,
            duration,
            topicId,
            reminded
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            
            0,
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getSecurity(),
            $objRecord->getDuration(),
            $objRecord->getTopicid(),
            $objRecord->getReminded()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setEventid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_minical_events` (
            user,
            eventId,
            title,
            description,
            start,
            end,
            security,
            duration,
            topicId,
            reminded
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            
            0,
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getSecurity(),
            $objRecord->getDuration(),
            $objRecord->getTopicid(),
            $objRecord->getReminded()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setEventid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_minical_events` SET 
            user=?,
            eventId=?,
            title=?,
            description=?,
            start=?,
            end=?,
            security=?,
            duration=?,
            topicId=?,
            reminded=?
        WHERE eventId=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getEventid(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getSecurity(),
            $objRecord->getDuration(),
            $objRecord->getTopicid(),
            $objRecord->getReminded()
        );
        $arrKeyParams = array($objRecord->getOrigEventid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_minical_events` WHERE eventId=?';
        $params = array($objRecord->getEventid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
