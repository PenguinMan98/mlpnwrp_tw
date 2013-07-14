<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiMenusProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiMenus($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiMenus($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($menuId)
    {
        $strSql = 'SELECT * FROM `tiki_menus` WHERE menuId=?';
        $params = array($menuId);
        return Model_Data_TikiMenusProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_menus` (
            menuId,
            name,
            description,
            type,
            icon,
            use_items_icons,
            parse
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getType(),
            $objRecord->getIcon(),
            $objRecord->getUseItemsIcons(),
            $objRecord->getParse()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMenuid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_menus` (
            menuId,
            name,
            description,
            type,
            icon,
            use_items_icons,
            parse
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getType(),
            $objRecord->getIcon(),
            $objRecord->getUseItemsIcons(),
            $objRecord->getParse()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMenuid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_menus` SET 
            menuId=?,
            name=?,
            description=?,
            type=?,
            icon=?,
            use_items_icons=?,
            parse=?
        WHERE menuId=?';
        $arrSetParams = array(
            $objRecord->getMenuid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getType(),
            $objRecord->getIcon(),
            $objRecord->getUseItemsIcons(),
            $objRecord->getParse()
        );
        $arrKeyParams = array($objRecord->getOrigMenuid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_menus` WHERE menuId=?';
        $params = array($objRecord->getMenuid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
