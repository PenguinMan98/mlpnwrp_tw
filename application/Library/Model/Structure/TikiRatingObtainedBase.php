<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiRatingObtainedBase
{
    protected $m_ratingId;
    protected $m_ratingConfigId;
    protected $m_type;
    protected $m_object;
    protected $m_expire;
    protected $m_value;
    protected $m_ratingId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiRatingObtainedBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRatingid()
    {
        return $this->m_ratingId;
    }
    public function setRatingid($value)
    {
        $this->m_ratingId = $value;
        $this->setOrigRatingid($value);
        return;
    }

    public function getRatingconfigid()
    {
        return $this->m_ratingConfigId;
    }
    public function setRatingconfigid($value)
    {
        $this->m_ratingConfigId = $value;
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getObject()
    {
        return $this->m_object;
    }
    public function setObject($value)
    {
        $this->m_object = $value;
        return;
    }

    public function getExpire()
    {
        return $this->m_expire;
    }
    public function setExpire($value)
    {
        $this->m_expire = $value;
        return;
    }

    public function getValue()
    {
        return $this->m_value;
    }
    public function setValue($value)
    {
        $this->m_value = $value;
        return;
    }

    public function getOrigRatingid()
    {
        return $this->m_ratingId_Orig;
    }
    public function setOrigRatingid($value)
    {
        if (isset($this->m_ratingId_Orig)) { return; }
        $this->m_ratingId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setRatingid($arrValues['ratingId']);
        $this->setRatingconfigid($arrValues['ratingConfigId']);
        $this->setType($arrValues['type']);
        $this->setObject($arrValues['object']);
        $this->setExpire($arrValues['expire']);
        $this->setValue($arrValues['value']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'ratingId':
                    $this->setRatingid($val);
                    break;
                case 'ratingConfigId':
                    $this->setRatingconfigid($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'object':
                    $this->setObject($val);
                    break;
                case 'expire':
                    $this->setExpire($val);
                    break;
                case 'value':
                    $this->setValue($val);
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
        $arrValues['ratingId'] = $this->getRatingid();
        $arrValues['ratingConfigId'] = $this->getRatingconfigid();
        $arrValues['type'] = $this->getType();
        $arrValues['object'] = $this->getObject();
        $arrValues['expire'] = $this->getExpire();
        $arrValues['value'] = $this->getValue();
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
