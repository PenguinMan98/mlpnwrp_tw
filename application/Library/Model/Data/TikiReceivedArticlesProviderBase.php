<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiReceivedArticlesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiReceivedArticles($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiReceivedArticles($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($receivedArticleId)
    {
        $strSql = 'SELECT * FROM `tiki_received_articles` WHERE receivedArticleId=?';
        $params = array($receivedArticleId);
        return Model_Data_TikiReceivedArticlesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_received_articles` (
            receivedArticleId,
            receivedFromSite,
            receivedFromUser,
            receivedDate,
            title,
            authorName,
            size,
            useImage,
            image_name,
            image_type,
            image_size,
            image_x,
            image_y,
            image_data,
            publishDate,
            expireDate,
            created,
            heading,
            body,
            hash,
            author,
            type,
            rating
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getReceivedfromsite(),
            $objRecord->getReceivedfromuser(),
            $objRecord->getReceiveddate(),
            $objRecord->getTitle(),
            $objRecord->getAuthorname(),
            $objRecord->getSize(),
            $objRecord->getUseimage(),
            $objRecord->getImageName(),
            $objRecord->getImageType(),
            $objRecord->getImageSize(),
            $objRecord->getImageX(),
            $objRecord->getImageY(),
            $objRecord->getImageData(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getCreated(),
            $objRecord->getHeading(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getAuthor(),
            $objRecord->getType(),
            $objRecord->getRating()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setReceivedarticleid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_received_articles` (
            receivedArticleId,
            receivedFromSite,
            receivedFromUser,
            receivedDate,
            title,
            authorName,
            size,
            useImage,
            image_name,
            image_type,
            image_size,
            image_x,
            image_y,
            image_data,
            publishDate,
            expireDate,
            created,
            heading,
            body,
            hash,
            author,
            type,
            rating
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getReceivedfromsite(),
            $objRecord->getReceivedfromuser(),
            $objRecord->getReceiveddate(),
            $objRecord->getTitle(),
            $objRecord->getAuthorname(),
            $objRecord->getSize(),
            $objRecord->getUseimage(),
            $objRecord->getImageName(),
            $objRecord->getImageType(),
            $objRecord->getImageSize(),
            $objRecord->getImageX(),
            $objRecord->getImageY(),
            $objRecord->getImageData(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getCreated(),
            $objRecord->getHeading(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getAuthor(),
            $objRecord->getType(),
            $objRecord->getRating()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setReceivedarticleid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_received_articles` SET 
            receivedArticleId=?,
            receivedFromSite=?,
            receivedFromUser=?,
            receivedDate=?,
            title=?,
            authorName=?,
            size=?,
            useImage=?,
            image_name=?,
            image_type=?,
            image_size=?,
            image_x=?,
            image_y=?,
            image_data=?,
            publishDate=?,
            expireDate=?,
            created=?,
            heading=?,
            body=?,
            hash=?,
            author=?,
            type=?,
            rating=?
        WHERE receivedArticleId=?';
        $arrSetParams = array(
            $objRecord->getReceivedarticleid(),
            $objRecord->getReceivedfromsite(),
            $objRecord->getReceivedfromuser(),
            $objRecord->getReceiveddate(),
            $objRecord->getTitle(),
            $objRecord->getAuthorname(),
            $objRecord->getSize(),
            $objRecord->getUseimage(),
            $objRecord->getImageName(),
            $objRecord->getImageType(),
            $objRecord->getImageSize(),
            $objRecord->getImageX(),
            $objRecord->getImageY(),
            $objRecord->getImageData(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getCreated(),
            $objRecord->getHeading(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getAuthor(),
            $objRecord->getType(),
            $objRecord->getRating()
        );
        $arrKeyParams = array($objRecord->getOrigReceivedarticleid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_received_articles` WHERE receivedArticleId=?';
        $params = array($objRecord->getReceivedarticleid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
