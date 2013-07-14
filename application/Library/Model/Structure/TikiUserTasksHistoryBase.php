<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserTasksHistoryBase
{
    protected $m_belongs_to;
    protected $m_task_version;
    protected $m_title;
    protected $m_description;
    protected $m_start;
    protected $m_end;
    protected $m_lasteditor;
    protected $m_lastchanges;
    protected $m_priority;
    protected $m_completed;
    protected $m_deleted;
    protected $m_status;
    protected $m_percentage;
    protected $m_accepted_creator;
    protected $m_accepted_user;
    protected $m_belongs_to_Orig;
    protected $m_task_version_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setPriority(3);
        }
        return;
    }
    public function TikiUserTasksHistoryBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBelongsTo()
    {
        return $this->m_belongs_to;
    }
    public function setBelongsTo($value)
    {
        $this->m_belongs_to = $value;
        $this->setOrigBelongsTo($value);
        return;
    }

    public function getTaskVersion()
    {
        return $this->m_task_version;
    }
    public function setTaskVersion($value)
    {
        $this->m_task_version = $value;
        $this->setOrigTaskVersion($value);
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

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
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

    public function getLasteditor()
    {
        return $this->m_lasteditor;
    }
    public function setLasteditor($value)
    {
        $this->m_lasteditor = $value;
        return;
    }

    public function getLastchanges()
    {
        return $this->m_lastchanges;
    }
    public function setLastchanges($value)
    {
        $this->m_lastchanges = $value;
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

    public function getDeleted()
    {
        return $this->m_deleted;
    }
    public function setDeleted($value)
    {
        $this->m_deleted = $value;
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

    public function getPercentage()
    {
        return $this->m_percentage;
    }
    public function setPercentage($value)
    {
        $this->m_percentage = $value;
        return;
    }

    public function getAcceptedCreator()
    {
        return $this->m_accepted_creator;
    }
    public function setAcceptedCreator($value)
    {
        $this->m_accepted_creator = $value;
        return;
    }

    public function getAcceptedUser()
    {
        return $this->m_accepted_user;
    }
    public function setAcceptedUser($value)
    {
        $this->m_accepted_user = $value;
        return;
    }

    public function getOrigBelongsTo()
    {
        return $this->m_belongs_to_Orig;
    }
    public function setOrigBelongsTo($value)
    {
        if (isset($this->m_belongs_to_Orig)) { return; }
        $this->m_belongs_to_Orig = $value;
        return;
    }

    public function getOrigTaskVersion()
    {
        return $this->m_task_version_Orig;
    }
    public function setOrigTaskVersion($value)
    {
        if (isset($this->m_task_version_Orig)) { return; }
        $this->m_task_version_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBelongsTo($arrValues['belongs_to']);
        $this->setTaskVersion($arrValues['task_version']);
        $this->setTitle($arrValues['title']);
        $this->setDescription($arrValues['description']);
        $this->setStart($arrValues['start']);
        $this->setEnd($arrValues['end']);
        $this->setLasteditor($arrValues['lasteditor']);
        $this->setLastchanges($arrValues['lastchanges']);
        $this->setPriority($arrValues['priority']);
        $this->setCompleted($arrValues['completed']);
        $this->setDeleted($arrValues['deleted']);
        $this->setStatus($arrValues['status']);
        $this->setPercentage($arrValues['percentage']);
        $this->setAcceptedCreator($arrValues['accepted_creator']);
        $this->setAcceptedUser($arrValues['accepted_user']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'belongs_to':
                    $this->setBelongsTo($val);
                    break;
                case 'task_version':
                    $this->setTaskVersion($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'start':
                    $this->setStart($val);
                    break;
                case 'end':
                    $this->setEnd($val);
                    break;
                case 'lasteditor':
                    $this->setLasteditor($val);
                    break;
                case 'lastchanges':
                    $this->setLastchanges($val);
                    break;
                case 'priority':
                    $this->setPriority($val);
                    break;
                case 'completed':
                    $this->setCompleted($val);
                    break;
                case 'deleted':
                    $this->setDeleted($val);
                    break;
                case 'status':
                    $this->setStatus($val);
                    break;
                case 'percentage':
                    $this->setPercentage($val);
                    break;
                case 'accepted_creator':
                    $this->setAcceptedCreator($val);
                    break;
                case 'accepted_user':
                    $this->setAcceptedUser($val);
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
        $arrValues['belongs_to'] = $this->getBelongsTo();
        $arrValues['task_version'] = $this->getTaskVersion();
        $arrValues['title'] = $this->getTitle();
        $arrValues['description'] = $this->getDescription();
        $arrValues['start'] = $this->getStart();
        $arrValues['end'] = $this->getEnd();
        $arrValues['lasteditor'] = $this->getLasteditor();
        $arrValues['lastchanges'] = $this->getLastchanges();
        $arrValues['priority'] = $this->getPriority();
        $arrValues['completed'] = $this->getCompleted();
        $arrValues['deleted'] = $this->getDeleted();
        $arrValues['status'] = $this->getStatus();
        $arrValues['percentage'] = $this->getPercentage();
        $arrValues['accepted_creator'] = $this->getAcceptedCreator();
        $arrValues['accepted_user'] = $this->getAcceptedUser();
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
