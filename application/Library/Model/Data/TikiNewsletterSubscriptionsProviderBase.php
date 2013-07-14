<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiNewsletterSubscriptionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiNewsletterSubscriptions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiNewsletterSubscriptions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($nlId, $email, $isUser)
    {
        $strSql = 'SELECT * FROM `tiki_newsletter_subscriptions` WHERE nlId=? AND email=? AND isUser=?';
        $params = array($nlId, $email, $isUser);
        return Model_Data_TikiNewsletterSubscriptionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_newsletter_subscriptions` (
            nlId,
            email,
            code,
            valid,
            subscribed,
            isUser,
            included
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getNlid(),
            $objRecord->getEmail(),
            $objRecord->getCode(),
            $objRecord->getValid(),
            $objRecord->getSubscribed(),
            $objRecord->getIsuser(),
            $objRecord->getIncluded()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_newsletter_subscriptions` (
            nlId,
            email,
            code,
            valid,
            subscribed,
            isUser,
            included
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getNlid(),
            $objRecord->getEmail(),
            $objRecord->getCode(),
            $objRecord->getValid(),
            $objRecord->getSubscribed(),
            $objRecord->getIsuser(),
            $objRecord->getIncluded()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_newsletter_subscriptions` SET 
            nlId=?,
            email=?,
            code=?,
            valid=?,
            subscribed=?,
            isUser=?,
            included=?
        WHERE nlId=? AND email=? AND isUser=?';
        $arrSetParams = array(
            $objRecord->getNlid(),
            $objRecord->getEmail(),
            $objRecord->getCode(),
            $objRecord->getValid(),
            $objRecord->getSubscribed(),
            $objRecord->getIsuser(),
            $objRecord->getIncluded()
        );
        $arrKeyParams = array($objRecord->getOrigNlid(), $objRecord->getOrigEmail(), $objRecord->getOrigIsuser());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_newsletter_subscriptions` WHERE nlId=? AND email=? AND isUser=?';
        $params = array($objRecord->getNlid(), $objRecord->getEmail(), $objRecord->getIsuser());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
