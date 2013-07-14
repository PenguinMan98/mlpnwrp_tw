<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCreditsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCredits($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCredits($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($creditId)
    {
        $strSql = 'SELECT * FROM `tiki_credits` WHERE creditId=?';
        $params = array($creditId);
        return Model_Data_TikiCreditsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_credits` (
            creditId,
            userId,
            credit_type,
            creation_date,
            expiration_date,
            total_amount,
            used_amount,
            product_id
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserid(),
            $objRecord->getCreditType(),
            $objRecord->getCreationDate(),
            $objRecord->getExpirationDate(),
            $objRecord->getTotalAmount(),
            $objRecord->getUsedAmount(),
            $objRecord->getProductId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCreditid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_credits` (
            creditId,
            userId,
            credit_type,
            creation_date,
            expiration_date,
            total_amount,
            used_amount,
            product_id
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserid(),
            $objRecord->getCreditType(),
            $objRecord->getCreationDate(),
            $objRecord->getExpirationDate(),
            $objRecord->getTotalAmount(),
            $objRecord->getUsedAmount(),
            $objRecord->getProductId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCreditid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_credits` SET 
            creditId=?,
            userId=?,
            credit_type=?,
            creation_date=?,
            expiration_date=?,
            total_amount=?,
            used_amount=?,
            product_id=?
        WHERE creditId=?';
        $arrSetParams = array(
            $objRecord->getCreditid(),
            $objRecord->getUserid(),
            $objRecord->getCreditType(),
            $objRecord->getCreationDate(),
            $objRecord->getExpirationDate(),
            $objRecord->getTotalAmount(),
            $objRecord->getUsedAmount(),
            $objRecord->getProductId()
        );
        $arrKeyParams = array($objRecord->getOrigCreditid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_credits` WHERE creditId=?';
        $params = array($objRecord->getCreditid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
