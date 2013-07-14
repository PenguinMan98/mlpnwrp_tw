<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFilesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFiles($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFiles($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($fileId)
    {
        $strSql = 'SELECT * FROM `tiki_files` WHERE fileId=?';
        $params = array($fileId);
        return Model_Data_TikiFilesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_files` (
            fileId,
            galleryId,
            name,
            description,
            created,
            filename,
            filesize,
            filetype,
            data,
            user,
            author,
            hits,
            maxhits,
            lastDownload,
            votes,
            points,
            path,
            reference_url,
            is_reference,
            hash,
            search_data,
            metadata,
            lastModif,
            lastModifUser,
            lockedby,
            comment,
            archiveId,
            deleteAfter
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGalleryid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getFilename(),
            $objRecord->getFilesize(),
            $objRecord->getFiletype(),
            $objRecord->getData(),
            $objRecord->getUser(),
            $objRecord->getAuthor(),
            $objRecord->getHits(),
            $objRecord->getMaxhits(),
            $objRecord->getLastdownload(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getPath(),
            $objRecord->getReferenceUrl(),
            $objRecord->getIsReference(),
            $objRecord->getHash(),
            $objRecord->getSearchData(),
            $objRecord->getMetadata(),
            $objRecord->getLastmodif(),
            $objRecord->getLastmodifuser(),
            $objRecord->getLockedby(),
            $objRecord->getComment(),
            $objRecord->getArchiveid(),
            $objRecord->getDeleteafter()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFileid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_files` (
            fileId,
            galleryId,
            name,
            description,
            created,
            filename,
            filesize,
            filetype,
            data,
            user,
            author,
            hits,
            maxhits,
            lastDownload,
            votes,
            points,
            path,
            reference_url,
            is_reference,
            hash,
            search_data,
            metadata,
            lastModif,
            lastModifUser,
            lockedby,
            comment,
            archiveId,
            deleteAfter
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGalleryid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getFilename(),
            $objRecord->getFilesize(),
            $objRecord->getFiletype(),
            $objRecord->getData(),
            $objRecord->getUser(),
            $objRecord->getAuthor(),
            $objRecord->getHits(),
            $objRecord->getMaxhits(),
            $objRecord->getLastdownload(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getPath(),
            $objRecord->getReferenceUrl(),
            $objRecord->getIsReference(),
            $objRecord->getHash(),
            $objRecord->getSearchData(),
            $objRecord->getMetadata(),
            $objRecord->getLastmodif(),
            $objRecord->getLastmodifuser(),
            $objRecord->getLockedby(),
            $objRecord->getComment(),
            $objRecord->getArchiveid(),
            $objRecord->getDeleteafter()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFileid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_files` SET 
            fileId=?,
            galleryId=?,
            name=?,
            description=?,
            created=?,
            filename=?,
            filesize=?,
            filetype=?,
            data=?,
            user=?,
            author=?,
            hits=?,
            maxhits=?,
            lastDownload=?,
            votes=?,
            points=?,
            path=?,
            reference_url=?,
            is_reference=?,
            hash=?,
            search_data=?,
            metadata=?,
            lastModif=?,
            lastModifUser=?,
            lockedby=?,
            comment=?,
            archiveId=?,
            deleteAfter=?
        WHERE fileId=?';
        $arrSetParams = array(
            $objRecord->getFileid(),
            $objRecord->getGalleryid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getFilename(),
            $objRecord->getFilesize(),
            $objRecord->getFiletype(),
            $objRecord->getData(),
            $objRecord->getUser(),
            $objRecord->getAuthor(),
            $objRecord->getHits(),
            $objRecord->getMaxhits(),
            $objRecord->getLastdownload(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getPath(),
            $objRecord->getReferenceUrl(),
            $objRecord->getIsReference(),
            $objRecord->getHash(),
            $objRecord->getSearchData(),
            $objRecord->getMetadata(),
            $objRecord->getLastmodif(),
            $objRecord->getLastmodifuser(),
            $objRecord->getLockedby(),
            $objRecord->getComment(),
            $objRecord->getArchiveid(),
            $objRecord->getDeleteafter()
        );
        $arrKeyParams = array($objRecord->getOrigFileid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_files` WHERE fileId=?';
        $params = array($objRecord->getFileid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
