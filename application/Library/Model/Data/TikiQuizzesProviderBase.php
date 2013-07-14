<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiQuizzesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiQuizzes($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiQuizzes($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($quizId)
    {
        $strSql = 'SELECT * FROM `tiki_quizzes` WHERE quizId=?';
        $params = array($quizId);
        return Model_Data_TikiQuizzesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_quizzes` (
            quizId,
            name,
            description,
            canRepeat,
            storeResults,
            questionsPerPage,
            timeLimited,
            timeLimit,
            created,
            taken,
            immediateFeedback,
            showAnswers,
            shuffleQuestions,
            shuffleAnswers,
            publishDate,
            expireDate,
            bDeleted,
            nAuthor,
            bOnline,
            bRandomQuestions,
            nRandomQuestions,
            bLimitQuestionsPerPage,
            nLimitQuestionsPerPage,
            bMultiSession,
            nCanRepeat,
            sGradingMethod,
            sShowScore,
            sShowCorrectAnswers,
            sPublishStats,
            bAdditionalQuestions,
            bForum,
            sForum,
            sPrologue,
            sData,
            sEpilogue,
            passingperct
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCanrepeat(),
            $objRecord->getStoreresults(),
            $objRecord->getQuestionsperpage(),
            $objRecord->getTimelimited(),
            $objRecord->getTimelimit(),
            $objRecord->getCreated(),
            $objRecord->getTaken(),
            $objRecord->getImmediatefeedback(),
            $objRecord->getShowanswers(),
            $objRecord->getShufflequestions(),
            $objRecord->getShuffleanswers(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getBdeleted(),
            $objRecord->getNauthor(),
            $objRecord->getBonline(),
            $objRecord->getBrandomquestions(),
            $objRecord->getNrandomquestions(),
            $objRecord->getBlimitquestionsperpage(),
            $objRecord->getNlimitquestionsperpage(),
            $objRecord->getBmultisession(),
            $objRecord->getNcanrepeat(),
            $objRecord->getSgradingmethod(),
            $objRecord->getSshowscore(),
            $objRecord->getSshowcorrectanswers(),
            $objRecord->getSpublishstats(),
            $objRecord->getBadditionalquestions(),
            $objRecord->getBforum(),
            $objRecord->getSforum(),
            $objRecord->getSprologue(),
            $objRecord->getSdata(),
            $objRecord->getSepilogue(),
            $objRecord->getPassingperct()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setQuizid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_quizzes` (
            quizId,
            name,
            description,
            canRepeat,
            storeResults,
            questionsPerPage,
            timeLimited,
            timeLimit,
            created,
            taken,
            immediateFeedback,
            showAnswers,
            shuffleQuestions,
            shuffleAnswers,
            publishDate,
            expireDate,
            bDeleted,
            nAuthor,
            bOnline,
            bRandomQuestions,
            nRandomQuestions,
            bLimitQuestionsPerPage,
            nLimitQuestionsPerPage,
            bMultiSession,
            nCanRepeat,
            sGradingMethod,
            sShowScore,
            sShowCorrectAnswers,
            sPublishStats,
            bAdditionalQuestions,
            bForum,
            sForum,
            sPrologue,
            sData,
            sEpilogue,
            passingperct
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCanrepeat(),
            $objRecord->getStoreresults(),
            $objRecord->getQuestionsperpage(),
            $objRecord->getTimelimited(),
            $objRecord->getTimelimit(),
            $objRecord->getCreated(),
            $objRecord->getTaken(),
            $objRecord->getImmediatefeedback(),
            $objRecord->getShowanswers(),
            $objRecord->getShufflequestions(),
            $objRecord->getShuffleanswers(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getBdeleted(),
            $objRecord->getNauthor(),
            $objRecord->getBonline(),
            $objRecord->getBrandomquestions(),
            $objRecord->getNrandomquestions(),
            $objRecord->getBlimitquestionsperpage(),
            $objRecord->getNlimitquestionsperpage(),
            $objRecord->getBmultisession(),
            $objRecord->getNcanrepeat(),
            $objRecord->getSgradingmethod(),
            $objRecord->getSshowscore(),
            $objRecord->getSshowcorrectanswers(),
            $objRecord->getSpublishstats(),
            $objRecord->getBadditionalquestions(),
            $objRecord->getBforum(),
            $objRecord->getSforum(),
            $objRecord->getSprologue(),
            $objRecord->getSdata(),
            $objRecord->getSepilogue(),
            $objRecord->getPassingperct()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setQuizid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_quizzes` SET 
            quizId=?,
            name=?,
            description=?,
            canRepeat=?,
            storeResults=?,
            questionsPerPage=?,
            timeLimited=?,
            timeLimit=?,
            created=?,
            taken=?,
            immediateFeedback=?,
            showAnswers=?,
            shuffleQuestions=?,
            shuffleAnswers=?,
            publishDate=?,
            expireDate=?,
            bDeleted=?,
            nAuthor=?,
            bOnline=?,
            bRandomQuestions=?,
            nRandomQuestions=?,
            bLimitQuestionsPerPage=?,
            nLimitQuestionsPerPage=?,
            bMultiSession=?,
            nCanRepeat=?,
            sGradingMethod=?,
            sShowScore=?,
            sShowCorrectAnswers=?,
            sPublishStats=?,
            bAdditionalQuestions=?,
            bForum=?,
            sForum=?,
            sPrologue=?,
            sData=?,
            sEpilogue=?,
            passingperct=?
        WHERE quizId=?';
        $arrSetParams = array(
            $objRecord->getQuizid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCanrepeat(),
            $objRecord->getStoreresults(),
            $objRecord->getQuestionsperpage(),
            $objRecord->getTimelimited(),
            $objRecord->getTimelimit(),
            $objRecord->getCreated(),
            $objRecord->getTaken(),
            $objRecord->getImmediatefeedback(),
            $objRecord->getShowanswers(),
            $objRecord->getShufflequestions(),
            $objRecord->getShuffleanswers(),
            $objRecord->getPublishdate(),
            $objRecord->getExpiredate(),
            $objRecord->getBdeleted(),
            $objRecord->getNauthor(),
            $objRecord->getBonline(),
            $objRecord->getBrandomquestions(),
            $objRecord->getNrandomquestions(),
            $objRecord->getBlimitquestionsperpage(),
            $objRecord->getNlimitquestionsperpage(),
            $objRecord->getBmultisession(),
            $objRecord->getNcanrepeat(),
            $objRecord->getSgradingmethod(),
            $objRecord->getSshowscore(),
            $objRecord->getSshowcorrectanswers(),
            $objRecord->getSpublishstats(),
            $objRecord->getBadditionalquestions(),
            $objRecord->getBforum(),
            $objRecord->getSforum(),
            $objRecord->getSprologue(),
            $objRecord->getSdata(),
            $objRecord->getSepilogue(),
            $objRecord->getPassingperct()
        );
        $arrKeyParams = array($objRecord->getOrigQuizid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_quizzes` WHERE quizId=?';
        $params = array($objRecord->getQuizid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
