<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCalendarsBase
{
    protected $m_calendarId;
    protected $m_name;
    protected $m_description;
    protected $m_user;
    protected $m_customlocations;
    protected $m_customcategories;
    protected $m_customlanguages;
    protected $m_custompriorities;
    protected $m_customparticipants;
    protected $m_customsubscription;
    protected $m_customstatus;
    protected $m_created;
    protected $m_lastmodif;
    protected $m_personal;
    protected $m_calendarId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setName('');
            $this->setUser('');
            $this->setCustomlocations('n');
            $this->setCustomcategories('n');
            $this->setCustomlanguages('n');
            $this->setCustompriorities('n');
            $this->setCustomparticipants('n');
            $this->setCustomsubscription('n');
            $this->setCustomstatus('y');
            $this->setCreated(0);
            $this->setLastmodif(0);
            $this->setPersonal('n');
        }
        return;
    }
    public function TikiCalendarsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCalendarid()
    {
        return $this->m_calendarId;
    }
    public function setCalendarid($value)
    {
        $this->m_calendarId = $value;
        $this->setOrigCalendarid($value);
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

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        return;
    }

    public function getCustomlocations()
    {
        return $this->m_customlocations;
    }
    public function setCustomlocations($value)
    {
        $this->m_customlocations = $value;
        return;
    }

    public function getCustomcategories()
    {
        return $this->m_customcategories;
    }
    public function setCustomcategories($value)
    {
        $this->m_customcategories = $value;
        return;
    }

    public function getCustomlanguages()
    {
        return $this->m_customlanguages;
    }
    public function setCustomlanguages($value)
    {
        $this->m_customlanguages = $value;
        return;
    }

    public function getCustompriorities()
    {
        return $this->m_custompriorities;
    }
    public function setCustompriorities($value)
    {
        $this->m_custompriorities = $value;
        return;
    }

    public function getCustomparticipants()
    {
        return $this->m_customparticipants;
    }
    public function setCustomparticipants($value)
    {
        $this->m_customparticipants = $value;
        return;
    }

    public function getCustomsubscription()
    {
        return $this->m_customsubscription;
    }
    public function setCustomsubscription($value)
    {
        $this->m_customsubscription = $value;
        return;
    }

    public function getCustomstatus()
    {
        return $this->m_customstatus;
    }
    public function setCustomstatus($value)
    {
        $this->m_customstatus = $value;
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

    public function getPersonal()
    {
        return $this->m_personal;
    }
    public function setPersonal($value)
    {
        $this->m_personal = $value;
        return;
    }

    public function getOrigCalendarid()
    {
        return $this->m_calendarId_Orig;
    }
    public function setOrigCalendarid($value)
    {
        if (isset($this->m_calendarId_Orig)) { return; }
        $this->m_calendarId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCalendarid($arrValues['calendarId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setUser($arrValues['user']);
        $this->setCustomlocations($arrValues['customlocations']);
        $this->setCustomcategories($arrValues['customcategories']);
        $this->setCustomlanguages($arrValues['customlanguages']);
        $this->setCustompriorities($arrValues['custompriorities']);
        $this->setCustomparticipants($arrValues['customparticipants']);
        $this->setCustomsubscription($arrValues['customsubscription']);
        $this->setCustomstatus($arrValues['customstatus']);
        $this->setCreated($arrValues['created']);
        $this->setLastmodif($arrValues['lastmodif']);
        $this->setPersonal($arrValues['personal']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'calendarId':
                    $this->setCalendarid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'customlocations':
                    $this->setCustomlocations($val);
                    break;
                case 'customcategories':
                    $this->setCustomcategories($val);
                    break;
                case 'customlanguages':
                    $this->setCustomlanguages($val);
                    break;
                case 'custompriorities':
                    $this->setCustompriorities($val);
                    break;
                case 'customparticipants':
                    $this->setCustomparticipants($val);
                    break;
                case 'customsubscription':
                    $this->setCustomsubscription($val);
                    break;
                case 'customstatus':
                    $this->setCustomstatus($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'lastmodif':
                    $this->setLastmodif($val);
                    break;
                case 'personal':
                    $this->setPersonal($val);
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
        $arrValues['calendarId'] = $this->getCalendarid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['user'] = $this->getUser();
        $arrValues['customlocations'] = $this->getCustomlocations();
        $arrValues['customcategories'] = $this->getCustomcategories();
        $arrValues['customlanguages'] = $this->getCustomlanguages();
        $arrValues['custompriorities'] = $this->getCustompriorities();
        $arrValues['customparticipants'] = $this->getCustomparticipants();
        $arrValues['customsubscription'] = $this->getCustomsubscription();
        $arrValues['customstatus'] = $this->getCustomstatus();
        $arrValues['created'] = $this->getCreated();
        $arrValues['lastmodif'] = $this->getLastmodif();
        $arrValues['personal'] = $this->getPersonal();
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
