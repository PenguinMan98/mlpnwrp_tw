<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserPostingsBase
{
    protected $m_user;
    protected $m_posts;
    protected $m_last;
    protected $m_first;
    protected $m_level;
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
    public function TikiUserPostingsBase($arrData = null)
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

    public function getPosts()
    {
        return $this->m_posts;
    }
    public function setPosts($value)
    {
        $this->m_posts = $value;
        return;
    }

    public function getLast()
    {
        return $this->m_last;
    }
    public function setLast($value)
    {
        $this->m_last = $value;
        return;
    }

    public function getFirst()
    {
        return $this->m_first;
    }
    public function setFirst($value)
    {
        $this->m_first = $value;
        return;
    }

    public function getLevel()
    {
        return $this->m_level;
    }
    public function setLevel($value)
    {
        $this->m_level = $value;
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
        $this->setPosts($arrValues['posts']);
        $this->setLast($arrValues['last']);
        $this->setFirst($arrValues['first']);
        $this->setLevel($arrValues['level']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'posts':
                    $this->setPosts($val);
                    break;
                case 'last':
                    $this->setLast($val);
                    break;
                case 'first':
                    $this->setFirst($val);
                    break;
                case 'level':
                    $this->setLevel($val);
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
        $arrValues['posts'] = $this->getPosts();
        $arrValues['last'] = $this->getLast();
        $arrValues['first'] = $this->getFirst();
        $arrValues['level'] = $this->getLevel();
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
