<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiBlogActivityProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiBlogActivity($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiBlogActivity($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($blogId, $day)
    {
        $strSql = 'SELECT * FROM `tiki_blog_activity` WHERE blogId=? AND day=?';
        $params = array($blogId, $day);
        return Model_Data_TikiBlogActivityProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_blog_activity` (
            blogId,
            day,
            posts
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getBlogid(),
            $objRecord->getDay(),
            $objRecord->getPosts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_blog_activity` (
            blogId,
            day,
            posts
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getBlogid(),
            $objRecord->getDay(),
            $objRecord->getPosts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_blog_activity` SET 
            blogId=?,
            day=?,
            posts=?
        WHERE blogId=? AND day=?';
        $arrSetParams = array(
            $objRecord->getBlogid(),
            $objRecord->getDay(),
            $objRecord->getPosts()
        );
        $arrKeyParams = array($objRecord->getOrigBlogid(), $objRecord->getOrigDay());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_blog_activity` WHERE blogId=? AND day=?';
        $params = array($objRecord->getBlogid(), $objRecord->getDay());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
