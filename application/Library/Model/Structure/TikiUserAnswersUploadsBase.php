<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserAnswersUploadsBase
{
    protected $m_answerUploadId;
    protected $m_userResultId;
    protected $m_questionId;
    protected $m_filename;
    protected $m_filetype;
    protected $m_filesize;
    protected $m_filecontent;
    protected $m_answerUploadId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUserresultid(0);
            $this->setQuestionid(0);
            $this->setFilename('');
            $this->setFiletype('');
            $this->setFilesize('');
        }
        return;
    }
    public function TikiUserAnswersUploadsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getAnsweruploadid()
    {
        return $this->m_answerUploadId;
    }
    public function setAnsweruploadid($value)
    {
        $this->m_answerUploadId = $value;
        $this->setOrigAnsweruploadid($value);
        return;
    }

    public function getUserresultid()
    {
        return $this->m_userResultId;
    }
    public function setUserresultid($value)
    {
        $this->m_userResultId = $value;
        return;
    }

    public function getQuestionid()
    {
        return $this->m_questionId;
    }
    public function setQuestionid($value)
    {
        $this->m_questionId = $value;
        return;
    }

    public function getFilename()
    {
        return $this->m_filename;
    }
    public function setFilename($value)
    {
        $this->m_filename = $value;
        return;
    }

    public function getFiletype()
    {
        return $this->m_filetype;
    }
    public function setFiletype($value)
    {
        $this->m_filetype = $value;
        return;
    }

    public function getFilesize()
    {
        return $this->m_filesize;
    }
    public function setFilesize($value)
    {
        $this->m_filesize = $value;
        return;
    }

    public function getFilecontent()
    {
        return $this->m_filecontent;
    }
    public function setFilecontent($value)
    {
        $this->m_filecontent = $value;
        return;
    }

    public function getOrigAnsweruploadid()
    {
        return $this->m_answerUploadId_Orig;
    }
    public function setOrigAnsweruploadid($value)
    {
        if (isset($this->m_answerUploadId_Orig)) { return; }
        $this->m_answerUploadId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setAnsweruploadid($arrValues['answerUploadId']);
        $this->setUserresultid($arrValues['userResultId']);
        $this->setQuestionid($arrValues['questionId']);
        $this->setFilename($arrValues['filename']);
        $this->setFiletype($arrValues['filetype']);
        $this->setFilesize($arrValues['filesize']);
        $this->setFilecontent($arrValues['filecontent']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'answerUploadId':
                    $this->setAnsweruploadid($val);
                    break;
                case 'userResultId':
                    $this->setUserresultid($val);
                    break;
                case 'questionId':
                    $this->setQuestionid($val);
                    break;
                case 'filename':
                    $this->setFilename($val);
                    break;
                case 'filetype':
                    $this->setFiletype($val);
                    break;
                case 'filesize':
                    $this->setFilesize($val);
                    break;
                case 'filecontent':
                    $this->setFilecontent($val);
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
        $arrValues['answerUploadId'] = $this->getAnsweruploadid();
        $arrValues['userResultId'] = $this->getUserresultid();
        $arrValues['questionId'] = $this->getQuestionid();
        $arrValues['filename'] = $this->getFilename();
        $arrValues['filetype'] = $this->getFiletype();
        $arrValues['filesize'] = $this->getFilesize();
        $arrValues['filecontent'] = $this->getFilecontent();
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
