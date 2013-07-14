<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserReportsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserReports($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserReports($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($id)
    {
        $strSql = 'SELECT * FROM `tiki_user_reports` WHERE id=?';
        $params = array($id);
        return Model_Data_TikiUserReportsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_reports` (
            id,
            user,
            interval,
            view,
            type,
            always_email,
            last_report
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUser(),
            $objRecord->getInterval(),
            $objRecord->getView(),
            $objRecord->getType(),
            $objRecord->getAlwaysEmail(),
            $objRecord->getLastReport()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_reports` (
            id,
            user,
            interval,
            view,
            type,
            always_email,
            last_report
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUser(),
            $objRecord->getInterval(),
            $objRecord->getView(),
            $objRecord->getType(),
            $objRecord->getAlwaysEmail(),
            $objRecord->getLastReport()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_reports` SET 
            id=?,
            user=?,
            interval=?,
            view=?,
            type=?,
            always_email=?,
            last_report=?
        WHERE id=?';
        $arrSetParams = array(
            $objRecord->getId(),
            $objRecord->getUser(),
            $objRecord->getInterval(),
            $objRecord->getView(),
            $objRecord->getType(),
            $objRecord->getAlwaysEmail(),
            $objRecord->getLastReport()
        );
        $arrKeyParams = array($objRecord->getOrigId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_reports` WHERE id=?';
        $params = array($objRecord->getId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
