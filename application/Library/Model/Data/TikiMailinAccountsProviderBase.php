<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiMailinAccountsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiMailinAccounts($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiMailinAccounts($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($accountId)
    {
        $strSql = 'SELECT * FROM `tiki_mailin_accounts` WHERE accountId=?';
        $params = array($accountId);
        return Model_Data_TikiMailinAccountsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_mailin_accounts` (
            accountId,
            user,
            account,
            pop,
            port,
            username,
            pass,
            active,
            type,
            smtp,
            useAuth,
            smtpPort,
            anonymous,
            attachments,
            article_topicId,
            article_type,
            discard_after
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUser(),
            $objRecord->getAccount(),
            $objRecord->getPop(),
            $objRecord->getPort(),
            $objRecord->getUsername(),
            $objRecord->getPass(),
            $objRecord->getActive(),
            $objRecord->getType(),
            $objRecord->getSmtp(),
            $objRecord->getUseauth(),
            $objRecord->getSmtpport(),
            $objRecord->getAnonymous(),
            $objRecord->getAttachments(),
            $objRecord->getArticleTopicid(),
            $objRecord->getArticleType(),
            $objRecord->getDiscardAfter()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setAccountid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_mailin_accounts` (
            accountId,
            user,
            account,
            pop,
            port,
            username,
            pass,
            active,
            type,
            smtp,
            useAuth,
            smtpPort,
            anonymous,
            attachments,
            article_topicId,
            article_type,
            discard_after
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUser(),
            $objRecord->getAccount(),
            $objRecord->getPop(),
            $objRecord->getPort(),
            $objRecord->getUsername(),
            $objRecord->getPass(),
            $objRecord->getActive(),
            $objRecord->getType(),
            $objRecord->getSmtp(),
            $objRecord->getUseauth(),
            $objRecord->getSmtpport(),
            $objRecord->getAnonymous(),
            $objRecord->getAttachments(),
            $objRecord->getArticleTopicid(),
            $objRecord->getArticleType(),
            $objRecord->getDiscardAfter()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setAccountid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_mailin_accounts` SET 
            accountId=?,
            user=?,
            account=?,
            pop=?,
            port=?,
            username=?,
            pass=?,
            active=?,
            type=?,
            smtp=?,
            useAuth=?,
            smtpPort=?,
            anonymous=?,
            attachments=?,
            article_topicId=?,
            article_type=?,
            discard_after=?
        WHERE accountId=?';
        $arrSetParams = array(
            $objRecord->getAccountid(),
            $objRecord->getUser(),
            $objRecord->getAccount(),
            $objRecord->getPop(),
            $objRecord->getPort(),
            $objRecord->getUsername(),
            $objRecord->getPass(),
            $objRecord->getActive(),
            $objRecord->getType(),
            $objRecord->getSmtp(),
            $objRecord->getUseauth(),
            $objRecord->getSmtpport(),
            $objRecord->getAnonymous(),
            $objRecord->getAttachments(),
            $objRecord->getArticleTopicid(),
            $objRecord->getArticleType(),
            $objRecord->getDiscardAfter()
        );
        $arrKeyParams = array($objRecord->getOrigAccountid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_mailin_accounts` WHERE accountId=?';
        $params = array($objRecord->getAccountid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
