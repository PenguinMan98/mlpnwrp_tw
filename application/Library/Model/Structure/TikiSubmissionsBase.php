<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSubmissionsBase
{
    protected $m_subId;
    protected $m_topline;
    protected $m_title;
    protected $m_subtitle;
    protected $m_linkto;
    protected $m_lang;
    protected $m_authorName;
    protected $m_topicId;
    protected $m_topicName;
    protected $m_size;
    protected $m_useImage;
    protected $m_image_name;
    protected $m_image_caption;
    protected $m_image_type;
    protected $m_image_size;
    protected $m_image_x;
    protected $m_image_y;
    protected $m_image_data;
    protected $m_publishDate;
    protected $m_expireDate;
    protected $m_created;
    protected $m_bibliographical_references;
    protected $m_resume;
    protected $m_heading;
    protected $m_body;
    protected $m_hash;
    protected $m_author;
    protected $m_nbreads;
    protected $m_votes;
    protected $m_points;
    protected $m_type;
    protected $m_rating;
    protected $m_isfloat;
    protected $m_subId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiSubmissionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSubid()
    {
        return $this->m_subId;
    }
    public function setSubid($value)
    {
        $this->m_subId = $value;
        $this->setOrigSubid($value);
        return;
    }

    public function getTopline()
    {
        return $this->m_topline;
    }
    public function setTopline($value)
    {
        $this->m_topline = $value;
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

    public function getSubtitle()
    {
        return $this->m_subtitle;
    }
    public function setSubtitle($value)
    {
        $this->m_subtitle = $value;
        return;
    }

    public function getLinkto()
    {
        return $this->m_linkto;
    }
    public function setLinkto($value)
    {
        $this->m_linkto = $value;
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

    public function getAuthorname()
    {
        return $this->m_authorName;
    }
    public function setAuthorname($value)
    {
        $this->m_authorName = $value;
        return;
    }

    public function getTopicid()
    {
        return $this->m_topicId;
    }
    public function setTopicid($value)
    {
        $this->m_topicId = $value;
        return;
    }

    public function getTopicname()
    {
        return $this->m_topicName;
    }
    public function setTopicname($value)
    {
        $this->m_topicName = $value;
        return;
    }

    public function getSize()
    {
        return $this->m_size;
    }
    public function setSize($value)
    {
        $this->m_size = $value;
        return;
    }

    public function getUseimage()
    {
        return $this->m_useImage;
    }
    public function setUseimage($value)
    {
        $this->m_useImage = $value;
        return;
    }

    public function getImageName()
    {
        return $this->m_image_name;
    }
    public function setImageName($value)
    {
        $this->m_image_name = $value;
        return;
    }

    public function getImageCaption()
    {
        return $this->m_image_caption;
    }
    public function setImageCaption($value)
    {
        $this->m_image_caption = $value;
        return;
    }

    public function getImageType()
    {
        return $this->m_image_type;
    }
    public function setImageType($value)
    {
        $this->m_image_type = $value;
        return;
    }

    public function getImageSize()
    {
        return $this->m_image_size;
    }
    public function setImageSize($value)
    {
        $this->m_image_size = $value;
        return;
    }

    public function getImageX()
    {
        return $this->m_image_x;
    }
    public function setImageX($value)
    {
        $this->m_image_x = $value;
        return;
    }

    public function getImageY()
    {
        return $this->m_image_y;
    }
    public function setImageY($value)
    {
        $this->m_image_y = $value;
        return;
    }

    public function getImageData()
    {
        return $this->m_image_data;
    }
    public function setImageData($value)
    {
        $this->m_image_data = $value;
        return;
    }

    public function getPublishdate()
    {
        return $this->m_publishDate;
    }
    public function setPublishdate($value)
    {
        $this->m_publishDate = $value;
        return;
    }

    public function getExpiredate()
    {
        return $this->m_expireDate;
    }
    public function setExpiredate($value)
    {
        $this->m_expireDate = $value;
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

    public function getBibliographicalReferences()
    {
        return $this->m_bibliographical_references;
    }
    public function setBibliographicalReferences($value)
    {
        $this->m_bibliographical_references = $value;
        return;
    }

    public function getResume()
    {
        return $this->m_resume;
    }
    public function setResume($value)
    {
        $this->m_resume = $value;
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

    public function getBody()
    {
        return $this->m_body;
    }
    public function setBody($value)
    {
        $this->m_body = $value;
        return;
    }

    public function getHash()
    {
        return $this->m_hash;
    }
    public function setHash($value)
    {
        $this->m_hash = $value;
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

    public function getNbreads()
    {
        return $this->m_nbreads;
    }
    public function setNbreads($value)
    {
        $this->m_nbreads = $value;
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

    public function getPoints()
    {
        return $this->m_points;
    }
    public function setPoints($value)
    {
        $this->m_points = $value;
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getRating()
    {
        return $this->m_rating;
    }
    public function setRating($value)
    {
        $this->m_rating = $value;
        return;
    }

    public function getIsfloat()
    {
        return $this->m_isfloat;
    }
    public function setIsfloat($value)
    {
        $this->m_isfloat = $value;
        return;
    }

    public function getOrigSubid()
    {
        return $this->m_subId_Orig;
    }
    public function setOrigSubid($value)
    {
        if (isset($this->m_subId_Orig)) { return; }
        $this->m_subId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSubid($arrValues['subId']);
        $this->setTopline($arrValues['topline']);
        $this->setTitle($arrValues['title']);
        $this->setSubtitle($arrValues['subtitle']);
        $this->setLinkto($arrValues['linkto']);
        $this->setLang($arrValues['lang']);
        $this->setAuthorname($arrValues['authorName']);
        $this->setTopicid($arrValues['topicId']);
        $this->setTopicname($arrValues['topicName']);
        $this->setSize($arrValues['size']);
        $this->setUseimage($arrValues['useImage']);
        $this->setImageName($arrValues['image_name']);
        $this->setImageCaption($arrValues['image_caption']);
        $this->setImageType($arrValues['image_type']);
        $this->setImageSize($arrValues['image_size']);
        $this->setImageX($arrValues['image_x']);
        $this->setImageY($arrValues['image_y']);
        $this->setImageData($arrValues['image_data']);
        $this->setPublishdate($arrValues['publishDate']);
        $this->setExpiredate($arrValues['expireDate']);
        $this->setCreated($arrValues['created']);
        $this->setBibliographicalReferences($arrValues['bibliographical_references']);
        $this->setResume($arrValues['resume']);
        $this->setHeading($arrValues['heading']);
        $this->setBody($arrValues['body']);
        $this->setHash($arrValues['hash']);
        $this->setAuthor($arrValues['author']);
        $this->setNbreads($arrValues['nbreads']);
        $this->setVotes($arrValues['votes']);
        $this->setPoints($arrValues['points']);
        $this->setType($arrValues['type']);
        $this->setRating($arrValues['rating']);
        $this->setIsfloat($arrValues['isfloat']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'subId':
                    $this->setSubid($val);
                    break;
                case 'topline':
                    $this->setTopline($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'subtitle':
                    $this->setSubtitle($val);
                    break;
                case 'linkto':
                    $this->setLinkto($val);
                    break;
                case 'lang':
                    $this->setLang($val);
                    break;
                case 'authorName':
                    $this->setAuthorname($val);
                    break;
                case 'topicId':
                    $this->setTopicid($val);
                    break;
                case 'topicName':
                    $this->setTopicname($val);
                    break;
                case 'size':
                    $this->setSize($val);
                    break;
                case 'useImage':
                    $this->setUseimage($val);
                    break;
                case 'image_name':
                    $this->setImageName($val);
                    break;
                case 'image_caption':
                    $this->setImageCaption($val);
                    break;
                case 'image_type':
                    $this->setImageType($val);
                    break;
                case 'image_size':
                    $this->setImageSize($val);
                    break;
                case 'image_x':
                    $this->setImageX($val);
                    break;
                case 'image_y':
                    $this->setImageY($val);
                    break;
                case 'image_data':
                    $this->setImageData($val);
                    break;
                case 'publishDate':
                    $this->setPublishdate($val);
                    break;
                case 'expireDate':
                    $this->setExpiredate($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'bibliographical_references':
                    $this->setBibliographicalReferences($val);
                    break;
                case 'resume':
                    $this->setResume($val);
                    break;
                case 'heading':
                    $this->setHeading($val);
                    break;
                case 'body':
                    $this->setBody($val);
                    break;
                case 'hash':
                    $this->setHash($val);
                    break;
                case 'author':
                    $this->setAuthor($val);
                    break;
                case 'nbreads':
                    $this->setNbreads($val);
                    break;
                case 'votes':
                    $this->setVotes($val);
                    break;
                case 'points':
                    $this->setPoints($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'rating':
                    $this->setRating($val);
                    break;
                case 'isfloat':
                    $this->setIsfloat($val);
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
        $arrValues['subId'] = $this->getSubid();
        $arrValues['topline'] = $this->getTopline();
        $arrValues['title'] = $this->getTitle();
        $arrValues['subtitle'] = $this->getSubtitle();
        $arrValues['linkto'] = $this->getLinkto();
        $arrValues['lang'] = $this->getLang();
        $arrValues['authorName'] = $this->getAuthorname();
        $arrValues['topicId'] = $this->getTopicid();
        $arrValues['topicName'] = $this->getTopicname();
        $arrValues['size'] = $this->getSize();
        $arrValues['useImage'] = $this->getUseimage();
        $arrValues['image_name'] = $this->getImageName();
        $arrValues['image_caption'] = $this->getImageCaption();
        $arrValues['image_type'] = $this->getImageType();
        $arrValues['image_size'] = $this->getImageSize();
        $arrValues['image_x'] = $this->getImageX();
        $arrValues['image_y'] = $this->getImageY();
        $arrValues['image_data'] = $this->getImageData();
        $arrValues['publishDate'] = $this->getPublishdate();
        $arrValues['expireDate'] = $this->getExpiredate();
        $arrValues['created'] = $this->getCreated();
        $arrValues['bibliographical_references'] = $this->getBibliographicalReferences();
        $arrValues['resume'] = $this->getResume();
        $arrValues['heading'] = $this->getHeading();
        $arrValues['body'] = $this->getBody();
        $arrValues['hash'] = $this->getHash();
        $arrValues['author'] = $this->getAuthor();
        $arrValues['nbreads'] = $this->getNbreads();
        $arrValues['votes'] = $this->getVotes();
        $arrValues['points'] = $this->getPoints();
        $arrValues['type'] = $this->getType();
        $arrValues['rating'] = $this->getRating();
        $arrValues['isfloat'] = $this->getIsfloat();
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
