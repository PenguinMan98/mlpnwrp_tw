<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiHotwordsBase
{
    protected $m_word;
    protected $m_url;
    protected $m_word_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUrl('');
        }
        return;
    }
    public function TikiHotwordsBase($arrData = null)
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

    public function getUrl()
    {
        return $this->m_url;
    }
    public function setUrl($value)
    {
        $this->m_url = $value;
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
        $this->setUrl($arrValues['url']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'word':
                    $this->setWord($val);
                    break;
                case 'url':
                    $this->setUrl($val);
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
        $arrValues['url'] = $this->getUrl();
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
