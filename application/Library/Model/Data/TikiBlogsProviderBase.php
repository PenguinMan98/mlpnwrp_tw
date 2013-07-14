<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiBlogsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiBlogs($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiBlogs($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($blogId)
    {
        $strSql = 'SELECT * FROM `tiki_blogs` WHERE blogId=?';
        $params = array($blogId);
        return Model_Data_TikiBlogsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_blogs` (
            blogId,
            created,
            lastModif,
            title,
            description,
            user,
            public,
            posts,
            maxPosts,
            hits,
            activity,
            heading,
            post_heading,
            use_find,
            use_title,
            use_title_in_post,
            use_description,
            use_breadcrumbs,
            use_author,
            use_excerpt,
            add_date,
            add_poster,
            allow_comments,
            show_avatar,
            always_owner,
            show_related,
            related_max
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getUser(),
            $objRecord->getPublic(),
            $objRecord->getPosts(),
            $objRecord->getMaxposts(),
            $objRecord->getHits(),
            $objRecord->getActivity(),
            $objRecord->getHeading(),
            $objRecord->getPostHeading(),
            $objRecord->getUseFind(),
            $objRecord->getUseTitle(),
            $objRecord->getUseTitleInPost(),
            $objRecord->getUseDescription(),
            $objRecord->getUseBreadcrumbs(),
            $objRecord->getUseAuthor(),
            $objRecord->getUseExcerpt(),
            $objRecord->getAddDate(),
            $objRecord->getAddPoster(),
            $objRecord->getAllowComments(),
            $objRecord->getShowAvatar(),
            $objRecord->getAlwaysOwner(),
            $objRecord->getShowRelated(),
            $objRecord->getRelatedMax()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBlogid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_blogs` (
            blogId,
            created,
            lastModif,
            title,
            description,
            user,
            public,
            posts,
            maxPosts,
            hits,
            activity,
            heading,
            post_heading,
            use_find,
            use_title,
            use_title_in_post,
            use_description,
            use_breadcrumbs,
            use_author,
            use_excerpt,
            add_date,
            add_poster,
            allow_comments,
            show_avatar,
            always_owner,
            show_related,
            related_max
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getUser(),
            $objRecord->getPublic(),
            $objRecord->getPosts(),
            $objRecord->getMaxposts(),
            $objRecord->getHits(),
            $objRecord->getActivity(),
            $objRecord->getHeading(),
            $objRecord->getPostHeading(),
            $objRecord->getUseFind(),
            $objRecord->getUseTitle(),
            $objRecord->getUseTitleInPost(),
            $objRecord->getUseDescription(),
            $objRecord->getUseBreadcrumbs(),
            $objRecord->getUseAuthor(),
            $objRecord->getUseExcerpt(),
            $objRecord->getAddDate(),
            $objRecord->getAddPoster(),
            $objRecord->getAllowComments(),
            $objRecord->getShowAvatar(),
            $objRecord->getAlwaysOwner(),
            $objRecord->getShowRelated(),
            $objRecord->getRelatedMax()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBlogid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_blogs` SET 
            blogId=?,
            created=?,
            lastModif=?,
            title=?,
            description=?,
            user=?,
            public=?,
            posts=?,
            maxPosts=?,
            hits=?,
            activity=?,
            heading=?,
            post_heading=?,
            use_find=?,
            use_title=?,
            use_title_in_post=?,
            use_description=?,
            use_breadcrumbs=?,
            use_author=?,
            use_excerpt=?,
            add_date=?,
            add_poster=?,
            allow_comments=?,
            show_avatar=?,
            always_owner=?,
            show_related=?,
            related_max=?
        WHERE blogId=?';
        $arrSetParams = array(
            $objRecord->getBlogid(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getUser(),
            $objRecord->getPublic(),
            $objRecord->getPosts(),
            $objRecord->getMaxposts(),
            $objRecord->getHits(),
            $objRecord->getActivity(),
            $objRecord->getHeading(),
            $objRecord->getPostHeading(),
            $objRecord->getUseFind(),
            $objRecord->getUseTitle(),
            $objRecord->getUseTitleInPost(),
            $objRecord->getUseDescription(),
            $objRecord->getUseBreadcrumbs(),
            $objRecord->getUseAuthor(),
            $objRecord->getUseExcerpt(),
            $objRecord->getAddDate(),
            $objRecord->getAddPoster(),
            $objRecord->getAllowComments(),
            $objRecord->getShowAvatar(),
            $objRecord->getAlwaysOwner(),
            $objRecord->getShowRelated(),
            $objRecord->getRelatedMax()
        );
        $arrKeyParams = array($objRecord->getOrigBlogid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_blogs` WHERE blogId=?';
        $params = array($objRecord->getBlogid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
