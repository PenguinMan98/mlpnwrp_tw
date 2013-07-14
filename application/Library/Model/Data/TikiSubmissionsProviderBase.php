<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSubmissionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSubmissions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSubmissions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($subId)
    {
        $strSql = 'SELECT * FROM `tiki_submissions` WHERE subId=?';
        $params = array($subId);
        return Model_Data_TikiSubmissionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_submissions` (
            subId,
            topline,
            title,
            subtitle,
            linkto,
            lang,
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
            image_data,
            publishDate,
            expireDate,
            created,
            bibliographical_references,
            resume,
            heading,
            body,
            hash,
            author,
            nbreads,
            votes,
            points,
            type,
            rating,
            isfloat
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTopline(),
            $objRecord->getTitle(),
            $objRecord->getSubtitle(),
            $objRecord->getLinkto(),
            $objRecord->getLang(),
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
            $objRecord->getImageData(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getCreated(),
            $objRecord->getBibliographicalReferences(),
            $objRecord->getResume(),
            $objRecord->getHeading(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getAuthor(),
            $objRecord->getNbreads(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getType(),
            $objRecord->getRating(),
            $objRecord->getIsfloat()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSubid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_submissions` (
            subId,
            topline,
            title,
            subtitle,
            linkto,
            lang,
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
            image_data,
            publishDate,
            expireDate,
            created,
            bibliographical_references,
            resume,
            heading,
            body,
            hash,
            author,
            nbreads,
            votes,
            points,
            type,
            rating,
            isfloat
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTopline(),
            $objRecord->getTitle(),
            $objRecord->getSubtitle(),
            $objRecord->getLinkto(),
            $objRecord->getLang(),
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
            $objRecord->getImageData(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getCreated(),
            $objRecord->getBibliographicalReferences(),
            $objRecord->getResume(),
            $objRecord->getHeading(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getAuthor(),
            $objRecord->getNbreads(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getType(),
            $objRecord->getRating(),
            $objRecord->getIsfloat()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSubid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_submissions` SET 
            subId=?,
            topline=?,
            title=?,
            subtitle=?,
            linkto=?,
            lang=?,
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
            image_data=?,
            publishDate=?,
            expireDate=?,
            created=?,
            bibliographical_references=?,
            resume=?,
            heading=?,
            body=?,
            hash=?,
            author=?,
            nbreads=?,
            votes=?,
            points=?,
            type=?,
            rating=?,
            isfloat=?
        WHERE subId=?';
        $arrSetParams = array(
            $objRecord->getSubid(),
            $objRecord->getTopline(),
            $objRecord->getTitle(),
            $objRecord->getSubtitle(),
            $objRecord->getLinkto(),
            $objRecord->getLang(),
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
            $objRecord->getImageData(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getCreated(),
            $objRecord->getBibliographicalReferences(),
            $objRecord->getResume(),
            $objRecord->getHeading(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getAuthor(),
            $objRecord->getNbreads(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getType(),
            $objRecord->getRating(),
            $objRecord->getIsfloat()
        );
        $arrKeyParams = array($objRecord->getOrigSubid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_submissions` WHERE subId=?';
        $params = array($objRecord->getSubid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
