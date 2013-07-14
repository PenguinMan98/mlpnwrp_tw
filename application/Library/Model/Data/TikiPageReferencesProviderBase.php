<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPageReferencesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPageReferences($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPageReferences($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($ref_id)
    {
        $strSql = 'SELECT * FROM `tiki_page_references` WHERE ref_id=?';
        $params = array($ref_id);
        return Model_Data_TikiPageReferencesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_page_references` (
            ref_id,
            page_id,
            biblio_code,
            author,
            title,
            part,
            uri,
            code,
            year,
            publisher,
            location,
            style,
            template,
            last_modified
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPageId(),
            $objRecord->getBiblioCode(),
            $objRecord->getAuthor(),
            $objRecord->getTitle(),
            $objRecord->getPart(),
            $objRecord->getUri(),
            $objRecord->getCode(),
            $objRecord->getYear(),
            $objRecord->getPublisher(),
            $objRecord->getLocation(),
            $objRecord->getStyle(),
            $objRecord->getTemplate(),
            $objRecord->getLastModified()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRefId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_page_references` (
            ref_id,
            page_id,
            biblio_code,
            author,
            title,
            part,
            uri,
            code,
            year,
            publisher,
            location,
            style,
            template,
            last_modified
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPageId(),
            $objRecord->getBiblioCode(),
            $objRecord->getAuthor(),
            $objRecord->getTitle(),
            $objRecord->getPart(),
            $objRecord->getUri(),
            $objRecord->getCode(),
            $objRecord->getYear(),
            $objRecord->getPublisher(),
            $objRecord->getLocation(),
            $objRecord->getStyle(),
            $objRecord->getTemplate(),
            $objRecord->getLastModified()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRefId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_page_references` SET 
            ref_id=?,
            page_id=?,
            biblio_code=?,
            author=?,
            title=?,
            part=?,
            uri=?,
            code=?,
            year=?,
            publisher=?,
            location=?,
            style=?,
            template=?,
            last_modified=?
        WHERE ref_id=?';
        $arrSetParams = array(
            $objRecord->getRefId(),
            $objRecord->getPageId(),
            $objRecord->getBiblioCode(),
            $objRecord->getAuthor(),
            $objRecord->getTitle(),
            $objRecord->getPart(),
            $objRecord->getUri(),
            $objRecord->getCode(),
            $objRecord->getYear(),
            $objRecord->getPublisher(),
            $objRecord->getLocation(),
            $objRecord->getStyle(),
            $objRecord->getTemplate(),
            $objRecord->getLastModified()
        );
        $arrKeyParams = array($objRecord->getOrigRefId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_page_references` WHERE ref_id=?';
        $params = array($objRecord->getRefId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
