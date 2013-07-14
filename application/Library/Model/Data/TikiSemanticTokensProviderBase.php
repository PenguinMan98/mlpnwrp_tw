<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSemanticTokensProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSemanticTokens($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSemanticTokens($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($token)
    {
        $strSql = 'SELECT * FROM `tiki_semantic_tokens` WHERE token=?';
        $params = array($token);
        return Model_Data_TikiSemanticTokensProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_semantic_tokens` (
            token,
            label,
            invert_token
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getToken(),
            $objRecord->getLabel(),
            $objRecord->getInvertToken()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_semantic_tokens` (
            token,
            label,
            invert_token
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getToken(),
            $objRecord->getLabel(),
            $objRecord->getInvertToken()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_semantic_tokens` SET 
            token=?,
            label=?,
            invert_token=?
        WHERE token=?';
        $arrSetParams = array(
            $objRecord->getToken(),
            $objRecord->getLabel(),
            $objRecord->getInvertToken()
        );
        $arrKeyParams = array($objRecord->getOrigToken());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_semantic_tokens` WHERE token=?';
        $params = array($objRecord->getToken());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
