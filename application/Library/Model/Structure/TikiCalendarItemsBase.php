<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCalendarItemsBase
{
    protected $m_calitemId;
    protected $m_calendarId;
    protected $m_start;
    protected $m_end;
    protected $m_locationId;
    protected $m_categoryId;
    protected $m_nlId;
    protected $m_priority;
    protected $m_status;
    protected $m_url;
    protected $m_lang;
    protected $m_name;
    protected $m_description;
    protected $m_recurrenceId;
    protected $m_changed;
    protected $m_user;
    protected $m_created;
    protected $m_lastmodif;
    protected $m_allday;
    protected $m_calitemId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCalendarid(0);
            $this->setStart(0);
            $this->setEnd(0);
            $this->setNlid(0);
            $this->setPriority(0);
            $this->setStatus(0);
            $this->setLang('en');
            $this->setName('');
            $this->setChanged(0);
            $this->setUser('');
            $this->setCreated(0);
            $this->setLastmodif(0);
            $this->setAllday(0);
        }
        return;
    }
    public function TikiCalendarItemsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCalitemid()
    {
        return $this->m_calitemId;
    }
    public function setCalitemid($value)
    {
        $this->m_calitemId = $value;
        $this->setOrigCalitemid($value);
        return;
    }

    public function getCalendarid()
    {
        return $this->m_calendarId;
    }
    public function setCalendarid($value)
    {
        $this->m_calendarId = $value;
        return;
    }

    public function getStart()
    {
        return $this->m_start;
    }
    public function setStart($value)
    {
        $this->m_start = $value;
        return;
    }

    public function getEnd()
    {
        return $this->m_end;
    }
    public function setEnd($value)
    {
        $this->m_end = $value;
        return;
    }

    public function getLocationid()
    {
        return $this->m_locationId;
    }
    public function setLocationid($value)
    {
        $this->m_locationId = $value;
        return;
    }

    public function getCategoryid()
    {
        return $this->m_categoryId;
    }
    public function setCategoryid($value)
    {
        $this->m_categoryId = $value;
        return;
    }

    public function getNlid()
    {
        return $this->m_nlId;
    }
    public function setNlid($value)
    {
        $this->m_nlId = $value;
        return;
    }

    public function getPriority()
    {
        return $this->m_priority;
    }
    public function setPriority($value)
    {
        $this->m_priority = $value;
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

    public function getUrl()
    {
        return $this->m_url;
    }
    public function setUrl($value)
    {
        $this->m_url = $value;
        return;
    }

    public function getLang()
    {
        return $this->m_lang;
    }
    public function setLang($value)
    {
        $this->m_lang = $value;
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

    public function getRecurrenceid()
    {
        return $this->m_recurrenceId;
    }
    public function setRecurrenceid($value)
    {
        $this->m_recurrenceId = $value;
        return;
    }

    public function getChanged()
    {
        return $this->m_changed;
    }
    public function setChanged($value)
    {
        $this->m_changed = $value;
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
        return $this->m_lastmodif;
    }
    public function setLastmodif($value)
    {
        $this->m_lastmodif = $value;
        return;
    }

    public function getAllday()
    {
        return $this->m_allday;
    }
    public function setAllday($value)
    {
        $this->m_allday = $value;
        return;
    }

    public function getOrigCalitemid()
    {
        return $this->m_calitemId_Orig;
    }
    public function setOrigCalitemid($value)
    {
        if (isset($this->m_calitemId_Orig)) { return; }
        $this->m_calitemId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCalitemid($arrValues['calitemId']);
        $this->setCalendarid($arrValues['calendarId']);
        $this->setStart($arrValues['start']);
        $this->setEnd($arrValues['end']);
        $this->setLocationid($arrValues['locationId']);
        $this->setCategoryid($arrValues['categoryId']);
        $this->setNlid($arrValues['nlId']);
        $this->setPriority($arrValues['priority']);
        $this->setStatus($arrValues['status']);
        $this->setUrl($arrValues['url']);
        $this->setLang($arrValues['lang']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setRecurrenceid($arrValues['recurrenceId']);
        $this->setChanged($arrValues['changed']);
        $this->setUser($arrValues['user']);
        $this->setCreated($arrValues['created']);
        $this->setLastmodif($arrValues['lastmodif']);
        $this->setAllday($arrValues['allday']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'calitemId':
                    $this->setCalitemid($val);
                    break;
                case 'calendarId':
                    $this->setCalendarid($val);
                    break;
                case 'start':
                    $this->setStart($val);
                    break;
                case 'end':
                    $this->setEnd($val);
                    break;
                case 'locationId':
                    $this->setLocationid($val);
                    break;
                case 'categoryId':
                    $this->setCategoryid($val);
                    break;
                case 'nlId':
                    $this->setNlid($val);
                    break;
                case 'priority':
                    $this->setPriority($val);
                    break;
                case 'status':
                    $this->setStatus($val);
                    break;
                case 'url':
                    $this->setUrl($val);
                    break;
                case 'lang':
                    $this->setLang($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'recurrenceId':
                    $this->setRecurrenceid($val);
                    break;
                case 'changed':
                    $this->setChanged($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'lastmodif':
                    $this->setLastmodif($val);
                    break;
                case 'allday':
                    $this->setAllday($val);
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
        $arrValues['calitemId'] = $this->getCalitemid();
        $arrValues['calendarId'] = $this->getCalendarid();
        $arrValues['start'] = $this->getStart();
        $arrValues['end'] = $this->getEnd();
        $arrValues['locationId'] = $this->getLocationid();
        $arrValues['categoryId'] = $this->getCategoryid();
        $arrValues['nlId'] = $this->getNlid();
        $arrValues['priority'] = $this->getPriority();
        $arrValues['status'] = $this->getStatus();
        $arrValues['url'] = $this->getUrl();
        $arrValues['lang'] = $this->getLang();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['recurrenceId'] = $this->getRecurrenceid();
        $arrValues['changed'] = $this->getChanged();
        $arrValues['user'] = $this->getUser();
        $arrValues['created'] = $this->getCreated();
        $arrValues['lastmodif'] = $this->getLastmodif();
        $arrValues['allday'] = $this->getAllday();
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
