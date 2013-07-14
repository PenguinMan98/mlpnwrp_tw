<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiRssItemsBase
{
    protected $m_rssItemId;
    protected $m_rssId;
    protected $m_guid;
    protected $m_url;
    protected $m_publication_date;
    protected $m_title;
    protected $m_author;
    protected $m_description;
    protected $m_content;
    protected $m_rssItemId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiRssItemsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRssitemid()
    {
        return $this->m_rssItemId;
    }
    public function setRssitemid($value)
    {
        $this->m_rssItemId = $value;
        $this->setOrigRssitemid($value);
        return;
    }

    public function getRssid()
    {
        return $this->m_rssId;
    }
    public function setRssid($value)
    {
        $this->m_rssId = $value;
        return;
    }

    public function getGuid()
    {
        return $this->m_guid;
    }
    public function setGuid($value)
    {
        $this->m_guid = $value;
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

    public function getPublicationDate()
    {
        return $this->m_publication_date;
    }
    public function setPublicationDate($value)
    {
        $this->m_publication_date = $value;
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

    public function getAuthor()
    {
        return $this->m_author;
    }
    public function setAuthor($value)
    {
        $this->m_author = $value;
        return;
    }

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getContent()
    {
        return $this->m_content;
    }
    public function setContent($value)
    {
        $this->m_content = $value;
        return;
    }

    public function getOrigRssitemid()
    {
        return $this->m_rssItemId_Orig;
    }
    public function setOrigRssitemid($value)
    {
        if (isset($this->m_rssItemId_Orig)) { return; }
        $this->m_rssItemId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setRssitemid($arrValues['rssItemId']);
        $this->setRssid($arrValues['rssId']);
        $this->setGuid($arrValues['guid']);
        $this->setUrl($arrValues['url']);
        $this->setPublicationDate($arrValues['publication_date']);
        $this->setTitle($arrValues['title']);
        $this->setAuthor($arrValues['author']);
        $this->setDescription($arrValues['description']);
        $this->setContent($arrValues['content']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'rssItemId':
                    $this->setRssitemid($val);
                    break;
                case 'rssId':
                    $this->setRssid($val);
                    break;
                case 'guid':
                    $this->setGuid($val);
                    break;
                case 'url':
                    $this->setUrl($val);
                    break;
                case 'publication_date':
                    $this->setPublicationDate($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'author':
                    $this->setAuthor($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'content':
                    $this->setContent($val);
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
        $arrValues['rssItemId'] = $this->getRssitemid();
        $arrValues['rssId'] = $this->getRssid();
        $arrValues['guid'] = $this->getGuid();
        $arrValues['url'] = $this->getUrl();
        $arrValues['publication_date'] = $this->getPublicationDate();
        $arrValues['title'] = $this->getTitle();
        $arrValues['author'] = $this->getAuthor();
        $arrValues['description'] = $this->getDescription();
        $arrValues['content'] = $this->getContent();
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
