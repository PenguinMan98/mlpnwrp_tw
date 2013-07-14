<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSentNewslettersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSentNewsletters($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSentNewsletters($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($editionId)
    {
        $strSql = 'SELECT * FROM `tiki_sent_newsletters` WHERE editionId=?';
        $params = array($editionId);
        return Model_Data_TikiSentNewslettersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_sent_newsletters` (
            editionId,
            nlId,
            users,
            sent,
            subject,
            data,
            datatxt,
            wysiwyg
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getNlid(),
            $objRecord->getUsers(),
            $objRecord->getSent(),
            $objRecord->getSubject(),
            $objRecord->getData(),
            $objRecord->getDatatxt(),
            $objRecord->getWysiwyg()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setEditionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_sent_newsletters` (
            editionId,
            nlId,
            users,
            sent,
            subject,
            data,
            datatxt,
            wysiwyg
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getNlid(),
            $objRecord->getUsers(),
            $objRecord->getSent(),
            $objRecord->getSubject(),
            $objRecord->getData(),
            $objRecord->getDatatxt(),
            $objRecord->getWysiwyg()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setEditionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_sent_newsletters` SET 
            editionId=?,
            nlId=?,
            users=?,
            sent=?,
            subject=?,
            data=?,
            datatxt=?,
            wysiwyg=?
        WHERE editionId=?';
        $arrSetParams = array(
            $objRecord->getEditionid(),
            $objRecord->getNlid(),
            $objRecord->getUsers(),
            $objRecord->getSent(),
            $objRecord->getSubject(),
            $objRecord->getData(),
            $objRecord->getDatatxt(),
            $objRecord->getWysiwyg()
        );
        $arrKeyParams = array($objRecord->getOrigEditionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_sent_newsletters` WHERE editionId=?';
        $params = array($objRecord->getEditionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
