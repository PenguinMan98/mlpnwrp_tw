<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_BlogPostProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_BlogPost($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_BlogPost($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($blog_post_id)
    {
        $strSql = 'SELECT * FROM `blog_post` WHERE blog_post_id=?';
        $params = array($blog_post_id);
        return Model_Data_BlogPostProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `blog_post` (
            blog_post_id,
            blog_id,
            title,
            text,
            user_id,
            creation_date,
            publish_date,
            image
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getBlogId(),
            $objRecord->getTitle(),
            $objRecord->getText(),
            $objRecord->getUserId(),
            $objRecord->getCreationDate(),
            $objRecord->getPublishDate(),
            $objRecord->getImage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBlogPostId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `blog_post` (
            blog_post_id,
            blog_id,
            title,
            text,
            user_id,
            creation_date,
            publish_date,
            image
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getBlogId(),
            $objRecord->getTitle(),
            $objRecord->getText(),
            $objRecord->getUserId(),
            $objRecord->getCreationDate(),
            $objRecord->getPublishDate(),
            $objRecord->getImage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBlogPostId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `blog_post` SET 
            blog_post_id=?,
            blog_id=?,
            title=?,
            text=?,
            user_id=?,
            creation_date=?,
            publish_date=?,
            image=?
        WHERE blog_post_id=?';
        $arrSetParams = array(
            $objRecord->getBlogPostId(),
            $objRecord->getBlogId(),
            $objRecord->getTitle(),
            $objRecord->getText(),
            $objRecord->getUserId(),
            $objRecord->getCreationDate(),
            $objRecord->getPublishDate(),
            $objRecord->getImage()
        );
        $arrKeyParams = array($objRecord->getOrigBlogPostId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `blog_post` WHERE blog_post_id=?';
        $params = array($objRecord->getBlogPostId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
