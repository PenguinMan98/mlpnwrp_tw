<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiLanguageBase
{
    protected $m_id;
    protected $m_source;
    protected $m_lang;
    protected $m_tran;
    protected $m_changed;
    protected $m_userId;
    protected $m_lastModif;
    protected $m_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setLang('');
        }
        return;
    }
    public function TikiLanguageBase($arrData = null)
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

    public function getSource()
    {
        return $this->m_source;
    }
    public function setSource($value)
    {
        $this->m_source = $value;
        return;
    }

    public function getLang()
    {
        return $this->m_lang;
    }
    public function setLang($value)
    {
        $this->m_lang = $value;
        return;
    }

    public function getTran()
    {
        return $this->m_tran;
    }
    public function setTran($value)
    {
        $this->m_tran = $value;
        return;
    }

    public function getChanged()
    {
        return $this->m_changed;
    }
    public function setChanged($value)
    {
        $this->m_changed = $value;
        return;
    }

    public function getUserid()
    {
        return $this->m_userId;
    }
    public function setUserid($value)
    {
        $this->m_userId = $value;
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
        $this->setSource($arrValues['source']);
        $this->setLang($arrValues['lang']);
        $this->setTran($arrValues['tran']);
        $this->setChanged($arrValues['changed']);
        $this->setUserid($arrValues['userId']);
        $this->setLastmodif($arrValues['lastModif']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'source':
                    $this->setSource($val);
                    break;
                case 'lang':
                    $this->setLang($val);
                    break;
                case 'tran':
                    $this->setTran($val);
                    break;
                case 'changed':
                    $this->setChanged($val);
                    break;
                case 'userId':
                    $this->setUserid($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
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
        $arrValues['source'] = $this->getSource();
        $arrValues['lang'] = $this->getLang();
        $arrValues['tran'] = $this->getTran();
        $arrValues['changed'] = $this->getChanged();
        $arrValues['userId'] = $this->getUserid();
        $arrValues['lastModif'] = $this->getLastmodif();
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
