<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCartInventoryHoldBase
{
    protected $m_productId;
    protected $m_quantity;
    protected $m_timeHeld;
    protected $m_hash;
    protected $m_productId_Orig;
    protected $m_quantity_Orig;
    protected $m_timeHeld_Orig;
    protected $m_hash_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiCartInventoryHoldBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getProductid()
    {
        return $this->m_productId;
    }
    public function setProductid($value)
    {
        $this->m_productId = $value;
        $this->setOrigProductid($value);
        return;
    }

    public function getQuantity()
    {
        return $this->m_quantity;
    }
    public function setQuantity($value)
    {
        $this->m_quantity = $value;
        $this->setOrigQuantity($value);
        return;
    }

    public function getTimeheld()
    {
        return $this->m_timeHeld;
    }
    public function setTimeheld($value)
    {
        $this->m_timeHeld = $value;
        $this->setOrigTimeheld($value);
        return;
    }

    public function getHash()
    {
        return $this->m_hash;
    }
    public function setHash($value)
    {
        $this->m_hash = $value;
        $this->setOrigHash($value);
        return;
    }

    public function getOrigProductid()
    {
        return $this->m_productId_Orig;
    }
    public function setOrigProductid($value)
    {
        if (isset($this->m_productId_Orig)) { return; }
        $this->m_productId_Orig = $value;
        return;
    }

    public function getOrigQuantity()
    {
        return $this->m_quantity_Orig;
    }
    public function setOrigQuantity($value)
    {
        if (isset($this->m_quantity_Orig)) { return; }
        $this->m_quantity_Orig = $value;
        return;
    }

    public function getOrigTimeheld()
    {
        return $this->m_timeHeld_Orig;
    }
    public function setOrigTimeheld($value)
    {
        if (isset($this->m_timeHeld_Orig)) { return; }
        $this->m_timeHeld_Orig = $value;
        return;
    }

    public function getOrigHash()
    {
        return $this->m_hash_Orig;
    }
    public function setOrigHash($value)
    {
        if (isset($this->m_hash_Orig)) { return; }
        $this->m_hash_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setProductid($arrValues['productId']);
        $this->setQuantity($arrValues['quantity']);
        $this->setTimeheld($arrValues['timeHeld']);
        $this->setHash($arrValues['hash']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'productId':
                    $this->setProductid($val);
                    break;
                case 'quantity':
                    $this->setQuantity($val);
                    break;
                case 'timeHeld':
                    $this->setTimeheld($val);
                    break;
                case 'hash':
                    $this->setHash($val);
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
        $arrValues['productId'] = $this->getProductid();
        $arrValues['quantity'] = $this->getQuantity();
        $arrValues['timeHeld'] = $this->getTimeheld();
        $arrValues['hash'] = $this->getHash();
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
