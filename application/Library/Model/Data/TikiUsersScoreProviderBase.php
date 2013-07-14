<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUsersScoreProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUsersScore($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUsersScore($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user, $event_id)
    {
        $strSql = 'SELECT * FROM `tiki_users_score` WHERE user=? AND event_id=?';
        $params = array($user, $event_id);
        return Model_Data_TikiUsersScoreProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_users_score` (
            user,
            event_id,
            expire,
            tstamp
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getEventId(),
            $objRecord->getExpire(),
            $objRecord->getTstamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_users_score` (
            user,
            event_id,
            expire,
            tstamp
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getEventId(),
            $objRecord->getExpire(),
            $objRecord->getTstamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_users_score` SET 
            user=?,
            event_id=?,
            expire=?,
            tstamp=?
        WHERE user=? AND event_id=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getEventId(),
            $objRecord->getExpire(),
            $objRecord->getTstamp()
        );
        $arrKeyParams = array($objRecord->getOrigUser(), $objRecord->getOrigEventId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_users_score` WHERE user=? AND event_id=?';
        $params = array($objRecord->getUser(), $objRecord->getEventId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
