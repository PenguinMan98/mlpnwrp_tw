<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserNotesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserNotes($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserNotes($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($noteId)
    {
        $strSql = 'SELECT * FROM `tiki_user_notes` WHERE noteId=?';
        $params = array($noteId);
        return Model_Data_TikiUserNotesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_notes` (
            user,
            noteId,
            created,
            name,
            lastModif,
            data,
            size,
            parse_mode
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            
            0,
            $objRecord->getCreated(),
            $objRecord->getName(),
            $objRecord->getLastmodif(),
            $objRecord->getData(),
            $objRecord->getSize(),
            $objRecord->getParseMode()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setNoteid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_notes` (
            user,
            noteId,
            created,
            name,
            lastModif,
            data,
            size,
            parse_mode
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            
            0,
            $objRecord->getCreated(),
            $objRecord->getName(),
            $objRecord->getLastmodif(),
            $objRecord->getData(),
            $objRecord->getSize(),
            $objRecord->getParseMode()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setNoteid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_notes` SET 
            user=?,
            noteId=?,
            created=?,
            name=?,
            lastModif=?,
            data=?,
            size=?,
            parse_mode=?
        WHERE noteId=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getNoteid(),
            $objRecord->getCreated(),
            $objRecord->getName(),
            $objRecord->getLastmodif(),
            $objRecord->getData(),
            $objRecord->getSize(),
            $objRecord->getParseMode()
        );
        $arrKeyParams = array($objRecord->getOrigNoteid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_notes` WHERE noteId=?';
        $params = array($objRecord->getNoteid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
