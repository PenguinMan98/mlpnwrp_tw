<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiConnectBase
{
    protected $m_id;
    protected $m_created;
    protected $m_type;
    protected $m_data;
    protected $m_guid;
    protected $m_server;
    protected $m_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCreated('CURRENT_TIMESTAMP');
            $this->setType('');
            $this->setServer(0);
        }
        return;
    }
    public function TikiConnectBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getId()
    {
        return $this->m_id;
    }
    public function setId($value)
    {
        $this->m_id = $value;
        $this->setOrigId($value);
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

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
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

    public function getGuid()
    {
        return $this->m_guid;
    }
    public function setGuid($value)
    {
        $this->m_guid = $value;
        return;
    }

    public function getServer()
    {
        return $this->m_server;
    }
    public function setServer($value)
    {
        $this->m_server = $value;
        return;
    }

    public function getOrigId()
    {
        return $this->m_id_Orig;
    }
    public function setOrigId($value)
    {
        if (isset($this->m_id_Orig)) { return; }
        $this->m_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setId($arrValues['id']);
        $this->setCreated($arrValues['created']);
        $this->setType($arrValues['type']);
        $this->setData($arrValues['data']);
        $this->setGuid($arrValues['guid']);
        $this->setServer($arrValues['server']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'guid':
                    $this->setGuid($val);
                    break;
                case 'server':
                    $this->setServer($val);
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
        $arrValues['id'] = $this->getId();
        $arrValues['created'] = $this->getCreated();
        $arrValues['type'] = $this->getType();
        $arrValues['data'] = $this->getData();
        $arrValues['guid'] = $this->getGuid();
        $arrValues['server'] = $this->getServer();
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
