<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserNotesBase
{
    protected $m_user;
    protected $m_noteId;
    protected $m_created;
    protected $m_name;
    protected $m_lastModif;
    protected $m_data;
    protected $m_size;
    protected $m_parse_mode;
    protected $m_noteId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
        }
        return;
    }
    public function TikiUserNotesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        return;
    }

    public function getNoteid()
    {
        return $this->m_noteId;
    }
    public function setNoteid($value)
    {
        $this->m_noteId = $value;
        $this->setOrigNoteid($value);
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

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        return;
    }

    public function getLastmodif()
    {
        return $this->m_lastModif;
    }
    public function setLastmodif($value)
    {
        $this->m_lastModif = $value;
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

    public function getSize()
    {
        return $this->m_size;
    }
    public function setSize($value)
    {
        $this->m_size = $value;
        return;
    }

    public function getParseMode()
    {
        return $this->m_parse_mode;
    }
    public function setParseMode($value)
    {
        $this->m_parse_mode = $value;
        return;
    }

    public function getOrigNoteid()
    {
        return $this->m_noteId_Orig;
    }
    public function setOrigNoteid($value)
    {
        if (isset($this->m_noteId_Orig)) { return; }
        $this->m_noteId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setNoteid($arrValues['noteId']);
        $this->setCreated($arrValues['created']);
        $this->setName($arrValues['name']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setData($arrValues['data']);
        $this->setSize($arrValues['size']);
        $this->setParseMode($arrValues['parse_mode']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'noteId':
                    $this->setNoteid($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'size':
                    $this->setSize($val);
                    break;
                case 'parse_mode':
                    $this->setParseMode($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['noteId'] = $this->getNoteid();
        $arrValues['created'] = $this->getCreated();
        $arrValues['name'] = $this->getName();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['data'] = $this->getData();
        $arrValues['size'] = $this->getSize();
        $arrValues['parse_mode'] = $this->getParseMode();
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
