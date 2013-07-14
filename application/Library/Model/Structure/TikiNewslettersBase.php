<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiNewslettersBase
{
    protected $m_nlId;
    protected $m_name;
    protected $m_description;
    protected $m_created;
    protected $m_lastSent;
    protected $m_editions;
    protected $m_users;
    protected $m_allowUserSub;
    protected $m_allowAnySub;
    protected $m_unsubMsg;
    protected $m_validateAddr;
    protected $m_frequency;
    protected $m_allowTxt;
    protected $m_author;
    protected $m_allowArticleClip;
    protected $m_autoArticleClip;
    protected $m_articleClipTypes;
    protected $m_articleClipRange;
    protected $m_nlId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setAllowusersub('y');
            $this->setUnsubmsg('y');
            $this->setValidateaddr('y');
            $this->setAllowtxt('y');
            $this->setAllowarticleclip('y');
            $this->setAutoarticleclip('n');
        }
        return;
    }
    public function TikiNewslettersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getNlid()
    {
        return $this->m_nlId;
    }
    public function setNlid($value)
    {
        $this->m_nlId = $value;
        $this->setOrigNlid($value);
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

    public function getLastsent()
    {
        return $this->m_lastSent;
    }
    public function setLastsent($value)
    {
        $this->m_lastSent = $value;
        return;
    }

    public function getEditions()
    {
        return $this->m_editions;
    }
    public function setEditions($value)
    {
        $this->m_editions = $value;
        return;
    }

    public function getUsers()
    {
        return $this->m_users;
    }
    public function setUsers($value)
    {
        $this->m_users = $value;
        return;
    }

    public function getAllowusersub()
    {
        return $this->m_allowUserSub;
    }
    public function setAllowusersub($value)
    {
        $this->m_allowUserSub = $value;
        return;
    }

    public function getAllowanysub()
    {
        return $this->m_allowAnySub;
    }
    public function setAllowanysub($value)
    {
        $this->m_allowAnySub = $value;
        return;
    }

    public function getUnsubmsg()
    {
        return $this->m_unsubMsg;
    }
    public function setUnsubmsg($value)
    {
        $this->m_unsubMsg = $value;
        return;
    }

    public function getValidateaddr()
    {
        return $this->m_validateAddr;
    }
    public function setValidateaddr($value)
    {
        $this->m_validateAddr = $value;
        return;
    }

    public function getFrequency()
    {
        return $this->m_frequency;
    }
    public function setFrequency($value)
    {
        $this->m_frequency = $value;
        return;
    }

    public function getAllowtxt()
    {
        return $this->m_allowTxt;
    }
    public function setAllowtxt($value)
    {
        $this->m_allowTxt = $value;
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

    public function getAllowarticleclip()
    {
        return $this->m_allowArticleClip;
    }
    public function setAllowarticleclip($value)
    {
        $this->m_allowArticleClip = $value;
        return;
    }

    public function getAutoarticleclip()
    {
        return $this->m_autoArticleClip;
    }
    public function setAutoarticleclip($value)
    {
        $this->m_autoArticleClip = $value;
        return;
    }

    public function getArticlecliptypes()
    {
        return $this->m_articleClipTypes;
    }
    public function setArticlecliptypes($value)
    {
        $this->m_articleClipTypes = $value;
        return;
    }

    public function getArticlecliprange()
    {
        return $this->m_articleClipRange;
    }
    public function setArticlecliprange($value)
    {
        $this->m_articleClipRange = $value;
        return;
    }

    public function getOrigNlid()
    {
        return $this->m_nlId_Orig;
    }
    public function setOrigNlid($value)
    {
        if (isset($this->m_nlId_Orig)) { return; }
        $this->m_nlId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setNlid($arrValues['nlId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setCreated($arrValues['created']);
        $this->setLastsent($arrValues['lastSent']);
        $this->setEditions($arrValues['editions']);
        $this->setUsers($arrValues['users']);
        $this->setAllowusersub($arrValues['allowUserSub']);
        $this->setAllowanysub($arrValues['allowAnySub']);
        $this->setUnsubmsg($arrValues['unsubMsg']);
        $this->setValidateaddr($arrValues['validateAddr']);
        $this->setFrequency($arrValues['frequency']);
        $this->setAllowtxt($arrValues['allowTxt']);
        $this->setAuthor($arrValues['author']);
        $this->setAllowarticleclip($arrValues['allowArticleClip']);
        $this->setAutoarticleclip($arrValues['autoArticleClip']);
        $this->setArticlecliptypes($arrValues['articleClipTypes']);
        $this->setArticlecliprange($arrValues['articleClipRange']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'nlId':
                    $this->setNlid($val);
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
                case 'lastSent':
                    $this->setLastsent($val);
                    break;
                case 'editions':
                    $this->setEditions($val);
                    break;
                case 'users':
                    $this->setUsers($val);
                    break;
                case 'allowUserSub':
                    $this->setAllowusersub($val);
                    break;
                case 'allowAnySub':
                    $this->setAllowanysub($val);
                    break;
                case 'unsubMsg':
                    $this->setUnsubmsg($val);
                    break;
                case 'validateAddr':
                    $this->setValidateaddr($val);
                    break;
                case 'frequency':
                    $this->setFrequency($val);
                    break;
                case 'allowTxt':
                    $this->setAllowtxt($val);
                    break;
                case 'author':
                    $this->setAuthor($val);
                    break;
                case 'allowArticleClip':
                    $this->setAllowarticleclip($val);
                    break;
                case 'autoArticleClip':
                    $this->setAutoarticleclip($val);
                    break;
                case 'articleClipTypes':
                    $this->setArticlecliptypes($val);
                    break;
                case 'articleClipRange':
                    $this->setArticlecliprange($val);
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
        $arrValues['nlId'] = $this->getNlid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['created'] = $this->getCreated();
        $arrValues['lastSent'] = $this->getLastsent();
        $arrValues['editions'] = $this->getEditions();
        $arrValues['users'] = $this->getUsers();
        $arrValues['allowUserSub'] = $this->getAllowusersub();
        $arrValues['allowAnySub'] = $this->getAllowanysub();
        $arrValues['unsubMsg'] = $this->getUnsubmsg();
        $arrValues['validateAddr'] = $this->getValidateaddr();
        $arrValues['frequency'] = $this->getFrequency();
        $arrValues['allowTxt'] = $this->getAllowtxt();
        $arrValues['author'] = $this->getAuthor();
        $arrValues['allowArticleClip'] = $this->getAllowarticleclip();
        $arrValues['autoArticleClip'] = $this->getAutoarticleclip();
        $arrValues['articleClipTypes'] = $this->getArticlecliptypes();
        $arrValues['articleClipRange'] = $this->getArticlecliprange();
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
