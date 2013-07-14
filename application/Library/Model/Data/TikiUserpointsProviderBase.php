<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserpointsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserpoints($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserpoints($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user, $points, $voted)
    {
        $strSql = 'SELECT * FROM `tiki_userpoints` WHERE user=? AND points=? AND voted=?';
        $params = array($user, $points, $voted);
        return Model_Data_TikiUserpointsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_userpoints` (
            user,
            points,
            voted
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getPoints(),
            $objRecord->getVoted()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_userpoints` (
            user,
            points,
            voted
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getPoints(),
            $objRecord->getVoted()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_userpoints` SET 
            user=?,
            points=?,
            voted=?
        WHERE user=? AND points=? AND voted=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getPoints(),
            $objRecord->getVoted()
        );
        $arrKeyParams = array($objRecord->getOrigUser(), $objRecord->getOrigPoints(), $objRecord->getOrigVoted());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_userpoints` WHERE user=? AND points=? AND voted=?';
        $params = array($objRecord->getUser(), $objRecord->getPoints(), $objRecord->getVoted());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
