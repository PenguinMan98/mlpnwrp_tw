<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCartInventoryHoldProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCartInventoryHold($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCartInventoryHold($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($productId, $quantity, $timeHeld, $hash)
    {
        $strSql = 'SELECT * FROM `tiki_cart_inventory_hold` WHERE productId=? AND quantity=? AND timeHeld=? AND hash=?';
        $params = array($productId, $quantity, $timeHeld, $hash);
        return Model_Data_TikiCartInventoryHoldProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_cart_inventory_hold` (
            productId,
            quantity,
            timeHeld,
            hash
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getProductid(),
            $objRecord->getQuantity(),
            $objRecord->getTimeheld(),
            $objRecord->getHash()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_cart_inventory_hold` (
            productId,
            quantity,
            timeHeld,
            hash
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getProductid(),
            $objRecord->getQuantity(),
            $objRecord->getTimeheld(),
            $objRecord->getHash()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_cart_inventory_hold` SET 
            productId=?,
            quantity=?,
            timeHeld=?,
            hash=?
        WHERE productId=? AND quantity=? AND timeHeld=? AND hash=?';
        $arrSetParams = array(
            $objRecord->getProductid(),
            $objRecord->getQuantity(),
            $objRecord->getTimeheld(),
            $objRecord->getHash()
        );
        $arrKeyParams = array($objRecord->getOrigProductid(), $objRecord->getOrigQuantity(), $objRecord->getOrigTimeheld(), $objRecord->getOrigHash());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_cart_inventory_hold` WHERE productId=? AND quantity=? AND timeHeld=? AND hash=?';
        $params = array($objRecord->getProductid(), $objRecord->getQuantity(), $objRecord->getTimeheld(), $objRecord->getHash());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
