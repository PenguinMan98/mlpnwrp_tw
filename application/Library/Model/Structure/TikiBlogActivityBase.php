<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiBlogActivityBase
{
    protected $m_blogId;
    protected $m_day;
    protected $m_posts;
    protected $m_blogId_Orig;
    protected $m_day_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiBlogActivityBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBlogid()
    {
        return $this->m_blogId;
    }
    public function setBlogid($value)
    {
        $this->m_blogId = $value;
        $this->setOrigBlogid($value);
        return;
    }

    public function getDay()
    {
        return $this->m_day;
    }
    public function setDay($value)
    {
        $this->m_day = $value;
        $this->setOrigDay($value);
        return;
    }

    public function getPosts()
    {
        return $this->m_posts;
    }
    public function setPosts($value)
    {
        $this->m_posts = $value;
        return;
    }

    public function getOrigBlogid()
    {
        return $this->m_blogId_Orig;
    }
    public function setOrigBlogid($value)
    {
        if (isset($this->m_blogId_Orig)) { return; }
        $this->m_blogId_Orig = $value;
        return;
    }

    public function getOrigDay()
    {
        return $this->m_day_Orig;
    }
    public function setOrigDay($value)
    {
        if (isset($this->m_day_Orig)) { return; }
        $this->m_day_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBlogid($arrValues['blogId']);
        $this->setDay($arrValues['day']);
        $this->setPosts($arrValues['posts']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'blogId':
                    $this->setBlogid($val);
                    break;
                case 'day':
                    $this->setDay($val);
                    break;
                case 'posts':
                    $this->setPosts($val);
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
        $arrValues['blogId'] = $this->getBlogid();
        $arrValues['day'] = $this->getDay();
        $arrValues['posts'] = $this->getPosts();
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
