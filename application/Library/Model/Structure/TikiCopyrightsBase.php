<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCopyrightsBase
{
    protected $m_copyrightId;
    protected $m_page;
    protected $m_title;
    protected $m_year;
    protected $m_authors;
    protected $m_holder;
    protected $m_copyright_order;
    protected $m_userName;
    protected $m_copyrightId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUsername('');
        }
        return;
    }
    public function TikiCopyrightsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCopyrightid()
    {
        return $this->m_copyrightId;
    }
    public function setCopyrightid($value)
    {
        $this->m_copyrightId = $value;
        $this->setOrigCopyrightid($value);
        return;
    }

    public function getPage()
    {
        return $this->m_page;
    }
    public function setPage($value)
    {
        $this->m_page = $value;
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

    public function getYear()
    {
        return $this->m_year;
    }
    public function setYear($value)
    {
        $this->m_year = $value;
        return;
    }

    public function getAuthors()
    {
        return $this->m_authors;
    }
    public function setAuthors($value)
    {
        $this->m_authors = $value;
        return;
    }

    public function getHolder()
    {
        return $this->m_holder;
    }
    public function setHolder($value)
    {
        $this->m_holder = $value;
        return;
    }

    public function getCopyrightOrder()
    {
        return $this->m_copyright_order;
    }
    public function setCopyrightOrder($value)
    {
        $this->m_copyright_order = $value;
        return;
    }

    public function getUsername()
    {
        return $this->m_userName;
    }
    public function setUsername($value)
    {
        $this->m_userName = $value;
        return;
    }

    public function getOrigCopyrightid()
    {
        return $this->m_copyrightId_Orig;
    }
    public function setOrigCopyrightid($value)
    {
        if (isset($this->m_copyrightId_Orig)) { return; }
        $this->m_copyrightId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCopyrightid($arrValues['copyrightId']);
        $this->setPage($arrValues['page']);
        $this->setTitle($arrValues['title']);
        $this->setYear($arrValues['year']);
        $this->setAuthors($arrValues['authors']);
        $this->setHolder($arrValues['holder']);
        $this->setCopyrightOrder($arrValues['copyright_order']);
        $this->setUsername($arrValues['userName']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'copyrightId':
                    $this->setCopyrightid($val);
                    break;
                case 'page':
                    $this->setPage($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'year':
                    $this->setYear($val);
                    break;
                case 'authors':
                    $this->setAuthors($val);
                    break;
                case 'holder':
                    $this->setHolder($val);
                    break;
                case 'copyright_order':
                    $this->setCopyrightOrder($val);
                    break;
                case 'userName':
                    $this->setUsername($val);
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
        $arrValues['copyrightId'] = $this->getCopyrightid();
        $arrValues['page'] = $this->getPage();
        $arrValues['title'] = $this->getTitle();
        $arrValues['year'] = $this->getYear();
        $arrValues['authors'] = $this->getAuthors();
        $arrValues['holder'] = $this->getHolder();
        $arrValues['copyright_order'] = $this->getCopyrightOrder();
        $arrValues['userName'] = $this->getUsername();
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
