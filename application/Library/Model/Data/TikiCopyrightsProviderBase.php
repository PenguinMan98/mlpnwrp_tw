<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCopyrightsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCopyrights($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCopyrights($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($copyrightId)
    {
        $strSql = 'SELECT * FROM `tiki_copyrights` WHERE copyrightId=?';
        $params = array($copyrightId);
        return Model_Data_TikiCopyrightsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_copyrights` (
            copyrightId,
            page,
            title,
            year,
            authors,
            holder,
            copyright_order,
            userName
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPage(),
            $objRecord->getTitle(),
            $objRecord->getYear(),
            $objRecord->getAuthors(),
            $objRecord->getHolder(),
            $objRecord->getCopyrightOrder(),
            $objRecord->getUsername()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCopyrightid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_copyrights` (
            copyrightId,
            page,
            title,
            year,
            authors,
            holder,
            copyright_order,
            userName
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPage(),
            $objRecord->getTitle(),
            $objRecord->getYear(),
            $objRecord->getAuthors(),
            $objRecord->getHolder(),
            $objRecord->getCopyrightOrder(),
            $objRecord->getUsername()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCopyrightid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_copyrights` SET 
            copyrightId=?,
            page=?,
            title=?,
            year=?,
            authors=?,
            holder=?,
            copyright_order=?,
            userName=?
        WHERE copyrightId=?';
        $arrSetParams = array(
            $objRecord->getCopyrightid(),
            $objRecord->getPage(),
            $objRecord->getTitle(),
            $objRecord->getYear(),
            $objRecord->getAuthors(),
            $objRecord->getHolder(),
            $objRecord->getCopyrightOrder(),
            $objRecord->getUsername()
        );
        $arrKeyParams = array($objRecord->getOrigCopyrightid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_copyrights` WHERE copyrightId=?';
        $params = array($objRecord->getCopyrightid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
