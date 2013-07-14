<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiShoutboxWordsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiShoutboxWords($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiShoutboxWords($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($word)
    {
        $strSql = 'SELECT * FROM `tiki_shoutbox_words` WHERE word=?';
        $params = array($word);
        return Model_Data_TikiShoutboxWordsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_shoutbox_words` (
            word,
            qty
        ) VALUES  (?, ?)';
        $params = array($objRecord->getWord(),
            $objRecord->getQty()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_shoutbox_words` (
            word,
            qty
        ) VALUES  (?, ?)';
        $params = array($objRecord->getWord(),
            $objRecord->getQty()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_shoutbox_words` SET 
            word=?,
            qty=?
        WHERE word=?';
        $arrSetParams = array(
            $objRecord->getWord(),
            $objRecord->getQty()
        );
        $arrKeyParams = array($objRecord->getOrigWord());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_shoutbox_words` WHERE word=?';
        $params = array($objRecord->getWord());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
