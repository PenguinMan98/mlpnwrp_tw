<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiDirectoryCategoriesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiDirectoryCategories($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiDirectoryCategories($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($categId)
    {
        $strSql = 'SELECT * FROM `tiki_directory_categories` WHERE categId=?';
        $params = array($categId);
        return Model_Data_TikiDirectoryCategoriesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_directory_categories` (
            categId,
            parent,
            name,
            description,
            childrenType,
            sites,
            viewableChildren,
            allowSites,
            showCount,
            editorGroup,
            hits
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getParent(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getChildrentype(),
            $objRecord->getSites(),
            $objRecord->getViewablechildren(),
            $objRecord->getAllowsites(),
            $objRecord->getShowcount(),
            $objRecord->getEditorgroup(),
            $objRecord->getHits()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCategid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_directory_categories` (
            categId,
            parent,
            name,
            description,
            childrenType,
            sites,
            viewableChildren,
            allowSites,
            showCount,
            editorGroup,
            hits
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getParent(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getChildrentype(),
            $objRecord->getSites(),
            $objRecord->getViewablechildren(),
            $objRecord->getAllowsites(),
            $objRecord->getShowcount(),
            $objRecord->getEditorgroup(),
            $objRecord->getHits()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCategid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_directory_categories` SET 
            categId=?,
            parent=?,
            name=?,
            description=?,
            childrenType=?,
            sites=?,
            viewableChildren=?,
            allowSites=?,
            showCount=?,
            editorGroup=?,
            hits=?
        WHERE categId=?';
        $arrSetParams = array(
            $objRecord->getCategid(),
            $objRecord->getParent(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getChildrentype(),
            $objRecord->getSites(),
            $objRecord->getViewablechildren(),
            $objRecord->getAllowsites(),
            $objRecord->getShowcount(),
            $objRecord->getEditorgroup(),
            $objRecord->getHits()
        );
        $arrKeyParams = array($objRecord->getOrigCategid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_directory_categories` WHERE categId=?';
        $params = array($objRecord->getCategid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
