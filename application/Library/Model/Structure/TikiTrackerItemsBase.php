<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTrackerItemsBase
{
    protected $m_itemId;
    protected $m_trackerId;
    protected $m_created;
    protected $m_createdBy;
    protected $m_status;
    protected $m_lastModif;
    protected $m_lastModifBy;
    protected $m_itemId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTrackerid(0);
        }
        return;
    }
    public function TikiTrackerItemsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getItemid()
    {
        return $this->m_itemId;
    }
    public function setItemid($value)
    {
        $this->m_itemId = $value;
        $this->setOrigItemid($value);
        return;
    }

    public function getTrackerid()
    {
        return $this->m_trackerId;
    }
    public function setTrackerid($value)
    {
        $this->m_trackerId = $value;
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

    public function getCreatedby()
    {
        return $this->m_createdBy;
    }
    public function setCreatedby($value)
    {
        $this->m_createdBy = $value;
        return;
    }

    public function getStatus()
    {
        return $this->m_status;
    }
    public function setStatus($value)
    {
        $this->m_status = $value;
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

    public function getLastmodifby()
    {
        return $this->m_lastModifBy;
    }
    public function setLastmodifby($value)
    {
        $this->m_lastModifBy = $value;
        return;
    }

    public function getOrigItemid()
    {
        return $this->m_itemId_Orig;
    }
    public function setOrigItemid($value)
    {
        if (isset($this->m_itemId_Orig)) { return; }
        $this->m_itemId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setItemid($arrValues['itemId']);
        $this->setTrackerid($arrValues['trackerId']);
        $this->setCreated($arrValues['created']);
        $this->setCreatedby($arrValues['createdBy']);
        $this->setStatus($arrValues['status']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setLastmodifby($arrValues['lastModifBy']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'itemId':
                    $this->setItemid($val);
                    break;
                case 'trackerId':
                    $this->setTrackerid($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'createdBy':
                    $this->setCreatedby($val);
                    break;
                case 'status':
                    $this->setStatus($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'lastModifBy':
                    $this->setLastmodifby($val);
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
        $arrValues['itemId'] = $this->getItemid();
        $arrValues['trackerId'] = $this->getTrackerid();
        $arrValues['created'] = $this->getCreated();
        $arrValues['createdBy'] = $this->getCreatedby();
        $arrValues['status'] = $this->getStatus();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['lastModifBy'] = $this->getLastmodifby();
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
