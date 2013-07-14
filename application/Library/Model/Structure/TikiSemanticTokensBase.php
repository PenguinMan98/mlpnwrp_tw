<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSemanticTokensBase
{
    protected $m_token;
    protected $m_label;
    protected $m_invert_token;
    protected $m_token_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiSemanticTokensBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getToken()
    {
        return $this->m_token;
    }
    public function setToken($value)
    {
        $this->m_token = $value;
        $this->setOrigToken($value);
        return;
    }

    public function getLabel()
    {
        return $this->m_label;
    }
    public function setLabel($value)
    {
        $this->m_label = $value;
        return;
    }

    public function getInvertToken()
    {
        return $this->m_invert_token;
    }
    public function setInvertToken($value)
    {
        $this->m_invert_token = $value;
        return;
    }

    public function getOrigToken()
    {
        return $this->m_token_Orig;
    }
    public function setOrigToken($value)
    {
        if (isset($this->m_token_Orig)) { return; }
        $this->m_token_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setToken($arrValues['token']);
        $this->setLabel($arrValues['label']);
        $this->setInvertToken($arrValues['invert_token']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'token':
                    $this->setToken($val);
                    break;
                case 'label':
                    $this->setLabel($val);
                    break;
                case 'invert_token':
                    $this->setInvertToken($val);
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
        $arrValues['token'] = $this->getToken();
        $arrValues['label'] = $this->getLabel();
        $arrValues['invert_token'] = $this->getInvertToken();
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
