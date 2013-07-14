<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiForumsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiForums($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiForums($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($forumId)
    {
        $strSql = 'SELECT * FROM `tiki_forums` WHERE forumId=?';
        $params = array($forumId);
        return Model_Data_TikiForumsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_forums` (
            forumId,
            name,
            description,
            created,
            lastPost,
            threads,
            comments,
            controlFlood,
            floodInterval,
            moderator,
            hits,
            mail,
            useMail,
            section,
            usePruneUnreplied,
            pruneUnrepliedAge,
            usePruneOld,
            pruneMaxAge,
            topicsPerPage,
            topicOrdering,
            threadOrdering,
            att,
            att_store,
            att_store_dir,
            att_max_size,
            att_list_nb,
            ui_level,
            forum_password,
            forum_use_password,
            moderator_group,
            approval_type,
            outbound_address,
            outbound_mails_for_inbound_mails,
            outbound_mails_reply_link,
            outbound_from,
            inbound_pop_server,
            inbound_pop_port,
            inbound_pop_user,
            inbound_pop_password,
            topic_smileys,
            ui_avatar,
            ui_flag,
            ui_posts,
            ui_email,
            ui_online,
            topic_summary,
            show_description,
            topics_list_replies,
            topics_list_reads,
            topics_list_pts,
            topics_list_lastpost,
            topics_list_lastpost_title,
            topics_list_lastpost_avatar,
            topics_list_author,
            topics_list_author_avatar,
            vote_threads,
            forum_last_n,
            threadStyle,
            commentsPerPage,
            is_flat,
            mandatory_contribution,
            forumLanguage
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getLastpost(),
            $objRecord->getThreads(),
            $objRecord->getComments(),
            $objRecord->getControlflood(),
            $objRecord->getFloodinterval(),
            $objRecord->getModerator(),
            $objRecord->getHits(),
            $objRecord->getMail(),
            $objRecord->getUsemail(),
            $objRecord->getSection(),
            $objRecord->getUsepruneunreplied(),
            $objRecord->getPruneunrepliedage(),
            $objRecord->getUsepruneold(),
            $objRecord->getPrunemaxage(),
            $objRecord->getTopicsperpage(),
            $objRecord->getTopicordering(),
            $objRecord->getThreadordering(),
            $objRecord->getAtt(),
            $objRecord->getAttStore(),
            $objRecord->getAttStoreDir(),
            $objRecord->getAttMaxSize(),
            $objRecord->getAttListNb(),
            $objRecord->getUiLevel(),
            $objRecord->getForumPassword(),
            $objRecord->getForumUsePassword(),
            $objRecord->getModeratorGroup(),
            $objRecord->getApprovalType(),
            $objRecord->getOutboundAddress(),
            $objRecord->getOutboundMailsForInboundMails(),
            $objRecord->getOutboundMailsReplyLink(),
            $objRecord->getOutboundFrom(),
            $objRecord->getInboundPopServer(),
            $objRecord->getInboundPopPort(),
            $objRecord->getInboundPopUser(),
            $objRecord->getInboundPopPassword(),
            $objRecord->getTopicSmileys(),
            $objRecord->getUiAvatar(),
            $objRecord->getUiFlag(),
            $objRecord->getUiPosts(),
            $objRecord->getUiEmail(),
            $objRecord->getUiOnline(),
            $objRecord->getTopicSummary(),
            $objRecord->getShowDescription(),
            $objRecord->getTopicsListReplies(),
            $objRecord->getTopicsListReads(),
            $objRecord->getTopicsListPts(),
            $objRecord->getTopicsListLastpost(),
            $objRecord->getTopicsListLastpostTitle(),
            $objRecord->getTopicsListLastpostAvatar(),
            $objRecord->getTopicsListAuthor(),
            $objRecord->getTopicsListAuthorAvatar(),
            $objRecord->getVoteThreads(),
            $objRecord->getForumLastN(),
            $objRecord->getThreadstyle(),
            $objRecord->getCommentsperpage(),
            $objRecord->getIsFlat(),
            $objRecord->getMandatoryContribution(),
            $objRecord->getForumlanguage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setForumid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_forums` (
            forumId,
            name,
            description,
            created,
            lastPost,
            threads,
            comments,
            controlFlood,
            floodInterval,
            moderator,
            hits,
            mail,
            useMail,
            section,
            usePruneUnreplied,
            pruneUnrepliedAge,
            usePruneOld,
            pruneMaxAge,
            topicsPerPage,
            topicOrdering,
            threadOrdering,
            att,
            att_store,
            att_store_dir,
            att_max_size,
            att_list_nb,
            ui_level,
            forum_password,
            forum_use_password,
            moderator_group,
            approval_type,
            outbound_address,
            outbound_mails_for_inbound_mails,
            outbound_mails_reply_link,
            outbound_from,
            inbound_pop_server,
            inbound_pop_port,
            inbound_pop_user,
            inbound_pop_password,
            topic_smileys,
            ui_avatar,
            ui_flag,
            ui_posts,
            ui_email,
            ui_online,
            topic_summary,
            show_description,
            topics_list_replies,
            topics_list_reads,
            topics_list_pts,
            topics_list_lastpost,
            topics_list_lastpost_title,
            topics_list_lastpost_avatar,
            topics_list_author,
            topics_list_author_avatar,
            vote_threads,
            forum_last_n,
            threadStyle,
            commentsPerPage,
            is_flat,
            mandatory_contribution,
            forumLanguage
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getLastpost(),
            $objRecord->getThreads(),
            $objRecord->getComments(),
            $objRecord->getControlflood(),
            $objRecord->getFloodinterval(),
            $objRecord->getModerator(),
            $objRecord->getHits(),
            $objRecord->getMail(),
            $objRecord->getUsemail(),
            $objRecord->getSection(),
            $objRecord->getUsepruneunreplied(),
            $objRecord->getPruneunrepliedage(),
            $objRecord->getUsepruneold(),
            $objRecord->getPrunemaxage(),
            $objRecord->getTopicsperpage(),
            $objRecord->getTopicordering(),
            $objRecord->getThreadordering(),
            $objRecord->getAtt(),
            $objRecord->getAttStore(),
            $objRecord->getAttStoreDir(),
            $objRecord->getAttMaxSize(),
            $objRecord->getAttListNb(),
            $objRecord->getUiLevel(),
            $objRecord->getForumPassword(),
            $objRecord->getForumUsePassword(),
            $objRecord->getModeratorGroup(),
            $objRecord->getApprovalType(),
            $objRecord->getOutboundAddress(),
            $objRecord->getOutboundMailsForInboundMails(),
            $objRecord->getOutboundMailsReplyLink(),
            $objRecord->getOutboundFrom(),
            $objRecord->getInboundPopServer(),
            $objRecord->getInboundPopPort(),
            $objRecord->getInboundPopUser(),
            $objRecord->getInboundPopPassword(),
            $objRecord->getTopicSmileys(),
            $objRecord->getUiAvatar(),
            $objRecord->getUiFlag(),
            $objRecord->getUiPosts(),
            $objRecord->getUiEmail(),
            $objRecord->getUiOnline(),
            $objRecord->getTopicSummary(),
            $objRecord->getShowDescription(),
            $objRecord->getTopicsListReplies(),
            $objRecord->getTopicsListReads(),
            $objRecord->getTopicsListPts(),
            $objRecord->getTopicsListLastpost(),
            $objRecord->getTopicsListLastpostTitle(),
            $objRecord->getTopicsListLastpostAvatar(),
            $objRecord->getTopicsListAuthor(),
            $objRecord->getTopicsListAuthorAvatar(),
            $objRecord->getVoteThreads(),
            $objRecord->getForumLastN(),
            $objRecord->getThreadstyle(),
            $objRecord->getCommentsperpage(),
            $objRecord->getIsFlat(),
            $objRecord->getMandatoryContribution(),
            $objRecord->getForumlanguage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setForumid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_forums` SET 
            forumId=?,
            name=?,
            description=?,
            created=?,
            lastPost=?,
            threads=?,
            comments=?,
            controlFlood=?,
            floodInterval=?,
            moderator=?,
            hits=?,
            mail=?,
            useMail=?,
            section=?,
            usePruneUnreplied=?,
            pruneUnrepliedAge=?,
            usePruneOld=?,
            pruneMaxAge=?,
            topicsPerPage=?,
            topicOrdering=?,
            threadOrdering=?,
            att=?,
            att_store=?,
            att_store_dir=?,
            att_max_size=?,
            att_list_nb=?,
            ui_level=?,
            forum_password=?,
            forum_use_password=?,
            moderator_group=?,
            approval_type=?,
            outbound_address=?,
            outbound_mails_for_inbound_mails=?,
            outbound_mails_reply_link=?,
            outbound_from=?,
            inbound_pop_server=?,
            inbound_pop_port=?,
            inbound_pop_user=?,
            inbound_pop_password=?,
            topic_smileys=?,
            ui_avatar=?,
            ui_flag=?,
            ui_posts=?,
            ui_email=?,
            ui_online=?,
            topic_summary=?,
            show_description=?,
            topics_list_replies=?,
            topics_list_reads=?,
            topics_list_pts=?,
            topics_list_lastpost=?,
            topics_list_lastpost_title=?,
            topics_list_lastpost_avatar=?,
            topics_list_author=?,
            topics_list_author_avatar=?,
            vote_threads=?,
            forum_last_n=?,
            threadStyle=?,
            commentsPerPage=?,
            is_flat=?,
            mandatory_contribution=?,
            forumLanguage=?
        WHERE forumId=?';
        $arrSetParams = array(
            $objRecord->getForumid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getCreated(),
            $objRecord->getLastpost(),
            $objRecord->getThreads(),
            $objRecord->getComments(),
            $objRecord->getControlflood(),
            $objRecord->getFloodinterval(),
            $objRecord->getModerator(),
            $objRecord->getHits(),
            $objRecord->getMail(),
            $objRecord->getUsemail(),
            $objRecord->getSection(),
            $objRecord->getUsepruneunreplied(),
            $objRecord->getPruneunrepliedage(),
            $objRecord->getUsepruneold(),
            $objRecord->getPrunemaxage(),
            $objRecord->getTopicsperpage(),
            $objRecord->getTopicordering(),
            $objRecord->getThreadordering(),
            $objRecord->getAtt(),
            $objRecord->getAttStore(),
            $objRecord->getAttStoreDir(),
            $objRecord->getAttMaxSize(),
            $objRecord->getAttListNb(),
            $objRecord->getUiLevel(),
            $objRecord->getForumPassword(),
            $objRecord->getForumUsePassword(),
            $objRecord->getModeratorGroup(),
            $objRecord->getApprovalType(),
            $objRecord->getOutboundAddress(),
            $objRecord->getOutboundMailsForInboundMails(),
            $objRecord->getOutboundMailsReplyLink(),
            $objRecord->getOutboundFrom(),
            $objRecord->getInboundPopServer(),
            $objRecord->getInboundPopPort(),
            $objRecord->getInboundPopUser(),
            $objRecord->getInboundPopPassword(),
            $objRecord->getTopicSmileys(),
            $objRecord->getUiAvatar(),
            $objRecord->getUiFlag(),
            $objRecord->getUiPosts(),
            $objRecord->getUiEmail(),
            $objRecord->getUiOnline(),
            $objRecord->getTopicSummary(),
            $objRecord->getShowDescription(),
            $objRecord->getTopicsListReplies(),
            $objRecord->getTopicsListReads(),
            $objRecord->getTopicsListPts(),
            $objRecord->getTopicsListLastpost(),
            $objRecord->getTopicsListLastpostTitle(),
            $objRecord->getTopicsListLastpostAvatar(),
            $objRecord->getTopicsListAuthor(),
            $objRecord->getTopicsListAuthorAvatar(),
            $objRecord->getVoteThreads(),
            $objRecord->getForumLastN(),
            $objRecord->getThreadstyle(),
            $objRecord->getCommentsperpage(),
            $objRecord->getIsFlat(),
            $objRecord->getMandatoryContribution(),
            $objRecord->getForumlanguage()
        );
        $arrKeyParams = array($objRecord->getOrigForumid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_forums` WHERE forumId=?';
        $params = array($objRecord->getForumid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
