<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiBlogPostsImagesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiBlogPostsImages($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiBlogPostsImages($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($imgId)
    {
        $strSql = 'SELECT * FROM `tiki_blog_posts_images` WHERE imgId=?';
        $params = array($imgId);
        return Model_Data_TikiBlogPostsImagesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_blog_posts_images` (
            imgId,
            postId,
            filename,
            filetype,
            filesize,
            data
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPostid(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setImgid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_blog_posts_images` (
            imgId,
            postId,
            filename,
            filetype,
            filesize,
            data
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPostid(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setImgid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_blog_posts_images` SET 
            imgId=?,
            postId=?,
            filename=?,
            filetype=?,
            filesize=?,
            data=?
        WHERE imgId=?';
        $arrSetParams = array(
            $objRecord->getImgid(),
            $objRecord->getPostid(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getData()
        );
        $arrKeyParams = array($objRecord->getOrigImgid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_blog_posts_images` WHERE imgId=?';
        $params = array($objRecord->getImgid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
