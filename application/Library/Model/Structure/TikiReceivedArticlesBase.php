<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiReceivedArticlesBase
{
    protected $m_receivedArticleId;
    protected $m_receivedFromSite;
    protected $m_receivedFromUser;
    protected $m_receivedDate;
    protected $m_title;
    protected $m_authorName;
    protected $m_size;
    protected $m_useImage;
    protected $m_image_name;
    protected $m_image_type;
    protected $m_image_size;
    protected $m_image_x;
    protected $m_image_y;
    protected $m_image_data;
    protected $m_publishDate;
    protected $m_expireDate;
    protected $m_created;
    protected $m_heading;
    protected $m_body;
    protected $m_hash;
    protected $m_author;
    protected $m_type;
    protected $m_rating;
    protected $m_receivedArticleId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiReceivedArticlesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getReceivedarticleid()
    {
        return $this->m_receivedArticleId;
    }
    public function setReceivedarticleid($value)
    {
        $this->m_receivedArticleId = $value;
        $this->setOrigReceivedarticleid($value);
        return;
    }

    public function getReceivedfromsite()
    {
        return $this->m_receivedFromSite;
    }
    public function setReceivedfromsite($value)
    {
        $this->m_receivedFromSite = $value;
        return;
    }

    public function getReceivedfromuser()
    {
        return $this->m_receivedFromUser;
    }
    public function setReceivedfromuser($value)
    {
        $this->m_receivedFromUser = $value;
        return;
    }

    public function getReceiveddate()
    {
        return $this->m_receivedDate;
    }
    public function setReceiveddate($value)
    {
        $this->m_receivedDate = $value;
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

    public function getAuthorname()
    {
        return $this->m_authorName;
    }
    public function setAuthorname($value)
    {
        $this->m_authorName = $value;
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

    public function getOrigReceivedarticleid()
    {
        return $this->m_receivedArticleId_Orig;
    }
    public function setOrigReceivedarticleid($value)
    {
        if (isset($this->m_receivedArticleId_Orig)) { return; }
        $this->m_receivedArticleId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setReceivedarticleid($arrValues['receivedArticleId']);
        $this->setReceivedfromsite($arrValues['receivedFromSite']);
        $this->setReceivedfromuser($arrValues['receivedFromUser']);
        $this->setReceiveddate($arrValues['receivedDate']);
        $this->setTitle($arrValues['title']);
        $this->setAuthorname($arrValues['authorName']);
        $this->setSize($arrValues['size']);
        $this->setUseimage($arrValues['useImage']);
        $this->setImageName($arrValues['image_name']);
        $this->setImageType($arrValues['image_type']);
        $this->setImageSize($arrValues['image_size']);
        $this->setImageX($arrValues['image_x']);
        $this->setImageY($arrValues['image_y']);
        $this->setImageData($arrValues['image_data']);
        $this->setPublishdate($arrValues['publishDate']);
        $this->setExpiredate($arrValues['expireDate']);
        $this->setCreated($arrValues['created']);
        $this->setHeading($arrValues['heading']);
        $this->setBody($arrValues['body']);
        $this->setHash($arrValues['hash']);
        $this->setAuthor($arrValues['author']);
        $this->setType($arrValues['type']);
        $this->setRating($arrValues['rating']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'receivedArticleId':
                    $this->setReceivedarticleid($val);
                    break;
                case 'receivedFromSite':
                    $this->setReceivedfromsite($val);
                    break;
                case 'receivedFromUser':
                    $this->setReceivedfromuser($val);
                    break;
                case 'receivedDate':
                    $this->setReceiveddate($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'authorName':
                    $this->setAuthorname($val);
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
                case 'type':
                    $this->setType($val);
                    break;
                case 'rating':
                    $this->setRating($val);
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
        $arrValues['receivedArticleId'] = $this->getReceivedarticleid();
        $arrValues['receivedFromSite'] = $this->getReceivedfromsite();
        $arrValues['receivedFromUser'] = $this->getReceivedfromuser();
        $arrValues['receivedDate'] = $this->getReceiveddate();
        $arrValues['title'] = $this->getTitle();
        $arrValues['authorName'] = $this->getAuthorname();
        $arrValues['size'] = $this->getSize();
        $arrValues['useImage'] = $this->getUseimage();
        $arrValues['image_name'] = $this->getImageName();
        $arrValues['image_type'] = $this->getImageType();
        $arrValues['image_size'] = $this->getImageSize();
        $arrValues['image_x'] = $this->getImageX();
        $arrValues['image_y'] = $this->getImageY();
        $arrValues['image_data'] = $this->getImageData();
        $arrValues['publishDate'] = $this->getPublishdate();
        $arrValues['expireDate'] = $this->getExpiredate();
        $arrValues['created'] = $this->getCreated();
        $arrValues['heading'] = $this->getHeading();
        $arrValues['body'] = $this->getBody();
        $arrValues['hash'] = $this->getHash();
        $arrValues['author'] = $this->getAuthor();
        $arrValues['type'] = $this->getType();
        $arrValues['rating'] = $this->getRating();
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
