<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSefurlRegexOutBase
{
    protected $m_id;
    protected $m_left;
    protected $m_right;
    protected $m_type;
    protected $m_silent;
    protected $m_feature;
    protected $m_comment;
    protected $m_order;
    protected $m_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setSilent('n');
            $this->setOrder(0);
        }
        return;
    }
    public function TikiSefurlRegexOutBase($arrData = null)
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

    public function getLeft()
    {
        return $this->m_left;
    }
    public function setLeft($value)
    {
        $this->m_left = $value;
        return;
    }

    public function getRight()
    {
        return $this->m_right;
    }
    public function setRight($value)
    {
        $this->m_right = $value;
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

    public function getSilent()
    {
        return $this->m_silent;
    }
    public function setSilent($value)
    {
        $this->m_silent = $value;
        return;
    }

    public function getFeature()
    {
        return $this->m_feature;
    }
    public function setFeature($value)
    {
        $this->m_feature = $value;
        return;
    }

    public function getComment()
    {
        return $this->m_comment;
    }
    public function setComment($value)
    {
        $this->m_comment = $value;
        return;
    }

    public function getOrder()
    {
        return $this->m_order;
    }
    public function setOrder($value)
    {
        $this->m_order = $value;
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
        $this->setLeft($arrValues['left']);
        $this->setRight($arrValues['right']);
        $this->setType($arrValues['type']);
        $this->setSilent($arrValues['silent']);
        $this->setFeature($arrValues['feature']);
        $this->setComment($arrValues['comment']);
        $this->setOrder($arrValues['order']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'left':
                    $this->setLeft($val);
                    break;
                case 'right':
                    $this->setRight($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'silent':
                    $this->setSilent($val);
                    break;
                case 'feature':
                    $this->setFeature($val);
                    break;
                case 'comment':
                    $this->setComment($val);
                    break;
                case 'order':
                    $this->setOrder($val);
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
        $arrValues['left'] = $this->getLeft();
        $arrValues['right'] = $this->getRight();
        $arrValues['type'] = $this->getType();
        $arrValues['silent'] = $this->getSilent();
        $arrValues['feature'] = $this->getFeature();
        $arrValues['comment'] = $this->getComment();
        $arrValues['order'] = $this->getOrder();
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
