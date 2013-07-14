<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFreetagsBase
{
    protected $m_tagId;
    protected $m_tag;
    protected $m_raw_tag;
    protected $m_lang;
    protected $m_tagId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTag('');
            $this->setRawTag('');
        }
        return;
    }
    public function TikiFreetagsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTagid()
    {
        return $this->m_tagId;
    }
    public function setTagid($value)
    {
        $this->m_tagId = $value;
        $this->setOrigTagid($value);
        return;
    }

    public function getTag()
    {
        return $this->m_tag;
    }
    public function setTag($value)
    {
        $this->m_tag = $value;
        return;
    }

    public function getRawTag()
    {
        return $this->m_raw_tag;
    }
    public function setRawTag($value)
    {
        $this->m_raw_tag = $value;
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

    public function getOrigTagid()
    {
        return $this->m_tagId_Orig;
    }
    public function setOrigTagid($value)
    {
        if (isset($this->m_tagId_Orig)) { return; }
        $this->m_tagId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTagid($arrValues['tagId']);
        $this->setTag($arrValues['tag']);
        $this->setRawTag($arrValues['raw_tag']);
        $this->setLang($arrValues['lang']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'tagId':
                    $this->setTagid($val);
                    break;
                case 'tag':
                    $this->setTag($val);
                    break;
                case 'raw_tag':
                    $this->setRawTag($val);
                    break;
                case 'lang':
                    $this->setLang($val);
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
        $arrValues['tagId'] = $this->getTagid();
        $arrValues['tag'] = $this->getTag();
        $arrValues['raw_tag'] = $this->getRawTag();
        $arrValues['lang'] = $this->getLang();
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
