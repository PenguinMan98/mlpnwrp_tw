<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFaqsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFaqs($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFaqs($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($faqId)
    {
        $strSql = 'SELECT * FROM `tiki_faqs` WHERE faqId=?';
        $params = array($faqId);
        return Model_Data_TikiFaqsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_faqs` (
            faqId,
            title,
            description,
            created,
            questions,
            hits,
            canSuggest
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getQuestions(),
            $objRecord->getHits(),
            $objRecord->getCansuggest()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFaqid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_faqs` (
            faqId,
            title,
            description,
            created,
            questions,
            hits,
            canSuggest
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getQuestions(),
            $objRecord->getHits(),
            $objRecord->getCansuggest()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFaqid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_faqs` SET 
            faqId=?,
            title=?,
            description=?,
            created=?,
            questions=?,
            hits=?,
            canSuggest=?
        WHERE faqId=?';
        $arrSetParams = array(
            $objRecord->getFaqid(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getQuestions(),
            $objRecord->getHits(),
            $objRecord->getCansuggest()
        );
        $arrKeyParams = array($objRecord->getOrigFaqid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_faqs` WHERE faqId=?';
        $params = array($objRecord->getFaqid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
