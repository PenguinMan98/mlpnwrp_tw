<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserMailAccountsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserMailAccounts($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserMailAccounts($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($accountId)
    {
        $strSql = 'SELECT * FROM `tiki_user_mail_accounts` WHERE accountId=?';
        $params = array($accountId);
        return Model_Data_TikiUserMailAccountsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_mail_accounts` (
            accountId,
            user,
            account,
            pop,
            current,
            port,
            username,
            pass,
            msgs,
            smtp,
            useAuth,
            smtpPort,
            flagsPublic,
            autoRefresh,
            imap,
            mbox,
            maildir,
            useSSL,
            fromEmail
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUser(),
            $objRecord->getAccount(),
            $objRecord->getPop(),
            $objRecord->getCurrent(),
            $objRecord->getPort(),
            $objRecord->getUsername(),
            $objRecord->getPass(),
            $objRecord->getMsgs(),
            $objRecord->getSmtp(),
            $objRecord->getUseauth(),
            $objRecord->getSmtpport(),
            $objRecord->getFlagspublic(),
            $objRecord->getAutorefresh(),
            $objRecord->getImap(),
            $objRecord->getMbox(),
            $objRecord->getMaildir(),
            $objRecord->getUsessl(),
            $objRecord->getFromemail()
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
        $strSql = ' REPLACE INTO `tiki_user_mail_accounts` (
            accountId,
            user,
            account,
            pop,
            current,
            port,
            username,
            pass,
            msgs,
            smtp,
            useAuth,
            smtpPort,
            flagsPublic,
            autoRefresh,
            imap,
            mbox,
            maildir,
            useSSL,
            fromEmail
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUser(),
            $objRecord->getAccount(),
            $objRecord->getPop(),
            $objRecord->getCurrent(),
            $objRecord->getPort(),
            $objRecord->getUsername(),
            $objRecord->getPass(),
            $objRecord->getMsgs(),
            $objRecord->getSmtp(),
            $objRecord->getUseauth(),
            $objRecord->getSmtpport(),
            $objRecord->getFlagspublic(),
            $objRecord->getAutorefresh(),
            $objRecord->getImap(),
            $objRecord->getMbox(),
            $objRecord->getMaildir(),
            $objRecord->getUsessl(),
            $objRecord->getFromemail()
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
        $strSql = 'UPDATE `tiki_user_mail_accounts` SET 
            accountId=?,
            user=?,
            account=?,
            pop=?,
            current=?,
            port=?,
            username=?,
            pass=?,
            msgs=?,
            smtp=?,
            useAuth=?,
            smtpPort=?,
            flagsPublic=?,
            autoRefresh=?,
            imap=?,
            mbox=?,
            maildir=?,
            useSSL=?,
            fromEmail=?
        WHERE accountId=?';
        $arrSetParams = array(
            $objRecord->getAccountid(),
            $objRecord->getUser(),
            $objRecord->getAccount(),
            $objRecord->getPop(),
            $objRecord->getCurrent(),
            $objRecord->getPort(),
            $objRecord->getUsername(),
            $objRecord->getPass(),
            $objRecord->getMsgs(),
            $objRecord->getSmtp(),
            $objRecord->getUseauth(),
            $objRecord->getSmtpport(),
            $objRecord->getFlagspublic(),
            $objRecord->getAutorefresh(),
            $objRecord->getImap(),
            $objRecord->getMbox(),
            $objRecord->getMaildir(),
            $objRecord->getUsessl(),
            $objRecord->getFromemail()
        );
        $arrKeyParams = array($objRecord->getOrigAccountid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_mail_accounts` WHERE accountId=?';
        $params = array($objRecord->getAccountid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
