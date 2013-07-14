<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiArticleTypesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiArticleTypes($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiArticleTypes($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($type)
    {
        $strSql = 'SELECT * FROM `tiki_article_types` WHERE type=?';
        $params = array($type);
        return Model_Data_TikiArticleTypesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_article_types` (
            type,
            use_ratings,
            show_pre_publ,
            show_post_expire,
            heading_only,
            allow_comments,
            show_image,
            show_avatar,
            show_author,
            show_pubdate,
            show_expdate,
            show_reads,
            show_size,
            show_topline,
            show_subtitle,
            show_linkto,
            show_image_caption,
            creator_edit,
            comment_can_rate_article
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getType(),
            $objRecord->getUseRatings(),
            $objRecord->getShowPrePubl(),
            $objRecord->getShowPostExpire(),
            $objRecord->getHeadingOnly(),
            $objRecord->getAllowComments(),
            $objRecord->getShowImage(),
            $objRecord->getShowAvatar(),
            $objRecord->getShowAuthor(),
            $objRecord->getShowPubdate(),
            $objRecord->getShowExpdate(),
            $objRecord->getShowReads(),
            $objRecord->getShowSize(),
            $objRecord->getShowTopline(),
            $objRecord->getShowSubtitle(),
            $objRecord->getShowLinkto(),
            $objRecord->getShowImageCaption(),
            $objRecord->getCreatorEdit(),
            $objRecord->getCommentCanRateArticle()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_article_types` (
            type,
            use_ratings,
            show_pre_publ,
            show_post_expire,
            heading_only,
            allow_comments,
            show_image,
            show_avatar,
            show_author,
            show_pubdate,
            show_expdate,
            show_reads,
            show_size,
            show_topline,
            show_subtitle,
            show_linkto,
            show_image_caption,
            creator_edit,
            comment_can_rate_article
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getType(),
            $objRecord->getUseRatings(),
            $objRecord->getShowPrePubl(),
            $objRecord->getShowPostExpire(),
            $objRecord->getHeadingOnly(),
            $objRecord->getAllowComments(),
            $objRecord->getShowImage(),
            $objRecord->getShowAvatar(),
            $objRecord->getShowAuthor(),
            $objRecord->getShowPubdate(),
            $objRecord->getShowExpdate(),
            $objRecord->getShowReads(),
            $objRecord->getShowSize(),
            $objRecord->getShowTopline(),
            $objRecord->getShowSubtitle(),
            $objRecord->getShowLinkto(),
            $objRecord->getShowImageCaption(),
            $objRecord->getCreatorEdit(),
            $objRecord->getCommentCanRateArticle()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_article_types` SET 
            type=?,
            use_ratings=?,
            show_pre_publ=?,
            show_post_expire=?,
            heading_only=?,
            allow_comments=?,
            show_image=?,
            show_avatar=?,
            show_author=?,
            show_pubdate=?,
            show_expdate=?,
            show_reads=?,
            show_size=?,
            show_topline=?,
            show_subtitle=?,
            show_linkto=?,
            show_image_caption=?,
            creator_edit=?,
            comment_can_rate_article=?
        WHERE type=?';
        $arrSetParams = array(
            $objRecord->getType(),
            $objRecord->getUseRatings(),
            $objRecord->getShowPrePubl(),
            $objRecord->getShowPostExpire(),
            $objRecord->getHeadingOnly(),
            $objRecord->getAllowComments(),
            $objRecord->getShowImage(),
            $objRecord->getShowAvatar(),
            $objRecord->getShowAuthor(),
            $objRecord->getShowPubdate(),
            $objRecord->getShowExpdate(),
            $objRecord->getShowReads(),
            $objRecord->getShowSize(),
            $objRecord->getShowTopline(),
            $objRecord->getShowSubtitle(),
            $objRecord->getShowLinkto(),
            $objRecord->getShowImageCaption(),
            $objRecord->getCreatorEdit(),
            $objRecord->getCommentCanRateArticle()
        );
        $arrKeyParams = array($objRecord->getOrigType());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_article_types` WHERE type=?';
        $params = array($objRecord->getType());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
