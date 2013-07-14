<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiQuizzesBase
{
    protected $m_quizId;
    protected $m_name;
    protected $m_description;
    protected $m_canRepeat;
    protected $m_storeResults;
    protected $m_questionsPerPage;
    protected $m_timeLimited;
    protected $m_timeLimit;
    protected $m_created;
    protected $m_taken;
    protected $m_immediateFeedback;
    protected $m_showAnswers;
    protected $m_shuffleQuestions;
    protected $m_shuffleAnswers;
    protected $m_publishDate;
    protected $m_expireDate;
    protected $m_bDeleted;
    protected $m_nAuthor;
    protected $m_bOnline;
    protected $m_bRandomQuestions;
    protected $m_nRandomQuestions;
    protected $m_bLimitQuestionsPerPage;
    protected $m_nLimitQuestionsPerPage;
    protected $m_bMultiSession;
    protected $m_nCanRepeat;
    protected $m_sGradingMethod;
    protected $m_sShowScore;
    protected $m_sShowCorrectAnswers;
    protected $m_sPublishStats;
    protected $m_bAdditionalQuestions;
    protected $m_bForum;
    protected $m_sForum;
    protected $m_sPrologue;
    protected $m_sData;
    protected $m_sEpilogue;
    protected $m_passingperct;
    protected $m_quizId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setPassingperct(0);
        }
        return;
    }
    public function TikiQuizzesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getQuizid()
    {
        return $this->m_quizId;
    }
    public function setQuizid($value)
    {
        $this->m_quizId = $value;
        $this->setOrigQuizid($value);
        return;
    }

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        return;
    }

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getCanrepeat()
    {
        return $this->m_canRepeat;
    }
    public function setCanrepeat($value)
    {
        $this->m_canRepeat = $value;
        return;
    }

    public function getStoreresults()
    {
        return $this->m_storeResults;
    }
    public function setStoreresults($value)
    {
        $this->m_storeResults = $value;
        return;
    }

    public function getQuestionsperpage()
    {
        return $this->m_questionsPerPage;
    }
    public function setQuestionsperpage($value)
    {
        $this->m_questionsPerPage = $value;
        return;
    }

    public function getTimelimited()
    {
        return $this->m_timeLimited;
    }
    public function setTimelimited($value)
    {
        $this->m_timeLimited = $value;
        return;
    }

    public function getTimelimit()
    {
        return $this->m_timeLimit;
    }
    public function setTimelimit($value)
    {
        $this->m_timeLimit = $value;
        return;
    }

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
        return;
    }

    public function getTaken()
    {
        return $this->m_taken;
    }
    public function setTaken($value)
    {
        $this->m_taken = $value;
        return;
    }

    public function getImmediatefeedback()
    {
        return $this->m_immediateFeedback;
    }
    public function setImmediatefeedback($value)
    {
        $this->m_immediateFeedback = $value;
        return;
    }

    public function getShowanswers()
    {
        return $this->m_showAnswers;
    }
    public function setShowanswers($value)
    {
        $this->m_showAnswers = $value;
        return;
    }

    public function getShufflequestions()
    {
        return $this->m_shuffleQuestions;
    }
    public function setShufflequestions($value)
    {
        $this->m_shuffleQuestions = $value;
        return;
    }

    public function getShuffleanswers()
    {
        return $this->m_shuffleAnswers;
    }
    public function setShuffleanswers($value)
    {
        $this->m_shuffleAnswers = $value;
        return;
    }

    public function getPublishdate()
    {
        return $this->m_publishDate;
    }
    public function setPublishdate($value)
    {
        $this->m_publishDate = $value;
        return;
    }

    public function getExpiredate()
    {
        return $this->m_expireDate;
    }
    public function setExpiredate($value)
    {
        $this->m_expireDate = $value;
        return;
    }

    public function getBdeleted()
    {
        return $this->m_bDeleted;
    }
    public function setBdeleted($value)
    {
        $this->m_bDeleted = $value;
        return;
    }

    public function getNauthor()
    {
        return $this->m_nAuthor;
    }
    public function setNauthor($value)
    {
        $this->m_nAuthor = $value;
        return;
    }

    public function getBonline()
    {
        return $this->m_bOnline;
    }
    public function setBonline($value)
    {
        $this->m_bOnline = $value;
        return;
    }

    public function getBrandomquestions()
    {
        return $this->m_bRandomQuestions;
    }
    public function setBrandomquestions($value)
    {
        $this->m_bRandomQuestions = $value;
        return;
    }

    public function getNrandomquestions()
    {
        return $this->m_nRandomQuestions;
    }
    public function setNrandomquestions($value)
    {
        $this->m_nRandomQuestions = $value;
        return;
    }

    public function getBlimitquestionsperpage()
    {
        return $this->m_bLimitQuestionsPerPage;
    }
    public function setBlimitquestionsperpage($value)
    {
        $this->m_bLimitQuestionsPerPage = $value;
        return;
    }

    public function getNlimitquestionsperpage()
    {
        return $this->m_nLimitQuestionsPerPage;
    }
    public function setNlimitquestionsperpage($value)
    {
        $this->m_nLimitQuestionsPerPage = $value;
        return;
    }

    public function getBmultisession()
    {
        return $this->m_bMultiSession;
    }
    public function setBmultisession($value)
    {
        $this->m_bMultiSession = $value;
        return;
    }

    public function getNcanrepeat()
    {
        return $this->m_nCanRepeat;
    }
    public function setNcanrepeat($value)
    {
        $this->m_nCanRepeat = $value;
        return;
    }

    public function getSgradingmethod()
    {
        return $this->m_sGradingMethod;
    }
    public function setSgradingmethod($value)
    {
        $this->m_sGradingMethod = $value;
        return;
    }

    public function getSshowscore()
    {
        return $this->m_sShowScore;
    }
    public function setSshowscore($value)
    {
        $this->m_sShowScore = $value;
        return;
    }

    public function getSshowcorrectanswers()
    {
        return $this->m_sShowCorrectAnswers;
    }
    public function setSshowcorrectanswers($value)
    {
        $this->m_sShowCorrectAnswers = $value;
        return;
    }

    public function getSpublishstats()
    {
        return $this->m_sPublishStats;
    }
    public function setSpublishstats($value)
    {
        $this->m_sPublishStats = $value;
        return;
    }

    public function getBadditionalquestions()
    {
        return $this->m_bAdditionalQuestions;
    }
    public function setBadditionalquestions($value)
    {
        $this->m_bAdditionalQuestions = $value;
        return;
    }

    public function getBforum()
    {
        return $this->m_bForum;
    }
    public function setBforum($value)
    {
        $this->m_bForum = $value;
        return;
    }

    public function getSforum()
    {
        return $this->m_sForum;
    }
    public function setSforum($value)
    {
        $this->m_sForum = $value;
        return;
    }

    public function getSprologue()
    {
        return $this->m_sPrologue;
    }
    public function setSprologue($value)
    {
        $this->m_sPrologue = $value;
        return;
    }

    public function getSdata()
    {
        return $this->m_sData;
    }
    public function setSdata($value)
    {
        $this->m_sData = $value;
        return;
    }

    public function getSepilogue()
    {
        return $this->m_sEpilogue;
    }
    public function setSepilogue($value)
    {
        $this->m_sEpilogue = $value;
        return;
    }

    public function getPassingperct()
    {
        return $this->m_passingperct;
    }
    public function setPassingperct($value)
    {
        $this->m_passingperct = $value;
        return;
    }

    public function getOrigQuizid()
    {
        return $this->m_quizId_Orig;
    }
    public function setOrigQuizid($value)
    {
        if (isset($this->m_quizId_Orig)) { return; }
        $this->m_quizId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setQuizid($arrValues['quizId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setCanrepeat($arrValues['canRepeat']);
        $this->setStoreresults($arrValues['storeResults']);
        $this->setQuestionsperpage($arrValues['questionsPerPage']);
        $this->setTimelimited($arrValues['timeLimited']);
        $this->setTimelimit($arrValues['timeLimit']);
        $this->setCreated($arrValues['created']);
        $this->setTaken($arrValues['taken']);
        $this->setImmediatefeedback($arrValues['immediateFeedback']);
        $this->setShowanswers($arrValues['showAnswers']);
        $this->setShufflequestions($arrValues['shuffleQuestions']);
        $this->setShuffleanswers($arrValues['shuffleAnswers']);
        $this->setPublishdate($arrValues['publishDate']);
        $this->setExpiredate($arrValues['expireDate']);
        $this->setBdeleted($arrValues['bDeleted']);
        $this->setNauthor($arrValues['nAuthor']);
        $this->setBonline($arrValues['bOnline']);
        $this->setBrandomquestions($arrValues['bRandomQuestions']);
        $this->setNrandomquestions($arrValues['nRandomQuestions']);
        $this->setBlimitquestionsperpage($arrValues['bLimitQuestionsPerPage']);
        $this->setNlimitquestionsperpage($arrValues['nLimitQuestionsPerPage']);
        $this->setBmultisession($arrValues['bMultiSession']);
        $this->setNcanrepeat($arrValues['nCanRepeat']);
        $this->setSgradingmethod($arrValues['sGradingMethod']);
        $this->setSshowscore($arrValues['sShowScore']);
        $this->setSshowcorrectanswers($arrValues['sShowCorrectAnswers']);
        $this->setSpublishstats($arrValues['sPublishStats']);
        $this->setBadditionalquestions($arrValues['bAdditionalQuestions']);
        $this->setBforum($arrValues['bForum']);
        $this->setSforum($arrValues['sForum']);
        $this->setSprologue($arrValues['sPrologue']);
        $this->setSdata($arrValues['sData']);
        $this->setSepilogue($arrValues['sEpilogue']);
        $this->setPassingperct($arrValues['passingperct']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'quizId':
                    $this->setQuizid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'canRepeat':
                    $this->setCanrepeat($val);
                    break;
                case 'storeResults':
                    $this->setStoreresults($val);
                    break;
                case 'questionsPerPage':
                    $this->setQuestionsperpage($val);
                    break;
                case 'timeLimited':
                    $this->setTimelimited($val);
                    break;
                case 'timeLimit':
                    $this->setTimelimit($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'taken':
                    $this->setTaken($val);
                    break;
                case 'immediateFeedback':
                    $this->setImmediatefeedback($val);
                    break;
                case 'showAnswers':
                    $this->setShowanswers($val);
                    break;
                case 'shuffleQuestions':
                    $this->setShufflequestions($val);
                    break;
                case 'shuffleAnswers':
                    $this->setShuffleanswers($val);
                    break;
                case 'publishDate':
                    $this->setPublishdate($val);
                    break;
                case 'expireDate':
                    $this->setExpiredate($val);
                    break;
                case 'bDeleted':
                    $this->setBdeleted($val);
                    break;
                case 'nAuthor':
                    $this->setNauthor($val);
                    break;
                case 'bOnline':
                    $this->setBonline($val);
                    break;
                case 'bRandomQuestions':
                    $this->setBrandomquestions($val);
                    break;
                case 'nRandomQuestions':
                    $this->setNrandomquestions($val);
                    break;
                case 'bLimitQuestionsPerPage':
                    $this->setBlimitquestionsperpage($val);
                    break;
                case 'nLimitQuestionsPerPage':
                    $this->setNlimitquestionsperpage($val);
                    break;
                case 'bMultiSession':
                    $this->setBmultisession($val);
                    break;
                case 'nCanRepeat':
                    $this->setNcanrepeat($val);
                    break;
                case 'sGradingMethod':
                    $this->setSgradingmethod($val);
                    break;
                case 'sShowScore':
                    $this->setSshowscore($val);
                    break;
                case 'sShowCorrectAnswers':
                    $this->setSshowcorrectanswers($val);
                    break;
                case 'sPublishStats':
                    $this->setSpublishstats($val);
                    break;
                case 'bAdditionalQuestions':
                    $this->setBadditionalquestions($val);
                    break;
                case 'bForum':
                    $this->setBforum($val);
                    break;
                case 'sForum':
                    $this->setSforum($val);
                    break;
                case 'sPrologue':
                    $this->setSprologue($val);
                    break;
                case 'sData':
                    $this->setSdata($val);
                    break;
                case 'sEpilogue':
                    $this->setSepilogue($val);
                    break;
                case 'passingperct':
                    $this->setPassingperct($val);
                    break;
                default:
                    break;
            }
        }
        return;
    }

    public function getAsArray()
    {
        $arrValues = array();
        $arrValues['quizId'] = $this->getQuizid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['canRepeat'] = $this->getCanrepeat();
        $arrValues['storeResults'] = $this->getStoreresults();
        $arrValues['questionsPerPage'] = $this->getQuestionsperpage();
        $arrValues['timeLimited'] = $this->getTimelimited();
        $arrValues['timeLimit'] = $this->getTimelimit();
        $arrValues['created'] = $this->getCreated();
        $arrValues['taken'] = $this->getTaken();
        $arrValues['immediateFeedback'] = $this->getImmediatefeedback();
        $arrValues['showAnswers'] = $this->getShowanswers();
        $arrValues['shuffleQuestions'] = $this->getShufflequestions();
        $arrValues['shuffleAnswers'] = $this->getShuffleanswers();
        $arrValues['publishDate'] = $this->getPublishdate();
        $arrValues['expireDate'] = $this->getExpiredate();
        $arrValues['bDeleted'] = $this->getBdeleted();
        $arrValues['nAuthor'] = $this->getNauthor();
        $arrValues['bOnline'] = $this->getBonline();
        $arrValues['bRandomQuestions'] = $this->getBrandomquestions();
        $arrValues['nRandomQuestions'] = $this->getNrandomquestions();
        $arrValues['bLimitQuestionsPerPage'] = $this->getBlimitquestionsperpage();
        $arrValues['nLimitQuestionsPerPage'] = $this->getNlimitquestionsperpage();
        $arrValues['bMultiSession'] = $this->getBmultisession();
        $arrValues['nCanRepeat'] = $this->getNcanrepeat();
        $arrValues['sGradingMethod'] = $this->getSgradingmethod();
        $arrValues['sShowScore'] = $this->getSshowscore();
        $arrValues['sShowCorrectAnswers'] = $this->getSshowcorrectanswers();
        $arrValues['sPublishStats'] = $this->getSpublishstats();
        $arrValues['bAdditionalQuestions'] = $this->getBadditionalquestions();
        $arrValues['bForum'] = $this->getBforum();
        $arrValues['sForum'] = $this->getSforum();
        $arrValues['sPrologue'] = $this->getSprologue();
        $arrValues['sData'] = $this->getSdata();
        $arrValues['sEpilogue'] = $this->getSepilogue();
        $arrValues['passingperct'] = $this->getPassingperct();
        return $arrValues;
    }

    public function validateInsert(&$arrErrors)
    {
        return true;
    }

    public function validateUpdate(&$arrErrors)
    {
        return true;
    }
}
