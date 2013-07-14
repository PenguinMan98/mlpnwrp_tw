<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFeatureBase
{
    protected $m_feature_id;
    protected $m_feature_name;
    protected $m_parent_id;
    protected $m_status;
    protected $m_setting_name;
    protected $m_feature_type;
    protected $m_template;
    protected $m_permission;
    protected $m_ordinal;
    protected $m_depends_on;
    protected $m_keyword;
    protected $m_tip;
    protected $m_feature_count;
    protected $m_feature_path;
    protected $m_feature_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setStatus('active');
            $this->setFeatureType('feature');
            $this->setOrdinal(1);
            $this->setFeatureCount(0);
            $this->setFeaturePath(0);
        }
        return;
    }
    public function TikiFeatureBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFeatureId()
    {
        return $this->m_feature_id;
    }
    public function setFeatureId($value)
    {
        $this->m_feature_id = $value;
        $this->setOrigFeatureId($value);
        return;
    }

    public function getFeatureName()
    {
        return $this->m_feature_name;
    }
    public function setFeatureName($value)
    {
        $this->m_feature_name = $value;
        return;
    }

    public function getParentId()
    {
        return $this->m_parent_id;
    }
    public function setParentId($value)
    {
        $this->m_parent_id = $value;
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

    public function getSettingName()
    {
        return $this->m_setting_name;
    }
    public function setSettingName($value)
    {
        $this->m_setting_name = $value;
        return;
    }

    public function getFeatureType()
    {
        return $this->m_feature_type;
    }
    public function setFeatureType($value)
    {
        $this->m_feature_type = $value;
        return;
    }

    public function getTemplate()
    {
        return $this->m_template;
    }
    public function setTemplate($value)
    {
        $this->m_template = $value;
        return;
    }

    public function getPermission()
    {
        return $this->m_permission;
    }
    public function setPermission($value)
    {
        $this->m_permission = $value;
        return;
    }

    public function getOrdinal()
    {
        return $this->m_ordinal;
    }
    public function setOrdinal($value)
    {
        $this->m_ordinal = $value;
        return;
    }

    public function getDependsOn()
    {
        return $this->m_depends_on;
    }
    public function setDependsOn($value)
    {
        $this->m_depends_on = $value;
        return;
    }

    public function getKeyword()
    {
        return $this->m_keyword;
    }
    public function setKeyword($value)
    {
        $this->m_keyword = $value;
        return;
    }

    public function getTip()
    {
        return $this->m_tip;
    }
    public function setTip($value)
    {
        $this->m_tip = $value;
        return;
    }

    public function getFeatureCount()
    {
        return $this->m_feature_count;
    }
    public function setFeatureCount($value)
    {
        $this->m_feature_count = $value;
        return;
    }

    public function getFeaturePath()
    {
        return $this->m_feature_path;
    }
    public function setFeaturePath($value)
    {
        $this->m_feature_path = $value;
        return;
    }

    public function getOrigFeatureId()
    {
        return $this->m_feature_id_Orig;
    }
    public function setOrigFeatureId($value)
    {
        if (isset($this->m_feature_id_Orig)) { return; }
        $this->m_feature_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFeatureId($arrValues['feature_id']);
        $this->setFeatureName($arrValues['feature_name']);
        $this->setParentId($arrValues['parent_id']);
        $this->setStatus($arrValues['status']);
        $this->setSettingName($arrValues['setting_name']);
        $this->setFeatureType($arrValues['feature_type']);
        $this->setTemplate($arrValues['template']);
        $this->setPermission($arrValues['permission']);
        $this->setOrdinal($arrValues['ordinal']);
        $this->setDependsOn($arrValues['depends_on']);
        $this->setKeyword($arrValues['keyword']);
        $this->setTip($arrValues['tip']);
        $this->setFeatureCount($arrValues['feature_count']);
        $this->setFeaturePath($arrValues['feature_path']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'feature_id':
                    $this->setFeatureId($val);
                    break;
                case 'feature_name':
                    $this->setFeatureName($val);
                    break;
                case 'parent_id':
                    $this->setParentId($val);
                    break;
                case 'status':
                    $this->setStatus($val);
                    break;
                case 'setting_name':
                    $this->setSettingName($val);
                    break;
                case 'feature_type':
                    $this->setFeatureType($val);
                    break;
                case 'template':
                    $this->setTemplate($val);
                    break;
                case 'permission':
                    $this->setPermission($val);
                    break;
                case 'ordinal':
                    $this->setOrdinal($val);
                    break;
                case 'depends_on':
                    $this->setDependsOn($val);
                    break;
                case 'keyword':
                    $this->setKeyword($val);
                    break;
                case 'tip':
                    $this->setTip($val);
                    break;
                case 'feature_count':
                    $this->setFeatureCount($val);
                    break;
                case 'feature_path':
                    $this->setFeaturePath($val);
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
        $arrValues['feature_id'] = $this->getFeatureId();
        $arrValues['feature_name'] = $this->getFeatureName();
        $arrValues['parent_id'] = $this->getParentId();
        $arrValues['status'] = $this->getStatus();
        $arrValues['setting_name'] = $this->getSettingName();
        $arrValues['feature_type'] = $this->getFeatureType();
        $arrValues['template'] = $this->getTemplate();
        $arrValues['permission'] = $this->getPermission();
        $arrValues['ordinal'] = $this->getOrdinal();
        $arrValues['depends_on'] = $this->getDependsOn();
        $arrValues['keyword'] = $this->getKeyword();
        $arrValues['tip'] = $this->getTip();
        $arrValues['feature_count'] = $this->getFeatureCount();
        $arrValues['feature_path'] = $this->getFeaturePath();
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
