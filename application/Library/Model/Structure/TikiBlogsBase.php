<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiBlogsBase
{
    protected $m_blogId;
    protected $m_created;
    protected $m_lastModif;
    protected $m_title;
    protected $m_description;
    protected $m_user;
    protected $m_public;
    protected $m_posts;
    protected $m_maxPosts;
    protected $m_hits;
    protected $m_activity;
    protected $m_heading;
    protected $m_post_heading;
    protected $m_use_find;
    protected $m_use_title;
    protected $m_use_title_in_post;
    protected $m_use_description;
    protected $m_use_breadcrumbs;
    protected $m_use_author;
    protected $m_use_excerpt;
    protected $m_add_date;
    protected $m_add_poster;
    protected $m_allow_comments;
    protected $m_show_avatar;
    protected $m_always_owner;
    protected $m_show_related;
    protected $m_related_max;
    protected $m_blogId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
            $this->setUseTitle('y');
            $this->setUseTitleInPost('y');
            $this->setUseDescription('y');
            $this->setUseBreadcrumbs('n');
            $this->setRelatedMax(5);
        }
        return;
    }
    public function TikiBlogsBase($arrData = null)
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

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
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

    public function getTitle()
    {
        return $this->m_title;
    }
    public function setTitle($value)
    {
        $this->m_title = $value;
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

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        return;
    }

    public function getPublic()
    {
        return $this->m_public;
    }
    public function setPublic($value)
    {
        $this->m_public = $value;
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

    public function getMaxposts()
    {
        return $this->m_maxPosts;
    }
    public function setMaxposts($value)
    {
        $this->m_maxPosts = $value;
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

    public function getActivity()
    {
        return $this->m_activity;
    }
    public function setActivity($value)
    {
        $this->m_activity = $value;
        return;
    }

    public function getHeading()
    {
        return $this->m_heading;
    }
    public function setHeading($value)
    {
        $this->m_heading = $value;
        return;
    }

    public function getPostHeading()
    {
        return $this->m_post_heading;
    }
    public function setPostHeading($value)
    {
        $this->m_post_heading = $value;
        return;
    }

    public function getUseFind()
    {
        return $this->m_use_find;
    }
    public function setUseFind($value)
    {
        $this->m_use_find = $value;
        return;
    }

    public function getUseTitle()
    {
        return $this->m_use_title;
    }
    public function setUseTitle($value)
    {
        $this->m_use_title = $value;
        return;
    }

    public function getUseTitleInPost()
    {
        return $this->m_use_title_in_post;
    }
    public function setUseTitleInPost($value)
    {
        $this->m_use_title_in_post = $value;
        return;
    }

    public function getUseDescription()
    {
        return $this->m_use_description;
    }
    public function setUseDescription($value)
    {
        $this->m_use_description = $value;
        return;
    }

    public function getUseBreadcrumbs()
    {
        return $this->m_use_breadcrumbs;
    }
    public function setUseBreadcrumbs($value)
    {
        $this->m_use_breadcrumbs = $value;
        return;
    }

    public function getUseAuthor()
    {
        return $this->m_use_author;
    }
    public function setUseAuthor($value)
    {
        $this->m_use_author = $value;
        return;
    }

    public function getUseExcerpt()
    {
        return $this->m_use_excerpt;
    }
    public function setUseExcerpt($value)
    {
        $this->m_use_excerpt = $value;
        return;
    }

    public function getAddDate()
    {
        return $this->m_add_date;
    }
    public function setAddDate($value)
    {
        $this->m_add_date = $value;
        return;
    }

    public function getAddPoster()
    {
        return $this->m_add_poster;
    }
    public function setAddPoster($value)
    {
        $this->m_add_poster = $value;
        return;
    }

    public function getAllowComments()
    {
        return $this->m_allow_comments;
    }
    public function setAllowComments($value)
    {
        $this->m_allow_comments = $value;
        return;
    }

    public function getShowAvatar()
    {
        return $this->m_show_avatar;
    }
    public function setShowAvatar($value)
    {
        $this->m_show_avatar = $value;
        return;
    }

    public function getAlwaysOwner()
    {
        return $this->m_always_owner;
    }
    public function setAlwaysOwner($value)
    {
        $this->m_always_owner = $value;
        return;
    }

    public function getShowRelated()
    {
        return $this->m_show_related;
    }
    public function setShowRelated($value)
    {
        $this->m_show_related = $value;
        return;
    }

    public function getRelatedMax()
    {
        return $this->m_related_max;
    }
    public function setRelatedMax($value)
    {
        $this->m_related_max = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setBlogid($arrValues['blogId']);
        $this->setCreated($arrValues['created']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setTitle($arrValues['title']);
        $this->setDescription($arrValues['description']);
        $this->setUser($arrValues['user']);
        $this->setPublic($arrValues['public']);
        $this->setPosts($arrValues['posts']);
        $this->setMaxposts($arrValues['maxPosts']);
        $this->setHits($arrValues['hits']);
        $this->setActivity($arrValues['activity']);
        $this->setHeading($arrValues['heading']);
        $this->setPostHeading($arrValues['post_heading']);
        $this->setUseFind($arrValues['use_find']);
        $this->setUseTitle($arrValues['use_title']);
        $this->setUseTitleInPost($arrValues['use_title_in_post']);
        $this->setUseDescription($arrValues['use_description']);
        $this->setUseBreadcrumbs($arrValues['use_breadcrumbs']);
        $this->setUseAuthor($arrValues['use_author']);
        $this->setUseExcerpt($arrValues['use_excerpt']);
        $this->setAddDate($arrValues['add_date']);
        $this->setAddPoster($arrValues['add_poster']);
        $this->setAllowComments($arrValues['allow_comments']);
        $this->setShowAvatar($arrValues['show_avatar']);
        $this->setAlwaysOwner($arrValues['always_owner']);
        $this->setShowRelated($arrValues['show_related']);
        $this->setRelatedMax($arrValues['related_max']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'blogId':
                    $this->setBlogid($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'public':
                    $this->setPublic($val);
                    break;
                case 'posts':
                    $this->setPosts($val);
                    break;
                case 'maxPosts':
                    $this->setMaxposts($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'activity':
                    $this->setActivity($val);
                    break;
                case 'heading':
                    $this->setHeading($val);
                    break;
                case 'post_heading':
                    $this->setPostHeading($val);
                    break;
                case 'use_find':
                    $this->setUseFind($val);
                    break;
                case 'use_title':
                    $this->setUseTitle($val);
                    break;
                case 'use_title_in_post':
                    $this->setUseTitleInPost($val);
                    break;
                case 'use_description':
                    $this->setUseDescription($val);
                    break;
                case 'use_breadcrumbs':
                    $this->setUseBreadcrumbs($val);
                    break;
                case 'use_author':
                    $this->setUseAuthor($val);
                    break;
                case 'use_excerpt':
                    $this->setUseExcerpt($val);
                    break;
                case 'add_date':
                    $this->setAddDate($val);
                    break;
                case 'add_poster':
                    $this->setAddPoster($val);
                    break;
                case 'allow_comments':
                    $this->setAllowComments($val);
                    break;
                case 'show_avatar':
                    $this->setShowAvatar($val);
                    break;
                case 'always_owner':
                    $this->setAlwaysOwner($val);
                    break;
                case 'show_related':
                    $this->setShowRelated($val);
                    break;
                case 'related_max':
                    $this->setRelatedMax($val);
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
        $arrValues['created'] = $this->getCreated();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['title'] = $this->getTitle();
        $arrValues['description'] = $this->getDescription();
        $arrValues['user'] = $this->getUser();
        $arrValues['public'] = $this->getPublic();
        $arrValues['posts'] = $this->getPosts();
        $arrValues['maxPosts'] = $this->getMaxposts();
        $arrValues['hits'] = $this->getHits();
        $arrValues['activity'] = $this->getActivity();
        $arrValues['heading'] = $this->getHeading();
        $arrValues['post_heading'] = $this->getPostHeading();
        $arrValues['use_find'] = $this->getUseFind();
        $arrValues['use_title'] = $this->getUseTitle();
        $arrValues['use_title_in_post'] = $this->getUseTitleInPost();
        $arrValues['use_description'] = $this->getUseDescription();
        $arrValues['use_breadcrumbs'] = $this->getUseBreadcrumbs();
        $arrValues['use_author'] = $this->getUseAuthor();
        $arrValues['use_excerpt'] = $this->getUseExcerpt();
        $arrValues['add_date'] = $this->getAddDate();
        $arrValues['add_poster'] = $this->getAddPoster();
        $arrValues['allow_comments'] = $this->getAllowComments();
        $arrValues['show_avatar'] = $this->getShowAvatar();
        $arrValues['always_owner'] = $this->getAlwaysOwner();
        $arrValues['show_related'] = $this->getShowRelated();
        $arrValues['related_max'] = $this->getRelatedMax();
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
