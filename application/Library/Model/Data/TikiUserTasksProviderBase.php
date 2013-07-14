<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserTasksProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserTasks($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserTasks($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($taskId)
    {
        $strSql = 'SELECT * FROM `tiki_user_tasks` WHERE taskId=?';
        $params = array($taskId);
        return Model_Data_TikiUserTasksProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_tasks` (
            taskId,
            last_version,
            user,
            creator,
            public_for_group,
            rights_by_creator,
            created,
            status,
            priority,
            completed,
            percentage
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getLastVersion(),
            $objRecord->getUser(),
            $objRecord->getCreator(),
            $objRecord->getPublicForGroup(),
            $objRecord->getRightsByCreator(),
            $objRecord->getCreated(),
            $objRecord->getStatus(),
            $objRecord->getPriority(),
            $objRecord->getCompleted(),
            $objRecord->getPercentage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTaskid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_tasks` (
            taskId,
            last_version,
            user,
            creator,
            public_for_group,
            rights_by_creator,
            created,
            status,
            priority,
            completed,
            percentage
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getLastVersion(),
            $objRecord->getUser(),
            $objRecord->getCreator(),
            $objRecord->getPublicForGroup(),
            $objRecord->getRightsByCreator(),
            $objRecord->getCreated(),
            $objRecord->getStatus(),
            $objRecord->getPriority(),
            $objRecord->getCompleted(),
            $objRecord->getPercentage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTaskid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_tasks` SET 
            taskId=?,
            last_version=?,
            user=?,
            creator=?,
            public_for_group=?,
            rights_by_creator=?,
            created=?,
            status=?,
            priority=?,
            completed=?,
            percentage=?
        WHERE taskId=?';
        $arrSetParams = array(
            $objRecord->getTaskid(),
            $objRecord->getLastVersion(),
            $objRecord->getUser(),
            $objRecord->getCreator(),
            $objRecord->getPublicForGroup(),
            $objRecord->getRightsByCreator(),
            $objRecord->getCreated(),
            $objRecord->getStatus(),
            $objRecord->getPriority(),
            $objRecord->getCompleted(),
            $objRecord->getPercentage()
        );
        $arrKeyParams = array($objRecord->getOrigTaskid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_tasks` WHERE taskId=?';
        $params = array($objRecord->getTaskid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
