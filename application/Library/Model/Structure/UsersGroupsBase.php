<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_UsersGroupsBase
{
    protected $m_id;
    protected $m_groupName;
    protected $m_groupDesc;
    protected $m_groupHome;
    protected $m_usersTrackerId;
    protected $m_groupTrackerId;
    protected $m_usersFieldId;
    protected $m_groupFieldId;
    protected $m_registrationChoice;
    protected $m_registrationUsersFieldIds;
    protected $m_userChoice;
    protected $m_groupDefCat;
    protected $m_groupTheme;
    protected $m_isExternal;
    protected $m_expireAfter;
    protected $m_emailPattern;
    protected $m_anniversary;
    protected $m_prorateInterval;
    protected $m_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setGroupname('');
            $this->setGroupdefcat(0);
            $this->setGrouptheme('');
            $this->setIsexternal('n');
            $this->setExpireafter(0);
            $this->setEmailpattern('');
            $this->setAnniversary('');
            $this->setProrateinterval('');
        }
        return;
    }
    public function UsersGroupsBase($arrData = null)
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

    public function getGroupname()
    {
        return $this->m_groupName;
    }
    public function setGroupname($value)
    {
        $this->m_groupName = $value;
        return;
    }

    public function getGroupdesc()
    {
        return $this->m_groupDesc;
    }
    public function setGroupdesc($value)
    {
        $this->m_groupDesc = $value;
        return;
    }

    public function getGrouphome()
    {
        return $this->m_groupHome;
    }
    public function setGrouphome($value)
    {
        $this->m_groupHome = $value;
        return;
    }

    public function getUserstrackerid()
    {
        return $this->m_usersTrackerId;
    }
    public function setUserstrackerid($value)
    {
        $this->m_usersTrackerId = $value;
        return;
    }

    public function getGrouptrackerid()
    {
        return $this->m_groupTrackerId;
    }
    public function setGrouptrackerid($value)
    {
        $this->m_groupTrackerId = $value;
        return;
    }

    public function getUsersfieldid()
    {
        return $this->m_usersFieldId;
    }
    public function setUsersfieldid($value)
    {
        $this->m_usersFieldId = $value;
        return;
    }

    public function getGroupfieldid()
    {
        return $this->m_groupFieldId;
    }
    public function setGroupfieldid($value)
    {
        $this->m_groupFieldId = $value;
        return;
    }

    public function getRegistrationchoice()
    {
        return $this->m_registrationChoice;
    }
    public function setRegistrationchoice($value)
    {
        $this->m_registrationChoice = $value;
        return;
    }

    public function getRegistrationusersfieldids()
    {
        return $this->m_registrationUsersFieldIds;
    }
    public function setRegistrationusersfieldids($value)
    {
        $this->m_registrationUsersFieldIds = $value;
        return;
    }

    public function getUserchoice()
    {
        return $this->m_userChoice;
    }
    public function setUserchoice($value)
    {
        $this->m_userChoice = $value;
        return;
    }

    public function getGroupdefcat()
    {
        return $this->m_groupDefCat;
    }
    public function setGroupdefcat($value)
    {
        $this->m_groupDefCat = $value;
        return;
    }

    public function getGrouptheme()
    {
        return $this->m_groupTheme;
    }
    public function setGrouptheme($value)
    {
        $this->m_groupTheme = $value;
        return;
    }

    public function getIsexternal()
    {
        return $this->m_isExternal;
    }
    public function setIsexternal($value)
    {
        $this->m_isExternal = $value;
        return;
    }

    public function getExpireafter()
    {
        return $this->m_expireAfter;
    }
    public function setExpireafter($value)
    {
        $this->m_expireAfter = $value;
        return;
    }

    public function getEmailpattern()
    {
        return $this->m_emailPattern;
    }
    public function setEmailpattern($value)
    {
        $this->m_emailPattern = $value;
        return;
    }

    public function getAnniversary()
    {
        return $this->m_anniversary;
    }
    public function setAnniversary($value)
    {
        $this->m_anniversary = $value;
        return;
    }

    public function getProrateinterval()
    {
        return $this->m_prorateInterval;
    }
    public function setProrateinterval($value)
    {
        $this->m_prorateInterval = $value;
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
        $this->setGroupname($arrValues['groupName']);
        $this->setGroupdesc($arrValues['groupDesc']);
        $this->setGrouphome($arrValues['groupHome']);
        $this->setUserstrackerid($arrValues['usersTrackerId']);
        $this->setGrouptrackerid($arrValues['groupTrackerId']);
        $this->setUsersfieldid($arrValues['usersFieldId']);
        $this->setGroupfieldid($arrValues['groupFieldId']);
        $this->setRegistrationchoice($arrValues['registrationChoice']);
        $this->setRegistrationusersfieldids($arrValues['registrationUsersFieldIds']);
        $this->setUserchoice($arrValues['userChoice']);
        $this->setGroupdefcat($arrValues['groupDefCat']);
        $this->setGrouptheme($arrValues['groupTheme']);
        $this->setIsexternal($arrValues['isExternal']);
        $this->setExpireafter($arrValues['expireAfter']);
        $this->setEmailpattern($arrValues['emailPattern']);
        $this->setAnniversary($arrValues['anniversary']);
        $this->setProrateinterval($arrValues['prorateInterval']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'groupName':
                    $this->setGroupname($val);
                    break;
                case 'groupDesc':
                    $this->setGroupdesc($val);
                    break;
                case 'groupHome':
                    $this->setGrouphome($val);
                    break;
                case 'usersTrackerId':
                    $this->setUserstrackerid($val);
                    break;
                case 'groupTrackerId':
                    $this->setGrouptrackerid($val);
                    break;
                case 'usersFieldId':
                    $this->setUsersfieldid($val);
                    break;
                case 'groupFieldId':
                    $this->setGroupfieldid($val);
                    break;
                case 'registrationChoice':
                    $this->setRegistrationchoice($val);
                    break;
                case 'registrationUsersFieldIds':
                    $this->setRegistrationusersfieldids($val);
                    break;
                case 'userChoice':
                    $this->setUserchoice($val);
                    break;
                case 'groupDefCat':
                    $this->setGroupdefcat($val);
                    break;
                case 'groupTheme':
                    $this->setGrouptheme($val);
                    break;
                case 'isExternal':
                    $this->setIsexternal($val);
                    break;
                case 'expireAfter':
                    $this->setExpireafter($val);
                    break;
                case 'emailPattern':
                    $this->setEmailpattern($val);
                    break;
                case 'anniversary':
                    $this->setAnniversary($val);
                    break;
                case 'prorateInterval':
                    $this->setProrateinterval($val);
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
        $arrValues['groupName'] = $this->getGroupname();
        $arrValues['groupDesc'] = $this->getGroupdesc();
        $arrValues['groupHome'] = $this->getGrouphome();
        $arrValues['usersTrackerId'] = $this->getUserstrackerid();
        $arrValues['groupTrackerId'] = $this->getGrouptrackerid();
        $arrValues['usersFieldId'] = $this->getUsersfieldid();
        $arrValues['groupFieldId'] = $this->getGroupfieldid();
        $arrValues['registrationChoice'] = $this->getRegistrationchoice();
        $arrValues['registrationUsersFieldIds'] = $this->getRegistrationusersfieldids();
        $arrValues['userChoice'] = $this->getUserchoice();
        $arrValues['groupDefCat'] = $this->getGroupdefcat();
        $arrValues['groupTheme'] = $this->getGrouptheme();
        $arrValues['isExternal'] = $this->getIsexternal();
        $arrValues['expireAfter'] = $this->getExpireafter();
        $arrValues['emailPattern'] = $this->getEmailpattern();
        $arrValues['anniversary'] = $this->getAnniversary();
        $arrValues['prorateInterval'] = $this->getProrateinterval();
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
