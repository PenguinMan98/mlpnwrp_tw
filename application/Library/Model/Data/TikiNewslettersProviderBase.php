<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiNewslettersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiNewsletters($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiNewsletters($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($nlId)
    {
        $strSql = 'SELECT * FROM `tiki_newsletters` WHERE nlId=?';
        $params = array($nlId);
        return Model_Data_TikiNewslettersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_newsletters` (
            nlId,
            name,
            description,
            created,
            lastSent,
            editions,
            users,
            allowUserSub,
            allowAnySub,
            unsubMsg,
            validateAddr,
            frequency,
            allowTxt,
            author,
            allowArticleClip,
            autoArticleClip,
            articleClipTypes,
            articleClipRange
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getLastsent(),
            $objRecord->getEditions(),
            $objRecord->getUsers(),
            $objRecord->getAllowusersub(),
            $objRecord->getAllowanysub(),
            $objRecord->getUnsubmsg(),
            $objRecord->getValidateaddr(),
            $objRecord->getFrequency(),
            $objRecord->getAllowtxt(),
            $objRecord->getAuthor(),
            $objRecord->getAllowarticleclip(),
            $objRecord->getAutoarticleclip(),
            $objRecord->getArticlecliptypes(),
            $objRecord->getArticlecliprange()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setNlid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_newsletters` (
            nlId,
            name,
            description,
            created,
            lastSent,
            editions,
            users,
            allowUserSub,
            allowAnySub,
            unsubMsg,
            validateAddr,
            frequency,
            allowTxt,
            author,
            allowArticleClip,
            autoArticleClip,
            articleClipTypes,
            articleClipRange
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getLastsent(),
            $objRecord->getEditions(),
            $objRecord->getUsers(),
            $objRecord->getAllowusersub(),
            $objRecord->getAllowanysub(),
            $objRecord->getUnsubmsg(),
            $objRecord->getValidateaddr(),
            $objRecord->getFrequency(),
            $objRecord->getAllowtxt(),
            $objRecord->getAuthor(),
            $objRecord->getAllowarticleclip(),
            $objRecord->getAutoarticleclip(),
            $objRecord->getArticlecliptypes(),
            $objRecord->getArticlecliprange()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setNlid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_newsletters` SET 
            nlId=?,
            name=?,
            description=?,
            created=?,
            lastSent=?,
            editions=?,
            users=?,
            allowUserSub=?,
            allowAnySub=?,
            unsubMsg=?,
            validateAddr=?,
            frequency=?,
            allowTxt=?,
            author=?,
            allowArticleClip=?,
            autoArticleClip=?,
            articleClipTypes=?,
            articleClipRange=?
        WHERE nlId=?';
        $arrSetParams = array(
            $objRecord->getNlid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getLastsent(),
            $objRecord->getEditions(),
            $objRecord->getUsers(),
            $objRecord->getAllowusersub(),
            $objRecord->getAllowanysub(),
            $objRecord->getUnsubmsg(),
            $objRecord->getValidateaddr(),
            $objRecord->getFrequency(),
            $objRecord->getAllowtxt(),
            $objRecord->getAuthor(),
            $objRecord->getAllowarticleclip(),
            $objRecord->getAutoarticleclip(),
            $objRecord->getArticlecliptypes(),
            $objRecord->getArticlecliprange()
        );
        $arrKeyParams = array($objRecord->getOrigNlid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_newsletters` WHERE nlId=?';
        $params = array($objRecord->getNlid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
