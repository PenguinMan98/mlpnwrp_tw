<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPagesBase
{
    protected $m_page_id;
    protected $m_pageName;
    protected $m_hits;
    protected $m_data;
    protected $m_description;
    protected $m_lastModif;
    protected $m_comment;
    protected $m_version;
    protected $m_version_minor;
    protected $m_user;
    protected $m_ip;
    protected $m_flag;
    protected $m_points;
    protected $m_votes;
    protected $m_cache;
    protected $m_wiki_cache;
    protected $m_cache_timestamp;
    protected $m_pageRank;
    protected $m_creator;
    protected $m_page_size;
    protected $m_lang;
    protected $m_lockedby;
    protected $m_is_html;
    protected $m_created;
    protected $m_wysiwyg;
    protected $m_wiki_authors_style;
    protected $m_comments_enabled;
    protected $m_keywords;
    protected $m_page_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setPagename('');
            $this->setVersion(0);
            $this->setVersionMinor(0);
            $this->setUser('');
            $this->setPageSize(0);
            $this->setIsHtml(0);
            $this->setWikiAuthorsStyle('');
        }
        return;
    }
    public function TikiPagesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPageId()
    {
        return $this->m_page_id;
    }
    public function setPageId($value)
    {
        $this->m_page_id = $value;
        $this->setOrigPageId($value);
        return;
    }

    public function getPagename()
    {
        return $this->m_pageName;
    }
    public function setPagename($value)
    {
        $this->m_pageName = $value;
        return;
    }

    public function getHits()
    {
        return $this->m_hits;
    }
    public function setHits($value)
    {
        $this->m_hits = $value;
        return;
    }

    public function getData()
    {
        return $this->m_data;
    }
    public function setData($value)
    {
        $this->m_data = $value;
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

    public function getLastmodif()
    {
        return $this->m_lastModif;
    }
    public function setLastmodif($value)
    {
        $this->m_lastModif = $value;
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

    public function getVersion()
    {
        return $this->m_version;
    }
    public function setVersion($value)
    {
        $this->m_version = $value;
        return;
    }

    public function getVersionMinor()
    {
        return $this->m_version_minor;
    }
    public function setVersionMinor($value)
    {
        $this->m_version_minor = $value;
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        return;
    }

    public function getIp()
    {
        return $this->m_ip;
    }
    public function setIp($value)
    {
        $this->m_ip = $value;
        return;
    }

    public function getFlag()
    {
        return $this->m_flag;
    }
    public function setFlag($value)
    {
        $this->m_flag = $value;
        return;
    }

    public function getPoints()
    {
        return $this->m_points;
    }
    public function setPoints($value)
    {
        $this->m_points = $value;
        return;
    }

    public function getVotes()
    {
        return $this->m_votes;
    }
    public function setVotes($value)
    {
        $this->m_votes = $value;
        return;
    }

    public function getCache()
    {
        return $this->m_cache;
    }
    public function setCache($value)
    {
        $this->m_cache = $value;
        return;
    }

    public function getWikiCache()
    {
        return $this->m_wiki_cache;
    }
    public function setWikiCache($value)
    {
        $this->m_wiki_cache = $value;
        return;
    }

    public function getCacheTimestamp()
    {
        return $this->m_cache_timestamp;
    }
    public function setCacheTimestamp($value)
    {
        $this->m_cache_timestamp = $value;
        return;
    }

    public function getPagerank()
    {
        return $this->m_pageRank;
    }
    public function setPagerank($value)
    {
        $this->m_pageRank = $value;
        return;
    }

    public function getCreator()
    {
        return $this->m_creator;
    }
    public function setCreator($value)
    {
        $this->m_creator = $value;
        return;
    }

    public function getPageSize()
    {
        return $this->m_page_size;
    }
    public function setPageSize($value)
    {
        $this->m_page_size = $value;
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

    public function getLockedby()
    {
        return $this->m_lockedby;
    }
    public function setLockedby($value)
    {
        $this->m_lockedby = $value;
        return;
    }

    public function getIsHtml()
    {
        return $this->m_is_html;
    }
    public function setIsHtml($value)
    {
        $this->m_is_html = $value;
        return;
    }

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
        return;
    }

    public function getWysiwyg()
    {
        return $this->m_wysiwyg;
    }
    public function setWysiwyg($value)
    {
        $this->m_wysiwyg = $value;
        return;
    }

    public function getWikiAuthorsStyle()
    {
        return $this->m_wiki_authors_style;
    }
    public function setWikiAuthorsStyle($value)
    {
        $this->m_wiki_authors_style = $value;
        return;
    }

    public function getCommentsEnabled()
    {
        return $this->m_comments_enabled;
    }
    public function setCommentsEnabled($value)
    {
        $this->m_comments_enabled = $value;
        return;
    }

    public function getKeywords()
    {
        return $this->m_keywords;
    }
    public function setKeywords($value)
    {
        $this->m_keywords = $value;
        return;
    }

    public function getOrigPageId()
    {
        return $this->m_page_id_Orig;
    }
    public function setOrigPageId($value)
    {
        if (isset($this->m_page_id_Orig)) { return; }
        $this->m_page_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPageId($arrValues['page_id']);
        $this->setPagename($arrValues['pageName']);
        $this->setHits($arrValues['hits']);
        $this->setData($arrValues['data']);
        $this->setDescription($arrValues['description']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setComment($arrValues['comment']);
        $this->setVersion($arrValues['version']);
        $this->setVersionMinor($arrValues['version_minor']);
        $this->setUser($arrValues['user']);
        $this->setIp($arrValues['ip']);
        $this->setFlag($arrValues['flag']);
        $this->setPoints($arrValues['points']);
        $this->setVotes($arrValues['votes']);
        $this->setCache($arrValues['cache']);
        $this->setWikiCache($arrValues['wiki_cache']);
        $this->setCacheTimestamp($arrValues['cache_timestamp']);
        $this->setPagerank($arrValues['pageRank']);
        $this->setCreator($arrValues['creator']);
        $this->setPageSize($arrValues['page_size']);
        $this->setLang($arrValues['lang']);
        $this->setLockedby($arrValues['lockedby']);
        $this->setIsHtml($arrValues['is_html']);
        $this->setCreated($arrValues['created']);
        $this->setWysiwyg($arrValues['wysiwyg']);
        $this->setWikiAuthorsStyle($arrValues['wiki_authors_style']);
        $this->setCommentsEnabled($arrValues['comments_enabled']);
        $this->setKeywords($arrValues['keywords']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'page_id':
                    $this->setPageId($val);
                    break;
                case 'pageName':
                    $this->setPagename($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'comment':
                    $this->setComment($val);
                    break;
                case 'version':
                    $this->setVersion($val);
                    break;
                case 'version_minor':
                    $this->setVersionMinor($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'ip':
                    $this->setIp($val);
                    break;
                case 'flag':
                    $this->setFlag($val);
                    break;
                case 'points':
                    $this->setPoints($val);
                    break;
                case 'votes':
                    $this->setVotes($val);
                    break;
                case 'cache':
                    $this->setCache($val);
                    break;
                case 'wiki_cache':
                    $this->setWikiCache($val);
                    break;
                case 'cache_timestamp':
                    $this->setCacheTimestamp($val);
                    break;
                case 'pageRank':
                    $this->setPagerank($val);
                    break;
                case 'creator':
                    $this->setCreator($val);
                    break;
                case 'page_size':
                    $this->setPageSize($val);
                    break;
                case 'lang':
                    $this->setLang($val);
                    break;
                case 'lockedby':
                    $this->setLockedby($val);
                    break;
                case 'is_html':
                    $this->setIsHtml($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'wysiwyg':
                    $this->setWysiwyg($val);
                    break;
                case 'wiki_authors_style':
                    $this->setWikiAuthorsStyle($val);
                    break;
                case 'comments_enabled':
                    $this->setCommentsEnabled($val);
                    break;
                case 'keywords':
                    $this->setKeywords($val);
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
        $arrValues['page_id'] = $this->getPageId();
        $arrValues['pageName'] = $this->getPagename();
        $arrValues['hits'] = $this->getHits();
        $arrValues['data'] = $this->getData();
        $arrValues['description'] = $this->getDescription();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['comment'] = $this->getComment();
        $arrValues['version'] = $this->getVersion();
        $arrValues['version_minor'] = $this->getVersionMinor();
        $arrValues['user'] = $this->getUser();
        $arrValues['ip'] = $this->getIp();
        $arrValues['flag'] = $this->getFlag();
        $arrValues['points'] = $this->getPoints();
        $arrValues['votes'] = $this->getVotes();
        $arrValues['cache'] = $this->getCache();
        $arrValues['wiki_cache'] = $this->getWikiCache();
        $arrValues['cache_timestamp'] = $this->getCacheTimestamp();
        $arrValues['pageRank'] = $this->getPagerank();
        $arrValues['creator'] = $this->getCreator();
        $arrValues['page_size'] = $this->getPageSize();
        $arrValues['lang'] = $this->getLang();
        $arrValues['lockedby'] = $this->getLockedby();
        $arrValues['is_html'] = $this->getIsHtml();
        $arrValues['created'] = $this->getCreated();
        $arrValues['wysiwyg'] = $this->getWysiwyg();
        $arrValues['wiki_authors_style'] = $this->getWikiAuthorsStyle();
        $arrValues['comments_enabled'] = $this->getCommentsEnabled();
        $arrValues['keywords'] = $this->getKeywords();
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
