<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiGalleriesBase
{
    protected $m_galleryId;
    protected $m_name;
    protected $m_description;
    protected $m_created;
    protected $m_lastModif;
    protected $m_visible;
    protected $m_geographic;
    protected $m_theme;
    protected $m_user;
    protected $m_hits;
    protected $m_maxRows;
    protected $m_rowImages;
    protected $m_thumbSizeX;
    protected $m_thumbSizeY;
    protected $m_public;
    protected $m_sortorder;
    protected $m_sortdirection;
    protected $m_galleryimage;
    protected $m_parentgallery;
    protected $m_showname;
    protected $m_showimageid;
    protected $m_showdescription;
    protected $m_showcreated;
    protected $m_showuser;
    protected $m_showhits;
    protected $m_showxysize;
    protected $m_showfilesize;
    protected $m_showfilename;
    protected $m_defaultscale;
    protected $m_showcategories;
    protected $m_galleryId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setName('');
            $this->setUser('');
            $this->setSortorder('created');
            $this->setSortdirection('desc');
            $this->setGalleryimage('first');
            $this->setParentgallery(-1);
            $this->setShowname('y');
            $this->setShowimageid('n');
            $this->setShowdescription('n');
            $this->setShowcreated('n');
            $this->setShowuser('n');
            $this->setShowhits('y');
            $this->setShowxysize('y');
            $this->setShowfilesize('n');
            $this->setShowfilename('n');
            $this->setDefaultscale('o');
            $this->setShowcategories('n');
        }
        return;
    }
    public function TikiGalleriesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getGalleryid()
    {
        return $this->m_galleryId;
    }
    public function setGalleryid($value)
    {
        $this->m_galleryId = $value;
        $this->setOrigGalleryid($value);
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

    public function getVisible()
    {
        return $this->m_visible;
    }
    public function setVisible($value)
    {
        $this->m_visible = $value;
        return;
    }

    public function getGeographic()
    {
        return $this->m_geographic;
    }
    public function setGeographic($value)
    {
        $this->m_geographic = $value;
        return;
    }

    public function getTheme()
    {
        return $this->m_theme;
    }
    public function setTheme($value)
    {
        $this->m_theme = $value;
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

    public function getMaxrows()
    {
        return $this->m_maxRows;
    }
    public function setMaxrows($value)
    {
        $this->m_maxRows = $value;
        return;
    }

    public function getRowimages()
    {
        return $this->m_rowImages;
    }
    public function setRowimages($value)
    {
        $this->m_rowImages = $value;
        return;
    }

    public function getThumbsizex()
    {
        return $this->m_thumbSizeX;
    }
    public function setThumbsizex($value)
    {
        $this->m_thumbSizeX = $value;
        return;
    }

    public function getThumbsizey()
    {
        return $this->m_thumbSizeY;
    }
    public function setThumbsizey($value)
    {
        $this->m_thumbSizeY = $value;
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

    public function getSortorder()
    {
        return $this->m_sortorder;
    }
    public function setSortorder($value)
    {
        $this->m_sortorder = $value;
        return;
    }

    public function getSortdirection()
    {
        return $this->m_sortdirection;
    }
    public function setSortdirection($value)
    {
        $this->m_sortdirection = $value;
        return;
    }

    public function getGalleryimage()
    {
        return $this->m_galleryimage;
    }
    public function setGalleryimage($value)
    {
        $this->m_galleryimage = $value;
        return;
    }

    public function getParentgallery()
    {
        return $this->m_parentgallery;
    }
    public function setParentgallery($value)
    {
        $this->m_parentgallery = $value;
        return;
    }

    public function getShowname()
    {
        return $this->m_showname;
    }
    public function setShowname($value)
    {
        $this->m_showname = $value;
        return;
    }

    public function getShowimageid()
    {
        return $this->m_showimageid;
    }
    public function setShowimageid($value)
    {
        $this->m_showimageid = $value;
        return;
    }

    public function getShowdescription()
    {
        return $this->m_showdescription;
    }
    public function setShowdescription($value)
    {
        $this->m_showdescription = $value;
        return;
    }

    public function getShowcreated()
    {
        return $this->m_showcreated;
    }
    public function setShowcreated($value)
    {
        $this->m_showcreated = $value;
        return;
    }

    public function getShowuser()
    {
        return $this->m_showuser;
    }
    public function setShowuser($value)
    {
        $this->m_showuser = $value;
        return;
    }

    public function getShowhits()
    {
        return $this->m_showhits;
    }
    public function setShowhits($value)
    {
        $this->m_showhits = $value;
        return;
    }

    public function getShowxysize()
    {
        return $this->m_showxysize;
    }
    public function setShowxysize($value)
    {
        $this->m_showxysize = $value;
        return;
    }

    public function getShowfilesize()
    {
        return $this->m_showfilesize;
    }
    public function setShowfilesize($value)
    {
        $this->m_showfilesize = $value;
        return;
    }

    public function getShowfilename()
    {
        return $this->m_showfilename;
    }
    public function setShowfilename($value)
    {
        $this->m_showfilename = $value;
        return;
    }

    public function getDefaultscale()
    {
        return $this->m_defaultscale;
    }
    public function setDefaultscale($value)
    {
        $this->m_defaultscale = $value;
        return;
    }

    public function getShowcategories()
    {
        return $this->m_showcategories;
    }
    public function setShowcategories($value)
    {
        $this->m_showcategories = $value;
        return;
    }

    public function getOrigGalleryid()
    {
        return $this->m_galleryId_Orig;
    }
    public function setOrigGalleryid($value)
    {
        if (isset($this->m_galleryId_Orig)) { return; }
        $this->m_galleryId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setGalleryid($arrValues['galleryId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setCreated($arrValues['created']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setVisible($arrValues['visible']);
        $this->setGeographic($arrValues['geographic']);
        $this->setTheme($arrValues['theme']);
        $this->setUser($arrValues['user']);
        $this->setHits($arrValues['hits']);
        $this->setMaxrows($arrValues['maxRows']);
        $this->setRowimages($arrValues['rowImages']);
        $this->setThumbsizex($arrValues['thumbSizeX']);
        $this->setThumbsizey($arrValues['thumbSizeY']);
        $this->setPublic($arrValues['public']);
        $this->setSortorder($arrValues['sortorder']);
        $this->setSortdirection($arrValues['sortdirection']);
        $this->setGalleryimage($arrValues['galleryimage']);
        $this->setParentgallery($arrValues['parentgallery']);
        $this->setShowname($arrValues['showname']);
        $this->setShowimageid($arrValues['showimageid']);
        $this->setShowdescription($arrValues['showdescription']);
        $this->setShowcreated($arrValues['showcreated']);
        $this->setShowuser($arrValues['showuser']);
        $this->setShowhits($arrValues['showhits']);
        $this->setShowxysize($arrValues['showxysize']);
        $this->setShowfilesize($arrValues['showfilesize']);
        $this->setShowfilename($arrValues['showfilename']);
        $this->setDefaultscale($arrValues['defaultscale']);
        $this->setShowcategories($arrValues['showcategories']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'galleryId':
                    $this->setGalleryid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'visible':
                    $this->setVisible($val);
                    break;
                case 'geographic':
                    $this->setGeographic($val);
                    break;
                case 'theme':
                    $this->setTheme($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'maxRows':
                    $this->setMaxrows($val);
                    break;
                case 'rowImages':
                    $this->setRowimages($val);
                    break;
                case 'thumbSizeX':
                    $this->setThumbsizex($val);
                    break;
                case 'thumbSizeY':
                    $this->setThumbsizey($val);
                    break;
                case 'public':
                    $this->setPublic($val);
                    break;
                case 'sortorder':
                    $this->setSortorder($val);
                    break;
                case 'sortdirection':
                    $this->setSortdirection($val);
                    break;
                case 'galleryimage':
                    $this->setGalleryimage($val);
                    break;
                case 'parentgallery':
                    $this->setParentgallery($val);
                    break;
                case 'showname':
                    $this->setShowname($val);
                    break;
                case 'showimageid':
                    $this->setShowimageid($val);
                    break;
                case 'showdescription':
                    $this->setShowdescription($val);
                    break;
                case 'showcreated':
                    $this->setShowcreated($val);
                    break;
                case 'showuser':
                    $this->setShowuser($val);
                    break;
                case 'showhits':
                    $this->setShowhits($val);
                    break;
                case 'showxysize':
                    $this->setShowxysize($val);
                    break;
                case 'showfilesize':
                    $this->setShowfilesize($val);
                    break;
                case 'showfilename':
                    $this->setShowfilename($val);
                    break;
                case 'defaultscale':
                    $this->setDefaultscale($val);
                    break;
                case 'showcategories':
                    $this->setShowcategories($val);
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
        $arrValues['galleryId'] = $this->getGalleryid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['created'] = $this->getCreated();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['visible'] = $this->getVisible();
        $arrValues['geographic'] = $this->getGeographic();
        $arrValues['theme'] = $this->getTheme();
        $arrValues['user'] = $this->getUser();
        $arrValues['hits'] = $this->getHits();
        $arrValues['maxRows'] = $this->getMaxrows();
        $arrValues['rowImages'] = $this->getRowimages();
        $arrValues['thumbSizeX'] = $this->getThumbsizex();
        $arrValues['thumbSizeY'] = $this->getThumbsizey();
        $arrValues['public'] = $this->getPublic();
        $arrValues['sortorder'] = $this->getSortorder();
        $arrValues['sortdirection'] = $this->getSortdirection();
        $arrValues['galleryimage'] = $this->getGalleryimage();
        $arrValues['parentgallery'] = $this->getParentgallery();
        $arrValues['showname'] = $this->getShowname();
        $arrValues['showimageid'] = $this->getShowimageid();
        $arrValues['showdescription'] = $this->getShowdescription();
        $arrValues['showcreated'] = $this->getShowcreated();
        $arrValues['showuser'] = $this->getShowuser();
        $arrValues['showhits'] = $this->getShowhits();
        $arrValues['showxysize'] = $this->getShowxysize();
        $arrValues['showfilesize'] = $this->getShowfilesize();
        $arrValues['showfilename'] = $this->getShowfilename();
        $arrValues['defaultscale'] = $this->getDefaultscale();
        $arrValues['showcategories'] = $this->getShowcategories();
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
