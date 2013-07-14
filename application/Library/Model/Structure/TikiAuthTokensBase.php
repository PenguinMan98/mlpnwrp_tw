<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiAuthTokensBase
{
    protected $m_tokenId;
    protected $m_creation;
    protected $m_timeout;
    protected $m_hits;
    protected $m_maxhits;
    protected $m_token;
    protected $m_entry;
    protected $m_email;
    protected $m_parameters;
    protected $m_groups;
    protected $m_tokenId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCreation('CURRENT_TIMESTAMP');
            $this->setTimeout(0);
            $this->setHits(1);
            $this->setMaxhits(1);
        }
        return;
    }
    public function TikiAuthTokensBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTokenid()
    {
        return $this->m_tokenId;
    }
    public function setTokenid($value)
    {
        $this->m_tokenId = $value;
        $this->setOrigTokenid($value);
        return;
    }

    public function getCreation()
    {
        return $this->m_creation;
    }
    public function setCreation($value)
    {
        $this->m_creation = $value;
        return;
    }

    public function getTimeout()
    {
        return $this->m_timeout;
    }
    public function setTimeout($value)
    {
        $this->m_timeout = $value;
        return;
    }

    public function getHits()
    {
        return $this->m_hits;
    }
    public function setHits($value)
    {
        $this->m_hits = $value;
        return;
    }

    public function getMaxhits()
    {
        return $this->m_maxhits;
    }
    public function setMaxhits($value)
    {
        $this->m_maxhits = $value;
        return;
    }

    public function getToken()
    {
        return $this->m_token;
    }
    public function setToken($value)
    {
        $this->m_token = $value;
        return;
    }

    public function getEntry()
    {
        return $this->m_entry;
    }
    public function setEntry($value)
    {
        $this->m_entry = $value;
        return;
    }

    public function getEmail()
    {
        return $this->m_email;
    }
    public function setEmail($value)
    {
        $this->m_email = $value;
        return;
    }

    public function getParameters()
    {
        return $this->m_parameters;
    }
    public function setParameters($value)
    {
        $this->m_parameters = $value;
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

    public function getOrigTokenid()
    {
        return $this->m_tokenId_Orig;
    }
    public function setOrigTokenid($value)
    {
        if (isset($this->m_tokenId_Orig)) { return; }
        $this->m_tokenId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTokenid($arrValues['tokenId']);
        $this->setCreation($arrValues['creation']);
        $this->setTimeout($arrValues['timeout']);
        $this->setHits($arrValues['hits']);
        $this->setMaxhits($arrValues['maxhits']);
        $this->setToken($arrValues['token']);
        $this->setEntry($arrValues['entry']);
        $this->setEmail($arrValues['email']);
        $this->setParameters($arrValues['parameters']);
        $this->setGroups($arrValues['groups']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'tokenId':
                    $this->setTokenid($val);
                    break;
                case 'creation':
                    $this->setCreation($val);
                    break;
                case 'timeout':
                    $this->setTimeout($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'maxhits':
                    $this->setMaxhits($val);
                    break;
                case 'token':
                    $this->setToken($val);
                    break;
                case 'entry':
                    $this->setEntry($val);
                    break;
                case 'email':
                    $this->setEmail($val);
                    break;
                case 'parameters':
                    $this->setParameters($val);
                    break;
                case 'groups':
                    $this->setGroups($val);
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
        $arrValues['tokenId'] = $this->getTokenid();
        $arrValues['creation'] = $this->getCreation();
        $arrValues['timeout'] = $this->getTimeout();
        $arrValues['hits'] = $this->getHits();
        $arrValues['maxhits'] = $this->getMaxhits();
        $arrValues['token'] = $this->getToken();
        $arrValues['entry'] = $this->getEntry();
        $arrValues['email'] = $this->getEmail();
        $arrValues['parameters'] = $this->getParameters();
        $arrValues['groups'] = $this->getGroups();
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
