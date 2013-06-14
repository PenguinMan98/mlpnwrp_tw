<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_BlogPostBase
{
    protected $m_blog_post_id;
    protected $m_blog_id;
    protected $m_title;
    protected $m_text;
    protected $m_user_id;
    protected $m_creation_date;
    protected $m_publish_date;
    protected $m_image;
    protected $m_blog_post_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCreationDate('CURRENT_TIMESTAMP');
            $this->setPublishDate('0000-00-00 00:00:00');
        }
        return;
    }
    public function BlogPostBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBlogPostId()
    {
        return $this->m_blog_post_id;
    }
    public function setBlogPostId($value)
    {
        $this->m_blog_post_id = $value;
        $this->setOrigBlogPostId($value);
        return;
    }

    public function getBlogId()
    {
        return $this->m_blog_id;
    }
    public function setBlogId($value)
    {
        $this->m_blog_id = $value;
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

    public function getText()
    {
        return $this->m_text;
    }
    public function setText($value)
    {
        $this->m_text = $value;
        return;
    }

    public function getUserId()
    {
        return $this->m_user_id;
    }
    public function setUserId($value)
    {
        $this->m_user_id = $value;
        return;
    }

    public function getCreationDate()
    {
        return $this->m_creation_date;
    }
    public function setCreationDate($value)
    {
        $this->m_creation_date = $value;
        return;
    }

    public function getPublishDate()
    {
        return $this->m_publish_date;
    }
    public function setPublishDate($value)
    {
        $this->m_publish_date = $value;
        return;
    }

    public function getImage()
    {
        return $this->m_image;
    }
    public function setImage($value)
    {
        $this->m_image = $value;
        return;
    }

    public function getOrigBlogPostId()
    {
        return $this->m_blog_post_id_Orig;
    }
    public function setOrigBlogPostId($value)
    {
        if (isset($this->m_blog_post_id_Orig)) { return; }
        $this->m_blog_post_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBlogPostId($arrValues['blog_post_id']);
        $this->setBlogId($arrValues['blog_id']);
        $this->setTitle($arrValues['title']);
        $this->setText($arrValues['text']);
        $this->setUserId($arrValues['user_id']);
        $this->setCreationDate($arrValues['creation_date']);
        $this->setPublishDate($arrValues['publish_date']);
        $this->setImage($arrValues['image']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'blog_post_id':
                    $this->setBlogPostId($val);
                    break;
                case 'blog_id':
                    $this->setBlogId($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'text':
                    $this->setText($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'creation_date':
                    $this->setCreationDate($val);
                    break;
                case 'publish_date':
                    $this->setPublishDate($val);
                    break;
                case 'image':
                    $this->setImage($val);
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
        $arrValues['blog_post_id'] = $this->getBlogPostId();
        $arrValues['blog_id'] = $this->getBlogId();
        $arrValues['title'] = $this->getTitle();
        $arrValues['text'] = $this->getText();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['creation_date'] = $this->getCreationDate();
        $arrValues['publish_date'] = $this->getPublishDate();
        $arrValues['image'] = $this->getImage();
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
