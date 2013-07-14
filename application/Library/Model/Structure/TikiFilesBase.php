<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFilesBase
{
    protected $m_fileId;
    protected $m_galleryId;
    protected $m_name;
    protected $m_description;
    protected $m_created;
    protected $m_filename;
    protected $m_filesize;
    protected $m_filetype;
    protected $m_data;
    protected $m_user;
    protected $m_author;
    protected $m_hits;
    protected $m_maxhits;
    protected $m_lastDownload;
    protected $m_votes;
    protected $m_points;
    protected $m_path;
    protected $m_reference_url;
    protected $m_is_reference;
    protected $m_hash;
    protected $m_search_data;
    protected $m_metadata;
    protected $m_lastModif;
    protected $m_lastModifUser;
    protected $m_lockedby;
    protected $m_comment;
    protected $m_archiveId;
    protected $m_deleteAfter;
    protected $m_fileId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setGalleryid(0);
            $this->setName('');
            $this->setUser('');
            $this->setLockedby('');
            $this->setArchiveid(0);
        }
        return;
    }
    public function TikiFilesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFileid()
    {
        return $this->m_fileId;
    }
    public function setFileid($value)
    {
        $this->m_fileId = $value;
        $this->setOrigFileid($value);
        return;
    }

    public function getGalleryid()
    {
        return $this->m_galleryId;
    }
    public function setGalleryid($value)
    {
        $this->m_galleryId = $value;
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

    public function getFilename()
    {
        return $this->m_filename;
    }
    public function setFilename($value)
    {
        $this->m_filename = $value;
        return;
    }

    public function getFilesize()
    {
        return $this->m_filesize;
    }
    public function setFilesize($value)
    {
        $this->m_filesize = $value;
        return;
    }

    public function getFiletype()
    {
        return $this->m_filetype;
    }
    public function setFiletype($value)
    {
        $this->m_filetype = $value;
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

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
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

    public function getHits()
    {
        return $this->m_hits;
    }
    public function setHits($value)
    {
        $this->m_hits = $value;
        return;
    }

    public function getMaxhits()
    {
        return $this->m_maxhits;
    }
    public function setMaxhits($value)
    {
        $this->m_maxhits = $value;
        return;
    }

    public function getLastdownload()
    {
        return $this->m_lastDownload;
    }
    public function setLastdownload($value)
    {
        $this->m_lastDownload = $value;
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

    public function getPath()
    {
        return $this->m_path;
    }
    public function setPath($value)
    {
        $this->m_path = $value;
        return;
    }

    public function getReferenceUrl()
    {
        return $this->m_reference_url;
    }
    public function setReferenceUrl($value)
    {
        $this->m_reference_url = $value;
        return;
    }

    public function getIsReference()
    {
        return $this->m_is_reference;
    }
    public function setIsReference($value)
    {
        $this->m_is_reference = $value;
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

    public function getSearchData()
    {
        return $this->m_search_data;
    }
    public function setSearchData($value)
    {
        $this->m_search_data = $value;
        return;
    }

    public function getMetadata()
    {
        return $this->m_metadata;
    }
    public function setMetadata($value)
    {
        $this->m_metadata = $value;
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

    public function getLastmodifuser()
    {
        return $this->m_lastModifUser;
    }
    public function setLastmodifuser($value)
    {
        $this->m_lastModifUser = $value;
        return;
    }

    public function getLockedby()
    {
        return $this->m_lockedby;
    }
    public function setLockedby($value)
    {
        $this->m_lockedby = $value;
        return;
    }

    public function getComment()
    {
        return $this->m_comment;
    }
    public function setComment($value)
    {
        $this->m_comment = $value;
        return;
    }

    public function getArchiveid()
    {
        return $this->m_archiveId;
    }
    public function setArchiveid($value)
    {
        $this->m_archiveId = $value;
        return;
    }

    public function getDeleteafter()
    {
        return $this->m_deleteAfter;
    }
    public function setDeleteafter($value)
    {
        $this->m_deleteAfter = $value;
        return;
    }

    public function getOrigFileid()
    {
        return $this->m_fileId_Orig;
    }
    public function setOrigFileid($value)
    {
        if (isset($this->m_fileId_Orig)) { return; }
        $this->m_fileId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFileid($arrValues['fileId']);
        $this->setGalleryid($arrValues['galleryId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setCreated($arrValues['created']);
        $this->setFilename($arrValues['filename']);
        $this->setFilesize($arrValues['filesize']);
        $this->setFiletype($arrValues['filetype']);
        $this->setData($arrValues['data']);
        $this->setUser($arrValues['user']);
        $this->setAuthor($arrValues['author']);
        $this->setHits($arrValues['hits']);
        $this->setMaxhits($arrValues['maxhits']);
        $this->setLastdownload($arrValues['lastDownload']);
        $this->setVotes($arrValues['votes']);
        $this->setPoints($arrValues['points']);
        $this->setPath($arrValues['path']);
        $this->setReferenceUrl($arrValues['reference_url']);
        $this->setIsReference($arrValues['is_reference']);
        $this->setHash($arrValues['hash']);
        $this->setSearchData($arrValues['search_data']);
        $this->setMetadata($arrValues['metadata']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setLastmodifuser($arrValues['lastModifUser']);
        $this->setLockedby($arrValues['lockedby']);
        $this->setComment($arrValues['comment']);
        $this->setArchiveid($arrValues['archiveId']);
        $this->setDeleteafter($arrValues['deleteAfter']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'fileId':
                    $this->setFileid($val);
                    break;
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
                case 'filename':
                    $this->setFilename($val);
                    break;
                case 'filesize':
                    $this->setFilesize($val);
                    break;
                case 'filetype':
                    $this->setFiletype($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'author':
                    $this->setAuthor($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'maxhits':
                    $this->setMaxhits($val);
                    break;
                case 'lastDownload':
                    $this->setLastdownload($val);
                    break;
                case 'votes':
                    $this->setVotes($val);
                    break;
                case 'points':
                    $this->setPoints($val);
                    break;
                case 'path':
                    $this->setPath($val);
                    break;
                case 'reference_url':
                    $this->setReferenceUrl($val);
                    break;
                case 'is_reference':
                    $this->setIsReference($val);
                    break;
                case 'hash':
                    $this->setHash($val);
                    break;
                case 'search_data':
                    $this->setSearchData($val);
                    break;
                case 'metadata':
                    $this->setMetadata($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'lastModifUser':
                    $this->setLastmodifuser($val);
                    break;
                case 'lockedby':
                    $this->setLockedby($val);
                    break;
                case 'comment':
                    $this->setComment($val);
                    break;
                case 'archiveId':
                    $this->setArchiveid($val);
                    break;
                case 'deleteAfter':
                    $this->setDeleteafter($val);
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
        $arrValues['fileId'] = $this->getFileid();
        $arrValues['galleryId'] = $this->getGalleryid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['created'] = $this->getCreated();
        $arrValues['filename'] = $this->getFilename();
        $arrValues['filesize'] = $this->getFilesize();
        $arrValues['filetype'] = $this->getFiletype();
        $arrValues['data'] = $this->getData();
        $arrValues['user'] = $this->getUser();
        $arrValues['author'] = $this->getAuthor();
        $arrValues['hits'] = $this->getHits();
        $arrValues['maxhits'] = $this->getMaxhits();
        $arrValues['lastDownload'] = $this->getLastdownload();
        $arrValues['votes'] = $this->getVotes();
        $arrValues['points'] = $this->getPoints();
        $arrValues['path'] = $this->getPath();
        $arrValues['reference_url'] = $this->getReferenceUrl();
        $arrValues['is_reference'] = $this->getIsReference();
        $arrValues['hash'] = $this->getHash();
        $arrValues['search_data'] = $this->getSearchData();
        $arrValues['metadata'] = $this->getMetadata();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['lastModifUser'] = $this->getLastmodifuser();
        $arrValues['lockedby'] = $this->getLockedby();
        $arrValues['comment'] = $this->getComment();
        $arrValues['archiveId'] = $this->getArchiveid();
        $arrValues['deleteAfter'] = $this->getDeleteafter();
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
