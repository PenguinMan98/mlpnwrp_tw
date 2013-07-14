<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTagsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTags($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTags($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($tagName, $pageName)
    {
        $strSql = 'SELECT * FROM `tiki_tags` WHERE tagName=? AND pageName=?';
        $params = array($tagName, $pageName);
        return Model_Data_TikiTagsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_tags` (
            tagName,
            pageName,
            hits,
            description,
            data,
            lastModif,
            comment,
            version,
            user,
            ip,
            flag
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getTagname(),
            $objRecord->getPagename(),
            $objRecord->getHits(),
            $objRecord->getDescription(),
            $objRecord->getData(),
            $objRecord->getLastmodif(),
            $objRecord->getComment(),
            $objRecord->getVersion(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getFlag()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_tags` (
            tagName,
            pageName,
            hits,
            description,
            data,
            lastModif,
            comment,
            version,
            user,
            ip,
            flag
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getTagname(),
            $objRecord->getPagename(),
            $objRecord->getHits(),
            $objRecord->getDescription(),
            $objRecord->getData(),
            $objRecord->getLastmodif(),
            $objRecord->getComment(),
            $objRecord->getVersion(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getFlag()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_tags` SET 
            tagName=?,
            pageName=?,
            hits=?,
            description=?,
            data=?,
            lastModif=?,
            comment=?,
            version=?,
            user=?,
            ip=?,
            flag=?
        WHERE tagName=? AND pageName=?';
        $arrSetParams = array(
            $objRecord->getTagname(),
            $objRecord->getPagename(),
            $objRecord->getHits(),
            $objRecord->getDescription(),
            $objRecord->getData(),
            $objRecord->getLastmodif(),
            $objRecord->getComment(),
            $objRecord->getVersion(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getFlag()
        );
        $arrKeyParams = array($objRecord->getOrigTagname(), $objRecord->getOrigPagename());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_tags` WHERE tagName=? AND pageName=?';
        $params = array($objRecord->getTagname(), $objRecord->getPagename());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
