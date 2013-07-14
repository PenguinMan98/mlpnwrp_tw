<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiArticlesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiArticles($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiArticles($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($articleId)
    {
        $strSql = 'SELECT * FROM `tiki_articles` WHERE articleId=?';
        $params = array($articleId);
        return Model_Data_TikiArticlesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_articles` (
            articleId,
            topline,
            title,
            subtitle,
            linkto,
            lang,
            state,
            authorName,
            topicId,
            topicName,
            size,
            useImage,
            image_name,
            image_caption,
            image_type,
            image_size,
            image_x,
            image_y,
            list_image_x,
            list_image_y,
            image_data,
            publishDate,
            expireDate,
            created,
            heading,
            body,
            hash,
            author,
            nbreads,
            votes,
            points,
            type,
            rating,
            isfloat,
            ispublished
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTopline(),
            $objRecord->getTitle(),
            $objRecord->getSubtitle(),
            $objRecord->getLinkto(),
            $objRecord->getLang(),
            $objRecord->getState(),
            $objRecord->getAuthorname(),
            $objRecord->getTopicid(),
            $objRecord->getTopicname(),
            $objRecord->getSize(),
            $objRecord->getUseimage(),
            $objRecord->getImageName(),
            $objRecord->getImageCaption(),
            $objRecord->getImageType(),
            $objRecord->getImageSize(),
            $objRecord->getImageX(),
            $objRecord->getImageY(),
            $objRecord->getListImageX(),
            $objRecord->getListImageY(),
            $objRecord->getImageData(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getCreated(),
            $objRecord->getHeading(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getAuthor(),
            $objRecord->getNbreads(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getType(),
            $objRecord->getRating(),
            $objRecord->getIsfloat(),
            $objRecord->getIspublished()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setArticleid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_articles` (
            articleId,
            topline,
            title,
            subtitle,
            linkto,
            lang,
            state,
            authorName,
            topicId,
            topicName,
            size,
            useImage,
            image_name,
            image_caption,
            image_type,
            image_size,
            image_x,
            image_y,
            list_image_x,
            list_image_y,
            image_data,
            publishDate,
            expireDate,
            created,
            heading,
            body,
            hash,
            author,
            nbreads,
            votes,
            points,
            type,
            rating,
            isfloat,
            ispublished
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTopline(),
            $objRecord->getTitle(),
            $objRecord->getSubtitle(),
            $objRecord->getLinkto(),
            $objRecord->getLang(),
            $objRecord->getState(),
            $objRecord->getAuthorname(),
            $objRecord->getTopicid(),
            $objRecord->getTopicname(),
            $objRecord->getSize(),
            $objRecord->getUseimage(),
            $objRecord->getImageName(),
            $objRecord->getImageCaption(),
            $objRecord->getImageType(),
            $objRecord->getImageSize(),
            $objRecord->getImageX(),
            $objRecord->getImageY(),
            $objRecord->getListImageX(),
            $objRecord->getListImageY(),
            $objRecord->getImageData(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getCreated(),
            $objRecord->getHeading(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getAuthor(),
            $objRecord->getNbreads(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getType(),
            $objRecord->getRating(),
            $objRecord->getIsfloat(),
            $objRecord->getIspublished()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setArticleid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_articles` SET 
            articleId=?,
            topline=?,
            title=?,
            subtitle=?,
            linkto=?,
            lang=?,
            state=?,
            authorName=?,
            topicId=?,
            topicName=?,
            size=?,
            useImage=?,
            image_name=?,
            image_caption=?,
            image_type=?,
            image_size=?,
            image_x=?,
            image_y=?,
            list_image_x=?,
            list_image_y=?,
            image_data=?,
            publishDate=?,
            expireDate=?,
            created=?,
            heading=?,
            body=?,
            hash=?,
            author=?,
            nbreads=?,
            votes=?,
            points=?,
            type=?,
            rating=?,
            isfloat=?,
            ispublished=?
        WHERE articleId=?';
        $arrSetParams = array(
            $objRecord->getArticleid(),
            $objRecord->getTopline(),
            $objRecord->getTitle(),
            $objRecord->getSubtitle(),
            $objRecord->getLinkto(),
            $objRecord->getLang(),
            $objRecord->getState(),
            $objRecord->getAuthorname(),
            $objRecord->getTopicid(),
            $objRecord->getTopicname(),
            $objRecord->getSize(),
            $objRecord->getUseimage(),
            $objRecord->getImageName(),
            $objRecord->getImageCaption(),
            $objRecord->getImageType(),
            $objRecord->getImageSize(),
            $objRecord->getImageX(),
            $objRecord->getImageY(),
            $objRecord->getListImageX(),
            $objRecord->getListImageY(),
            $objRecord->getImageData(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getCreated(),
            $objRecord->getHeading(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getAuthor(),
            $objRecord->getNbreads(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getType(),
            $objRecord->getRating(),
            $objRecord->getIsfloat(),
            $objRecord->getIspublished()
        );
        $arrKeyParams = array($objRecord->getOrigArticleid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_articles` WHERE articleId=?';
        $params = array($objRecord->getArticleid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
