<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiShoutboxWordsBase
{
    protected $m_word;
    protected $m_qty;
    protected $m_word_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setQty(0);
        }
        return;
    }
    public function TikiShoutboxWordsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getWord()
    {
        return $this->m_word;
    }
    public function setWord($value)
    {
        $this->m_word = $value;
        $this->setOrigWord($value);
        return;
    }

    public function getQty()
    {
        return $this->m_qty;
    }
    public function setQty($value)
    {
        $this->m_qty = $value;
        return;
    }

    public function getOrigWord()
    {
        return $this->m_word_Orig;
    }
    public function setOrigWord($value)
    {
        if (isset($this->m_word_Orig)) { return; }
        $this->m_word_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setWord($arrValues['word']);
        $this->setQty($arrValues['qty']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'word':
                    $this->setWord($val);
                    break;
                case 'qty':
                    $this->setQty($val);
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
        $arrValues['word'] = $this->getWord();
        $arrValues['qty'] = $this->getQty();
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
