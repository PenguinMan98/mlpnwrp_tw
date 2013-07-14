<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPageFootnotesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPageFootnotes($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPageFootnotes($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user, $pageName)
    {
        $strSql = 'SELECT * FROM `tiki_page_footnotes` WHERE user=? AND pageName=?';
        $params = array($user, $pageName);
        return Model_Data_TikiPageFootnotesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_page_footnotes` (
            user,
            pageName,
            data
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getPagename(),
            $objRecord->getData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_page_footnotes` (
            user,
            pageName,
            data
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getPagename(),
            $objRecord->getData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_page_footnotes` SET 
            user=?,
            pageName=?,
            data=?
        WHERE user=? AND pageName=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getPagename(),
            $objRecord->getData()
        );
        $arrKeyParams = array($objRecord->getOrigUser(), $objRecord->getOrigPagename());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_page_footnotes` WHERE user=? AND pageName=?';
        $params = array($objRecord->getUser(), $objRecord->getPagename());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
