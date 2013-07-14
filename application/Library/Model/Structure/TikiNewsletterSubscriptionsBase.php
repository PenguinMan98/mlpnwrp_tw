<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiNewsletterSubscriptionsBase
{
    protected $m_nlId;
    protected $m_email;
    protected $m_code;
    protected $m_valid;
    protected $m_subscribed;
    protected $m_isUser;
    protected $m_included;
    protected $m_nlId_Orig;
    protected $m_email_Orig;
    protected $m_isUser_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setIncluded('n');
        }
        return;
    }
    public function TikiNewsletterSubscriptionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getNlid()
    {
        return $this->m_nlId;
    }
    public function setNlid($value)
    {
        $this->m_nlId = $value;
        $this->setOrigNlid($value);
        return;
    }

    public function getEmail()
    {
        return $this->m_email;
    }
    public function setEmail($value)
    {
        $this->m_email = $value;
        $this->setOrigEmail($value);
        return;
    }

    public function getCode()
    {
        return $this->m_code;
    }
    public function setCode($value)
    {
        $this->m_code = $value;
        return;
    }

    public function getValid()
    {
        return $this->m_valid;
    }
    public function setValid($value)
    {
        $this->m_valid = $value;
        return;
    }

    public function getSubscribed()
    {
        return $this->m_subscribed;
    }
    public function setSubscribed($value)
    {
        $this->m_subscribed = $value;
        return;
    }

    public function getIsuser()
    {
        return $this->m_isUser;
    }
    public function setIsuser($value)
    {
        $this->m_isUser = $value;
        $this->setOrigIsuser($value);
        return;
    }

    public function getIncluded()
    {
        return $this->m_included;
    }
    public function setIncluded($value)
    {
        $this->m_included = $value;
        return;
    }

    public function getOrigNlid()
    {
        return $this->m_nlId_Orig;
    }
    public function setOrigNlid($value)
    {
        if (isset($this->m_nlId_Orig)) { return; }
        $this->m_nlId_Orig = $value;
        return;
    }

    public function getOrigEmail()
    {
        return $this->m_email_Orig;
    }
    public function setOrigEmail($value)
    {
        if (isset($this->m_email_Orig)) { return; }
        $this->m_email_Orig = $value;
        return;
    }

    public function getOrigIsuser()
    {
        return $this->m_isUser_Orig;
    }
    public function setOrigIsuser($value)
    {
        if (isset($this->m_isUser_Orig)) { return; }
        $this->m_isUser_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setNlid($arrValues['nlId']);
        $this->setEmail($arrValues['email']);
        $this->setCode($arrValues['code']);
        $this->setValid($arrValues['valid']);
        $this->setSubscribed($arrValues['subscribed']);
        $this->setIsuser($arrValues['isUser']);
        $this->setIncluded($arrValues['included']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'nlId':
                    $this->setNlid($val);
                    break;
                case 'email':
                    $this->setEmail($val);
                    break;
                case 'code':
                    $this->setCode($val);
                    break;
                case 'valid':
                    $this->setValid($val);
                    break;
                case 'subscribed':
                    $this->setSubscribed($val);
                    break;
                case 'isUser':
                    $this->setIsuser($val);
                    break;
                case 'included':
                    $this->setIncluded($val);
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
        $arrValues['nlId'] = $this->getNlid();
        $arrValues['email'] = $this->getEmail();
        $arrValues['code'] = $this->getCode();
        $arrValues['valid'] = $this->getValid();
        $arrValues['subscribed'] = $this->getSubscribed();
        $arrValues['isUser'] = $this->getIsuser();
        $arrValues['included'] = $this->getIncluded();
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
