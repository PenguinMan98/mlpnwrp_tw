<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserAnswersUploadsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserAnswersUploads($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserAnswersUploads($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($answerUploadId)
    {
        $strSql = 'SELECT * FROM `tiki_user_answers_uploads` WHERE answerUploadId=?';
        $params = array($answerUploadId);
        return Model_Data_TikiUserAnswersUploadsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_answers_uploads` (
            answerUploadId,
            userResultId,
            questionId,
            filename,
            filetype,
            filesize,
            filecontent
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserresultid(),
            $objRecord->getQuestionid(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getFilecontent()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setAnsweruploadid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_answers_uploads` (
            answerUploadId,
            userResultId,
            questionId,
            filename,
            filetype,
            filesize,
            filecontent
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserresultid(),
            $objRecord->getQuestionid(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getFilecontent()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setAnsweruploadid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_answers_uploads` SET 
            answerUploadId=?,
            userResultId=?,
            questionId=?,
            filename=?,
            filetype=?,
            filesize=?,
            filecontent=?
        WHERE answerUploadId=?';
        $arrSetParams = array(
            $objRecord->getAnsweruploadid(),
            $objRecord->getUserresultid(),
            $objRecord->getQuestionid(),
            $objRecord->getFilename(),
            $objRecord->getFiletype(),
            $objRecord->getFilesize(),
            $objRecord->getFilecontent()
        );
        $arrKeyParams = array($objRecord->getOrigAnsweruploadid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_answers_uploads` WHERE answerUploadId=?';
        $params = array($objRecord->getAnsweruploadid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
