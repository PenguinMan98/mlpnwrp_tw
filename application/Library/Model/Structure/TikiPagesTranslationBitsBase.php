<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPagesTranslationBitsBase
{
    protected $m_translation_bit_id;
    protected $m_page_id;
    protected $m_version;
    protected $m_source_translation_bit;
    protected $m_original_translation_bit;
    protected $m_flags;
    protected $m_translation_bit_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setFlags('');
        }
        return;
    }
    public function TikiPagesTranslationBitsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTranslationBitId()
    {
        return $this->m_translation_bit_id;
    }
    public function setTranslationBitId($value)
    {
        $this->m_translation_bit_id = $value;
        $this->setOrigTranslationBitId($value);
        return;
    }

    public function getPageId()
    {
        return $this->m_page_id;
    }
    public function setPageId($value)
    {
        $this->m_page_id = $value;
        return;
    }

    public function getVersion()
    {
        return $this->m_version;
    }
    public function setVersion($value)
    {
        $this->m_version = $value;
        return;
    }

    public function getSourceTranslationBit()
    {
        return $this->m_source_translation_bit;
    }
    public function setSourceTranslationBit($value)
    {
        $this->m_source_translation_bit = $value;
        return;
    }

    public function getOriginalTranslationBit()
    {
        return $this->m_original_translation_bit;
    }
    public function setOriginalTranslationBit($value)
    {
        $this->m_original_translation_bit = $value;
        return;
    }

    public function getFlags()
    {
        return $this->m_flags;
    }
    public function setFlags($value)
    {
        $this->m_flags = $value;
        return;
    }

    public function getOrigTranslationBitId()
    {
        return $this->m_translation_bit_id_Orig;
    }
    public function setOrigTranslationBitId($value)
    {
        if (isset($this->m_translation_bit_id_Orig)) { return; }
        $this->m_translation_bit_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTranslationBitId($arrValues['translation_bit_id']);
        $this->setPageId($arrValues['page_id']);
        $this->setVersion($arrValues['version']);
        $this->setSourceTranslationBit($arrValues['source_translation_bit']);
        $this->setOriginalTranslationBit($arrValues['original_translation_bit']);
        $this->setFlags($arrValues['flags']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'translation_bit_id':
                    $this->setTranslationBitId($val);
                    break;
                case 'page_id':
                    $this->setPageId($val);
                    break;
                case 'version':
                    $this->setVersion($val);
                    break;
                case 'source_translation_bit':
                    $this->setSourceTranslationBit($val);
                    break;
                case 'original_translation_bit':
                    $this->setOriginalTranslationBit($val);
                    break;
                case 'flags':
                    $this->setFlags($val);
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
        $arrValues['translation_bit_id'] = $this->getTranslationBitId();
        $arrValues['page_id'] = $this->getPageId();
        $arrValues['version'] = $this->getVersion();
        $arrValues['source_translation_bit'] = $this->getSourceTranslationBit();
        $arrValues['original_translation_bit'] = $this->getOriginalTranslationBit();
        $arrValues['flags'] = $this->getFlags();
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
