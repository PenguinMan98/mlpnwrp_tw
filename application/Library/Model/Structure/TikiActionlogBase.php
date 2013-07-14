<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiActionlogBase
{
    protected $m_actionId;
    protected $m_action;
    protected $m_lastModif;
    protected $m_object;
    protected $m_objectType;
    protected $m_user;
    protected $m_ip;
    protected $m_comment;
    protected $m_categId;
    protected $m_client;
    protected $m_actionId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setAction('');
            $this->setObjecttype('');
            $this->setUser('');
            $this->setCategid(0);
        }
        return;
    }
    public function TikiActionlogBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getActionid()
    {
        return $this->m_actionId;
    }
    public function setActionid($value)
    {
        $this->m_actionId = $value;
        $this->setOrigActionid($value);
        return;
    }

    public function getAction()
    {
        return $this->m_action;
    }
    public function setAction($value)
    {
        $this->m_action = $value;
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

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        return;
    }

    public function getIp()
    {
        return $this->m_ip;
    }
    public function setIp($value)
    {
        $this->m_ip = $value;
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

    public function getCategid()
    {
        return $this->m_categId;
    }
    public function setCategid($value)
    {
        $this->m_categId = $value;
        return;
    }

    public function getClient()
    {
        return $this->m_client;
    }
    public function setClient($value)
    {
        $this->m_client = $value;
        return;
    }

    public function getOrigActionid()
    {
        return $this->m_actionId_Orig;
    }
    public function setOrigActionid($value)
    {
        if (isset($this->m_actionId_Orig)) { return; }
        $this->m_actionId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setActionid($arrValues['actionId']);
        $this->setAction($arrValues['action']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setObject($arrValues['object']);
        $this->setObjecttype($arrValues['objectType']);
        $this->setUser($arrValues['user']);
        $this->setIp($arrValues['ip']);
        $this->setComment($arrValues['comment']);
        $this->setCategid($arrValues['categId']);
        $this->setClient($arrValues['client']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'actionId':
                    $this->setActionid($val);
                    break;
                case 'action':
                    $this->setAction($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'object':
                    $this->setObject($val);
                    break;
                case 'objectType':
                    $this->setObjecttype($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'ip':
                    $this->setIp($val);
                    break;
                case 'comment':
                    $this->setComment($val);
                    break;
                case 'categId':
                    $this->setCategid($val);
                    break;
                case 'client':
                    $this->setClient($val);
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
        $arrValues['actionId'] = $this->getActionid();
        $arrValues['action'] = $this->getAction();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['object'] = $this->getObject();
        $arrValues['objectType'] = $this->getObjecttype();
        $arrValues['user'] = $this->getUser();
        $arrValues['ip'] = $this->getIp();
        $arrValues['comment'] = $this->getComment();
        $arrValues['categId'] = $this->getCategid();
        $arrValues['client'] = $this->getClient();
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
