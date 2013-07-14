<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTrackerFieldsBase
{
    protected $m_fieldId;
    protected $m_trackerId;
    protected $m_name;
    protected $m_permName;
    protected $m_options;
    protected $m_type;
    protected $m_isMain;
    protected $m_isTblVisible;
    protected $m_position;
    protected $m_isSearchable;
    protected $m_isPublic;
    protected $m_isHidden;
    protected $m_isMandatory;
    protected $m_description;
    protected $m_isMultilingual;
    protected $m_itemChoices;
    protected $m_errorMsg;
    protected $m_visibleBy;
    protected $m_editableBy;
    protected $m_descriptionIsParsed;
    protected $m_validation;
    protected $m_validationParam;
    protected $m_validationMessage;
    protected $m_fieldId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTrackerid(0);
            $this->setIssearchable('y');
            $this->setIspublic('n');
            $this->setIshidden('n');
            $this->setIsmandatory('n');
            $this->setIsmultilingual('n');
            $this->setDescriptionisparsed('n');
            $this->setValidation('');
            $this->setValidationparam('');
            $this->setValidationmessage('');
        }
        return;
    }
    public function TikiTrackerFieldsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFieldid()
    {
        return $this->m_fieldId;
    }
    public function setFieldid($value)
    {
        $this->m_fieldId = $value;
        $this->setOrigFieldid($value);
        return;
    }

    public function getTrackerid()
    {
        return $this->m_trackerId;
    }
    public function setTrackerid($value)
    {
        $this->m_trackerId = $value;
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

    public function getPermname()
    {
        return $this->m_permName;
    }
    public function setPermname($value)
    {
        $this->m_permName = $value;
        return;
    }

    public function getOptions()
    {
        return $this->m_options;
    }
    public function setOptions($value)
    {
        $this->m_options = $value;
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getIsmain()
    {
        return $this->m_isMain;
    }
    public function setIsmain($value)
    {
        $this->m_isMain = $value;
        return;
    }

    public function getIstblvisible()
    {
        return $this->m_isTblVisible;
    }
    public function setIstblvisible($value)
    {
        $this->m_isTblVisible = $value;
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

    public function getIssearchable()
    {
        return $this->m_isSearchable;
    }
    public function setIssearchable($value)
    {
        $this->m_isSearchable = $value;
        return;
    }

    public function getIspublic()
    {
        return $this->m_isPublic;
    }
    public function setIspublic($value)
    {
        $this->m_isPublic = $value;
        return;
    }

    public function getIshidden()
    {
        return $this->m_isHidden;
    }
    public function setIshidden($value)
    {
        $this->m_isHidden = $value;
        return;
    }

    public function getIsmandatory()
    {
        return $this->m_isMandatory;
    }
    public function setIsmandatory($value)
    {
        $this->m_isMandatory = $value;
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

    public function getIsmultilingual()
    {
        return $this->m_isMultilingual;
    }
    public function setIsmultilingual($value)
    {
        $this->m_isMultilingual = $value;
        return;
    }

    public function getItemchoices()
    {
        return $this->m_itemChoices;
    }
    public function setItemchoices($value)
    {
        $this->m_itemChoices = $value;
        return;
    }

    public function getErrormsg()
    {
        return $this->m_errorMsg;
    }
    public function setErrormsg($value)
    {
        $this->m_errorMsg = $value;
        return;
    }

    public function getVisibleby()
    {
        return $this->m_visibleBy;
    }
    public function setVisibleby($value)
    {
        $this->m_visibleBy = $value;
        return;
    }

    public function getEditableby()
    {
        return $this->m_editableBy;
    }
    public function setEditableby($value)
    {
        $this->m_editableBy = $value;
        return;
    }

    public function getDescriptionisparsed()
    {
        return $this->m_descriptionIsParsed;
    }
    public function setDescriptionisparsed($value)
    {
        $this->m_descriptionIsParsed = $value;
        return;
    }

    public function getValidation()
    {
        return $this->m_validation;
    }
    public function setValidation($value)
    {
        $this->m_validation = $value;
        return;
    }

    public function getValidationparam()
    {
        return $this->m_validationParam;
    }
    public function setValidationparam($value)
    {
        $this->m_validationParam = $value;
        return;
    }

    public function getValidationmessage()
    {
        return $this->m_validationMessage;
    }
    public function setValidationmessage($value)
    {
        $this->m_validationMessage = $value;
        return;
    }

    public function getOrigFieldid()
    {
        return $this->m_fieldId_Orig;
    }
    public function setOrigFieldid($value)
    {
        if (isset($this->m_fieldId_Orig)) { return; }
        $this->m_fieldId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFieldid($arrValues['fieldId']);
        $this->setTrackerid($arrValues['trackerId']);
        $this->setName($arrValues['name']);
        $this->setPermname($arrValues['permName']);
        $this->setOptions($arrValues['options']);
        $this->setType($arrValues['type']);
        $this->setIsmain($arrValues['isMain']);
        $this->setIstblvisible($arrValues['isTblVisible']);
        $this->setPosition($arrValues['position']);
        $this->setIssearchable($arrValues['isSearchable']);
        $this->setIspublic($arrValues['isPublic']);
        $this->setIshidden($arrValues['isHidden']);
        $this->setIsmandatory($arrValues['isMandatory']);
        $this->setDescription($arrValues['description']);
        $this->setIsmultilingual($arrValues['isMultilingual']);
        $this->setItemchoices($arrValues['itemChoices']);
        $this->setErrormsg($arrValues['errorMsg']);
        $this->setVisibleby($arrValues['visibleBy']);
        $this->setEditableby($arrValues['editableBy']);
        $this->setDescriptionisparsed($arrValues['descriptionIsParsed']);
        $this->setValidation($arrValues['validation']);
        $this->setValidationparam($arrValues['validationParam']);
        $this->setValidationmessage($arrValues['validationMessage']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'fieldId':
                    $this->setFieldid($val);
                    break;
                case 'trackerId':
                    $this->setTrackerid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'permName':
                    $this->setPermname($val);
                    break;
                case 'options':
                    $this->setOptions($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'isMain':
                    $this->setIsmain($val);
                    break;
                case 'isTblVisible':
                    $this->setIstblvisible($val);
                    break;
                case 'position':
                    $this->setPosition($val);
                    break;
                case 'isSearchable':
                    $this->setIssearchable($val);
                    break;
                case 'isPublic':
                    $this->setIspublic($val);
                    break;
                case 'isHidden':
                    $this->setIshidden($val);
                    break;
                case 'isMandatory':
                    $this->setIsmandatory($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'isMultilingual':
                    $this->setIsmultilingual($val);
                    break;
                case 'itemChoices':
                    $this->setItemchoices($val);
                    break;
                case 'errorMsg':
                    $this->setErrormsg($val);
                    break;
                case 'visibleBy':
                    $this->setVisibleby($val);
                    break;
                case 'editableBy':
                    $this->setEditableby($val);
                    break;
                case 'descriptionIsParsed':
                    $this->setDescriptionisparsed($val);
                    break;
                case 'validation':
                    $this->setValidation($val);
                    break;
                case 'validationParam':
                    $this->setValidationparam($val);
                    break;
                case 'validationMessage':
                    $this->setValidationmessage($val);
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
        $arrValues['fieldId'] = $this->getFieldid();
        $arrValues['trackerId'] = $this->getTrackerid();
        $arrValues['name'] = $this->getName();
        $arrValues['permName'] = $this->getPermname();
        $arrValues['options'] = $this->getOptions();
        $arrValues['type'] = $this->getType();
        $arrValues['isMain'] = $this->getIsmain();
        $arrValues['isTblVisible'] = $this->getIstblvisible();
        $arrValues['position'] = $this->getPosition();
        $arrValues['isSearchable'] = $this->getIssearchable();
        $arrValues['isPublic'] = $this->getIspublic();
        $arrValues['isHidden'] = $this->getIshidden();
        $arrValues['isMandatory'] = $this->getIsmandatory();
        $arrValues['description'] = $this->getDescription();
        $arrValues['isMultilingual'] = $this->getIsmultilingual();
        $arrValues['itemChoices'] = $this->getItemchoices();
        $arrValues['errorMsg'] = $this->getErrormsg();
        $arrValues['visibleBy'] = $this->getVisibleby();
        $arrValues['editableBy'] = $this->getEditableby();
        $arrValues['descriptionIsParsed'] = $this->getDescriptionisparsed();
        $arrValues['validation'] = $this->getValidation();
        $arrValues['validationParam'] = $this->getValidationparam();
        $arrValues['validationMessage'] = $this->getValidationmessage();
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
