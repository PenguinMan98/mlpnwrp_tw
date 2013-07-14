<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFileGalleriesBase
{
    protected $m_galleryId;
    protected $m_name;
    protected $m_type;
    protected $m_template;
    protected $m_description;
    protected $m_created;
    protected $m_visible;
    protected $m_lastModif;
    protected $m_user;
    protected $m_hits;
    protected $m_votes;
    protected $m_points;
    protected $m_maxRows;
    protected $m_public;
    protected $m_show_id;
    protected $m_show_icon;
    protected $m_show_name;
    protected $m_show_size;
    protected $m_show_description;
    protected $m_max_desc;
    protected $m_show_created;
    protected $m_show_hits;
    protected $m_show_lastDownload;
    protected $m_parentId;
    protected $m_lockable;
    protected $m_show_lockedby;
    protected $m_archives;
    protected $m_sort_mode;
    protected $m_show_modified;
    protected $m_show_author;
    protected $m_show_creator;
    protected $m_subgal_conf;
    protected $m_show_last_user;
    protected $m_show_comment;
    protected $m_show_files;
    protected $m_show_explorer;
    protected $m_show_path;
    protected $m_show_slideshow;
    protected $m_default_view;
    protected $m_quota;
    protected $m_size;
    protected $m_wiki_syntax;
    protected $m_backlinkPerms;
    protected $m_show_backlinks;
    protected $m_show_deleteAfter;
    protected $m_show_checked;
    protected $m_show_share;
    protected $m_image_max_size_x;
    protected $m_image_max_size_y;
    protected $m_show_source;
    protected $m_icon_fileId;
    protected $m_galleryId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setName('');
            $this->setType('default');
            $this->setUser('');
            $this->setParentid(-1);
            $this->setLockable('n');
            $this->setArchives(0);
            $this->setQuota(0);
            $this->setBacklinkperms('n');
            $this->setImageMaxSizeX(0);
            $this->setImageMaxSizeY(0);
            $this->setShowSource('o');
        }
        return;
    }
    public function TikiFileGalleriesBase($arrData = null)
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

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getTemplate()
    {
        return $this->m_template;
    }
    public function setTemplate($value)
    {
        $this->m_template = $value;
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

    public function getVisible()
    {
        return $this->m_visible;
    }
    public function setVisible($value)
    {
        $this->m_visible = $value;
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

    public function getMaxrows()
    {
        return $this->m_maxRows;
    }
    public function setMaxrows($value)
    {
        $this->m_maxRows = $value;
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

    public function getShowId()
    {
        return $this->m_show_id;
    }
    public function setShowId($value)
    {
        $this->m_show_id = $value;
        return;
    }

    public function getShowIcon()
    {
        return $this->m_show_icon;
    }
    public function setShowIcon($value)
    {
        $this->m_show_icon = $value;
        return;
    }

    public function getShowName()
    {
        return $this->m_show_name;
    }
    public function setShowName($value)
    {
        $this->m_show_name = $value;
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

    public function getShowDescription()
    {
        return $this->m_show_description;
    }
    public function setShowDescription($value)
    {
        $this->m_show_description = $value;
        return;
    }

    public function getMaxDesc()
    {
        return $this->m_max_desc;
    }
    public function setMaxDesc($value)
    {
        $this->m_max_desc = $value;
        return;
    }

    public function getShowCreated()
    {
        return $this->m_show_created;
    }
    public function setShowCreated($value)
    {
        $this->m_show_created = $value;
        return;
    }

    public function getShowHits()
    {
        return $this->m_show_hits;
    }
    public function setShowHits($value)
    {
        $this->m_show_hits = $value;
        return;
    }

    public function getShowLastdownload()
    {
        return $this->m_show_lastDownload;
    }
    public function setShowLastdownload($value)
    {
        $this->m_show_lastDownload = $value;
        return;
    }

    public function getParentid()
    {
        return $this->m_parentId;
    }
    public function setParentid($value)
    {
        $this->m_parentId = $value;
        return;
    }

    public function getLockable()
    {
        return $this->m_lockable;
    }
    public function setLockable($value)
    {
        $this->m_lockable = $value;
        return;
    }

    public function getShowLockedby()
    {
        return $this->m_show_lockedby;
    }
    public function setShowLockedby($value)
    {
        $this->m_show_lockedby = $value;
        return;
    }

    public function getArchives()
    {
        return $this->m_archives;
    }
    public function setArchives($value)
    {
        $this->m_archives = $value;
        return;
    }

    public function getSortMode()
    {
        return $this->m_sort_mode;
    }
    public function setSortMode($value)
    {
        $this->m_sort_mode = $value;
        return;
    }

    public function getShowModified()
    {
        return $this->m_show_modified;
    }
    public function setShowModified($value)
    {
        $this->m_show_modified = $value;
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

    public function getShowCreator()
    {
        return $this->m_show_creator;
    }
    public function setShowCreator($value)
    {
        $this->m_show_creator = $value;
        return;
    }

    public function getSubgalConf()
    {
        return $this->m_subgal_conf;
    }
    public function setSubgalConf($value)
    {
        $this->m_subgal_conf = $value;
        return;
    }

    public function getShowLastUser()
    {
        return $this->m_show_last_user;
    }
    public function setShowLastUser($value)
    {
        $this->m_show_last_user = $value;
        return;
    }

    public function getShowComment()
    {
        return $this->m_show_comment;
    }
    public function setShowComment($value)
    {
        $this->m_show_comment = $value;
        return;
    }

    public function getShowFiles()
    {
        return $this->m_show_files;
    }
    public function setShowFiles($value)
    {
        $this->m_show_files = $value;
        return;
    }

    public function getShowExplorer()
    {
        return $this->m_show_explorer;
    }
    public function setShowExplorer($value)
    {
        $this->m_show_explorer = $value;
        return;
    }

    public function getShowPath()
    {
        return $this->m_show_path;
    }
    public function setShowPath($value)
    {
        $this->m_show_path = $value;
        return;
    }

    public function getShowSlideshow()
    {
        return $this->m_show_slideshow;
    }
    public function setShowSlideshow($value)
    {
        $this->m_show_slideshow = $value;
        return;
    }

    public function getDefaultView()
    {
        return $this->m_default_view;
    }
    public function setDefaultView($value)
    {
        $this->m_default_view = $value;
        return;
    }

    public function getQuota()
    {
        return $this->m_quota;
    }
    public function setQuota($value)
    {
        $this->m_quota = $value;
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

    public function getWikiSyntax()
    {
        return $this->m_wiki_syntax;
    }
    public function setWikiSyntax($value)
    {
        $this->m_wiki_syntax = $value;
        return;
    }

    public function getBacklinkperms()
    {
        return $this->m_backlinkPerms;
    }
    public function setBacklinkperms($value)
    {
        $this->m_backlinkPerms = $value;
        return;
    }

    public function getShowBacklinks()
    {
        return $this->m_show_backlinks;
    }
    public function setShowBacklinks($value)
    {
        $this->m_show_backlinks = $value;
        return;
    }

    public function getShowDeleteafter()
    {
        return $this->m_show_deleteAfter;
    }
    public function setShowDeleteafter($value)
    {
        $this->m_show_deleteAfter = $value;
        return;
    }

    public function getShowChecked()
    {
        return $this->m_show_checked;
    }
    public function setShowChecked($value)
    {
        $this->m_show_checked = $value;
        return;
    }

    public function getShowShare()
    {
        return $this->m_show_share;
    }
    public function setShowShare($value)
    {
        $this->m_show_share = $value;
        return;
    }

    public function getImageMaxSizeX()
    {
        return $this->m_image_max_size_x;
    }
    public function setImageMaxSizeX($value)
    {
        $this->m_image_max_size_x = $value;
        return;
    }

    public function getImageMaxSizeY()
    {
        return $this->m_image_max_size_y;
    }
    public function setImageMaxSizeY($value)
    {
        $this->m_image_max_size_y = $value;
        return;
    }

    public function getShowSource()
    {
        return $this->m_show_source;
    }
    public function setShowSource($value)
    {
        $this->m_show_source = $value;
        return;
    }

    public function getIconFileid()
    {
        return $this->m_icon_fileId;
    }
    public function setIconFileid($value)
    {
        $this->m_icon_fileId = $value;
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
        $this->setType($arrValues['type']);
        $this->setTemplate($arrValues['template']);
        $this->setDescription($arrValues['description']);
        $this->setCreated($arrValues['created']);
        $this->setVisible($arrValues['visible']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setUser($arrValues['user']);
        $this->setHits($arrValues['hits']);
        $this->setVotes($arrValues['votes']);
        $this->setPoints($arrValues['points']);
        $this->setMaxrows($arrValues['maxRows']);
        $this->setPublic($arrValues['public']);
        $this->setShowId($arrValues['show_id']);
        $this->setShowIcon($arrValues['show_icon']);
        $this->setShowName($arrValues['show_name']);
        $this->setShowSize($arrValues['show_size']);
        $this->setShowDescription($arrValues['show_description']);
        $this->setMaxDesc($arrValues['max_desc']);
        $this->setShowCreated($arrValues['show_created']);
        $this->setShowHits($arrValues['show_hits']);
        $this->setShowLastdownload($arrValues['show_lastDownload']);
        $this->setParentid($arrValues['parentId']);
        $this->setLockable($arrValues['lockable']);
        $this->setShowLockedby($arrValues['show_lockedby']);
        $this->setArchives($arrValues['archives']);
        $this->setSortMode($arrValues['sort_mode']);
        $this->setShowModified($arrValues['show_modified']);
        $this->setShowAuthor($arrValues['show_author']);
        $this->setShowCreator($arrValues['show_creator']);
        $this->setSubgalConf($arrValues['subgal_conf']);
        $this->setShowLastUser($arrValues['show_last_user']);
        $this->setShowComment($arrValues['show_comment']);
        $this->setShowFiles($arrValues['show_files']);
        $this->setShowExplorer($arrValues['show_explorer']);
        $this->setShowPath($arrValues['show_path']);
        $this->setShowSlideshow($arrValues['show_slideshow']);
        $this->setDefaultView($arrValues['default_view']);
        $this->setQuota($arrValues['quota']);
        $this->setSize($arrValues['size']);
        $this->setWikiSyntax($arrValues['wiki_syntax']);
        $this->setBacklinkperms($arrValues['backlinkPerms']);
        $this->setShowBacklinks($arrValues['show_backlinks']);
        $this->setShowDeleteafter($arrValues['show_deleteAfter']);
        $this->setShowChecked($arrValues['show_checked']);
        $this->setShowShare($arrValues['show_share']);
        $this->setImageMaxSizeX($arrValues['image_max_size_x']);
        $this->setImageMaxSizeY($arrValues['image_max_size_y']);
        $this->setShowSource($arrValues['show_source']);
        $this->setIconFileid($arrValues['icon_fileId']);
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
                case 'type':
                    $this->setType($val);
                    break;
                case 'template':
                    $this->setTemplate($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'visible':
                    $this->setVisible($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'votes':
                    $this->setVotes($val);
                    break;
                case 'points':
                    $this->setPoints($val);
                    break;
                case 'maxRows':
                    $this->setMaxrows($val);
                    break;
                case 'public':
                    $this->setPublic($val);
                    break;
                case 'show_id':
                    $this->setShowId($val);
                    break;
                case 'show_icon':
                    $this->setShowIcon($val);
                    break;
                case 'show_name':
                    $this->setShowName($val);
                    break;
                case 'show_size':
                    $this->setShowSize($val);
                    break;
                case 'show_description':
                    $this->setShowDescription($val);
                    break;
                case 'max_desc':
                    $this->setMaxDesc($val);
                    break;
                case 'show_created':
                    $this->setShowCreated($val);
                    break;
                case 'show_hits':
                    $this->setShowHits($val);
                    break;
                case 'show_lastDownload':
                    $this->setShowLastdownload($val);
                    break;
                case 'parentId':
                    $this->setParentid($val);
                    break;
                case 'lockable':
                    $this->setLockable($val);
                    break;
                case 'show_lockedby':
                    $this->setShowLockedby($val);
                    break;
                case 'archives':
                    $this->setArchives($val);
                    break;
                case 'sort_mode':
                    $this->setSortMode($val);
                    break;
                case 'show_modified':
                    $this->setShowModified($val);
                    break;
                case 'show_author':
                    $this->setShowAuthor($val);
                    break;
                case 'show_creator':
                    $this->setShowCreator($val);
                    break;
                case 'subgal_conf':
                    $this->setSubgalConf($val);
                    break;
                case 'show_last_user':
                    $this->setShowLastUser($val);
                    break;
                case 'show_comment':
                    $this->setShowComment($val);
                    break;
                case 'show_files':
                    $this->setShowFiles($val);
                    break;
                case 'show_explorer':
                    $this->setShowExplorer($val);
                    break;
                case 'show_path':
                    $this->setShowPath($val);
                    break;
                case 'show_slideshow':
                    $this->setShowSlideshow($val);
                    break;
                case 'default_view':
                    $this->setDefaultView($val);
                    break;
                case 'quota':
                    $this->setQuota($val);
                    break;
                case 'size':
                    $this->setSize($val);
                    break;
                case 'wiki_syntax':
                    $this->setWikiSyntax($val);
                    break;
                case 'backlinkPerms':
                    $this->setBacklinkperms($val);
                    break;
                case 'show_backlinks':
                    $this->setShowBacklinks($val);
                    break;
                case 'show_deleteAfter':
                    $this->setShowDeleteafter($val);
                    break;
                case 'show_checked':
                    $this->setShowChecked($val);
                    break;
                case 'show_share':
                    $this->setShowShare($val);
                    break;
                case 'image_max_size_x':
                    $this->setImageMaxSizeX($val);
                    break;
                case 'image_max_size_y':
                    $this->setImageMaxSizeY($val);
                    break;
                case 'show_source':
                    $this->setShowSource($val);
                    break;
                case 'icon_fileId':
                    $this->setIconFileid($val);
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
        $arrValues['type'] = $this->getType();
        $arrValues['template'] = $this->getTemplate();
        $arrValues['description'] = $this->getDescription();
        $arrValues['created'] = $this->getCreated();
        $arrValues['visible'] = $this->getVisible();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['user'] = $this->getUser();
        $arrValues['hits'] = $this->getHits();
        $arrValues['votes'] = $this->getVotes();
        $arrValues['points'] = $this->getPoints();
        $arrValues['maxRows'] = $this->getMaxrows();
        $arrValues['public'] = $this->getPublic();
        $arrValues['show_id'] = $this->getShowId();
        $arrValues['show_icon'] = $this->getShowIcon();
        $arrValues['show_name'] = $this->getShowName();
        $arrValues['show_size'] = $this->getShowSize();
        $arrValues['show_description'] = $this->getShowDescription();
        $arrValues['max_desc'] = $this->getMaxDesc();
        $arrValues['show_created'] = $this->getShowCreated();
        $arrValues['show_hits'] = $this->getShowHits();
        $arrValues['show_lastDownload'] = $this->getShowLastdownload();
        $arrValues['parentId'] = $this->getParentid();
        $arrValues['lockable'] = $this->getLockable();
        $arrValues['show_lockedby'] = $this->getShowLockedby();
        $arrValues['archives'] = $this->getArchives();
        $arrValues['sort_mode'] = $this->getSortMode();
        $arrValues['show_modified'] = $this->getShowModified();
        $arrValues['show_author'] = $this->getShowAuthor();
        $arrValues['show_creator'] = $this->getShowCreator();
        $arrValues['subgal_conf'] = $this->getSubgalConf();
        $arrValues['show_last_user'] = $this->getShowLastUser();
        $arrValues['show_comment'] = $this->getShowComment();
        $arrValues['show_files'] = $this->getShowFiles();
        $arrValues['show_explorer'] = $this->getShowExplorer();
        $arrValues['show_path'] = $this->getShowPath();
        $arrValues['show_slideshow'] = $this->getShowSlideshow();
        $arrValues['default_view'] = $this->getDefaultView();
        $arrValues['quota'] = $this->getQuota();
        $arrValues['size'] = $this->getSize();
        $arrValues['wiki_syntax'] = $this->getWikiSyntax();
        $arrValues['backlinkPerms'] = $this->getBacklinkperms();
        $arrValues['show_backlinks'] = $this->getShowBacklinks();
        $arrValues['show_deleteAfter'] = $this->getShowDeleteafter();
        $arrValues['show_checked'] = $this->getShowChecked();
        $arrValues['show_share'] = $this->getShowShare();
        $arrValues['image_max_size_x'] = $this->getImageMaxSizeX();
        $arrValues['image_max_size_y'] = $this->getImageMaxSizeY();
        $arrValues['show_source'] = $this->getShowSource();
        $arrValues['icon_fileId'] = $this->getIconFileid();
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
