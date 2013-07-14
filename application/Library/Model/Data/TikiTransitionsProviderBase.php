<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTransitionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTransitions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTransitions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($transitionId)
    {
        $strSql = 'SELECT * FROM `tiki_transitions` WHERE transitionId=?';
        $params = array($transitionId);
        return Model_Data_TikiTransitionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_transitions` (
            transitionId,
            preserve,
            name,
            type,
            from,
            to,
            guards
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPreserve(),
            $objRecord->getName(),
            $objRecord->getType(),
            $objRecord->getFrom(),
            $objRecord->getTo(),
            $objRecord->getGuards()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTransitionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_transitions` (
            transitionId,
            preserve,
            name,
            type,
            from,
            to,
            guards
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPreserve(),
            $objRecord->getName(),
            $objRecord->getType(),
            $objRecord->getFrom(),
            $objRecord->getTo(),
            $objRecord->getGuards()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTransitionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_transitions` SET 
            transitionId=?,
            preserve=?,
            name=?,
            type=?,
            from=?,
            to=?,
            guards=?
        WHERE transitionId=?';
        $arrSetParams = array(
            $objRecord->getTransitionid(),
            $objRecord->getPreserve(),
            $objRecord->getName(),
            $objRecord->getType(),
            $objRecord->getFrom(),
            $objRecord->getTo(),
            $objRecord->getGuards()
        );
        $arrKeyParams = array($objRecord->getOrigTransitionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_transitions` WHERE transitionId=?';
        $params = array($objRecord->getTransitionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
