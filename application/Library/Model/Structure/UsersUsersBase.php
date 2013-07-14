<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_UsersUsersBase
{
    protected $m_userId;
    protected $m_email;
    protected $m_login;
    protected $m_password;
    protected $m_provpass;
    protected $m_default_group;
    protected $m_lastLogin;
    protected $m_currentLogin;
    protected $m_registrationDate;
    protected $m_challenge;
    protected $m_pass_confirm;
    protected $m_email_confirm;
    protected $m_hash;
    protected $m_created;
    protected $m_avatarName;
    protected $m_avatarSize;
    protected $m_avatarFileType;
    protected $m_avatarData;
    protected $m_avatarLibName;
    protected $m_avatarType;
    protected $m_score;
    protected $m_valid;
    protected $m_unsuccessful_logins;
    protected $m_openid_url;
    protected $m_waiting;
    protected $m_userId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setLogin('');
            $this->setPassword('');
            $this->setScore(0);
            $this->setUnsuccessfulLogins(0);
        }
        return;
    }
    public function UsersUsersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUserid()
    {
        return $this->m_userId;
    }
    public function setUserid($value)
    {
        $this->m_userId = $value;
        $this->setOrigUserid($value);
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

    public function getLogin()
    {
        return $this->m_login;
    }
    public function setLogin($value)
    {
        $this->m_login = $value;
        return;
    }

    public function getPassword()
    {
        return $this->m_password;
    }
    public function setPassword($value)
    {
        $this->m_password = $value;
        return;
    }

    public function getProvpass()
    {
        return $this->m_provpass;
    }
    public function setProvpass($value)
    {
        $this->m_provpass = $value;
        return;
    }

    public function getDefaultGroup()
    {
        return $this->m_default_group;
    }
    public function setDefaultGroup($value)
    {
        $this->m_default_group = $value;
        return;
    }

    public function getLastlogin()
    {
        return $this->m_lastLogin;
    }
    public function setLastlogin($value)
    {
        $this->m_lastLogin = $value;
        return;
    }

    public function getCurrentlogin()
    {
        return $this->m_currentLogin;
    }
    public function setCurrentlogin($value)
    {
        $this->m_currentLogin = $value;
        return;
    }

    public function getRegistrationdate()
    {
        return $this->m_registrationDate;
    }
    public function setRegistrationdate($value)
    {
        $this->m_registrationDate = $value;
        return;
    }

    public function getChallenge()
    {
        return $this->m_challenge;
    }
    public function setChallenge($value)
    {
        $this->m_challenge = $value;
        return;
    }

    public function getPassConfirm()
    {
        return $this->m_pass_confirm;
    }
    public function setPassConfirm($value)
    {
        $this->m_pass_confirm = $value;
        return;
    }

    public function getEmailConfirm()
    {
        return $this->m_email_confirm;
    }
    public function setEmailConfirm($value)
    {
        $this->m_email_confirm = $value;
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

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
        return;
    }

    public function getAvatarname()
    {
        return $this->m_avatarName;
    }
    public function setAvatarname($value)
    {
        $this->m_avatarName = $value;
        return;
    }

    public function getAvatarsize()
    {
        return $this->m_avatarSize;
    }
    public function setAvatarsize($value)
    {
        $this->m_avatarSize = $value;
        return;
    }

    public function getAvatarfiletype()
    {
        return $this->m_avatarFileType;
    }
    public function setAvatarfiletype($value)
    {
        $this->m_avatarFileType = $value;
        return;
    }

    public function getAvatardata()
    {
        return $this->m_avatarData;
    }
    public function setAvatardata($value)
    {
        $this->m_avatarData = $value;
        return;
    }

    public function getAvatarlibname()
    {
        return $this->m_avatarLibName;
    }
    public function setAvatarlibname($value)
    {
        $this->m_avatarLibName = $value;
        return;
    }

    public function getAvatartype()
    {
        return $this->m_avatarType;
    }
    public function setAvatartype($value)
    {
        $this->m_avatarType = $value;
        return;
    }

    public function getScore()
    {
        return $this->m_score;
    }
    public function setScore($value)
    {
        $this->m_score = $value;
        return;
    }

    public function getValid()
    {
        return $this->m_valid;
    }
    public function setValid($value)
    {
        $this->m_valid = $value;
        return;
    }

    public function getUnsuccessfulLogins()
    {
        return $this->m_unsuccessful_logins;
    }
    public function setUnsuccessfulLogins($value)
    {
        $this->m_unsuccessful_logins = $value;
        return;
    }

    public function getOpenidUrl()
    {
        return $this->m_openid_url;
    }
    public function setOpenidUrl($value)
    {
        $this->m_openid_url = $value;
        return;
    }

    public function getWaiting()
    {
        return $this->m_waiting;
    }
    public function setWaiting($value)
    {
        $this->m_waiting = $value;
        return;
    }

    public function getOrigUserid()
    {
        return $this->m_userId_Orig;
    }
    public function setOrigUserid($value)
    {
        if (isset($this->m_userId_Orig)) { return; }
        $this->m_userId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUserid($arrValues['userId']);
        $this->setEmail($arrValues['email']);
        $this->setLogin($arrValues['login']);
        $this->setPassword($arrValues['password']);
        $this->setProvpass($arrValues['provpass']);
        $this->setDefaultGroup($arrValues['default_group']);
        $this->setLastlogin($arrValues['lastLogin']);
        $this->setCurrentlogin($arrValues['currentLogin']);
        $this->setRegistrationdate($arrValues['registrationDate']);
        $this->setChallenge($arrValues['challenge']);
        $this->setPassConfirm($arrValues['pass_confirm']);
        $this->setEmailConfirm($arrValues['email_confirm']);
        $this->setHash($arrValues['hash']);
        $this->setCreated($arrValues['created']);
        $this->setAvatarname($arrValues['avatarName']);
        $this->setAvatarsize($arrValues['avatarSize']);
        $this->setAvatarfiletype($arrValues['avatarFileType']);
        $this->setAvatardata($arrValues['avatarData']);
        $this->setAvatarlibname($arrValues['avatarLibName']);
        $this->setAvatartype($arrValues['avatarType']);
        $this->setScore($arrValues['score']);
        $this->setValid($arrValues['valid']);
        $this->setUnsuccessfulLogins($arrValues['unsuccessful_logins']);
        $this->setOpenidUrl($arrValues['openid_url']);
        $this->setWaiting($arrValues['waiting']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'userId':
                    $this->setUserid($val);
                    break;
                case 'email':
                    $this->setEmail($val);
                    break;
                case 'login':
                    $this->setLogin($val);
                    break;
                case 'password':
                    $this->setPassword($val);
                    break;
                case 'provpass':
                    $this->setProvpass($val);
                    break;
                case 'default_group':
                    $this->setDefaultGroup($val);
                    break;
                case 'lastLogin':
                    $this->setLastlogin($val);
                    break;
                case 'currentLogin':
                    $this->setCurrentlogin($val);
                    break;
                case 'registrationDate':
                    $this->setRegistrationdate($val);
                    break;
                case 'challenge':
                    $this->setChallenge($val);
                    break;
                case 'pass_confirm':
                    $this->setPassConfirm($val);
                    break;
                case 'email_confirm':
                    $this->setEmailConfirm($val);
                    break;
                case 'hash':
                    $this->setHash($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'avatarName':
                    $this->setAvatarname($val);
                    break;
                case 'avatarSize':
                    $this->setAvatarsize($val);
                    break;
                case 'avatarFileType':
                    $this->setAvatarfiletype($val);
                    break;
                case 'avatarData':
                    $this->setAvatardata($val);
                    break;
                case 'avatarLibName':
                    $this->setAvatarlibname($val);
                    break;
                case 'avatarType':
                    $this->setAvatartype($val);
                    break;
                case 'score':
                    $this->setScore($val);
                    break;
                case 'valid':
                    $this->setValid($val);
                    break;
                case 'unsuccessful_logins':
                    $this->setUnsuccessfulLogins($val);
                    break;
                case 'openid_url':
                    $this->setOpenidUrl($val);
                    break;
                case 'waiting':
                    $this->setWaiting($val);
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
        $arrValues['userId'] = $this->getUserid();
        $arrValues['email'] = $this->getEmail();
        $arrValues['login'] = $this->getLogin();
        $arrValues['password'] = $this->getPassword();
        $arrValues['provpass'] = $this->getProvpass();
        $arrValues['default_group'] = $this->getDefaultGroup();
        $arrValues['lastLogin'] = $this->getLastlogin();
        $arrValues['currentLogin'] = $this->getCurrentlogin();
        $arrValues['registrationDate'] = $this->getRegistrationdate();
        $arrValues['challenge'] = $this->getChallenge();
        $arrValues['pass_confirm'] = $this->getPassConfirm();
        $arrValues['email_confirm'] = $this->getEmailConfirm();
        $arrValues['hash'] = $this->getHash();
        $arrValues['created'] = $this->getCreated();
        $arrValues['avatarName'] = $this->getAvatarname();
        $arrValues['avatarSize'] = $this->getAvatarsize();
        $arrValues['avatarFileType'] = $this->getAvatarfiletype();
        $arrValues['avatarData'] = $this->getAvatardata();
        $arrValues['avatarLibName'] = $this->getAvatarlibname();
        $arrValues['avatarType'] = $this->getAvatartype();
        $arrValues['score'] = $this->getScore();
        $arrValues['valid'] = $this->getValid();
        $arrValues['unsuccessful_logins'] = $this->getUnsuccessfulLogins();
        $arrValues['openid_url'] = $this->getOpenidUrl();
        $arrValues['waiting'] = $this->getWaiting();
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
