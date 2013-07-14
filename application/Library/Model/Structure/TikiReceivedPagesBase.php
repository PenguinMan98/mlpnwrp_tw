<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiReceivedPagesBase
{
    protected $m_receivedPageId;
    protected $m_pageName;
    protected $m_data;
    protected $m_description;
    protected $m_comment;
    protected $m_receivedFromSite;
    protected $m_receivedFromUser;
    protected $m_receivedDate;
    protected $m_parent;
    protected $m_position;
    protected $m_alias;
    protected $m_structureName;
    protected $m_parentName;
    protected $m_page_alias;
    protected $m_pos;
    protected $m_receivedPageId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setPagename('');
            $this->setPageAlias('');
        }
        return;
    }
    public function TikiReceivedPagesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getReceivedpageid()
    {
        return $this->m_receivedPageId;
    }
    public function setReceivedpageid($value)
    {
        $this->m_receivedPageId = $value;
        $this->setOrigReceivedpageid($value);
        return;
    }

    public function getPagename()
    {
        return $this->m_pageName;
    }
    public function setPagename($value)
    {
        $this->m_pageName = $value;
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

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getComment()
    {
        return $this->m_comment;
    }
    public function setComment($value)
    {
        $this->m_comment = $value;
        return;
    }

    public function getReceivedfromsite()
    {
        return $this->m_receivedFromSite;
    }
    public function setReceivedfromsite($value)
    {
        $this->m_receivedFromSite = $value;
        return;
    }

    public function getReceivedfromuser()
    {
        return $this->m_receivedFromUser;
    }
    public function setReceivedfromuser($value)
    {
        $this->m_receivedFromUser = $value;
        return;
    }

    public function getReceiveddate()
    {
        return $this->m_receivedDate;
    }
    public function setReceiveddate($value)
    {
        $this->m_receivedDate = $value;
        return;
    }

    public function getParent()
    {
        return $this->m_parent;
    }
    public function setParent($value)
    {
        $this->m_parent = $value;
        return;
    }

    public function getPosition()
    {
        return $this->m_position;
    }
    public function setPosition($value)
    {
        $this->m_position = $value;
        return;
    }

    public function getAlias()
    {
        return $this->m_alias;
    }
    public function setAlias($value)
    {
        $this->m_alias = $value;
        return;
    }

    public function getStructurename()
    {
        return $this->m_structureName;
    }
    public function setStructurename($value)
    {
        $this->m_structureName = $value;
        return;
    }

    public function getParentname()
    {
        return $this->m_parentName;
    }
    public function setParentname($value)
    {
        $this->m_parentName = $value;
        return;
    }

    public function getPageAlias()
    {
        return $this->m_page_alias;
    }
    public function setPageAlias($value)
    {
        $this->m_page_alias = $value;
        return;
    }

    public function getPos()
    {
        return $this->m_pos;
    }
    public function setPos($value)
    {
        $this->m_pos = $value;
        return;
    }

    public function getOrigReceivedpageid()
    {
        return $this->m_receivedPageId_Orig;
    }
    public function setOrigReceivedpageid($value)
    {
        if (isset($this->m_receivedPageId_Orig)) { return; }
        $this->m_receivedPageId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setReceivedpageid($arrValues['receivedPageId']);
        $this->setPagename($arrValues['pageName']);
        $this->setData($arrValues['data']);
        $this->setDescription($arrValues['description']);
        $this->setComment($arrValues['comment']);
        $this->setReceivedfromsite($arrValues['receivedFromSite']);
        $this->setReceivedfromuser($arrValues['receivedFromUser']);
        $this->setReceiveddate($arrValues['receivedDate']);
        $this->setParent($arrValues['parent']);
        $this->setPosition($arrValues['position']);
        $this->setAlias($arrValues['alias']);
        $this->setStructurename($arrValues['structureName']);
        $this->setParentname($arrValues['parentName']);
        $this->setPageAlias($arrValues['page_alias']);
        $this->setPos($arrValues['pos']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'receivedPageId':
                    $this->setReceivedpageid($val);
                    break;
                case 'pageName':
                    $this->setPagename($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'comment':
                    $this->setComment($val);
                    break;
                case 'receivedFromSite':
                    $this->setReceivedfromsite($val);
                    break;
                case 'receivedFromUser':
                    $this->setReceivedfromuser($val);
                    break;
                case 'receivedDate':
                    $this->setReceiveddate($val);
                    break;
                case 'parent':
                    $this->setParent($val);
                    break;
                case 'position':
                    $this->setPosition($val);
                    break;
                case 'alias':
                    $this->setAlias($val);
                    break;
                case 'structureName':
                    $this->setStructurename($val);
                    break;
                case 'parentName':
                    $this->setParentname($val);
                    break;
                case 'page_alias':
                    $this->setPageAlias($val);
                    break;
                case 'pos':
                    $this->setPos($val);
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
        $arrValues['receivedPageId'] = $this->getReceivedpageid();
        $arrValues['pageName'] = $this->getPagename();
        $arrValues['data'] = $this->getData();
        $arrValues['description'] = $this->getDescription();
        $arrValues['comment'] = $this->getComment();
        $arrValues['receivedFromSite'] = $this->getReceivedfromsite();
        $arrValues['receivedFromUser'] = $this->getReceivedfromuser();
        $arrValues['receivedDate'] = $this->getReceiveddate();
        $arrValues['parent'] = $this->getParent();
        $arrValues['position'] = $this->getPosition();
        $arrValues['alias'] = $this->getAlias();
        $arrValues['structureName'] = $this->getStructurename();
        $arrValues['parentName'] = $this->getParentname();
        $arrValues['page_alias'] = $this->getPageAlias();
        $arrValues['pos'] = $this->getPos();
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
