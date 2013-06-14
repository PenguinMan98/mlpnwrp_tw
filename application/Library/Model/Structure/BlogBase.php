<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_BlogBase
{
    protected $m_blog_id;
    protected $m_name;
    protected $m_description;
    protected $m_blog_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function BlogBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBlogId()
    {
        return $this->m_blog_id;
    }
    public function setBlogId($value)
    {
        $this->m_blog_id = $value;
        $this->setOrigBlogId($value);
        return;
    }

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
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

    public function getOrigBlogId()
    {
        return $this->m_blog_id_Orig;
    }
    public function setOrigBlogId($value)
    {
        if (isset($this->m_blog_id_Orig)) { return; }
        $this->m_blog_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBlogId($arrValues['blog_id']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'blog_id':
                    $this->setBlogId($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
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
        $arrValues['blog_id'] = $this->getBlogId();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
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
