<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSentNewslettersErrorsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSentNewslettersErrors($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSentNewslettersErrors($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($editionId, $email, $login, $error)
    {
        $strSql = 'SELECT * FROM `tiki_sent_newsletters_errors` WHERE editionId=? AND email=? AND login=? AND error=?';
        $params = array($editionId, $email, $login, $error);
        return Model_Data_TikiSentNewslettersErrorsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_sent_newsletters_errors` (
            editionId,
            email,
            login,
            error
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getEditionid(),
            $objRecord->getEmail(),
            $objRecord->getLogin(),
            $objRecord->getError()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_sent_newsletters_errors` (
            editionId,
            email,
            login,
            error
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getEditionid(),
            $objRecord->getEmail(),
            $objRecord->getLogin(),
            $objRecord->getError()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_sent_newsletters_errors` SET 
            editionId=?,
            email=?,
            login=?,
            error=?
        WHERE editionId=? AND email=? AND login=? AND error=?';
        $arrSetParams = array(
            $objRecord->getEditionid(),
            $objRecord->getEmail(),
            $objRecord->getLogin(),
            $objRecord->getError()
        );
        $arrKeyParams = array($objRecord->getOrigEditionid(), $objRecord->getOrigEmail(), $objRecord->getOrigLogin(), $objRecord->getOrigError());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_sent_newsletters_errors` WHERE editionId=? AND email=? AND login=? AND error=?';
        $params = array($objRecord->getEditionid(), $objRecord->getEmail(), $objRecord->getLogin(), $objRecord->getError());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
