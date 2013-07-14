<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiLiveSupportOperatorsBase
{
    protected $m_user;
    protected $m_accepted_requests;
    protected $m_status;
    protected $m_longest_chat;
    protected $m_shortest_chat;
    protected $m_average_chat;
    protected $m_last_chat;
    protected $m_time_online;
    protected $m_votes;
    protected $m_points;
    protected $m_status_since;
    protected $m_user_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiLiveSupportOperatorsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        $this->setOrigUser($value);
        return;
    }

    public function getAcceptedRequests()
    {
        return $this->m_accepted_requests;
    }
    public function setAcceptedRequests($value)
    {
        $this->m_accepted_requests = $value;
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

    public function getLongestChat()
    {
        return $this->m_longest_chat;
    }
    public function setLongestChat($value)
    {
        $this->m_longest_chat = $value;
        return;
    }

    public function getShortestChat()
    {
        return $this->m_shortest_chat;
    }
    public function setShortestChat($value)
    {
        $this->m_shortest_chat = $value;
        return;
    }

    public function getAverageChat()
    {
        return $this->m_average_chat;
    }
    public function setAverageChat($value)
    {
        $this->m_average_chat = $value;
        return;
    }

    public function getLastChat()
    {
        return $this->m_last_chat;
    }
    public function setLastChat($value)
    {
        $this->m_last_chat = $value;
        return;
    }

    public function getTimeOnline()
    {
        return $this->m_time_online;
    }
    public function setTimeOnline($value)
    {
        $this->m_time_online = $value;
        return;
    }

    public function getVotes()
    {
        return $this->m_votes;
    }
    public function setVotes($value)
    {
        $this->m_votes = $value;
        return;
    }

    public function getPoints()
    {
        return $this->m_points;
    }
    public function setPoints($value)
    {
        $this->m_points = $value;
        return;
    }

    public function getStatusSince()
    {
        return $this->m_status_since;
    }
    public function setStatusSince($value)
    {
        $this->m_status_since = $value;
        return;
    }

    public function getOrigUser()
    {
        return $this->m_user_Orig;
    }
    public function setOrigUser($value)
    {
        if (isset($this->m_user_Orig)) { return; }
        $this->m_user_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setAcceptedRequests($arrValues['accepted_requests']);
        $this->setStatus($arrValues['status']);
        $this->setLongestChat($arrValues['longest_chat']);
        $this->setShortestChat($arrValues['shortest_chat']);
        $this->setAverageChat($arrValues['average_chat']);
        $this->setLastChat($arrValues['last_chat']);
        $this->setTimeOnline($arrValues['time_online']);
        $this->setVotes($arrValues['votes']);
        $this->setPoints($arrValues['points']);
        $this->setStatusSince($arrValues['status_since']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'accepted_requests':
                    $this->setAcceptedRequests($val);
                    break;
                case 'status':
                    $this->setStatus($val);
                    break;
                case 'longest_chat':
                    $this->setLongestChat($val);
                    break;
                case 'shortest_chat':
                    $this->setShortestChat($val);
                    break;
                case 'average_chat':
                    $this->setAverageChat($val);
                    break;
                case 'last_chat':
                    $this->setLastChat($val);
                    break;
                case 'time_online':
                    $this->setTimeOnline($val);
                    break;
                case 'votes':
                    $this->setVotes($val);
                    break;
                case 'points':
                    $this->setPoints($val);
                    break;
                case 'status_since':
                    $this->setStatusSince($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['accepted_requests'] = $this->getAcceptedRequests();
        $arrValues['status'] = $this->getStatus();
        $arrValues['longest_chat'] = $this->getLongestChat();
        $arrValues['shortest_chat'] = $this->getShortestChat();
        $arrValues['average_chat'] = $this->getAverageChat();
        $arrValues['last_chat'] = $this->getLastChat();
        $arrValues['time_online'] = $this->getTimeOnline();
        $arrValues['votes'] = $this->getVotes();
        $arrValues['points'] = $this->getPoints();
        $arrValues['status_since'] = $this->getStatusSince();
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
