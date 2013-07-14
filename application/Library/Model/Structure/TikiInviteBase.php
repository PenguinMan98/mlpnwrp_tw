<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiInviteBase
{
    protected $m_id;
    protected $m_inviter;
    protected $m_groups;
    protected $m_ts;
    protected $m_emailsubject;
    protected $m_emailcontent;
    protected $m_wikicontent;
    protected $m_wikipageafter;
    protected $m_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiInviteBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getId()
    {
        return $this->m_id;
    }
    public function setId($value)
    {
        $this->m_id = $value;
        $this->setOrigId($value);
        return;
    }

    public function getInviter()
    {
        return $this->m_inviter;
    }
    public function setInviter($value)
    {
        $this->m_inviter = $value;
        return;
    }

    public function getGroups()
    {
        return $this->m_groups;
    }
    public function setGroups($value)
    {
        $this->m_groups = $value;
        return;
    }

    public function getTs()
    {
        return $this->m_ts;
    }
    public function setTs($value)
    {
        $this->m_ts = $value;
        return;
    }

    public function getEmailsubject()
    {
        return $this->m_emailsubject;
    }
    public function setEmailsubject($value)
    {
        $this->m_emailsubject = $value;
        return;
    }

    public function getEmailcontent()
    {
        return $this->m_emailcontent;
    }
    public function setEmailcontent($value)
    {
        $this->m_emailcontent = $value;
        return;
    }

    public function getWikicontent()
    {
        return $this->m_wikicontent;
    }
    public function setWikicontent($value)
    {
        $this->m_wikicontent = $value;
        return;
    }

    public function getWikipageafter()
    {
        return $this->m_wikipageafter;
    }
    public function setWikipageafter($value)
    {
        $this->m_wikipageafter = $value;
        return;
    }

    public function getOrigId()
    {
        return $this->m_id_Orig;
    }
    public function setOrigId($value)
    {
        if (isset($this->m_id_Orig)) { return; }
        $this->m_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setId($arrValues['id']);
        $this->setInviter($arrValues['inviter']);
        $this->setGroups($arrValues['groups']);
        $this->setTs($arrValues['ts']);
        $this->setEmailsubject($arrValues['emailsubject']);
        $this->setEmailcontent($arrValues['emailcontent']);
        $this->setWikicontent($arrValues['wikicontent']);
        $this->setWikipageafter($arrValues['wikipageafter']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'inviter':
                    $this->setInviter($val);
                    break;
                case 'groups':
                    $this->setGroups($val);
                    break;
                case 'ts':
                    $this->setTs($val);
                    break;
                case 'emailsubject':
                    $this->setEmailsubject($val);
                    break;
                case 'emailcontent':
                    $this->setEmailcontent($val);
                    break;
                case 'wikicontent':
                    $this->setWikicontent($val);
                    break;
                case 'wikipageafter':
                    $this->setWikipageafter($val);
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
        $arrValues['id'] = $this->getId();
        $arrValues['inviter'] = $this->getInviter();
        $arrValues['groups'] = $this->getGroups();
        $arrValues['ts'] = $this->getTs();
        $arrValues['emailsubject'] = $this->getEmailsubject();
        $arrValues['emailcontent'] = $this->getEmailcontent();
        $arrValues['wikicontent'] = $this->getWikicontent();
        $arrValues['wikipageafter'] = $this->getWikipageafter();
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
