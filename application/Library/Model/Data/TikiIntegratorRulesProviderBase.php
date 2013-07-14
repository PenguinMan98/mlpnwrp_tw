<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiIntegratorRulesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiIntegratorRules($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiIntegratorRules($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($ruleID)
    {
        $strSql = 'SELECT * FROM `tiki_integrator_rules` WHERE ruleID=?';
        $params = array($ruleID);
        return Model_Data_TikiIntegratorRulesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_integrator_rules` (
            ruleID,
            repID,
            ord,
            srch,
            repl,
            type,
            casesense,
            rxmod,
            enabled,
            description
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRepid(),
            $objRecord->getOrd(),
            $objRecord->getSrch(),
            $objRecord->getRepl(),
            $objRecord->getType(),
            $objRecord->getCasesense(),
            $objRecord->getRxmod(),
            $objRecord->getEnabled(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRuleid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_integrator_rules` (
            ruleID,
            repID,
            ord,
            srch,
            repl,
            type,
            casesense,
            rxmod,
            enabled,
            description
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRepid(),
            $objRecord->getOrd(),
            $objRecord->getSrch(),
            $objRecord->getRepl(),
            $objRecord->getType(),
            $objRecord->getCasesense(),
            $objRecord->getRxmod(),
            $objRecord->getEnabled(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRuleid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_integrator_rules` SET 
            ruleID=?,
            repID=?,
            ord=?,
            srch=?,
            repl=?,
            type=?,
            casesense=?,
            rxmod=?,
            enabled=?,
            description=?
        WHERE ruleID=?';
        $arrSetParams = array(
            $objRecord->getRuleid(),
            $objRecord->getRepid(),
            $objRecord->getOrd(),
            $objRecord->getSrch(),
            $objRecord->getRepl(),
            $objRecord->getType(),
            $objRecord->getCasesense(),
            $objRecord->getRxmod(),
            $objRecord->getEnabled(),
            $objRecord->getDescription()
        );
        $arrKeyParams = array($objRecord->getOrigRuleid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_integrator_rules` WHERE ruleID=?';
        $params = array($objRecord->getRuleid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
