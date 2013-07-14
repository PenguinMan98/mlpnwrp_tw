<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiIntegratorRepsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiIntegratorReps($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiIntegratorReps($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($repID)
    {
        $strSql = 'SELECT * FROM `tiki_integrator_reps` WHERE repID=?';
        $params = array($repID);
        return Model_Data_TikiIntegratorRepsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_integrator_reps` (
            repID,
            name,
            path,
            start_page,
            css_file,
            visibility,
            cacheable,
            expiration,
            description
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getPath(),
            $objRecord->getStartPage(),
            $objRecord->getCssFile(),
            $objRecord->getVisibility(),
            $objRecord->getCacheable(),
            $objRecord->getExpiration(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRepid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_integrator_reps` (
            repID,
            name,
            path,
            start_page,
            css_file,
            visibility,
            cacheable,
            expiration,
            description
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getPath(),
            $objRecord->getStartPage(),
            $objRecord->getCssFile(),
            $objRecord->getVisibility(),
            $objRecord->getCacheable(),
            $objRecord->getExpiration(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRepid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_integrator_reps` SET 
            repID=?,
            name=?,
            path=?,
            start_page=?,
            css_file=?,
            visibility=?,
            cacheable=?,
            expiration=?,
            description=?
        WHERE repID=?';
        $arrSetParams = array(
            $objRecord->getRepid(),
            $objRecord->getName(),
            $objRecord->getPath(),
            $objRecord->getStartPage(),
            $objRecord->getCssFile(),
            $objRecord->getVisibility(),
            $objRecord->getCacheable(),
            $objRecord->getExpiration(),
            $objRecord->getDescription()
        );
        $arrKeyParams = array($objRecord->getOrigRepid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_integrator_reps` WHERE repID=?';
        $params = array($objRecord->getRepid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
