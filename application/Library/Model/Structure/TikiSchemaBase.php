<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSchemaBase
{
    protected $m_patch_name;
    protected $m_install_date;
    protected $m_patch_name_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setInstallDate('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function TikiSchemaBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPatchName()
    {
        return $this->m_patch_name;
    }
    public function setPatchName($value)
    {
        $this->m_patch_name = $value;
        $this->setOrigPatchName($value);
        return;
    }

    public function getInstallDate()
    {
        return $this->m_install_date;
    }
    public function setInstallDate($value)
    {
        $this->m_install_date = $value;
        return;
    }

    public function getOrigPatchName()
    {
        return $this->m_patch_name_Orig;
    }
    public function setOrigPatchName($value)
    {
        if (isset($this->m_patch_name_Orig)) { return; }
        $this->m_patch_name_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPatchName($arrValues['patch_name']);
        $this->setInstallDate($arrValues['install_date']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'patch_name':
                    $this->setPatchName($val);
                    break;
                case 'install_date':
                    $this->setInstallDate($val);
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
        $arrValues['patch_name'] = $this->getPatchName();
        $arrValues['install_date'] = $this->getInstallDate();
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
