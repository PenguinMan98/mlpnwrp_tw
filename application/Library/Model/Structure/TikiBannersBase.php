<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiBannersBase
{
    protected $m_bannerId;
    protected $m_client;
    protected $m_url;
    protected $m_title;
    protected $m_alt;
    protected $m_which;
    protected $m_imageData;
    protected $m_imageType;
    protected $m_imageName;
    protected $m_HTMLData;
    protected $m_fixedURLData;
    protected $m_textData;
    protected $m_fromDate;
    protected $m_toDate;
    protected $m_useDates;
    protected $m_mon;
    protected $m_tue;
    protected $m_wed;
    protected $m_thu;
    protected $m_fri;
    protected $m_sat;
    protected $m_sun;
    protected $m_hourFrom;
    protected $m_hourTo;
    protected $m_created;
    protected $m_maxImpressions;
    protected $m_impressions;
    protected $m_maxUserImpressions;
    protected $m_maxClicks;
    protected $m_clicks;
    protected $m_zone;
    protected $m_onlyInURIs;
    protected $m_exceptInURIs;
    protected $m_bannerId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setClient('');
            $this->setMaxuserimpressions(-1);
        }
        return;
    }
    public function TikiBannersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBannerid()
    {
        return $this->m_bannerId;
    }
    public function setBannerid($value)
    {
        $this->m_bannerId = $value;
        $this->setOrigBannerid($value);
        return;
    }

    public function getClient()
    {
        return $this->m_client;
    }
    public function setClient($value)
    {
        $this->m_client = $value;
        return;
    }

    public function getUrl()
    {
        return $this->m_url;
    }
    public function setUrl($value)
    {
        $this->m_url = $value;
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

    public function getAlt()
    {
        return $this->m_alt;
    }
    public function setAlt($value)
    {
        $this->m_alt = $value;
        return;
    }

    public function getWhich()
    {
        return $this->m_which;
    }
    public function setWhich($value)
    {
        $this->m_which = $value;
        return;
    }

    public function getImagedata()
    {
        return $this->m_imageData;
    }
    public function setImagedata($value)
    {
        $this->m_imageData = $value;
        return;
    }

    public function getImagetype()
    {
        return $this->m_imageType;
    }
    public function setImagetype($value)
    {
        $this->m_imageType = $value;
        return;
    }

    public function getImagename()
    {
        return $this->m_imageName;
    }
    public function setImagename($value)
    {
        $this->m_imageName = $value;
        return;
    }

    public function getHtmldata()
    {
        return $this->m_HTMLData;
    }
    public function setHtmldata($value)
    {
        $this->m_HTMLData = $value;
        return;
    }

    public function getFixedurldata()
    {
        return $this->m_fixedURLData;
    }
    public function setFixedurldata($value)
    {
        $this->m_fixedURLData = $value;
        return;
    }

    public function getTextdata()
    {
        return $this->m_textData;
    }
    public function setTextdata($value)
    {
        $this->m_textData = $value;
        return;
    }

    public function getFromdate()
    {
        return $this->m_fromDate;
    }
    public function setFromdate($value)
    {
        $this->m_fromDate = $value;
        return;
    }

    public function getTodate()
    {
        return $this->m_toDate;
    }
    public function setTodate($value)
    {
        $this->m_toDate = $value;
        return;
    }

    public function getUsedates()
    {
        return $this->m_useDates;
    }
    public function setUsedates($value)
    {
        $this->m_useDates = $value;
        return;
    }

    public function getMon()
    {
        return $this->m_mon;
    }
    public function setMon($value)
    {
        $this->m_mon = $value;
        return;
    }

    public function getTue()
    {
        return $this->m_tue;
    }
    public function setTue($value)
    {
        $this->m_tue = $value;
        return;
    }

    public function getWed()
    {
        return $this->m_wed;
    }
    public function setWed($value)
    {
        $this->m_wed = $value;
        return;
    }

    public function getThu()
    {
        return $this->m_thu;
    }
    public function setThu($value)
    {
        $this->m_thu = $value;
        return;
    }

    public function getFri()
    {
        return $this->m_fri;
    }
    public function setFri($value)
    {
        $this->m_fri = $value;
        return;
    }

    public function getSat()
    {
        return $this->m_sat;
    }
    public function setSat($value)
    {
        $this->m_sat = $value;
        return;
    }

    public function getSun()
    {
        return $this->m_sun;
    }
    public function setSun($value)
    {
        $this->m_sun = $value;
        return;
    }

    public function getHourfrom()
    {
        return $this->m_hourFrom;
    }
    public function setHourfrom($value)
    {
        $this->m_hourFrom = $value;
        return;
    }

    public function getHourto()
    {
        return $this->m_hourTo;
    }
    public function setHourto($value)
    {
        $this->m_hourTo = $value;
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

    public function getMaximpressions()
    {
        return $this->m_maxImpressions;
    }
    public function setMaximpressions($value)
    {
        $this->m_maxImpressions = $value;
        return;
    }

    public function getImpressions()
    {
        return $this->m_impressions;
    }
    public function setImpressions($value)
    {
        $this->m_impressions = $value;
        return;
    }

    public function getMaxuserimpressions()
    {
        return $this->m_maxUserImpressions;
    }
    public function setMaxuserimpressions($value)
    {
        $this->m_maxUserImpressions = $value;
        return;
    }

    public function getMaxclicks()
    {
        return $this->m_maxClicks;
    }
    public function setMaxclicks($value)
    {
        $this->m_maxClicks = $value;
        return;
    }

    public function getClicks()
    {
        return $this->m_clicks;
    }
    public function setClicks($value)
    {
        $this->m_clicks = $value;
        return;
    }

    public function getZone()
    {
        return $this->m_zone;
    }
    public function setZone($value)
    {
        $this->m_zone = $value;
        return;
    }

    public function getOnlyinuris()
    {
        return $this->m_onlyInURIs;
    }
    public function setOnlyinuris($value)
    {
        $this->m_onlyInURIs = $value;
        return;
    }

    public function getExceptinuris()
    {
        return $this->m_exceptInURIs;
    }
    public function setExceptinuris($value)
    {
        $this->m_exceptInURIs = $value;
        return;
    }

    public function getOrigBannerid()
    {
        return $this->m_bannerId_Orig;
    }
    public function setOrigBannerid($value)
    {
        if (isset($this->m_bannerId_Orig)) { return; }
        $this->m_bannerId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBannerid($arrValues['bannerId']);
        $this->setClient($arrValues['client']);
        $this->setUrl($arrValues['url']);
        $this->setTitle($arrValues['title']);
        $this->setAlt($arrValues['alt']);
        $this->setWhich($arrValues['which']);
        $this->setImagedata($arrValues['imageData']);
        $this->setImagetype($arrValues['imageType']);
        $this->setImagename($arrValues['imageName']);
        $this->setHtmldata($arrValues['HTMLData']);
        $this->setFixedurldata($arrValues['fixedURLData']);
        $this->setTextdata($arrValues['textData']);
        $this->setFromdate($arrValues['fromDate']);
        $this->setTodate($arrValues['toDate']);
        $this->setUsedates($arrValues['useDates']);
        $this->setMon($arrValues['mon']);
        $this->setTue($arrValues['tue']);
        $this->setWed($arrValues['wed']);
        $this->setThu($arrValues['thu']);
        $this->setFri($arrValues['fri']);
        $this->setSat($arrValues['sat']);
        $this->setSun($arrValues['sun']);
        $this->setHourfrom($arrValues['hourFrom']);
        $this->setHourto($arrValues['hourTo']);
        $this->setCreated($arrValues['created']);
        $this->setMaximpressions($arrValues['maxImpressions']);
        $this->setImpressions($arrValues['impressions']);
        $this->setMaxuserimpressions($arrValues['maxUserImpressions']);
        $this->setMaxclicks($arrValues['maxClicks']);
        $this->setClicks($arrValues['clicks']);
        $this->setZone($arrValues['zone']);
        $this->setOnlyinuris($arrValues['onlyInURIs']);
        $this->setExceptinuris($arrValues['exceptInURIs']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'bannerId':
                    $this->setBannerid($val);
                    break;
                case 'client':
                    $this->setClient($val);
                    break;
                case 'url':
                    $this->setUrl($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'alt':
                    $this->setAlt($val);
                    break;
                case 'which':
                    $this->setWhich($val);
                    break;
                case 'imageData':
                    $this->setImagedata($val);
                    break;
                case 'imageType':
                    $this->setImagetype($val);
                    break;
                case 'imageName':
                    $this->setImagename($val);
                    break;
                case 'HTMLData':
                    $this->setHtmldata($val);
                    break;
                case 'fixedURLData':
                    $this->setFixedurldata($val);
                    break;
                case 'textData':
                    $this->setTextdata($val);
                    break;
                case 'fromDate':
                    $this->setFromdate($val);
                    break;
                case 'toDate':
                    $this->setTodate($val);
                    break;
                case 'useDates':
                    $this->setUsedates($val);
                    break;
                case 'mon':
                    $this->setMon($val);
                    break;
                case 'tue':
                    $this->setTue($val);
                    break;
                case 'wed':
                    $this->setWed($val);
                    break;
                case 'thu':
                    $this->setThu($val);
                    break;
                case 'fri':
                    $this->setFri($val);
                    break;
                case 'sat':
                    $this->setSat($val);
                    break;
                case 'sun':
                    $this->setSun($val);
                    break;
                case 'hourFrom':
                    $this->setHourfrom($val);
                    break;
                case 'hourTo':
                    $this->setHourto($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'maxImpressions':
                    $this->setMaximpressions($val);
                    break;
                case 'impressions':
                    $this->setImpressions($val);
                    break;
                case 'maxUserImpressions':
                    $this->setMaxuserimpressions($val);
                    break;
                case 'maxClicks':
                    $this->setMaxclicks($val);
                    break;
                case 'clicks':
                    $this->setClicks($val);
                    break;
                case 'zone':
                    $this->setZone($val);
                    break;
                case 'onlyInURIs':
                    $this->setOnlyinuris($val);
                    break;
                case 'exceptInURIs':
                    $this->setExceptinuris($val);
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
        $arrValues['bannerId'] = $this->getBannerid();
        $arrValues['client'] = $this->getClient();
        $arrValues['url'] = $this->getUrl();
        $arrValues['title'] = $this->getTitle();
        $arrValues['alt'] = $this->getAlt();
        $arrValues['which'] = $this->getWhich();
        $arrValues['imageData'] = $this->getImagedata();
        $arrValues['imageType'] = $this->getImagetype();
        $arrValues['imageName'] = $this->getImagename();
        $arrValues['HTMLData'] = $this->getHtmldata();
        $arrValues['fixedURLData'] = $this->getFixedurldata();
        $arrValues['textData'] = $this->getTextdata();
        $arrValues['fromDate'] = $this->getFromdate();
        $arrValues['toDate'] = $this->getTodate();
        $arrValues['useDates'] = $this->getUsedates();
        $arrValues['mon'] = $this->getMon();
        $arrValues['tue'] = $this->getTue();
        $arrValues['wed'] = $this->getWed();
        $arrValues['thu'] = $this->getThu();
        $arrValues['fri'] = $this->getFri();
        $arrValues['sat'] = $this->getSat();
        $arrValues['sun'] = $this->getSun();
        $arrValues['hourFrom'] = $this->getHourfrom();
        $arrValues['hourTo'] = $this->getHourto();
        $arrValues['created'] = $this->getCreated();
        $arrValues['maxImpressions'] = $this->getMaximpressions();
        $arrValues['impressions'] = $this->getImpressions();
        $arrValues['maxUserImpressions'] = $this->getMaxuserimpressions();
        $arrValues['maxClicks'] = $this->getMaxclicks();
        $arrValues['clicks'] = $this->getClicks();
        $arrValues['zone'] = $this->getZone();
        $arrValues['onlyInURIs'] = $this->getOnlyinuris();
        $arrValues['exceptInURIs'] = $this->getExceptinuris();
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
