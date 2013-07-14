<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiMenuOptionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiMenuOptions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiMenuOptions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($optionId)
    {
        $strSql = 'SELECT * FROM `tiki_menu_options` WHERE optionId=?';
        $params = array($optionId);
        return Model_Data_TikiMenuOptionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_menu_options` (
            optionId,
            menuId,
            type,
            name,
            url,
            position,
            section,
            perm,
            groupname,
            userlevel,
            icon
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMenuid(),
            $objRecord->getType(),
            $objRecord->getName(),
            $objRecord->getUrl(),
            $objRecord->getPosition(),
            $objRecord->getSection(),
            $objRecord->getPerm(),
            $objRecord->getGroupname(),
            $objRecord->getUserlevel(),
            $objRecord->getIcon()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setOptionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_menu_options` (
            optionId,
            menuId,
            type,
            name,
            url,
            position,
            section,
            perm,
            groupname,
            userlevel,
            icon
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMenuid(),
            $objRecord->getType(),
            $objRecord->getName(),
            $objRecord->getUrl(),
            $objRecord->getPosition(),
            $objRecord->getSection(),
            $objRecord->getPerm(),
            $objRecord->getGroupname(),
            $objRecord->getUserlevel(),
            $objRecord->getIcon()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setOptionid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_menu_options` SET 
            optionId=?,
            menuId=?,
            type=?,
            name=?,
            url=?,
            position=?,
            section=?,
            perm=?,
            groupname=?,
            userlevel=?,
            icon=?
        WHERE optionId=?';
        $arrSetParams = array(
            $objRecord->getOptionid(),
            $objRecord->getMenuid(),
            $objRecord->getType(),
            $objRecord->getName(),
            $objRecord->getUrl(),
            $objRecord->getPosition(),
            $objRecord->getSection(),
            $objRecord->getPerm(),
            $objRecord->getGroupname(),
            $objRecord->getUserlevel(),
            $objRecord->getIcon()
        );
        $arrKeyParams = array($objRecord->getOrigOptionid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_menu_options` WHERE optionId=?';
        $params = array($objRecord->getOptionid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
