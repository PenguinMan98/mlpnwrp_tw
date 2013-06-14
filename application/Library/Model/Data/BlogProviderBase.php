<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_BlogProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Blog($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Blog($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($blog_id)
    {
        $strSql = 'SELECT * FROM `blog` WHERE blog_id=?';
        $params = array($blog_id);
        return Model_Data_BlogProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `blog` (
            blog_id,
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
            $objRecord->setBlogId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `blog` (
            blog_id,
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
            $objRecord->setBlogId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `blog` SET 
            blog_id=?,
            name=?,
            description=?
        WHERE blog_id=?';
        $arrSetParams = array(
            $objRecord->getBlogId(),
            $objRecord->getName(),
            $objRecord->getDescription()
        );
        $arrKeyParams = array($objRecord->getOrigBlogId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `blog` WHERE blog_id=?';
        $params = array($objRecord->getBlogId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
