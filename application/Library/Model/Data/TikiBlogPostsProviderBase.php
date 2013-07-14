<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiBlogPostsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiBlogPosts($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiBlogPosts($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($postId)
    {
        $strSql = 'SELECT * FROM `tiki_blog_posts` WHERE postId=?';
        $params = array($postId);
        return Model_Data_TikiBlogPostsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_blog_posts` (
            postId,
            blogId,
            data,
            data_size,
            excerpt,
            created,
            user,
            hits,
            trackbacks_to,
            trackbacks_from,
            title,
            priv,
            wysiwyg
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getBlogid(),
            $objRecord->getData(),
            $objRecord->getDataSize(),
            $objRecord->getExcerpt(),
            $objRecord->getCreated(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getTrackbacksTo(),
            $objRecord->getTrackbacksFrom(),
            $objRecord->getTitle(),
            $objRecord->getPriv(),
            $objRecord->getWysiwyg()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPostid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_blog_posts` (
            postId,
            blogId,
            data,
            data_size,
            excerpt,
            created,
            user,
            hits,
            trackbacks_to,
            trackbacks_from,
            title,
            priv,
            wysiwyg
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getBlogid(),
            $objRecord->getData(),
            $objRecord->getDataSize(),
            $objRecord->getExcerpt(),
            $objRecord->getCreated(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getTrackbacksTo(),
            $objRecord->getTrackbacksFrom(),
            $objRecord->getTitle(),
            $objRecord->getPriv(),
            $objRecord->getWysiwyg()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPostid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_blog_posts` SET 
            postId=?,
            blogId=?,
            data=?,
            data_size=?,
            excerpt=?,
            created=?,
            user=?,
            hits=?,
            trackbacks_to=?,
            trackbacks_from=?,
            title=?,
            priv=?,
            wysiwyg=?
        WHERE postId=?';
        $arrSetParams = array(
            $objRecord->getPostid(),
            $objRecord->getBlogid(),
            $objRecord->getData(),
            $objRecord->getDataSize(),
            $objRecord->getExcerpt(),
            $objRecord->getCreated(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getTrackbacksTo(),
            $objRecord->getTrackbacksFrom(),
            $objRecord->getTitle(),
            $objRecord->getPriv(),
            $objRecord->getWysiwyg()
        );
        $arrKeyParams = array($objRecord->getOrigPostid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_blog_posts` WHERE postId=?';
        $params = array($objRecord->getPostid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
