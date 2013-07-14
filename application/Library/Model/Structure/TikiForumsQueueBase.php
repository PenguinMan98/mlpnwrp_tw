<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiForumsQueueBase
{
    protected $m_qId;
    protected $m_object;
    protected $m_parentId;
    protected $m_forumId;
    protected $m_timestamp;
    protected $m_user;
    protected $m_title;
    protected $m_data;
    protected $m_type;
    protected $m_hash;
    protected $m_topic_smiley;
    protected $m_topic_title;
    protected $m_summary;
    protected $m_in_reply_to;
    protected $m_tags;
    protected $m_email;
    protected $m_qId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
        }
        return;
    }
    public function TikiForumsQueueBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getQid()
    {
        return $this->m_qId;
    }
    public function setQid($value)
    {
        $this->m_qId = $value;
        $this->setOrigQid($value);
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

    public function getParentid()
    {
        return $this->m_parentId;
    }
    public function setParentid($value)
    {
        $this->m_parentId = $value;
        return;
    }

    public function getForumid()
    {
        return $this->m_forumId;
    }
    public function setForumid($value)
    {
        $this->m_forumId = $value;
        return;
    }

    public function getTimestamp()
    {
        return $this->m_timestamp;
    }
    public function setTimestamp($value)
    {
        $this->m_timestamp = $value;
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

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
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

    public function getTopicSmiley()
    {
        return $this->m_topic_smiley;
    }
    public function setTopicSmiley($value)
    {
        $this->m_topic_smiley = $value;
        return;
    }

    public function getTopicTitle()
    {
        return $this->m_topic_title;
    }
    public function setTopicTitle($value)
    {
        $this->m_topic_title = $value;
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

    public function getInReplyTo()
    {
        return $this->m_in_reply_to;
    }
    public function setInReplyTo($value)
    {
        $this->m_in_reply_to = $value;
        return;
    }

    public function getTags()
    {
        return $this->m_tags;
    }
    public function setTags($value)
    {
        $this->m_tags = $value;
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

    public function getOrigQid()
    {
        return $this->m_qId_Orig;
    }
    public function setOrigQid($value)
    {
        if (isset($this->m_qId_Orig)) { return; }
        $this->m_qId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setQid($arrValues['qId']);
        $this->setObject($arrValues['object']);
        $this->setParentid($arrValues['parentId']);
        $this->setForumid($arrValues['forumId']);
        $this->setTimestamp($arrValues['timestamp']);
        $this->setUser($arrValues['user']);
        $this->setTitle($arrValues['title']);
        $this->setData($arrValues['data']);
        $this->setType($arrValues['type']);
        $this->setHash($arrValues['hash']);
        $this->setTopicSmiley($arrValues['topic_smiley']);
        $this->setTopicTitle($arrValues['topic_title']);
        $this->setSummary($arrValues['summary']);
        $this->setInReplyTo($arrValues['in_reply_to']);
        $this->setTags($arrValues['tags']);
        $this->setEmail($arrValues['email']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'qId':
                    $this->setQid($val);
                    break;
                case 'object':
                    $this->setObject($val);
                    break;
                case 'parentId':
                    $this->setParentid($val);
                    break;
                case 'forumId':
                    $this->setForumid($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'hash':
                    $this->setHash($val);
                    break;
                case 'topic_smiley':
                    $this->setTopicSmiley($val);
                    break;
                case 'topic_title':
                    $this->setTopicTitle($val);
                    break;
                case 'summary':
                    $this->setSummary($val);
                    break;
                case 'in_reply_to':
                    $this->setInReplyTo($val);
                    break;
                case 'tags':
                    $this->setTags($val);
                    break;
                case 'email':
                    $this->setEmail($val);
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
        $arrValues['qId'] = $this->getQid();
        $arrValues['object'] = $this->getObject();
        $arrValues['parentId'] = $this->getParentid();
        $arrValues['forumId'] = $this->getForumid();
        $arrValues['timestamp'] = $this->getTimestamp();
        $arrValues['user'] = $this->getUser();
        $arrValues['title'] = $this->getTitle();
        $arrValues['data'] = $this->getData();
        $arrValues['type'] = $this->getType();
        $arrValues['hash'] = $this->getHash();
        $arrValues['topic_smiley'] = $this->getTopicSmiley();
        $arrValues['topic_title'] = $this->getTopicTitle();
        $arrValues['summary'] = $this->getSummary();
        $arrValues['in_reply_to'] = $this->getInReplyTo();
        $arrValues['tags'] = $this->getTags();
        $arrValues['email'] = $this->getEmail();
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
