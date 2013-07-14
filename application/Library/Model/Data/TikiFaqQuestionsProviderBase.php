<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFaqQuestionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFaqQuestions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFaqQuestions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($questionId)
    {
        $strSql = 'SELECT * FROM `tiki_faq_questions` WHERE questionId=?';
        $params = array($questionId);
        return Model_Data_TikiFaqQuestionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_faq_questions` (
            questionId,
            faqId,
            position,
            question,
            answer,
            created
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getFaqid(),
            $objRecord->getPosition(),
            $objRecord->getQuestion(),
            $objRecord->getAnswer(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setQuestionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_faq_questions` (
            questionId,
            faqId,
            position,
            question,
            answer,
            created
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getFaqid(),
            $objRecord->getPosition(),
            $objRecord->getQuestion(),
            $objRecord->getAnswer(),
            $objRecord->getCreated()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setQuestionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_faq_questions` SET 
            questionId=?,
            faqId=?,
            position=?,
            question=?,
            answer=?,
            created=?
        WHERE questionId=?';
        $arrSetParams = array(
            $objRecord->getQuestionid(),
            $objRecord->getFaqid(),
            $objRecord->getPosition(),
            $objRecord->getQuestion(),
            $objRecord->getAnswer(),
            $objRecord->getCreated()
        );
        $arrKeyParams = array($objRecord->getOrigQuestionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_faq_questions` WHERE questionId=?';
        $params = array($objRecord->getQuestionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
