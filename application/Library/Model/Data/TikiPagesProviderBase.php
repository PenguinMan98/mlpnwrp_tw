<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPagesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPages($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPages($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($page_id)
    {
        $strSql = 'SELECT * FROM `tiki_pages` WHERE page_id=?';
        $params = array($page_id);
        return Model_Data_TikiPagesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_pages` (
            page_id,
            pageName,
            hits,
            data,
            description,
            lastModif,
            comment,
            version,
            version_minor,
            user,
            ip,
            flag,
            points,
            votes,
            cache,
            wiki_cache,
            cache_timestamp,
            pageRank,
            creator,
            page_size,
            lang,
            lockedby,
            is_html,
            created,
            wysiwyg,
            wiki_authors_style,
            comments_enabled,
            keywords
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPagename(),
            $objRecord->getHits(),
            $objRecord->getData(),
            $objRecord->getDescription(),
            $objRecord->getLastmodif(),
            $objRecord->getComment(),
            $objRecord->getVersion(),
            $objRecord->getVersionMinor(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getFlag(),
            $objRecord->getPoints(),
            $objRecord->getVotes(),
            $objRecord->getCache(),
            $objRecord->getWikiCache(),
            $objRecord->getCacheTimestamp(),
            $objRecord->getPagerank(),
            $objRecord->getCreator(),
            $objRecord->getPageSize(),
            $objRecord->getLang(),
            $objRecord->getLockedby(),
            $objRecord->getIsHtml(),
            $objRecord->getCreated(),
            $objRecord->getWysiwyg(),
            $objRecord->getWikiAuthorsStyle(),
            $objRecord->getCommentsEnabled(),
            $objRecord->getKeywords()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPageId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_pages` (
            page_id,
            pageName,
            hits,
            data,
            description,
            lastModif,
            comment,
            version,
            version_minor,
            user,
            ip,
            flag,
            points,
            votes,
            cache,
            wiki_cache,
            cache_timestamp,
            pageRank,
            creator,
            page_size,
            lang,
            lockedby,
            is_html,
            created,
            wysiwyg,
            wiki_authors_style,
            comments_enabled,
            keywords
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPagename(),
            $objRecord->getHits(),
            $objRecord->getData(),
            $objRecord->getDescription(),
            $objRecord->getLastmodif(),
            $objRecord->getComment(),
            $objRecord->getVersion(),
            $objRecord->getVersionMinor(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getFlag(),
            $objRecord->getPoints(),
            $objRecord->getVotes(),
            $objRecord->getCache(),
            $objRecord->getWikiCache(),
            $objRecord->getCacheTimestamp(),
            $objRecord->getPagerank(),
            $objRecord->getCreator(),
            $objRecord->getPageSize(),
            $objRecord->getLang(),
            $objRecord->getLockedby(),
            $objRecord->getIsHtml(),
            $objRecord->getCreated(),
            $objRecord->getWysiwyg(),
            $objRecord->getWikiAuthorsStyle(),
            $objRecord->getCommentsEnabled(),
            $objRecord->getKeywords()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPageId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_pages` SET 
            page_id=?,
            pageName=?,
            hits=?,
            data=?,
            description=?,
            lastModif=?,
            comment=?,
            version=?,
            version_minor=?,
            user=?,
            ip=?,
            flag=?,
            points=?,
            votes=?,
            cache=?,
            wiki_cache=?,
            cache_timestamp=?,
            pageRank=?,
            creator=?,
            page_size=?,
            lang=?,
            lockedby=?,
            is_html=?,
            created=?,
            wysiwyg=?,
            wiki_authors_style=?,
            comments_enabled=?,
            keywords=?
        WHERE page_id=?';
        $arrSetParams = array(
            $objRecord->getPageId(),
            $objRecord->getPagename(),
            $objRecord->getHits(),
            $objRecord->getData(),
            $objRecord->getDescription(),
            $objRecord->getLastmodif(),
            $objRecord->getComment(),
            $objRecord->getVersion(),
            $objRecord->getVersionMinor(),
            $objRecord->getUser(),
            $objRecord->getIp(),
            $objRecord->getFlag(),
            $objRecord->getPoints(),
            $objRecord->getVotes(),
            $objRecord->getCache(),
            $objRecord->getWikiCache(),
            $objRecord->getCacheTimestamp(),
            $objRecord->getPagerank(),
            $objRecord->getCreator(),
            $objRecord->getPageSize(),
            $objRecord->getLang(),
            $objRecord->getLockedby(),
            $objRecord->getIsHtml(),
            $objRecord->getCreated(),
            $objRecord->getWysiwyg(),
            $objRecord->getWikiAuthorsStyle(),
            $objRecord->getCommentsEnabled(),
            $objRecord->getKeywords()
        );
        $arrKeyParams = array($objRecord->getOrigPageId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_pages` WHERE page_id=?';
        $params = array($objRecord->getPageId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
