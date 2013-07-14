<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPageReferencesBase
{
    protected $m_ref_id;
    protected $m_page_id;
    protected $m_biblio_code;
    protected $m_author;
    protected $m_title;
    protected $m_part;
    protected $m_uri;
    protected $m_code;
    protected $m_year;
    protected $m_publisher;
    protected $m_location;
    protected $m_style;
    protected $m_template;
    protected $m_last_modified;
    protected $m_ref_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setLastModified('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function TikiPageReferencesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRefId()
    {
        return $this->m_ref_id;
    }
    public function setRefId($value)
    {
        $this->m_ref_id = $value;
        $this->setOrigRefId($value);
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

    public function getBiblioCode()
    {
        return $this->m_biblio_code;
    }
    public function setBiblioCode($value)
    {
        $this->m_biblio_code = $value;
        return;
    }

    public function getAuthor()
    {
        return $this->m_author;
    }
    public function setAuthor($value)
    {
        $this->m_author = $value;
        return;
    }

    public function getTitle()
    {
        return $this->m_title;
    }
    public function setTitle($value)
    {
        $this->m_title = $value;
        return;
    }

    public function getPart()
    {
        return $this->m_part;
    }
    public function setPart($value)
    {
        $this->m_part = $value;
        return;
    }

    public function getUri()
    {
        return $this->m_uri;
    }
    public function setUri($value)
    {
        $this->m_uri = $value;
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

    public function getYear()
    {
        return $this->m_year;
    }
    public function setYear($value)
    {
        $this->m_year = $value;
        return;
    }

    public function getPublisher()
    {
        return $this->m_publisher;
    }
    public function setPublisher($value)
    {
        $this->m_publisher = $value;
        return;
    }

    public function getLocation()
    {
        return $this->m_location;
    }
    public function setLocation($value)
    {
        $this->m_location = $value;
        return;
    }

    public function getStyle()
    {
        return $this->m_style;
    }
    public function setStyle($value)
    {
        $this->m_style = $value;
        return;
    }

    public function getTemplate()
    {
        return $this->m_template;
    }
    public function setTemplate($value)
    {
        $this->m_template = $value;
        return;
    }

    public function getLastModified()
    {
        return $this->m_last_modified;
    }
    public function setLastModified($value)
    {
        $this->m_last_modified = $value;
        return;
    }

    public function getOrigRefId()
    {
        return $this->m_ref_id_Orig;
    }
    public function setOrigRefId($value)
    {
        if (isset($this->m_ref_id_Orig)) { return; }
        $this->m_ref_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setRefId($arrValues['ref_id']);
        $this->setPageId($arrValues['page_id']);
        $this->setBiblioCode($arrValues['biblio_code']);
        $this->setAuthor($arrValues['author']);
        $this->setTitle($arrValues['title']);
        $this->setPart($arrValues['part']);
        $this->setUri($arrValues['uri']);
        $this->setCode($arrValues['code']);
        $this->setYear($arrValues['year']);
        $this->setPublisher($arrValues['publisher']);
        $this->setLocation($arrValues['location']);
        $this->setStyle($arrValues['style']);
        $this->setTemplate($arrValues['template']);
        $this->setLastModified($arrValues['last_modified']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'ref_id':
                    $this->setRefId($val);
                    break;
                case 'page_id':
                    $this->setPageId($val);
                    break;
                case 'biblio_code':
                    $this->setBiblioCode($val);
                    break;
                case 'author':
                    $this->setAuthor($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'part':
                    $this->setPart($val);
                    break;
                case 'uri':
                    $this->setUri($val);
                    break;
                case 'code':
                    $this->setCode($val);
                    break;
                case 'year':
                    $this->setYear($val);
                    break;
                case 'publisher':
                    $this->setPublisher($val);
                    break;
                case 'location':
                    $this->setLocation($val);
                    break;
                case 'style':
                    $this->setStyle($val);
                    break;
                case 'template':
                    $this->setTemplate($val);
                    break;
                case 'last_modified':
                    $this->setLastModified($val);
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
        $arrValues['ref_id'] = $this->getRefId();
        $arrValues['page_id'] = $this->getPageId();
        $arrValues['biblio_code'] = $this->getBiblioCode();
        $arrValues['author'] = $this->getAuthor();
        $arrValues['title'] = $this->getTitle();
        $arrValues['part'] = $this->getPart();
        $arrValues['uri'] = $this->getUri();
        $arrValues['code'] = $this->getCode();
        $arrValues['year'] = $this->getYear();
        $arrValues['publisher'] = $this->getPublisher();
        $arrValues['location'] = $this->getLocation();
        $arrValues['style'] = $this->getStyle();
        $arrValues['template'] = $this->getTemplate();
        $arrValues['last_modified'] = $this->getLastModified();
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
