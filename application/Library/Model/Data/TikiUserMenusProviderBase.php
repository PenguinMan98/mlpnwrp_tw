<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserMenusProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserMenus($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserMenus($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($menuId)
    {
        $strSql = 'SELECT * FROM `tiki_user_menus` WHERE menuId=?';
        $params = array($menuId);
        return Model_Data_TikiUserMenusProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_menus` (
            user,
            menuId,
            url,
            name,
            position,
            mode
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            
            0,
            $objRecord->getUrl(),
            $objRecord->getName(),
            $objRecord->getPosition(),
            $objRecord->getMode()
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
        $strSql = ' REPLACE INTO `tiki_user_menus` (
            user,
            menuId,
            url,
            name,
            position,
            mode
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            
            0,
            $objRecord->getUrl(),
            $objRecord->getName(),
            $objRecord->getPosition(),
            $objRecord->getMode()
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
        $strSql = 'UPDATE `tiki_user_menus` SET 
            user=?,
            menuId=?,
            url=?,
            name=?,
            position=?,
            mode=?
        WHERE menuId=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getMenuid(),
            $objRecord->getUrl(),
            $objRecord->getName(),
            $objRecord->getPosition(),
            $objRecord->getMode()
        );
        $arrKeyParams = array($objRecord->getOrigMenuid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_menus` WHERE menuId=?';
        $params = array($objRecord->getMenuid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
