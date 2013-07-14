<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiProgrammedContentBase
{
    protected $m_pId;
    protected $m_contentId;
    protected $m_content_type;
    protected $m_publishDate;
    protected $m_data;
    protected $m_pId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setContentid(0);
            $this->setContentType('static');
            $this->setPublishdate(0);
        }
        return;
    }
    public function TikiProgrammedContentBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPid()
    {
        return $this->m_pId;
    }
    public function setPid($value)
    {
        $this->m_pId = $value;
        $this->setOrigPid($value);
        return;
    }

    public function getContentid()
    {
        return $this->m_contentId;
    }
    public function setContentid($value)
    {
        $this->m_contentId = $value;
        return;
    }

    public function getContentType()
    {
        return $this->m_content_type;
    }
    public function setContentType($value)
    {
        $this->m_content_type = $value;
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

    public function getData()
    {
        return $this->m_data;
    }
    public function setData($value)
    {
        $this->m_data = $value;
        return;
    }

    public function getOrigPid()
    {
        return $this->m_pId_Orig;
    }
    public function setOrigPid($value)
    {
        if (isset($this->m_pId_Orig)) { return; }
        $this->m_pId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPid($arrValues['pId']);
        $this->setContentid($arrValues['contentId']);
        $this->setContentType($arrValues['content_type']);
        $this->setPublishdate($arrValues['publishDate']);
        $this->setData($arrValues['data']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'pId':
                    $this->setPid($val);
                    break;
                case 'contentId':
                    $this->setContentid($val);
                    break;
                case 'content_type':
                    $this->setContentType($val);
                    break;
                case 'publishDate':
                    $this->setPublishdate($val);
                    break;
                case 'data':
                    $this->setData($val);
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
        $arrValues['pId'] = $this->getPid();
        $arrValues['contentId'] = $this->getContentid();
        $arrValues['content_type'] = $this->getContentType();
        $arrValues['publishDate'] = $this->getPublishdate();
        $arrValues['data'] = $this->getData();
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
