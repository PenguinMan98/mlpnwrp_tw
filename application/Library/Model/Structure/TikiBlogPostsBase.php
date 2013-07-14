<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiBlogPostsBase
{
    protected $m_postId;
    protected $m_blogId;
    protected $m_data;
    protected $m_data_size;
    protected $m_excerpt;
    protected $m_created;
    protected $m_user;
    protected $m_hits;
    protected $m_trackbacks_to;
    protected $m_trackbacks_from;
    protected $m_title;
    protected $m_priv;
    protected $m_wysiwyg;
    protected $m_postId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setBlogid(0);
            $this->setDataSize(0);
            $this->setUser('');
            $this->setHits(0);
            $this->setPriv('n');
        }
        return;
    }
    public function TikiBlogPostsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPostid()
    {
        return $this->m_postId;
    }
    public function setPostid($value)
    {
        $this->m_postId = $value;
        $this->setOrigPostid($value);
        return;
    }

    public function getBlogid()
    {
        return $this->m_blogId;
    }
    public function setBlogid($value)
    {
        $this->m_blogId = $value;
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

    public function getDataSize()
    {
        return $this->m_data_size;
    }
    public function setDataSize($value)
    {
        $this->m_data_size = $value;
        return;
    }

    public function getExcerpt()
    {
        return $this->m_excerpt;
    }
    public function setExcerpt($value)
    {
        $this->m_excerpt = $value;
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

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
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

    public function getTrackbacksTo()
    {
        return $this->m_trackbacks_to;
    }
    public function setTrackbacksTo($value)
    {
        $this->m_trackbacks_to = $value;
        return;
    }

    public function getTrackbacksFrom()
    {
        return $this->m_trackbacks_from;
    }
    public function setTrackbacksFrom($value)
    {
        $this->m_trackbacks_from = $value;
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

    public function getPriv()
    {
        return $this->m_priv;
    }
    public function setPriv($value)
    {
        $this->m_priv = $value;
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

    public function getOrigPostid()
    {
        return $this->m_postId_Orig;
    }
    public function setOrigPostid($value)
    {
        if (isset($this->m_postId_Orig)) { return; }
        $this->m_postId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPostid($arrValues['postId']);
        $this->setBlogid($arrValues['blogId']);
        $this->setData($arrValues['data']);
        $this->setDataSize($arrValues['data_size']);
        $this->setExcerpt($arrValues['excerpt']);
        $this->setCreated($arrValues['created']);
        $this->setUser($arrValues['user']);
        $this->setHits($arrValues['hits']);
        $this->setTrackbacksTo($arrValues['trackbacks_to']);
        $this->setTrackbacksFrom($arrValues['trackbacks_from']);
        $this->setTitle($arrValues['title']);
        $this->setPriv($arrValues['priv']);
        $this->setWysiwyg($arrValues['wysiwyg']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'postId':
                    $this->setPostid($val);
                    break;
                case 'blogId':
                    $this->setBlogid($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'data_size':
                    $this->setDataSize($val);
                    break;
                case 'excerpt':
                    $this->setExcerpt($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'trackbacks_to':
                    $this->setTrackbacksTo($val);
                    break;
                case 'trackbacks_from':
                    $this->setTrackbacksFrom($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'priv':
                    $this->setPriv($val);
                    break;
                case 'wysiwyg':
                    $this->setWysiwyg($val);
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
        $arrValues['postId'] = $this->getPostid();
        $arrValues['blogId'] = $this->getBlogid();
        $arrValues['data'] = $this->getData();
        $arrValues['data_size'] = $this->getDataSize();
        $arrValues['excerpt'] = $this->getExcerpt();
        $arrValues['created'] = $this->getCreated();
        $arrValues['user'] = $this->getUser();
        $arrValues['hits'] = $this->getHits();
        $arrValues['trackbacks_to'] = $this->getTrackbacksTo();
        $arrValues['trackbacks_from'] = $this->getTrackbacksFrom();
        $arrValues['title'] = $this->getTitle();
        $arrValues['priv'] = $this->getPriv();
        $arrValues['wysiwyg'] = $this->getWysiwyg();
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
