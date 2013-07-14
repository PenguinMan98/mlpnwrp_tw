<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiForumsBase
{
    protected $m_forumId;
    protected $m_name;
    protected $m_description;
    protected $m_created;
    protected $m_lastPost;
    protected $m_threads;
    protected $m_comments;
    protected $m_controlFlood;
    protected $m_floodInterval;
    protected $m_moderator;
    protected $m_hits;
    protected $m_mail;
    protected $m_useMail;
    protected $m_section;
    protected $m_usePruneUnreplied;
    protected $m_pruneUnrepliedAge;
    protected $m_usePruneOld;
    protected $m_pruneMaxAge;
    protected $m_topicsPerPage;
    protected $m_topicOrdering;
    protected $m_threadOrdering;
    protected $m_att;
    protected $m_att_store;
    protected $m_att_store_dir;
    protected $m_att_max_size;
    protected $m_att_list_nb;
    protected $m_ui_level;
    protected $m_forum_password;
    protected $m_forum_use_password;
    protected $m_moderator_group;
    protected $m_approval_type;
    protected $m_outbound_address;
    protected $m_outbound_mails_for_inbound_mails;
    protected $m_outbound_mails_reply_link;
    protected $m_outbound_from;
    protected $m_inbound_pop_server;
    protected $m_inbound_pop_port;
    protected $m_inbound_pop_user;
    protected $m_inbound_pop_password;
    protected $m_topic_smileys;
    protected $m_ui_avatar;
    protected $m_ui_flag;
    protected $m_ui_posts;
    protected $m_ui_email;
    protected $m_ui_online;
    protected $m_topic_summary;
    protected $m_show_description;
    protected $m_topics_list_replies;
    protected $m_topics_list_reads;
    protected $m_topics_list_pts;
    protected $m_topics_list_lastpost;
    protected $m_topics_list_lastpost_title;
    protected $m_topics_list_lastpost_avatar;
    protected $m_topics_list_author;
    protected $m_topics_list_author_avatar;
    protected $m_vote_threads;
    protected $m_forum_last_n;
    protected $m_threadStyle;
    protected $m_commentsPerPage;
    protected $m_is_flat;
    protected $m_mandatory_contribution;
    protected $m_forumLanguage;
    protected $m_forumId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setForumLastN(0);
        }
        return;
    }
    public function TikiForumsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getForumid()
    {
        return $this->m_forumId;
    }
    public function setForumid($value)
    {
        $this->m_forumId = $value;
        $this->setOrigForumid($value);
        return;
    }

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        return;
    }

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
        return;
    }

    public function getLastpost()
    {
        return $this->m_lastPost;
    }
    public function setLastpost($value)
    {
        $this->m_lastPost = $value;
        return;
    }

    public function getThreads()
    {
        return $this->m_threads;
    }
    public function setThreads($value)
    {
        $this->m_threads = $value;
        return;
    }

    public function getComments()
    {
        return $this->m_comments;
    }
    public function setComments($value)
    {
        $this->m_comments = $value;
        return;
    }

    public function getControlflood()
    {
        return $this->m_controlFlood;
    }
    public function setControlflood($value)
    {
        $this->m_controlFlood = $value;
        return;
    }

    public function getFloodinterval()
    {
        return $this->m_floodInterval;
    }
    public function setFloodinterval($value)
    {
        $this->m_floodInterval = $value;
        return;
    }

    public function getModerator()
    {
        return $this->m_moderator;
    }
    public function setModerator($value)
    {
        $this->m_moderator = $value;
        return;
    }

    public function getHits()
    {
        return $this->m_hits;
    }
    public function setHits($value)
    {
        $this->m_hits = $value;
        return;
    }

    public function getMail()
    {
        return $this->m_mail;
    }
    public function setMail($value)
    {
        $this->m_mail = $value;
        return;
    }

    public function getUsemail()
    {
        return $this->m_useMail;
    }
    public function setUsemail($value)
    {
        $this->m_useMail = $value;
        return;
    }

    public function getSection()
    {
        return $this->m_section;
    }
    public function setSection($value)
    {
        $this->m_section = $value;
        return;
    }

    public function getUsepruneunreplied()
    {
        return $this->m_usePruneUnreplied;
    }
    public function setUsepruneunreplied($value)
    {
        $this->m_usePruneUnreplied = $value;
        return;
    }

    public function getPruneunrepliedage()
    {
        return $this->m_pruneUnrepliedAge;
    }
    public function setPruneunrepliedage($value)
    {
        $this->m_pruneUnrepliedAge = $value;
        return;
    }

    public function getUsepruneold()
    {
        return $this->m_usePruneOld;
    }
    public function setUsepruneold($value)
    {
        $this->m_usePruneOld = $value;
        return;
    }

    public function getPrunemaxage()
    {
        return $this->m_pruneMaxAge;
    }
    public function setPrunemaxage($value)
    {
        $this->m_pruneMaxAge = $value;
        return;
    }

    public function getTopicsperpage()
    {
        return $this->m_topicsPerPage;
    }
    public function setTopicsperpage($value)
    {
        $this->m_topicsPerPage = $value;
        return;
    }

    public function getTopicordering()
    {
        return $this->m_topicOrdering;
    }
    public function setTopicordering($value)
    {
        $this->m_topicOrdering = $value;
        return;
    }

    public function getThreadordering()
    {
        return $this->m_threadOrdering;
    }
    public function setThreadordering($value)
    {
        $this->m_threadOrdering = $value;
        return;
    }

    public function getAtt()
    {
        return $this->m_att;
    }
    public function setAtt($value)
    {
        $this->m_att = $value;
        return;
    }

    public function getAttStore()
    {
        return $this->m_att_store;
    }
    public function setAttStore($value)
    {
        $this->m_att_store = $value;
        return;
    }

    public function getAttStoreDir()
    {
        return $this->m_att_store_dir;
    }
    public function setAttStoreDir($value)
    {
        $this->m_att_store_dir = $value;
        return;
    }

    public function getAttMaxSize()
    {
        return $this->m_att_max_size;
    }
    public function setAttMaxSize($value)
    {
        $this->m_att_max_size = $value;
        return;
    }

    public function getAttListNb()
    {
        return $this->m_att_list_nb;
    }
    public function setAttListNb($value)
    {
        $this->m_att_list_nb = $value;
        return;
    }

    public function getUiLevel()
    {
        return $this->m_ui_level;
    }
    public function setUiLevel($value)
    {
        $this->m_ui_level = $value;
        return;
    }

    public function getForumPassword()
    {
        return $this->m_forum_password;
    }
    public function setForumPassword($value)
    {
        $this->m_forum_password = $value;
        return;
    }

    public function getForumUsePassword()
    {
        return $this->m_forum_use_password;
    }
    public function setForumUsePassword($value)
    {
        $this->m_forum_use_password = $value;
        return;
    }

    public function getModeratorGroup()
    {
        return $this->m_moderator_group;
    }
    public function setModeratorGroup($value)
    {
        $this->m_moderator_group = $value;
        return;
    }

    public function getApprovalType()
    {
        return $this->m_approval_type;
    }
    public function setApprovalType($value)
    {
        $this->m_approval_type = $value;
        return;
    }

    public function getOutboundAddress()
    {
        return $this->m_outbound_address;
    }
    public function setOutboundAddress($value)
    {
        $this->m_outbound_address = $value;
        return;
    }

    public function getOutboundMailsForInboundMails()
    {
        return $this->m_outbound_mails_for_inbound_mails;
    }
    public function setOutboundMailsForInboundMails($value)
    {
        $this->m_outbound_mails_for_inbound_mails = $value;
        return;
    }

    public function getOutboundMailsReplyLink()
    {
        return $this->m_outbound_mails_reply_link;
    }
    public function setOutboundMailsReplyLink($value)
    {
        $this->m_outbound_mails_reply_link = $value;
        return;
    }

    public function getOutboundFrom()
    {
        return $this->m_outbound_from;
    }
    public function setOutboundFrom($value)
    {
        $this->m_outbound_from = $value;
        return;
    }

    public function getInboundPopServer()
    {
        return $this->m_inbound_pop_server;
    }
    public function setInboundPopServer($value)
    {
        $this->m_inbound_pop_server = $value;
        return;
    }

    public function getInboundPopPort()
    {
        return $this->m_inbound_pop_port;
    }
    public function setInboundPopPort($value)
    {
        $this->m_inbound_pop_port = $value;
        return;
    }

    public function getInboundPopUser()
    {
        return $this->m_inbound_pop_user;
    }
    public function setInboundPopUser($value)
    {
        $this->m_inbound_pop_user = $value;
        return;
    }

    public function getInboundPopPassword()
    {
        return $this->m_inbound_pop_password;
    }
    public function setInboundPopPassword($value)
    {
        $this->m_inbound_pop_password = $value;
        return;
    }

    public function getTopicSmileys()
    {
        return $this->m_topic_smileys;
    }
    public function setTopicSmileys($value)
    {
        $this->m_topic_smileys = $value;
        return;
    }

    public function getUiAvatar()
    {
        return $this->m_ui_avatar;
    }
    public function setUiAvatar($value)
    {
        $this->m_ui_avatar = $value;
        return;
    }

    public function getUiFlag()
    {
        return $this->m_ui_flag;
    }
    public function setUiFlag($value)
    {
        $this->m_ui_flag = $value;
        return;
    }

    public function getUiPosts()
    {
        return $this->m_ui_posts;
    }
    public function setUiPosts($value)
    {
        $this->m_ui_posts = $value;
        return;
    }

    public function getUiEmail()
    {
        return $this->m_ui_email;
    }
    public function setUiEmail($value)
    {
        $this->m_ui_email = $value;
        return;
    }

    public function getUiOnline()
    {
        return $this->m_ui_online;
    }
    public function setUiOnline($value)
    {
        $this->m_ui_online = $value;
        return;
    }

    public function getTopicSummary()
    {
        return $this->m_topic_summary;
    }
    public function setTopicSummary($value)
    {
        $this->m_topic_summary = $value;
        return;
    }

    public function getShowDescription()
    {
        return $this->m_show_description;
    }
    public function setShowDescription($value)
    {
        $this->m_show_description = $value;
        return;
    }

    public function getTopicsListReplies()
    {
        return $this->m_topics_list_replies;
    }
    public function setTopicsListReplies($value)
    {
        $this->m_topics_list_replies = $value;
        return;
    }

    public function getTopicsListReads()
    {
        return $this->m_topics_list_reads;
    }
    public function setTopicsListReads($value)
    {
        $this->m_topics_list_reads = $value;
        return;
    }

    public function getTopicsListPts()
    {
        return $this->m_topics_list_pts;
    }
    public function setTopicsListPts($value)
    {
        $this->m_topics_list_pts = $value;
        return;
    }

    public function getTopicsListLastpost()
    {
        return $this->m_topics_list_lastpost;
    }
    public function setTopicsListLastpost($value)
    {
        $this->m_topics_list_lastpost = $value;
        return;
    }

    public function getTopicsListLastpostTitle()
    {
        return $this->m_topics_list_lastpost_title;
    }
    public function setTopicsListLastpostTitle($value)
    {
        $this->m_topics_list_lastpost_title = $value;
        return;
    }

    public function getTopicsListLastpostAvatar()
    {
        return $this->m_topics_list_lastpost_avatar;
    }
    public function setTopicsListLastpostAvatar($value)
    {
        $this->m_topics_list_lastpost_avatar = $value;
        return;
    }

    public function getTopicsListAuthor()
    {
        return $this->m_topics_list_author;
    }
    public function setTopicsListAuthor($value)
    {
        $this->m_topics_list_author = $value;
        return;
    }

    public function getTopicsListAuthorAvatar()
    {
        return $this->m_topics_list_author_avatar;
    }
    public function setTopicsListAuthorAvatar($value)
    {
        $this->m_topics_list_author_avatar = $value;
        return;
    }

    public function getVoteThreads()
    {
        return $this->m_vote_threads;
    }
    public function setVoteThreads($value)
    {
        $this->m_vote_threads = $value;
        return;
    }

    public function getForumLastN()
    {
        return $this->m_forum_last_n;
    }
    public function setForumLastN($value)
    {
        $this->m_forum_last_n = $value;
        return;
    }

    public function getThreadstyle()
    {
        return $this->m_threadStyle;
    }
    public function setThreadstyle($value)
    {
        $this->m_threadStyle = $value;
        return;
    }

    public function getCommentsperpage()
    {
        return $this->m_commentsPerPage;
    }
    public function setCommentsperpage($value)
    {
        $this->m_commentsPerPage = $value;
        return;
    }

    public function getIsFlat()
    {
        return $this->m_is_flat;
    }
    public function setIsFlat($value)
    {
        $this->m_is_flat = $value;
        return;
    }

    public function getMandatoryContribution()
    {
        return $this->m_mandatory_contribution;
    }
    public function setMandatoryContribution($value)
    {
        $this->m_mandatory_contribution = $value;
        return;
    }

    public function getForumlanguage()
    {
        return $this->m_forumLanguage;
    }
    public function setForumlanguage($value)
    {
        $this->m_forumLanguage = $value;
        return;
    }

    public function getOrigForumid()
    {
        return $this->m_forumId_Orig;
    }
    public function setOrigForumid($value)
    {
        if (isset($this->m_forumId_Orig)) { return; }
        $this->m_forumId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setForumid($arrValues['forumId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setCreated($arrValues['created']);
        $this->setLastpost($arrValues['lastPost']);
        $this->setThreads($arrValues['threads']);
        $this->setComments($arrValues['comments']);
        $this->setControlflood($arrValues['controlFlood']);
        $this->setFloodinterval($arrValues['floodInterval']);
        $this->setModerator($arrValues['moderator']);
        $this->setHits($arrValues['hits']);
        $this->setMail($arrValues['mail']);
        $this->setUsemail($arrValues['useMail']);
        $this->setSection($arrValues['section']);
        $this->setUsepruneunreplied($arrValues['usePruneUnreplied']);
        $this->setPruneunrepliedage($arrValues['pruneUnrepliedAge']);
        $this->setUsepruneold($arrValues['usePruneOld']);
        $this->setPrunemaxage($arrValues['pruneMaxAge']);
        $this->setTopicsperpage($arrValues['topicsPerPage']);
        $this->setTopicordering($arrValues['topicOrdering']);
        $this->setThreadordering($arrValues['threadOrdering']);
        $this->setAtt($arrValues['att']);
        $this->setAttStore($arrValues['att_store']);
        $this->setAttStoreDir($arrValues['att_store_dir']);
        $this->setAttMaxSize($arrValues['att_max_size']);
        $this->setAttListNb($arrValues['att_list_nb']);
        $this->setUiLevel($arrValues['ui_level']);
        $this->setForumPassword($arrValues['forum_password']);
        $this->setForumUsePassword($arrValues['forum_use_password']);
        $this->setModeratorGroup($arrValues['moderator_group']);
        $this->setApprovalType($arrValues['approval_type']);
        $this->setOutboundAddress($arrValues['outbound_address']);
        $this->setOutboundMailsForInboundMails($arrValues['outbound_mails_for_inbound_mails']);
        $this->setOutboundMailsReplyLink($arrValues['outbound_mails_reply_link']);
        $this->setOutboundFrom($arrValues['outbound_from']);
        $this->setInboundPopServer($arrValues['inbound_pop_server']);
        $this->setInboundPopPort($arrValues['inbound_pop_port']);
        $this->setInboundPopUser($arrValues['inbound_pop_user']);
        $this->setInboundPopPassword($arrValues['inbound_pop_password']);
        $this->setTopicSmileys($arrValues['topic_smileys']);
        $this->setUiAvatar($arrValues['ui_avatar']);
        $this->setUiFlag($arrValues['ui_flag']);
        $this->setUiPosts($arrValues['ui_posts']);
        $this->setUiEmail($arrValues['ui_email']);
        $this->setUiOnline($arrValues['ui_online']);
        $this->setTopicSummary($arrValues['topic_summary']);
        $this->setShowDescription($arrValues['show_description']);
        $this->setTopicsListReplies($arrValues['topics_list_replies']);
        $this->setTopicsListReads($arrValues['topics_list_reads']);
        $this->setTopicsListPts($arrValues['topics_list_pts']);
        $this->setTopicsListLastpost($arrValues['topics_list_lastpost']);
        $this->setTopicsListLastpostTitle($arrValues['topics_list_lastpost_title']);
        $this->setTopicsListLastpostAvatar($arrValues['topics_list_lastpost_avatar']);
        $this->setTopicsListAuthor($arrValues['topics_list_author']);
        $this->setTopicsListAuthorAvatar($arrValues['topics_list_author_avatar']);
        $this->setVoteThreads($arrValues['vote_threads']);
        $this->setForumLastN($arrValues['forum_last_n']);
        $this->setThreadstyle($arrValues['threadStyle']);
        $this->setCommentsperpage($arrValues['commentsPerPage']);
        $this->setIsFlat($arrValues['is_flat']);
        $this->setMandatoryContribution($arrValues['mandatory_contribution']);
        $this->setForumlanguage($arrValues['forumLanguage']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'forumId':
                    $this->setForumid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'lastPost':
                    $this->setLastpost($val);
                    break;
                case 'threads':
                    $this->setThreads($val);
                    break;
                case 'comments':
                    $this->setComments($val);
                    break;
                case 'controlFlood':
                    $this->setControlflood($val);
                    break;
                case 'floodInterval':
                    $this->setFloodinterval($val);
                    break;
                case 'moderator':
                    $this->setModerator($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'mail':
                    $this->setMail($val);
                    break;
                case 'useMail':
                    $this->setUsemail($val);
                    break;
                case 'section':
                    $this->setSection($val);
                    break;
                case 'usePruneUnreplied':
                    $this->setUsepruneunreplied($val);
                    break;
                case 'pruneUnrepliedAge':
                    $this->setPruneunrepliedage($val);
                    break;
                case 'usePruneOld':
                    $this->setUsepruneold($val);
                    break;
                case 'pruneMaxAge':
                    $this->setPrunemaxage($val);
                    break;
                case 'topicsPerPage':
                    $this->setTopicsperpage($val);
                    break;
                case 'topicOrdering':
                    $this->setTopicordering($val);
                    break;
                case 'threadOrdering':
                    $this->setThreadordering($val);
                    break;
                case 'att':
                    $this->setAtt($val);
                    break;
                case 'att_store':
                    $this->setAttStore($val);
                    break;
                case 'att_store_dir':
                    $this->setAttStoreDir($val);
                    break;
                case 'att_max_size':
                    $this->setAttMaxSize($val);
                    break;
                case 'att_list_nb':
                    $this->setAttListNb($val);
                    break;
                case 'ui_level':
                    $this->setUiLevel($val);
                    break;
                case 'forum_password':
                    $this->setForumPassword($val);
                    break;
                case 'forum_use_password':
                    $this->setForumUsePassword($val);
                    break;
                case 'moderator_group':
                    $this->setModeratorGroup($val);
                    break;
                case 'approval_type':
                    $this->setApprovalType($val);
                    break;
                case 'outbound_address':
                    $this->setOutboundAddress($val);
                    break;
                case 'outbound_mails_for_inbound_mails':
                    $this->setOutboundMailsForInboundMails($val);
                    break;
                case 'outbound_mails_reply_link':
                    $this->setOutboundMailsReplyLink($val);
                    break;
                case 'outbound_from':
                    $this->setOutboundFrom($val);
                    break;
                case 'inbound_pop_server':
                    $this->setInboundPopServer($val);
                    break;
                case 'inbound_pop_port':
                    $this->setInboundPopPort($val);
                    break;
                case 'inbound_pop_user':
                    $this->setInboundPopUser($val);
                    break;
                case 'inbound_pop_password':
                    $this->setInboundPopPassword($val);
                    break;
                case 'topic_smileys':
                    $this->setTopicSmileys($val);
                    break;
                case 'ui_avatar':
                    $this->setUiAvatar($val);
                    break;
                case 'ui_flag':
                    $this->setUiFlag($val);
                    break;
                case 'ui_posts':
                    $this->setUiPosts($val);
                    break;
                case 'ui_email':
                    $this->setUiEmail($val);
                    break;
                case 'ui_online':
                    $this->setUiOnline($val);
                    break;
                case 'topic_summary':
                    $this->setTopicSummary($val);
                    break;
                case 'show_description':
                    $this->setShowDescription($val);
                    break;
                case 'topics_list_replies':
                    $this->setTopicsListReplies($val);
                    break;
                case 'topics_list_reads':
                    $this->setTopicsListReads($val);
                    break;
                case 'topics_list_pts':
                    $this->setTopicsListPts($val);
                    break;
                case 'topics_list_lastpost':
                    $this->setTopicsListLastpost($val);
                    break;
                case 'topics_list_lastpost_title':
                    $this->setTopicsListLastpostTitle($val);
                    break;
                case 'topics_list_lastpost_avatar':
                    $this->setTopicsListLastpostAvatar($val);
                    break;
                case 'topics_list_author':
                    $this->setTopicsListAuthor($val);
                    break;
                case 'topics_list_author_avatar':
                    $this->setTopicsListAuthorAvatar($val);
                    break;
                case 'vote_threads':
                    $this->setVoteThreads($val);
                    break;
                case 'forum_last_n':
                    $this->setForumLastN($val);
                    break;
                case 'threadStyle':
                    $this->setThreadstyle($val);
                    break;
                case 'commentsPerPage':
                    $this->setCommentsperpage($val);
                    break;
                case 'is_flat':
                    $this->setIsFlat($val);
                    break;
                case 'mandatory_contribution':
                    $this->setMandatoryContribution($val);
                    break;
                case 'forumLanguage':
                    $this->setForumlanguage($val);
                    break;
                default:
                    break;
            }
        }
        return;
    }

    public function getAsArray()
    {
        $arrValues = array();
        $arrValues['forumId'] = $this->getForumid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['created'] = $this->getCreated();
        $arrValues['lastPost'] = $this->getLastpost();
        $arrValues['threads'] = $this->getThreads();
        $arrValues['comments'] = $this->getComments();
        $arrValues['controlFlood'] = $this->getControlflood();
        $arrValues['floodInterval'] = $this->getFloodinterval();
        $arrValues['moderator'] = $this->getModerator();
        $arrValues['hits'] = $this->getHits();
        $arrValues['mail'] = $this->getMail();
        $arrValues['useMail'] = $this->getUsemail();
        $arrValues['section'] = $this->getSection();
        $arrValues['usePruneUnreplied'] = $this->getUsepruneunreplied();
        $arrValues['pruneUnrepliedAge'] = $this->getPruneunrepliedage();
        $arrValues['usePruneOld'] = $this->getUsepruneold();
        $arrValues['pruneMaxAge'] = $this->getPrunemaxage();
        $arrValues['topicsPerPage'] = $this->getTopicsperpage();
        $arrValues['topicOrdering'] = $this->getTopicordering();
        $arrValues['threadOrdering'] = $this->getThreadordering();
        $arrValues['att'] = $this->getAtt();
        $arrValues['att_store'] = $this->getAttStore();
        $arrValues['att_store_dir'] = $this->getAttStoreDir();
        $arrValues['att_max_size'] = $this->getAttMaxSize();
        $arrValues['att_list_nb'] = $this->getAttListNb();
        $arrValues['ui_level'] = $this->getUiLevel();
        $arrValues['forum_password'] = $this->getForumPassword();
        $arrValues['forum_use_password'] = $this->getForumUsePassword();
        $arrValues['moderator_group'] = $this->getModeratorGroup();
        $arrValues['approval_type'] = $this->getApprovalType();
        $arrValues['outbound_address'] = $this->getOutboundAddress();
        $arrValues['outbound_mails_for_inbound_mails'] = $this->getOutboundMailsForInboundMails();
        $arrValues['outbound_mails_reply_link'] = $this->getOutboundMailsReplyLink();
        $arrValues['outbound_from'] = $this->getOutboundFrom();
        $arrValues['inbound_pop_server'] = $this->getInboundPopServer();
        $arrValues['inbound_pop_port'] = $this->getInboundPopPort();
        $arrValues['inbound_pop_user'] = $this->getInboundPopUser();
        $arrValues['inbound_pop_password'] = $this->getInboundPopPassword();
        $arrValues['topic_smileys'] = $this->getTopicSmileys();
        $arrValues['ui_avatar'] = $this->getUiAvatar();
        $arrValues['ui_flag'] = $this->getUiFlag();
        $arrValues['ui_posts'] = $this->getUiPosts();
        $arrValues['ui_email'] = $this->getUiEmail();
        $arrValues['ui_online'] = $this->getUiOnline();
        $arrValues['topic_summary'] = $this->getTopicSummary();
        $arrValues['show_description'] = $this->getShowDescription();
        $arrValues['topics_list_replies'] = $this->getTopicsListReplies();
        $arrValues['topics_list_reads'] = $this->getTopicsListReads();
        $arrValues['topics_list_pts'] = $this->getTopicsListPts();
        $arrValues['topics_list_lastpost'] = $this->getTopicsListLastpost();
        $arrValues['topics_list_lastpost_title'] = $this->getTopicsListLastpostTitle();
        $arrValues['topics_list_lastpost_avatar'] = $this->getTopicsListLastpostAvatar();
        $arrValues['topics_list_author'] = $this->getTopicsListAuthor();
        $arrValues['topics_list_author_avatar'] = $this->getTopicsListAuthorAvatar();
        $arrValues['vote_threads'] = $this->getVoteThreads();
        $arrValues['forum_last_n'] = $this->getForumLastN();
        $arrValues['threadStyle'] = $this->getThreadstyle();
        $arrValues['commentsPerPage'] = $this->getCommentsperpage();
        $arrValues['is_flat'] = $this->getIsFlat();
        $arrValues['mandatory_contribution'] = $this->getMandatoryContribution();
        $arrValues['forumLanguage'] = $this->getForumlanguage();
        return $arrValues;
    }

    public function validateInsert(&$arrErrors)
    {
        return true;
    }

    public function validateUpdate(&$arrErrors)
    {
        return true;
    }
}
