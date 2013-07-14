<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPagesTranslationBitsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPagesTranslationBits($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPagesTranslationBits($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($translation_bit_id)
    {
        $strSql = 'SELECT * FROM `tiki_pages_translation_bits` WHERE translation_bit_id=?';
        $params = array($translation_bit_id);
        return Model_Data_TikiPagesTranslationBitsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_pages_translation_bits` (
            translation_bit_id,
            page_id,
            version,
            source_translation_bit,
            original_translation_bit,
            flags
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPageId(),
            $objRecord->getVersion(),
            $objRecord->getSourceTranslationBit(),
            $objRecord->getOriginalTranslationBit(),
            $objRecord->getFlags()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTranslationBitId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_pages_translation_bits` (
            translation_bit_id,
            page_id,
            version,
            source_translation_bit,
            original_translation_bit,
            flags
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPageId(),
            $objRecord->getVersion(),
            $objRecord->getSourceTranslationBit(),
            $objRecord->getOriginalTranslationBit(),
            $objRecord->getFlags()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTranslationBitId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_pages_translation_bits` SET 
            translation_bit_id=?,
            page_id=?,
            version=?,
            source_translation_bit=?,
            original_translation_bit=?,
            flags=?
        WHERE translation_bit_id=?';
        $arrSetParams = array(
            $objRecord->getTranslationBitId(),
            $objRecord->getPageId(),
            $objRecord->getVersion(),
            $objRecord->getSourceTranslationBit(),
            $objRecord->getOriginalTranslationBit(),
            $objRecord->getFlags()
        );
        $arrKeyParams = array($objRecord->getOrigTranslationBitId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_pages_translation_bits` WHERE translation_bit_id=?';
        $params = array($objRecord->getTranslationBitId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
