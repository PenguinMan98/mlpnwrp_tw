<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserTasksHistoryProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserTasksHistory($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserTasksHistory($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($belongs_to, $task_version)
    {
        $strSql = 'SELECT * FROM `tiki_user_tasks_history` WHERE belongs_to=? AND task_version=?';
        $params = array($belongs_to, $task_version);
        return Model_Data_TikiUserTasksHistoryProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_tasks_history` (
            belongs_to,
            task_version,
            title,
            description,
            start,
            end,
            lasteditor,
            lastchanges,
            priority,
            completed,
            deleted,
            status,
            percentage,
            accepted_creator,
            accepted_user
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getBelongsTo(),
            $objRecord->getTaskVersion(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getLasteditor(),
            $objRecord->getLastchanges(),
            $objRecord->getPriority(),
            $objRecord->getCompleted(),
            $objRecord->getDeleted(),
            $objRecord->getStatus(),
            $objRecord->getPercentage(),
            $objRecord->getAcceptedCreator(),
            $objRecord->getAcceptedUser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_tasks_history` (
            belongs_to,
            task_version,
            title,
            description,
            start,
            end,
            lasteditor,
            lastchanges,
            priority,
            completed,
            deleted,
            status,
            percentage,
            accepted_creator,
            accepted_user
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getBelongsTo(),
            $objRecord->getTaskVersion(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getLasteditor(),
            $objRecord->getLastchanges(),
            $objRecord->getPriority(),
            $objRecord->getCompleted(),
            $objRecord->getDeleted(),
            $objRecord->getStatus(),
            $objRecord->getPercentage(),
            $objRecord->getAcceptedCreator(),
            $objRecord->getAcceptedUser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_tasks_history` SET 
            belongs_to=?,
            task_version=?,
            title=?,
            description=?,
            start=?,
            end=?,
            lasteditor=?,
            lastchanges=?,
            priority=?,
            completed=?,
            deleted=?,
            status=?,
            percentage=?,
            accepted_creator=?,
            accepted_user=?
        WHERE belongs_to=? AND task_version=?';
        $arrSetParams = array(
            $objRecord->getBelongsTo(),
            $objRecord->getTaskVersion(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getLasteditor(),
            $objRecord->getLastchanges(),
            $objRecord->getPriority(),
            $objRecord->getCompleted(),
            $objRecord->getDeleted(),
            $objRecord->getStatus(),
            $objRecord->getPercentage(),
            $objRecord->getAcceptedCreator(),
            $objRecord->getAcceptedUser()
        );
        $arrKeyParams = array($objRecord->getOrigBelongsTo(), $objRecord->getOrigTaskVersion());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_tasks_history` WHERE belongs_to=? AND task_version=?';
        $params = array($objRecord->getBelongsTo(), $objRecord->getTaskVersion());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
