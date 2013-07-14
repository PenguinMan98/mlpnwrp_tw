<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSuggestedFaqQuestionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSuggestedFaqQuestions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSuggestedFaqQuestions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($sfqId)
    {
        $strSql = 'SELECT * FROM `tiki_suggested_faq_questions` WHERE sfqId=?';
        $params = array($sfqId);
        return Model_Data_TikiSuggestedFaqQuestionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_suggested_faq_questions` (
            sfqId,
            faqId,
            question,
            answer,
            created,
            user
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getFaqid(),
            $objRecord->getQuestion(),
            $objRecord->getAnswer(),
            $objRecord->getCreated(),
            $objRecord->getUser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSfqid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_suggested_faq_questions` (
            sfqId,
            faqId,
            question,
            answer,
            created,
            user
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getFaqid(),
            $objRecord->getQuestion(),
            $objRecord->getAnswer(),
            $objRecord->getCreated(),
            $objRecord->getUser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSfqid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_suggested_faq_questions` SET 
            sfqId=?,
            faqId=?,
            question=?,
            answer=?,
            created=?,
            user=?
        WHERE sfqId=?';
        $arrSetParams = array(
            $objRecord->getSfqid(),
            $objRecord->getFaqid(),
            $objRecord->getQuestion(),
            $objRecord->getAnswer(),
            $objRecord->getCreated(),
            $objRecord->getUser()
        );
        $arrKeyParams = array($objRecord->getOrigSfqid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_suggested_faq_questions` WHERE sfqId=?';
        $params = array($objRecord->getSfqid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
