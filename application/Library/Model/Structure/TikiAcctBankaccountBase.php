<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiAcctBankaccountBase
{
    protected $m_bankBookId;
    protected $m_bankAccountId;
    protected $m_externalNumber;
    protected $m_bankCountry;
    protected $m_bankCode;
    protected $m_bankIBAN;
    protected $m_bankBIC;
    protected $m_bankDelimeter;
    protected $m_bankDecPoint;
    protected $m_bankThousand;
    protected $m_bankHasHeader;
    protected $m_fieldNameAccount;
    protected $m_fieldNameBookingDate;
    protected $m_formatBookingDate;
    protected $m_fieldNameValueDate;
    protected $m_formatValueDate;
    protected $m_fieldNameBookingText;
    protected $m_fieldNameReason;
    protected $m_fieldNameCounterpartName;
    protected $m_fieldNameCounterpartAccount;
    protected $m_fieldNameCounterpartBankCode;
    protected $m_fieldNameAmount;
    protected $m_amountType;
    protected $m_fieldNameAmountSign;
    protected $m_SignPositive;
    protected $m_SignNegative;
    protected $m_bankBookId_Orig;
    protected $m_bankAccountId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setBankdelimeter(';');
            $this->setBankdecpoint(',');
            $this->setBankthousand('.');
            $this->setBankhasheader(1);
        }
        return;
    }
    public function TikiAcctBankaccountBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBankbookid()
    {
        return $this->m_bankBookId;
    }
    public function setBankbookid($value)
    {
        $this->m_bankBookId = $value;
        $this->setOrigBankbookid($value);
        return;
    }

    public function getBankaccountid()
    {
        return $this->m_bankAccountId;
    }
    public function setBankaccountid($value)
    {
        $this->m_bankAccountId = $value;
        $this->setOrigBankaccountid($value);
        return;
    }

    public function getExternalnumber()
    {
        return $this->m_externalNumber;
    }
    public function setExternalnumber($value)
    {
        $this->m_externalNumber = $value;
        return;
    }

    public function getBankcountry()
    {
        return $this->m_bankCountry;
    }
    public function setBankcountry($value)
    {
        $this->m_bankCountry = $value;
        return;
    }

    public function getBankcode()
    {
        return $this->m_bankCode;
    }
    public function setBankcode($value)
    {
        $this->m_bankCode = $value;
        return;
    }

    public function getBankiban()
    {
        return $this->m_bankIBAN;
    }
    public function setBankiban($value)
    {
        $this->m_bankIBAN = $value;
        return;
    }

    public function getBankbic()
    {
        return $this->m_bankBIC;
    }
    public function setBankbic($value)
    {
        $this->m_bankBIC = $value;
        return;
    }

    public function getBankdelimeter()
    {
        return $this->m_bankDelimeter;
    }
    public function setBankdelimeter($value)
    {
        $this->m_bankDelimeter = $value;
        return;
    }

    public function getBankdecpoint()
    {
        return $this->m_bankDecPoint;
    }
    public function setBankdecpoint($value)
    {
        $this->m_bankDecPoint = $value;
        return;
    }

    public function getBankthousand()
    {
        return $this->m_bankThousand;
    }
    public function setBankthousand($value)
    {
        $this->m_bankThousand = $value;
        return;
    }

    public function getBankhasheader()
    {
        return $this->m_bankHasHeader;
    }
    public function setBankhasheader($value)
    {
        $this->m_bankHasHeader = $value;
        return;
    }

    public function getFieldnameaccount()
    {
        return $this->m_fieldNameAccount;
    }
    public function setFieldnameaccount($value)
    {
        $this->m_fieldNameAccount = $value;
        return;
    }

    public function getFieldnamebookingdate()
    {
        return $this->m_fieldNameBookingDate;
    }
    public function setFieldnamebookingdate($value)
    {
        $this->m_fieldNameBookingDate = $value;
        return;
    }

    public function getFormatbookingdate()
    {
        return $this->m_formatBookingDate;
    }
    public function setFormatbookingdate($value)
    {
        $this->m_formatBookingDate = $value;
        return;
    }

    public function getFieldnamevaluedate()
    {
        return $this->m_fieldNameValueDate;
    }
    public function setFieldnamevaluedate($value)
    {
        $this->m_fieldNameValueDate = $value;
        return;
    }

    public function getFormatvaluedate()
    {
        return $this->m_formatValueDate;
    }
    public function setFormatvaluedate($value)
    {
        $this->m_formatValueDate = $value;
        return;
    }

    public function getFieldnamebookingtext()
    {
        return $this->m_fieldNameBookingText;
    }
    public function setFieldnamebookingtext($value)
    {
        $this->m_fieldNameBookingText = $value;
        return;
    }

    public function getFieldnamereason()
    {
        return $this->m_fieldNameReason;
    }
    public function setFieldnamereason($value)
    {
        $this->m_fieldNameReason = $value;
        return;
    }

    public function getFieldnamecounterpartname()
    {
        return $this->m_fieldNameCounterpartName;
    }
    public function setFieldnamecounterpartname($value)
    {
        $this->m_fieldNameCounterpartName = $value;
        return;
    }

    public function getFieldnamecounterpartaccount()
    {
        return $this->m_fieldNameCounterpartAccount;
    }
    public function setFieldnamecounterpartaccount($value)
    {
        $this->m_fieldNameCounterpartAccount = $value;
        return;
    }

    public function getFieldnamecounterpartbankcode()
    {
        return $this->m_fieldNameCounterpartBankCode;
    }
    public function setFieldnamecounterpartbankcode($value)
    {
        $this->m_fieldNameCounterpartBankCode = $value;
        return;
    }

    public function getFieldnameamount()
    {
        return $this->m_fieldNameAmount;
    }
    public function setFieldnameamount($value)
    {
        $this->m_fieldNameAmount = $value;
        return;
    }

    public function getAmounttype()
    {
        return $this->m_amountType;
    }
    public function setAmounttype($value)
    {
        $this->m_amountType = $value;
        return;
    }

    public function getFieldnameamountsign()
    {
        return $this->m_fieldNameAmountSign;
    }
    public function setFieldnameamountsign($value)
    {
        $this->m_fieldNameAmountSign = $value;
        return;
    }

    public function getSignpositive()
    {
        return $this->m_SignPositive;
    }
    public function setSignpositive($value)
    {
        $this->m_SignPositive = $value;
        return;
    }

    public function getSignnegative()
    {
        return $this->m_SignNegative;
    }
    public function setSignnegative($value)
    {
        $this->m_SignNegative = $value;
        return;
    }

    public function getOrigBankbookid()
    {
        return $this->m_bankBookId_Orig;
    }
    public function setOrigBankbookid($value)
    {
        if (isset($this->m_bankBookId_Orig)) { return; }
        $this->m_bankBookId_Orig = $value;
        return;
    }

    public function getOrigBankaccountid()
    {
        return $this->m_bankAccountId_Orig;
    }
    public function setOrigBankaccountid($value)
    {
        if (isset($this->m_bankAccountId_Orig)) { return; }
        $this->m_bankAccountId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBankbookid($arrValues['bankBookId']);
        $this->setBankaccountid($arrValues['bankAccountId']);
        $this->setExternalnumber($arrValues['externalNumber']);
        $this->setBankcountry($arrValues['bankCountry']);
        $this->setBankcode($arrValues['bankCode']);
        $this->setBankiban($arrValues['bankIBAN']);
        $this->setBankbic($arrValues['bankBIC']);
        $this->setBankdelimeter($arrValues['bankDelimeter']);
        $this->setBankdecpoint($arrValues['bankDecPoint']);
        $this->setBankthousand($arrValues['bankThousand']);
        $this->setBankhasheader($arrValues['bankHasHeader']);
        $this->setFieldnameaccount($arrValues['fieldNameAccount']);
        $this->setFieldnamebookingdate($arrValues['fieldNameBookingDate']);
        $this->setFormatbookingdate($arrValues['formatBookingDate']);
        $this->setFieldnamevaluedate($arrValues['fieldNameValueDate']);
        $this->setFormatvaluedate($arrValues['formatValueDate']);
        $this->setFieldnamebookingtext($arrValues['fieldNameBookingText']);
        $this->setFieldnamereason($arrValues['fieldNameReason']);
        $this->setFieldnamecounterpartname($arrValues['fieldNameCounterpartName']);
        $this->setFieldnamecounterpartaccount($arrValues['fieldNameCounterpartAccount']);
        $this->setFieldnamecounterpartbankcode($arrValues['fieldNameCounterpartBankCode']);
        $this->setFieldnameamount($arrValues['fieldNameAmount']);
        $this->setAmounttype($arrValues['amountType']);
        $this->setFieldnameamountsign($arrValues['fieldNameAmountSign']);
        $this->setSignpositive($arrValues['SignPositive']);
        $this->setSignnegative($arrValues['SignNegative']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'bankBookId':
                    $this->setBankbookid($val);
                    break;
                case 'bankAccountId':
                    $this->setBankaccountid($val);
                    break;
                case 'externalNumber':
                    $this->setExternalnumber($val);
                    break;
                case 'bankCountry':
                    $this->setBankcountry($val);
                    break;
                case 'bankCode':
                    $this->setBankcode($val);
                    break;
                case 'bankIBAN':
                    $this->setBankiban($val);
                    break;
                case 'bankBIC':
                    $this->setBankbic($val);
                    break;
                case 'bankDelimeter':
                    $this->setBankdelimeter($val);
                    break;
                case 'bankDecPoint':
                    $this->setBankdecpoint($val);
                    break;
                case 'bankThousand':
                    $this->setBankthousand($val);
                    break;
                case 'bankHasHeader':
                    $this->setBankhasheader($val);
                    break;
                case 'fieldNameAccount':
                    $this->setFieldnameaccount($val);
                    break;
                case 'fieldNameBookingDate':
                    $this->setFieldnamebookingdate($val);
                    break;
                case 'formatBookingDate':
                    $this->setFormatbookingdate($val);
                    break;
                case 'fieldNameValueDate':
                    $this->setFieldnamevaluedate($val);
                    break;
                case 'formatValueDate':
                    $this->setFormatvaluedate($val);
                    break;
                case 'fieldNameBookingText':
                    $this->setFieldnamebookingtext($val);
                    break;
                case 'fieldNameReason':
                    $this->setFieldnamereason($val);
                    break;
                case 'fieldNameCounterpartName':
                    $this->setFieldnamecounterpartname($val);
                    break;
                case 'fieldNameCounterpartAccount':
                    $this->setFieldnamecounterpartaccount($val);
                    break;
                case 'fieldNameCounterpartBankCode':
                    $this->setFieldnamecounterpartbankcode($val);
                    break;
                case 'fieldNameAmount':
                    $this->setFieldnameamount($val);
                    break;
                case 'amountType':
                    $this->setAmounttype($val);
                    break;
                case 'fieldNameAmountSign':
                    $this->setFieldnameamountsign($val);
                    break;
                case 'SignPositive':
                    $this->setSignpositive($val);
                    break;
                case 'SignNegative':
                    $this->setSignnegative($val);
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
        $arrValues['bankBookId'] = $this->getBankbookid();
        $arrValues['bankAccountId'] = $this->getBankaccountid();
        $arrValues['externalNumber'] = $this->getExternalnumber();
        $arrValues['bankCountry'] = $this->getBankcountry();
        $arrValues['bankCode'] = $this->getBankcode();
        $arrValues['bankIBAN'] = $this->getBankiban();
        $arrValues['bankBIC'] = $this->getBankbic();
        $arrValues['bankDelimeter'] = $this->getBankdelimeter();
        $arrValues['bankDecPoint'] = $this->getBankdecpoint();
        $arrValues['bankThousand'] = $this->getBankthousand();
        $arrValues['bankHasHeader'] = $this->getBankhasheader();
        $arrValues['fieldNameAccount'] = $this->getFieldnameaccount();
        $arrValues['fieldNameBookingDate'] = $this->getFieldnamebookingdate();
        $arrValues['formatBookingDate'] = $this->getFormatbookingdate();
        $arrValues['fieldNameValueDate'] = $this->getFieldnamevaluedate();
        $arrValues['formatValueDate'] = $this->getFormatvaluedate();
        $arrValues['fieldNameBookingText'] = $this->getFieldnamebookingtext();
        $arrValues['fieldNameReason'] = $this->getFieldnamereason();
        $arrValues['fieldNameCounterpartName'] = $this->getFieldnamecounterpartname();
        $arrValues['fieldNameCounterpartAccount'] = $this->getFieldnamecounterpartaccount();
        $arrValues['fieldNameCounterpartBankCode'] = $this->getFieldnamecounterpartbankcode();
        $arrValues['fieldNameAmount'] = $this->getFieldnameamount();
        $arrValues['amountType'] = $this->getAmounttype();
        $arrValues['fieldNameAmountSign'] = $this->getFieldnameamountsign();
        $arrValues['SignPositive'] = $this->getSignpositive();
        $arrValues['SignNegative'] = $this->getSignnegative();
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
