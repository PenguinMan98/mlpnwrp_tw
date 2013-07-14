<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCommentsBase
{
    protected $m_threadId;
    protected $m_object;
    protected $m_objectType;
    protected $m_parentId;
    protected $m_userName;
    protected $m_commentDate;
    protected $m_hits;
    protected $m_type;
    protected $m_points;
    protected $m_votes;
    protected $m_average;
    protected $m_title;
    protected $m_data;
    protected $m_hash;
    protected $m_email;
    protected $m_website;
    protected $m_user_ip;
    protected $m_summary;
    protected $m_smiley;
    protected $m_message_id;
    protected $m_in_reply_to;
    protected $m_comment_rating;
    protected $m_archived;
    protected $m_approved;
    protected $m_locked;
    protected $m_threadId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setObject('');
            $this->setObjecttype('');
            $this->setUsername('');
            $this->setApproved('y');
            $this->setLocked('n');
        }
        return;
    }
    public function TikiCommentsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getThreadid()
    {
        return $this->m_threadId;
    }
    public function setThreadid($value)
    {
        $this->m_threadId = $value;
        $this->setOrigThreadid($value);
        return;
    }

    public function getObject()
    {
        return $this->m_object;
    }
    public function setObject($value)
    {
        $this->m_object = $value;
        return;
    }

    public function getObjecttype()
    {
        return $this->m_objectType;
    }
    public function setObjecttype($value)
    {
        $this->m_objectType = $value;
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

    public function getUsername()
    {
        return $this->m_userName;
    }
    public function setUsername($value)
    {
        $this->m_userName = $value;
        return;
    }

    public function getCommentdate()
    {
        return $this->m_commentDate;
    }
    public function setCommentdate($value)
    {
        $this->m_commentDate = $value;
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

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
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

    public function getVotes()
    {
        return $this->m_votes;
    }
    public function setVotes($value)
    {
        $this->m_votes = $value;
        return;
    }

    public function getAverage()
    {
        return $this->m_average;
    }
    public function setAverage($value)
    {
        $this->m_average = $value;
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

    public function getData()
    {
        return $this->m_data;
    }
    public function setData($value)
    {
        $this->m_data = $value;
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

    public function getEmail()
    {
        return $this->m_email;
    }
    public function setEmail($value)
    {
        $this->m_email = $value;
        return;
    }

    public function getWebsite()
    {
        return $this->m_website;
    }
    public function setWebsite($value)
    {
        $this->m_website = $value;
        return;
    }

    public function getUserIp()
    {
        return $this->m_user_ip;
    }
    public function setUserIp($value)
    {
        $this->m_user_ip = $value;
        return;
    }

    public function getSummary()
    {
        return $this->m_summary;
    }
    public function setSummary($value)
    {
        $this->m_summary = $value;
        return;
    }

    public function getSmiley()
    {
        return $this->m_smiley;
    }
    public function setSmiley($value)
    {
        $this->m_smiley = $value;
        return;
    }

    public function getMessageId()
    {
        return $this->m_message_id;
    }
    public function setMessageId($value)
    {
        $this->m_message_id = $value;
        return;
    }

    public function getInReplyTo()
    {
        return $this->m_in_reply_to;
    }
    public function setInReplyTo($value)
    {
        $this->m_in_reply_to = $value;
        return;
    }

    public function getCommentRating()
    {
        return $this->m_comment_rating;
    }
    public function setCommentRating($value)
    {
        $this->m_comment_rating = $value;
        return;
    }

    public function getArchived()
    {
        return $this->m_archived;
    }
    public function setArchived($value)
    {
        $this->m_archived = $value;
        return;
    }

    public function getApproved()
    {
        return $this->m_approved;
    }
    public function setApproved($value)
    {
        $this->m_approved = $value;
        return;
    }

    public function getLocked()
    {
        return $this->m_locked;
    }
    public function setLocked($value)
    {
        $this->m_locked = $value;
        return;
    }

    public function getOrigThreadid()
    {
        return $this->m_threadId_Orig;
    }
    public function setOrigThreadid($value)
    {
        if (isset($this->m_threadId_Orig)) { return; }
        $this->m_threadId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setThreadid($arrValues['threadId']);
        $this->setObject($arrValues['object']);
        $this->setObjecttype($arrValues['objectType']);
        $this->setParentid($arrValues['parentId']);
        $this->setUsername($arrValues['userName']);
        $this->setCommentdate($arrValues['commentDate']);
        $this->setHits($arrValues['hits']);
        $this->setType($arrValues['type']);
        $this->setPoints($arrValues['points']);
        $this->setVotes($arrValues['votes']);
        $this->setAverage($arrValues['average']);
        $this->setTitle($arrValues['title']);
        $this->setData($arrValues['data']);
        $this->setHash($arrValues['hash']);
        $this->setEmail($arrValues['email']);
        $this->setWebsite($arrValues['website']);
        $this->setUserIp($arrValues['user_ip']);
        $this->setSummary($arrValues['summary']);
        $this->setSmiley($arrValues['smiley']);
        $this->setMessageId($arrValues['message_id']);
        $this->setInReplyTo($arrValues['in_reply_to']);
        $this->setCommentRating($arrValues['comment_rating']);
        $this->setArchived($arrValues['archived']);
        $this->setApproved($arrValues['approved']);
        $this->setLocked($arrValues['locked']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'threadId':
                    $this->setThreadid($val);
                    break;
                case 'object':
                    $this->setObject($val);
                    break;
                case 'objectType':
                    $this->setObjecttype($val);
                    break;
                case 'parentId':
                    $this->setParentid($val);
                    break;
                case 'userName':
                    $this->setUsername($val);
                    break;
                case 'commentDate':
                    $this->setCommentdate($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'points':
                    $this->setPoints($val);
                    break;
                case 'votes':
                    $this->setVotes($val);
                    break;
                case 'average':
                    $this->setAverage($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'hash':
                    $this->setHash($val);
                    break;
                case 'email':
                    $this->setEmail($val);
                    break;
                case 'website':
                    $this->setWebsite($val);
                    break;
                case 'user_ip':
                    $this->setUserIp($val);
                    break;
                case 'summary':
                    $this->setSummary($val);
                    break;
                case 'smiley':
                    $this->setSmiley($val);
                    break;
                case 'message_id':
                    $this->setMessageId($val);
                    break;
                case 'in_reply_to':
                    $this->setInReplyTo($val);
                    break;
                case 'comment_rating':
                    $this->setCommentRating($val);
                    break;
                case 'archived':
                    $this->setArchived($val);
                    break;
                case 'approved':
                    $this->setApproved($val);
                    break;
                case 'locked':
                    $this->setLocked($val);
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
        $arrValues['threadId'] = $this->getThreadid();
        $arrValues['object'] = $this->getObject();
        $arrValues['objectType'] = $this->getObjecttype();
        $arrValues['parentId'] = $this->getParentid();
        $arrValues['userName'] = $this->getUsername();
        $arrValues['commentDate'] = $this->getCommentdate();
        $arrValues['hits'] = $this->getHits();
        $arrValues['type'] = $this->getType();
        $arrValues['points'] = $this->getPoints();
        $arrValues['votes'] = $this->getVotes();
        $arrValues['average'] = $this->getAverage();
        $arrValues['title'] = $this->getTitle();
        $arrValues['data'] = $this->getData();
        $arrValues['hash'] = $this->getHash();
        $arrValues['email'] = $this->getEmail();
        $arrValues['website'] = $this->getWebsite();
        $arrValues['user_ip'] = $this->getUserIp();
        $arrValues['summary'] = $this->getSummary();
        $arrValues['smiley'] = $this->getSmiley();
        $arrValues['message_id'] = $this->getMessageId();
        $arrValues['in_reply_to'] = $this->getInReplyTo();
        $arrValues['comment_rating'] = $this->getCommentRating();
        $arrValues['archived'] = $this->getArchived();
        $arrValues['approved'] = $this->getApproved();
        $arrValues['locked'] = $this->getLocked();
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
