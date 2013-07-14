<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiBanningProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiBanning($arrResults[0]);
            }
        }
        return null;
    }

    protected function getArrayFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            $arrRecordList = array();
            foreach ($arrResults as $arrRecord) {
                $arrRecordList[] = new Model_Structure_TikiBanning($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($banId)
    {
        $strSql = 'SELECT * FROM `tiki_banning` WHERE banId=?';
        $params = array($banId);
        return Model_Data_TikiBanningProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_banning` (
            banId,
            mode,
            title,
            ip1,
            ip2,
            ip3,
            ip4,
            user,
            date_from,
            date_to,
            use_dates,
            created,
            message
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMode(),
            $objRecord->getTitle(),
            $objRecord->getIp1(),
            $objRecord->getIp2(),
            $objRecord->getIp3(),
            $objRecord->getIp4(),
            $objRecord->getUser(),
            $objRecord->getDateFrom(),
            $objRecord->getDateTo(),
            $objRecord->getUseDates(),
            $objRecord->getCreated(),
            $objRecord->getMessage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBanid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_banning` (
            banId,
            mode,
            title,
            ip1,
            ip2,
            ip3,
            ip4,
            user,
            date_from,
            date_to,
            use_dates,
            created,
            message
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMode(),
            $objRecord->getTitle(),
            $objRecord->getIp1(),
            $objRecord->getIp2(),
            $objRecord->getIp3(),
            $objRecord->getIp4(),
            $objRecord->getUser(),
            $objRecord->getDateFrom(),
            $objRecord->getDateTo(),
            $objRecord->getUseDates(),
            $objRecord->getCreated(),
            $objRecord->getMessage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBanid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_banning` SET 
            banId=?,
            mode=?,
            title=?,
            ip1=?,
            ip2=?,
            ip3=?,
            ip4=?,
            user=?,
            date_from=?,
            date_to=?,
            use_dates=?,
            created=?,
            message=?
        WHERE banId=?';
        $arrSetParams = array(
            $objRecord->getBanid(),
            $objRecord->getMode(),
            $objRecord->getTitle(),
            $objRecord->getIp1(),
            $objRecord->getIp2(),
            $objRecord->getIp3(),
            $objRecord->getIp4(),
            $objRecord->getUser(),
            $objRecord->getDateFrom(),
            $objRecord->getDateTo(),
            $objRecord->getUseDates(),
            $objRecord->getCreated(),
            $objRecord->getMessage()
        );
        $arrKeyParams = array($objRecord->getOrigBanid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_banning` WHERE banId=?';
        $params = array($objRecord->getBanid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
