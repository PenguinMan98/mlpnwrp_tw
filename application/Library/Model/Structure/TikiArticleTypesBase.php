<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiArticleTypesBase
{
    protected $m_type;
    protected $m_use_ratings;
    protected $m_show_pre_publ;
    protected $m_show_post_expire;
    protected $m_heading_only;
    protected $m_allow_comments;
    protected $m_show_image;
    protected $m_show_avatar;
    protected $m_show_author;
    protected $m_show_pubdate;
    protected $m_show_expdate;
    protected $m_show_reads;
    protected $m_show_size;
    protected $m_show_topline;
    protected $m_show_subtitle;
    protected $m_show_linkto;
    protected $m_show_image_caption;
    protected $m_creator_edit;
    protected $m_comment_can_rate_article;
    protected $m_type_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setShowPostExpire('y');
            $this->setAllowComments('y');
            $this->setShowImage('y');
            $this->setShowAuthor('y');
            $this->setShowPubdate('y');
            $this->setShowReads('y');
            $this->setShowSize('n');
            $this->setShowTopline('n');
            $this->setShowSubtitle('n');
            $this->setShowLinkto('n');
            $this->setShowImageCaption('n');
        }
        return;
    }
    public function TikiArticleTypesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        $this->setOrigType($value);
        return;
    }

    public function getUseRatings()
    {
        return $this->m_use_ratings;
    }
    public function setUseRatings($value)
    {
        $this->m_use_ratings = $value;
        return;
    }

    public function getShowPrePubl()
    {
        return $this->m_show_pre_publ;
    }
    public function setShowPrePubl($value)
    {
        $this->m_show_pre_publ = $value;
        return;
    }

    public function getShowPostExpire()
    {
        return $this->m_show_post_expire;
    }
    public function setShowPostExpire($value)
    {
        $this->m_show_post_expire = $value;
        return;
    }

    public function getHeadingOnly()
    {
        return $this->m_heading_only;
    }
    public function setHeadingOnly($value)
    {
        $this->m_heading_only = $value;
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

    public function getShowImage()
    {
        return $this->m_show_image;
    }
    public function setShowImage($value)
    {
        $this->m_show_image = $value;
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

    public function getShowAuthor()
    {
        return $this->m_show_author;
    }
    public function setShowAuthor($value)
    {
        $this->m_show_author = $value;
        return;
    }

    public function getShowPubdate()
    {
        return $this->m_show_pubdate;
    }
    public function setShowPubdate($value)
    {
        $this->m_show_pubdate = $value;
        return;
    }

    public function getShowExpdate()
    {
        return $this->m_show_expdate;
    }
    public function setShowExpdate($value)
    {
        $this->m_show_expdate = $value;
        return;
    }

    public function getShowReads()
    {
        return $this->m_show_reads;
    }
    public function setShowReads($value)
    {
        $this->m_show_reads = $value;
        return;
    }

    public function getShowSize()
    {
        return $this->m_show_size;
    }
    public function setShowSize($value)
    {
        $this->m_show_size = $value;
        return;
    }

    public function getShowTopline()
    {
        return $this->m_show_topline;
    }
    public function setShowTopline($value)
    {
        $this->m_show_topline = $value;
        return;
    }

    public function getShowSubtitle()
    {
        return $this->m_show_subtitle;
    }
    public function setShowSubtitle($value)
    {
        $this->m_show_subtitle = $value;
        return;
    }

    public function getShowLinkto()
    {
        return $this->m_show_linkto;
    }
    public function setShowLinkto($value)
    {
        $this->m_show_linkto = $value;
        return;
    }

    public function getShowImageCaption()
    {
        return $this->m_show_image_caption;
    }
    public function setShowImageCaption($value)
    {
        $this->m_show_image_caption = $value;
        return;
    }

    public function getCreatorEdit()
    {
        return $this->m_creator_edit;
    }
    public function setCreatorEdit($value)
    {
        $this->m_creator_edit = $value;
        return;
    }

    public function getCommentCanRateArticle()
    {
        return $this->m_comment_can_rate_article;
    }
    public function setCommentCanRateArticle($value)
    {
        $this->m_comment_can_rate_article = $value;
        return;
    }

    public function getOrigType()
    {
        return $this->m_type_Orig;
    }
    public function setOrigType($value)
    {
        if (isset($this->m_type_Orig)) { return; }
        $this->m_type_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setType($arrValues['type']);
        $this->setUseRatings($arrValues['use_ratings']);
        $this->setShowPrePubl($arrValues['show_pre_publ']);
        $this->setShowPostExpire($arrValues['show_post_expire']);
        $this->setHeadingOnly($arrValues['heading_only']);
        $this->setAllowComments($arrValues['allow_comments']);
        $this->setShowImage($arrValues['show_image']);
        $this->setShowAvatar($arrValues['show_avatar']);
        $this->setShowAuthor($arrValues['show_author']);
        $this->setShowPubdate($arrValues['show_pubdate']);
        $this->setShowExpdate($arrValues['show_expdate']);
        $this->setShowReads($arrValues['show_reads']);
        $this->setShowSize($arrValues['show_size']);
        $this->setShowTopline($arrValues['show_topline']);
        $this->setShowSubtitle($arrValues['show_subtitle']);
        $this->setShowLinkto($arrValues['show_linkto']);
        $this->setShowImageCaption($arrValues['show_image_caption']);
        $this->setCreatorEdit($arrValues['creator_edit']);
        $this->setCommentCanRateArticle($arrValues['comment_can_rate_article']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'type':
                    $this->setType($val);
                    break;
                case 'use_ratings':
                    $this->setUseRatings($val);
                    break;
                case 'show_pre_publ':
                    $this->setShowPrePubl($val);
                    break;
                case 'show_post_expire':
                    $this->setShowPostExpire($val);
                    break;
                case 'heading_only':
                    $this->setHeadingOnly($val);
                    break;
                case 'allow_comments':
                    $this->setAllowComments($val);
                    break;
                case 'show_image':
                    $this->setShowImage($val);
                    break;
                case 'show_avatar':
                    $this->setShowAvatar($val);
                    break;
                case 'show_author':
                    $this->setShowAuthor($val);
                    break;
                case 'show_pubdate':
                    $this->setShowPubdate($val);
                    break;
                case 'show_expdate':
                    $this->setShowExpdate($val);
                    break;
                case 'show_reads':
                    $this->setShowReads($val);
                    break;
                case 'show_size':
                    $this->setShowSize($val);
                    break;
                case 'show_topline':
                    $this->setShowTopline($val);
                    break;
                case 'show_subtitle':
                    $this->setShowSubtitle($val);
                    break;
                case 'show_linkto':
                    $this->setShowLinkto($val);
                    break;
                case 'show_image_caption':
                    $this->setShowImageCaption($val);
                    break;
                case 'creator_edit':
                    $this->setCreatorEdit($val);
                    break;
                case 'comment_can_rate_article':
                    $this->setCommentCanRateArticle($val);
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
        $arrValues['type'] = $this->getType();
        $arrValues['use_ratings'] = $this->getUseRatings();
        $arrValues['show_pre_publ'] = $this->getShowPrePubl();
        $arrValues['show_post_expire'] = $this->getShowPostExpire();
        $arrValues['heading_only'] = $this->getHeadingOnly();
        $arrValues['allow_comments'] = $this->getAllowComments();
        $arrValues['show_image'] = $this->getShowImage();
        $arrValues['show_avatar'] = $this->getShowAvatar();
        $arrValues['show_author'] = $this->getShowAuthor();
        $arrValues['show_pubdate'] = $this->getShowPubdate();
        $arrValues['show_expdate'] = $this->getShowExpdate();
        $arrValues['show_reads'] = $this->getShowReads();
        $arrValues['show_size'] = $this->getShowSize();
        $arrValues['show_topline'] = $this->getShowTopline();
        $arrValues['show_subtitle'] = $this->getShowSubtitle();
        $arrValues['show_linkto'] = $this->getShowLinkto();
        $arrValues['show_image_caption'] = $this->getShowImageCaption();
        $arrValues['creator_edit'] = $this->getCreatorEdit();
        $arrValues['comment_can_rate_article'] = $this->getCommentCanRateArticle();
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
