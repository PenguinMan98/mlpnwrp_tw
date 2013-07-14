<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiInviteProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiInvite($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiInvite($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($id)
    {
        $strSql = 'SELECT * FROM `tiki_invite` WHERE id=?';
        $params = array($id);
        return Model_Data_TikiInviteProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_invite` (
            id,
            inviter,
            groups,
            ts,
            emailsubject,
            emailcontent,
            wikicontent,
            wikipageafter
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getInviter(),
            $objRecord->getGroups(),
            $objRecord->getTs(),
            $objRecord->getEmailsubject(),
            $objRecord->getEmailcontent(),
            $objRecord->getWikicontent(),
            $objRecord->getWikipageafter()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_invite` (
            id,
            inviter,
            groups,
            ts,
            emailsubject,
            emailcontent,
            wikicontent,
            wikipageafter
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getInviter(),
            $objRecord->getGroups(),
            $objRecord->getTs(),
            $objRecord->getEmailsubject(),
            $objRecord->getEmailcontent(),
            $objRecord->getWikicontent(),
            $objRecord->getWikipageafter()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_invite` SET 
            id=?,
            inviter=?,
            groups=?,
            ts=?,
            emailsubject=?,
            emailcontent=?,
            wikicontent=?,
            wikipageafter=?
        WHERE id=?';
        $arrSetParams = array(
            $objRecord->getId(),
            $objRecord->getInviter(),
            $objRecord->getGroups(),
            $objRecord->getTs(),
            $objRecord->getEmailsubject(),
            $objRecord->getEmailcontent(),
            $objRecord->getWikicontent(),
            $objRecord->getWikipageafter()
        );
        $arrKeyParams = array($objRecord->getOrigId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_invite` WHERE id=?';
        $params = array($objRecord->getId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
