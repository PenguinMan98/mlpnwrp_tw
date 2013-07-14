<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSentNewslettersBase
{
    protected $m_editionId;
    protected $m_nlId;
    protected $m_users;
    protected $m_sent;
    protected $m_subject;
    protected $m_data;
    protected $m_datatxt;
    protected $m_wysiwyg;
    protected $m_editionId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setNlid(0);
        }
        return;
    }
    public function TikiSentNewslettersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getEditionid()
    {
        return $this->m_editionId;
    }
    public function setEditionid($value)
    {
        $this->m_editionId = $value;
        $this->setOrigEditionid($value);
        return;
    }

    public function getNlid()
    {
        return $this->m_nlId;
    }
    public function setNlid($value)
    {
        $this->m_nlId = $value;
        return;
    }

    public function getUsers()
    {
        return $this->m_users;
    }
    public function setUsers($value)
    {
        $this->m_users = $value;
        return;
    }

    public function getSent()
    {
        return $this->m_sent;
    }
    public function setSent($value)
    {
        $this->m_sent = $value;
        return;
    }

    public function getSubject()
    {
        return $this->m_subject;
    }
    public function setSubject($value)
    {
        $this->m_subject = $value;
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

    public function getDatatxt()
    {
        return $this->m_datatxt;
    }
    public function setDatatxt($value)
    {
        $this->m_datatxt = $value;
        return;
    }

    public function getWysiwyg()
    {
        return $this->m_wysiwyg;
    }
    public function setWysiwyg($value)
    {
        $this->m_wysiwyg = $value;
        return;
    }

    public function getOrigEditionid()
    {
        return $this->m_editionId_Orig;
    }
    public function setOrigEditionid($value)
    {
        if (isset($this->m_editionId_Orig)) { return; }
        $this->m_editionId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setEditionid($arrValues['editionId']);
        $this->setNlid($arrValues['nlId']);
        $this->setUsers($arrValues['users']);
        $this->setSent($arrValues['sent']);
        $this->setSubject($arrValues['subject']);
        $this->setData($arrValues['data']);
        $this->setDatatxt($arrValues['datatxt']);
        $this->setWysiwyg($arrValues['wysiwyg']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'editionId':
                    $this->setEditionid($val);
                    break;
                case 'nlId':
                    $this->setNlid($val);
                    break;
                case 'users':
                    $this->setUsers($val);
                    break;
                case 'sent':
                    $this->setSent($val);
                    break;
                case 'subject':
                    $this->setSubject($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'datatxt':
                    $this->setDatatxt($val);
                    break;
                case 'wysiwyg':
                    $this->setWysiwyg($val);
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
        $arrValues['editionId'] = $this->getEditionid();
        $arrValues['nlId'] = $this->getNlid();
        $arrValues['users'] = $this->getUsers();
        $arrValues['sent'] = $this->getSent();
        $arrValues['subject'] = $this->getSubject();
        $arrValues['data'] = $this->getData();
        $arrValues['datatxt'] = $this->getDatatxt();
        $arrValues['wysiwyg'] = $this->getWysiwyg();
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
