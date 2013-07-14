<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFileGalleriesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFileGalleries($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFileGalleries($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($galleryId)
    {
        $strSql = 'SELECT * FROM `tiki_file_galleries` WHERE galleryId=?';
        $params = array($galleryId);
        return Model_Data_TikiFileGalleriesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_file_galleries` (
            galleryId,
            name,
            type,
            template,
            description,
            created,
            visible,
            lastModif,
            user,
            hits,
            votes,
            points,
            maxRows,
            public,
            show_id,
            show_icon,
            show_name,
            show_size,
            show_description,
            max_desc,
            show_created,
            show_hits,
            show_lastDownload,
            parentId,
            lockable,
            show_lockedby,
            archives,
            sort_mode,
            show_modified,
            show_author,
            show_creator,
            subgal_conf,
            show_last_user,
            show_comment,
            show_files,
            show_explorer,
            show_path,
            show_slideshow,
            default_view,
            quota,
            size,
            wiki_syntax,
            backlinkPerms,
            show_backlinks,
            show_deleteAfter,
            show_checked,
            show_share,
            image_max_size_x,
            image_max_size_y,
            show_source,
            icon_fileId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getType(),
            $objRecord->getTemplate(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getVisible(),
            $objRecord->getLastmodif(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getMaxrows(),
            $objRecord->getPublic(),
            $objRecord->getShowId(),
            $objRecord->getShowIcon(),
            $objRecord->getShowName(),
            $objRecord->getShowSize(),
            $objRecord->getShowDescription(),
            $objRecord->getMaxDesc(),
            $objRecord->getShowCreated(),
            $objRecord->getShowHits(),
            $objRecord->getShowLastdownload(),
            $objRecord->getParentid(),
            $objRecord->getLockable(),
            $objRecord->getShowLockedby(),
            $objRecord->getArchives(),
            $objRecord->getSortMode(),
            $objRecord->getShowModified(),
            $objRecord->getShowAuthor(),
            $objRecord->getShowCreator(),
            $objRecord->getSubgalConf(),
            $objRecord->getShowLastUser(),
            $objRecord->getShowComment(),
            $objRecord->getShowFiles(),
            $objRecord->getShowExplorer(),
            $objRecord->getShowPath(),
            $objRecord->getShowSlideshow(),
            $objRecord->getDefaultView(),
            $objRecord->getQuota(),
            $objRecord->getSize(),
            $objRecord->getWikiSyntax(),
            $objRecord->getBacklinkperms(),
            $objRecord->getShowBacklinks(),
            $objRecord->getShowDeleteafter(),
            $objRecord->getShowChecked(),
            $objRecord->getShowShare(),
            $objRecord->getImageMaxSizeX(),
            $objRecord->getImageMaxSizeY(),
            $objRecord->getShowSource(),
            $objRecord->getIconFileid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setGalleryid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_file_galleries` (
            galleryId,
            name,
            type,
            template,
            description,
            created,
            visible,
            lastModif,
            user,
            hits,
            votes,
            points,
            maxRows,
            public,
            show_id,
            show_icon,
            show_name,
            show_size,
            show_description,
            max_desc,
            show_created,
            show_hits,
            show_lastDownload,
            parentId,
            lockable,
            show_lockedby,
            archives,
            sort_mode,
            show_modified,
            show_author,
            show_creator,
            subgal_conf,
            show_last_user,
            show_comment,
            show_files,
            show_explorer,
            show_path,
            show_slideshow,
            default_view,
            quota,
            size,
            wiki_syntax,
            backlinkPerms,
            show_backlinks,
            show_deleteAfter,
            show_checked,
            show_share,
            image_max_size_x,
            image_max_size_y,
            show_source,
            icon_fileId
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getType(),
            $objRecord->getTemplate(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getVisible(),
            $objRecord->getLastmodif(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getMaxrows(),
            $objRecord->getPublic(),
            $objRecord->getShowId(),
            $objRecord->getShowIcon(),
            $objRecord->getShowName(),
            $objRecord->getShowSize(),
            $objRecord->getShowDescription(),
            $objRecord->getMaxDesc(),
            $objRecord->getShowCreated(),
            $objRecord->getShowHits(),
            $objRecord->getShowLastdownload(),
            $objRecord->getParentid(),
            $objRecord->getLockable(),
            $objRecord->getShowLockedby(),
            $objRecord->getArchives(),
            $objRecord->getSortMode(),
            $objRecord->getShowModified(),
            $objRecord->getShowAuthor(),
            $objRecord->getShowCreator(),
            $objRecord->getSubgalConf(),
            $objRecord->getShowLastUser(),
            $objRecord->getShowComment(),
            $objRecord->getShowFiles(),
            $objRecord->getShowExplorer(),
            $objRecord->getShowPath(),
            $objRecord->getShowSlideshow(),
            $objRecord->getDefaultView(),
            $objRecord->getQuota(),
            $objRecord->getSize(),
            $objRecord->getWikiSyntax(),
            $objRecord->getBacklinkperms(),
            $objRecord->getShowBacklinks(),
            $objRecord->getShowDeleteafter(),
            $objRecord->getShowChecked(),
            $objRecord->getShowShare(),
            $objRecord->getImageMaxSizeX(),
            $objRecord->getImageMaxSizeY(),
            $objRecord->getShowSource(),
            $objRecord->getIconFileid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setGalleryid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_file_galleries` SET 
            galleryId=?,
            name=?,
            type=?,
            template=?,
            description=?,
            created=?,
            visible=?,
            lastModif=?,
            user=?,
            hits=?,
            votes=?,
            points=?,
            maxRows=?,
            public=?,
            show_id=?,
            show_icon=?,
            show_name=?,
            show_size=?,
            show_description=?,
            max_desc=?,
            show_created=?,
            show_hits=?,
            show_lastDownload=?,
            parentId=?,
            lockable=?,
            show_lockedby=?,
            archives=?,
            sort_mode=?,
            show_modified=?,
            show_author=?,
            show_creator=?,
            subgal_conf=?,
            show_last_user=?,
            show_comment=?,
            show_files=?,
            show_explorer=?,
            show_path=?,
            show_slideshow=?,
            default_view=?,
            quota=?,
            size=?,
            wiki_syntax=?,
            backlinkPerms=?,
            show_backlinks=?,
            show_deleteAfter=?,
            show_checked=?,
            show_share=?,
            image_max_size_x=?,
            image_max_size_y=?,
            show_source=?,
            icon_fileId=?
        WHERE galleryId=?';
        $arrSetParams = array(
            $objRecord->getGalleryid(),
            $objRecord->getName(),
            $objRecord->getType(),
            $objRecord->getTemplate(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getVisible(),
            $objRecord->getLastmodif(),
            $objRecord->getUser(),
            $objRecord->getHits(),
            $objRecord->getVotes(),
            $objRecord->getPoints(),
            $objRecord->getMaxrows(),
            $objRecord->getPublic(),
            $objRecord->getShowId(),
            $objRecord->getShowIcon(),
            $objRecord->getShowName(),
            $objRecord->getShowSize(),
            $objRecord->getShowDescription(),
            $objRecord->getMaxDesc(),
            $objRecord->getShowCreated(),
            $objRecord->getShowHits(),
            $objRecord->getShowLastdownload(),
            $objRecord->getParentid(),
            $objRecord->getLockable(),
            $objRecord->getShowLockedby(),
            $objRecord->getArchives(),
            $objRecord->getSortMode(),
            $objRecord->getShowModified(),
            $objRecord->getShowAuthor(),
            $objRecord->getShowCreator(),
            $objRecord->getSubgalConf(),
            $objRecord->getShowLastUser(),
            $objRecord->getShowComment(),
            $objRecord->getShowFiles(),
            $objRecord->getShowExplorer(),
            $objRecord->getShowPath(),
            $objRecord->getShowSlideshow(),
            $objRecord->getDefaultView(),
            $objRecord->getQuota(),
            $objRecord->getSize(),
            $objRecord->getWikiSyntax(),
            $objRecord->getBacklinkperms(),
            $objRecord->getShowBacklinks(),
            $objRecord->getShowDeleteafter(),
            $objRecord->getShowChecked(),
            $objRecord->getShowShare(),
            $objRecord->getImageMaxSizeX(),
            $objRecord->getImageMaxSizeY(),
            $objRecord->getShowSource(),
            $objRecord->getIconFileid()
        );
        $arrKeyParams = array($objRecord->getOrigGalleryid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_file_galleries` WHERE galleryId=?';
        $params = array($objRecord->getGalleryid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
