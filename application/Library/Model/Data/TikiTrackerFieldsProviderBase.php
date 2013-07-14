<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTrackerFieldsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTrackerFields($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTrackerFields($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($fieldId)
    {
        $strSql = 'SELECT * FROM `tiki_tracker_fields` WHERE fieldId=?';
        $params = array($fieldId);
        return Model_Data_TikiTrackerFieldsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_tracker_fields` (
            fieldId,
            trackerId,
            name,
            permName,
            options,
            type,
            isMain,
            isTblVisible,
            position,
            isSearchable,
            isPublic,
            isHidden,
            isMandatory,
            description,
            isMultilingual,
            itemChoices,
            errorMsg,
            visibleBy,
            editableBy,
            descriptionIsParsed,
            validation,
            validationParam,
            validationMessage
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTrackerid(),
            $objRecord->getName(),
            $objRecord->getPermname(),
            $objRecord->getOptions(),
            $objRecord->getType(),
            $objRecord->getIsmain(),
            $objRecord->getIstblvisible(),
            $objRecord->getPosition(),
            $objRecord->getIssearchable(),
            $objRecord->getIspublic(),
            $objRecord->getIshidden(),
            $objRecord->getIsmandatory(),
            $objRecord->getDescription(),
            $objRecord->getIsmultilingual(),
            $objRecord->getItemchoices(),
            $objRecord->getErrormsg(),
            $objRecord->getVisibleby(),
            $objRecord->getEditableby(),
            $objRecord->getDescriptionisparsed(),
            $objRecord->getValidation(),
            $objRecord->getValidationparam(),
            $objRecord->getValidationmessage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFieldid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_tracker_fields` (
            fieldId,
            trackerId,
            name,
            permName,
            options,
            type,
            isMain,
            isTblVisible,
            position,
            isSearchable,
            isPublic,
            isHidden,
            isMandatory,
            description,
            isMultilingual,
            itemChoices,
            errorMsg,
            visibleBy,
            editableBy,
            descriptionIsParsed,
            validation,
            validationParam,
            validationMessage
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTrackerid(),
            $objRecord->getName(),
            $objRecord->getPermname(),
            $objRecord->getOptions(),
            $objRecord->getType(),
            $objRecord->getIsmain(),
            $objRecord->getIstblvisible(),
            $objRecord->getPosition(),
            $objRecord->getIssearchable(),
            $objRecord->getIspublic(),
            $objRecord->getIshidden(),
            $objRecord->getIsmandatory(),
            $objRecord->getDescription(),
            $objRecord->getIsmultilingual(),
            $objRecord->getItemchoices(),
            $objRecord->getErrormsg(),
            $objRecord->getVisibleby(),
            $objRecord->getEditableby(),
            $objRecord->getDescriptionisparsed(),
            $objRecord->getValidation(),
            $objRecord->getValidationparam(),
            $objRecord->getValidationmessage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFieldid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_tracker_fields` SET 
            fieldId=?,
            trackerId=?,
            name=?,
            permName=?,
            options=?,
            type=?,
            isMain=?,
            isTblVisible=?,
            position=?,
            isSearchable=?,
            isPublic=?,
            isHidden=?,
            isMandatory=?,
            description=?,
            isMultilingual=?,
            itemChoices=?,
            errorMsg=?,
            visibleBy=?,
            editableBy=?,
            descriptionIsParsed=?,
            validation=?,
            validationParam=?,
            validationMessage=?
        WHERE fieldId=?';
        $arrSetParams = array(
            $objRecord->getFieldid(),
            $objRecord->getTrackerid(),
            $objRecord->getName(),
            $objRecord->getPermname(),
            $objRecord->getOptions(),
            $objRecord->getType(),
            $objRecord->getIsmain(),
            $objRecord->getIstblvisible(),
            $objRecord->getPosition(),
            $objRecord->getIssearchable(),
            $objRecord->getIspublic(),
            $objRecord->getIshidden(),
            $objRecord->getIsmandatory(),
            $objRecord->getDescription(),
            $objRecord->getIsmultilingual(),
            $objRecord->getItemchoices(),
            $objRecord->getErrormsg(),
            $objRecord->getVisibleby(),
            $objRecord->getEditableby(),
            $objRecord->getDescriptionisparsed(),
            $objRecord->getValidation(),
            $objRecord->getValidationparam(),
            $objRecord->getValidationmessage()
        );
        $arrKeyParams = array($objRecord->getOrigFieldid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_tracker_fields` WHERE fieldId=?';
        $params = array($objRecord->getFieldid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
