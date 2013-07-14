<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserTasksBase
{
    protected $m_taskId;
    protected $m_last_version;
    protected $m_user;
    protected $m_creator;
    protected $m_public_for_group;
    protected $m_rights_by_creator;
    protected $m_created;
    protected $m_status;
    protected $m_priority;
    protected $m_completed;
    protected $m_percentage;
    protected $m_taskId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setLastVersion(0);
            $this->setUser('');
        }
        return;
    }
    public function TikiUserTasksBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTaskid()
    {
        return $this->m_taskId;
    }
    public function setTaskid($value)
    {
        $this->m_taskId = $value;
        $this->setOrigTaskid($value);
        return;
    }

    public function getLastVersion()
    {
        return $this->m_last_version;
    }
    public function setLastVersion($value)
    {
        $this->m_last_version = $value;
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

    public function getCreator()
    {
        return $this->m_creator;
    }
    public function setCreator($value)
    {
        $this->m_creator = $value;
        return;
    }

    public function getPublicForGroup()
    {
        return $this->m_public_for_group;
    }
    public function setPublicForGroup($value)
    {
        $this->m_public_for_group = $value;
        return;
    }

    public function getRightsByCreator()
    {
        return $this->m_rights_by_creator;
    }
    public function setRightsByCreator($value)
    {
        $this->m_rights_by_creator = $value;
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

    public function getStatus()
    {
        return $this->m_status;
    }
    public function setStatus($value)
    {
        $this->m_status = $value;
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

    public function getCompleted()
    {
        return $this->m_completed;
    }
    public function setCompleted($value)
    {
        $this->m_completed = $value;
        return;
    }

    public function getPercentage()
    {
        return $this->m_percentage;
    }
    public function setPercentage($value)
    {
        $this->m_percentage = $value;
        return;
    }

    public function getOrigTaskid()
    {
        return $this->m_taskId_Orig;
    }
    public function setOrigTaskid($value)
    {
        if (isset($this->m_taskId_Orig)) { return; }
        $this->m_taskId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTaskid($arrValues['taskId']);
        $this->setLastVersion($arrValues['last_version']);
        $this->setUser($arrValues['user']);
        $this->setCreator($arrValues['creator']);
        $this->setPublicForGroup($arrValues['public_for_group']);
        $this->setRightsByCreator($arrValues['rights_by_creator']);
        $this->setCreated($arrValues['created']);
        $this->setStatus($arrValues['status']);
        $this->setPriority($arrValues['priority']);
        $this->setCompleted($arrValues['completed']);
        $this->setPercentage($arrValues['percentage']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'taskId':
                    $this->setTaskid($val);
                    break;
                case 'last_version':
                    $this->setLastVersion($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'creator':
                    $this->setCreator($val);
                    break;
                case 'public_for_group':
                    $this->setPublicForGroup($val);
                    break;
                case 'rights_by_creator':
                    $this->setRightsByCreator($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'status':
                    $this->setStatus($val);
                    break;
                case 'priority':
                    $this->setPriority($val);
                    break;
                case 'completed':
                    $this->setCompleted($val);
                    break;
                case 'percentage':
                    $this->setPercentage($val);
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
        $arrValues['taskId'] = $this->getTaskid();
        $arrValues['last_version'] = $this->getLastVersion();
        $arrValues['user'] = $this->getUser();
        $arrValues['creator'] = $this->getCreator();
        $arrValues['public_for_group'] = $this->getPublicForGroup();
        $arrValues['rights_by_creator'] = $this->getRightsByCreator();
        $arrValues['created'] = $this->getCreated();
        $arrValues['status'] = $this->getStatus();
        $arrValues['priority'] = $this->getPriority();
        $arrValues['completed'] = $this->getCompleted();
        $arrValues['percentage'] = $this->getPercentage();
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
