<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserPostingsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserPostings($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserPostings($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user)
    {
        $strSql = 'SELECT * FROM `tiki_user_postings` WHERE user=?';
        $params = array($user);
        return Model_Data_TikiUserPostingsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_postings` (
            user,
            posts,
            last,
            first,
            level
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getPosts(),
            $objRecord->getLast(),
            $objRecord->getFirst(),
            $objRecord->getLevel()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_postings` (
            user,
            posts,
            last,
            first,
            level
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getPosts(),
            $objRecord->getLast(),
            $objRecord->getFirst(),
            $objRecord->getLevel()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_postings` SET 
            user=?,
            posts=?,
            last=?,
            first=?,
            level=?
        WHERE user=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getPosts(),
            $objRecord->getLast(),
            $objRecord->getFirst(),
            $objRecord->getLevel()
        );
        $arrKeyParams = array($objRecord->getOrigUser());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_postings` WHERE user=?';
        $params = array($objRecord->getUser());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
