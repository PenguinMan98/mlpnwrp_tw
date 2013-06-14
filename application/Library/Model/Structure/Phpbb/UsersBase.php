<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_Phpbb_UsersBase
{
    protected $m_user_id;
    protected $m_user_type;
    protected $m_group_id;
    protected $m_user_permissions;
    protected $m_user_perm_from;
    protected $m_user_ip;
    protected $m_user_regdate;
    protected $m_username;
    protected $m_username_clean;
    protected $m_user_password;
    protected $m_user_passchg;
    protected $m_user_pass_convert;
    protected $m_user_email;
    protected $m_user_email_hash;
    protected $m_user_birthday;
    protected $m_user_lastvisit;
    protected $m_user_lastmark;
    protected $m_user_lastpost_time;
    protected $m_user_lastpage;
    protected $m_user_last_confirm_key;
    protected $m_user_last_search;
    protected $m_user_warnings;
    protected $m_user_last_warning;
    protected $m_user_login_attempts;
    protected $m_user_inactive_reason;
    protected $m_user_inactive_time;
    protected $m_user_posts;
    protected $m_user_lang;
    protected $m_user_timezone;
    protected $m_user_dst;
    protected $m_user_dateformat;
    protected $m_user_style;
    protected $m_user_rank;
    protected $m_user_colour;
    protected $m_user_new_privmsg;
    protected $m_user_unread_privmsg;
    protected $m_user_last_privmsg;
    protected $m_user_message_rules;
    protected $m_user_full_folder;
    protected $m_user_emailtime;
    protected $m_user_topic_show_days;
    protected $m_user_topic_sortby_type;
    protected $m_user_topic_sortby_dir;
    protected $m_user_post_show_days;
    protected $m_user_post_sortby_type;
    protected $m_user_post_sortby_dir;
    protected $m_user_notify;
    protected $m_user_notify_pm;
    protected $m_user_notify_type;
    protected $m_user_allow_pm;
    protected $m_user_allow_viewonline;
    protected $m_user_allow_viewemail;
    protected $m_user_allow_massemail;
    protected $m_user_options;
    protected $m_user_avatar;
    protected $m_user_avatar_type;
    protected $m_user_avatar_width;
    protected $m_user_avatar_height;
    protected $m_user_sig;
    protected $m_user_sig_bbcode_uid;
    protected $m_user_sig_bbcode_bitfield;
    protected $m_user_from;
    protected $m_user_icq;
    protected $m_user_aim;
    protected $m_user_yim;
    protected $m_user_msnm;
    protected $m_user_jabber;
    protected $m_user_website;
    protected $m_user_occ;
    protected $m_user_interests;
    protected $m_user_actkey;
    protected $m_user_newpasswd;
    protected $m_user_form_salt;
    protected $m_user_new;
    protected $m_user_reminded;
    protected $m_user_reminded_time;
    protected $m_user_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUserType(0);
            $this->setGroupId(3);
            $this->setUserPermFrom(0);
            $this->setUserIp('');
            $this->setUserRegdate(0);
            $this->setUsername('');
            $this->setUsernameClean('');
            $this->setUserPassword('');
            $this->setUserPasschg(0);
            $this->setUserPassConvert(0);
            $this->setUserEmail('');
            $this->setUserEmailHash(0);
            $this->setUserBirthday('');
            $this->setUserLastvisit(0);
            $this->setUserLastmark(0);
            $this->setUserLastpostTime(0);
            $this->setUserLastpage('');
            $this->setUserLastConfirmKey('');
            $this->setUserLastSearch(0);
            $this->setUserWarnings(0);
            $this->setUserLastWarning(0);
            $this->setUserLoginAttempts(0);
            $this->setUserInactiveReason(0);
            $this->setUserInactiveTime(0);
            $this->setUserPosts(0);
            $this->setUserLang('');
            $this->setUserTimezone(0.00);
            $this->setUserDst(0);
            $this->setUserDateformat('d M Y H:i');
            $this->setUserStyle(0);
            $this->setUserRank(0);
            $this->setUserColour('');
            $this->setUserNewPrivmsg(0);
            $this->setUserUnreadPrivmsg(0);
            $this->setUserLastPrivmsg(0);
            $this->setUserMessageRules(0);
            $this->setUserFullFolder(-3);
            $this->setUserEmailtime(0);
            $this->setUserTopicShowDays(0);
            $this->setUserTopicSortbyType('t');
            $this->setUserTopicSortbyDir('d');
            $this->setUserPostShowDays(0);
            $this->setUserPostSortbyType('t');
            $this->setUserPostSortbyDir('a');
            $this->setUserNotify(0);
            $this->setUserNotifyPm(1);
            $this->setUserNotifyType(0);
            $this->setUserAllowPm(1);
            $this->setUserAllowViewonline(1);
            $this->setUserAllowViewemail(1);
            $this->setUserAllowMassemail(1);
            $this->setUserOptions(230271);
            $this->setUserAvatar('');
            $this->setUserAvatarType(0);
            $this->setUserAvatarWidth(0);
            $this->setUserAvatarHeight(0);
            $this->setUserSigBbcodeUid('');
            $this->setUserSigBbcodeBitfield('');
            $this->setUserFrom('');
            $this->setUserIcq('');
            $this->setUserAim('');
            $this->setUserYim('');
            $this->setUserMsnm('');
            $this->setUserJabber('');
            $this->setUserWebsite('');
            $this->setUserActkey('');
            $this->setUserNewpasswd('');
            $this->setUserFormSalt('');
            $this->setUserNew(1);
            $this->setUserReminded(0);
            $this->setUserRemindedTime(0);
        }
        return;
    }
    public function UsersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUserId()
    {
        return $this->m_user_id;
    }
    public function setUserId($value)
    {
        $this->m_user_id = $value;
        $this->setOrigUserId($value);
        return;
    }

    public function getUserType()
    {
        return $this->m_user_type;
    }
    public function setUserType($value)
    {
        $this->m_user_type = $value;
        return;
    }

    public function getGroupId()
    {
        return $this->m_group_id;
    }
    public function setGroupId($value)
    {
        $this->m_group_id = $value;
        return;
    }

    public function getUserPermissions()
    {
        return $this->m_user_permissions;
    }
    public function setUserPermissions($value)
    {
        $this->m_user_permissions = $value;
        return;
    }

    public function getUserPermFrom()
    {
        return $this->m_user_perm_from;
    }
    public function setUserPermFrom($value)
    {
        $this->m_user_perm_from = $value;
        return;
    }

    public function getUserIp()
    {
        return $this->m_user_ip;
    }
    public function setUserIp($value)
    {
        $this->m_user_ip = $value;
        return;
    }

    public function getUserRegdate()
    {
        return $this->m_user_regdate;
    }
    public function setUserRegdate($value)
    {
        $this->m_user_regdate = $value;
        return;
    }

    public function getUsername()
    {
        return $this->m_username;
    }
    public function setUsername($value)
    {
        $this->m_username = $value;
        return;
    }

    public function getUsernameClean()
    {
        return $this->m_username_clean;
    }
    public function setUsernameClean($value)
    {
        $this->m_username_clean = $value;
        return;
    }

    public function getUserPassword()
    {
        return $this->m_user_password;
    }
    public function setUserPassword($value)
    {
        $this->m_user_password = $value;
        return;
    }

    public function getUserPasschg()
    {
        return $this->m_user_passchg;
    }
    public function setUserPasschg($value)
    {
        $this->m_user_passchg = $value;
        return;
    }

    public function getUserPassConvert()
    {
        return $this->m_user_pass_convert;
    }
    public function setUserPassConvert($value)
    {
        $this->m_user_pass_convert = $value;
        return;
    }

    public function getUserEmail()
    {
        return $this->m_user_email;
    }
    public function setUserEmail($value)
    {
        $this->m_user_email = $value;
        return;
    }

    public function getUserEmailHash()
    {
        return $this->m_user_email_hash;
    }
    public function setUserEmailHash($value)
    {
        $this->m_user_email_hash = $value;
        return;
    }

    public function getUserBirthday()
    {
        return $this->m_user_birthday;
    }
    public function setUserBirthday($value)
    {
        $this->m_user_birthday = $value;
        return;
    }

    public function getUserLastvisit()
    {
        return $this->m_user_lastvisit;
    }
    public function setUserLastvisit($value)
    {
        $this->m_user_lastvisit = $value;
        return;
    }

    public function getUserLastmark()
    {
        return $this->m_user_lastmark;
    }
    public function setUserLastmark($value)
    {
        $this->m_user_lastmark = $value;
        return;
    }

    public function getUserLastpostTime()
    {
        return $this->m_user_lastpost_time;
    }
    public function setUserLastpostTime($value)
    {
        $this->m_user_lastpost_time = $value;
        return;
    }

    public function getUserLastpage()
    {
        return $this->m_user_lastpage;
    }
    public function setUserLastpage($value)
    {
        $this->m_user_lastpage = $value;
        return;
    }

    public function getUserLastConfirmKey()
    {
        return $this->m_user_last_confirm_key;
    }
    public function setUserLastConfirmKey($value)
    {
        $this->m_user_last_confirm_key = $value;
        return;
    }

    public function getUserLastSearch()
    {
        return $this->m_user_last_search;
    }
    public function setUserLastSearch($value)
    {
        $this->m_user_last_search = $value;
        return;
    }

    public function getUserWarnings()
    {
        return $this->m_user_warnings;
    }
    public function setUserWarnings($value)
    {
        $this->m_user_warnings = $value;
        return;
    }

    public function getUserLastWarning()
    {
        return $this->m_user_last_warning;
    }
    public function setUserLastWarning($value)
    {
        $this->m_user_last_warning = $value;
        return;
    }

    public function getUserLoginAttempts()
    {
        return $this->m_user_login_attempts;
    }
    public function setUserLoginAttempts($value)
    {
        $this->m_user_login_attempts = $value;
        return;
    }

    public function getUserInactiveReason()
    {
        return $this->m_user_inactive_reason;
    }
    public function setUserInactiveReason($value)
    {
        $this->m_user_inactive_reason = $value;
        return;
    }

    public function getUserInactiveTime()
    {
        return $this->m_user_inactive_time;
    }
    public function setUserInactiveTime($value)
    {
        $this->m_user_inactive_time = $value;
        return;
    }

    public function getUserPosts()
    {
        return $this->m_user_posts;
    }
    public function setUserPosts($value)
    {
        $this->m_user_posts = $value;
        return;
    }

    public function getUserLang()
    {
        return $this->m_user_lang;
    }
    public function setUserLang($value)
    {
        $this->m_user_lang = $value;
        return;
    }

    public function getUserTimezone()
    {
        return $this->m_user_timezone;
    }
    public function setUserTimezone($value)
    {
        $this->m_user_timezone = $value;
        return;
    }

    public function getUserDst()
    {
        return $this->m_user_dst;
    }
    public function setUserDst($value)
    {
        $this->m_user_dst = $value;
        return;
    }

    public function getUserDateformat()
    {
        return $this->m_user_dateformat;
    }
    public function setUserDateformat($value)
    {
        $this->m_user_dateformat = $value;
        return;
    }

    public function getUserStyle()
    {
        return $this->m_user_style;
    }
    public function setUserStyle($value)
    {
        $this->m_user_style = $value;
        return;
    }

    public function getUserRank()
    {
        return $this->m_user_rank;
    }
    public function setUserRank($value)
    {
        $this->m_user_rank = $value;
        return;
    }

    public function getUserColour()
    {
        return $this->m_user_colour;
    }
    public function setUserColour($value)
    {
        $this->m_user_colour = $value;
        return;
    }

    public function getUserNewPrivmsg()
    {
        return $this->m_user_new_privmsg;
    }
    public function setUserNewPrivmsg($value)
    {
        $this->m_user_new_privmsg = $value;
        return;
    }

    public function getUserUnreadPrivmsg()
    {
        return $this->m_user_unread_privmsg;
    }
    public function setUserUnreadPrivmsg($value)
    {
        $this->m_user_unread_privmsg = $value;
        return;
    }

    public function getUserLastPrivmsg()
    {
        return $this->m_user_last_privmsg;
    }
    public function setUserLastPrivmsg($value)
    {
        $this->m_user_last_privmsg = $value;
        return;
    }

    public function getUserMessageRules()
    {
        return $this->m_user_message_rules;
    }
    public function setUserMessageRules($value)
    {
        $this->m_user_message_rules = $value;
        return;
    }

    public function getUserFullFolder()
    {
        return $this->m_user_full_folder;
    }
    public function setUserFullFolder($value)
    {
        $this->m_user_full_folder = $value;
        return;
    }

    public function getUserEmailtime()
    {
        return $this->m_user_emailtime;
    }
    public function setUserEmailtime($value)
    {
        $this->m_user_emailtime = $value;
        return;
    }

    public function getUserTopicShowDays()
    {
        return $this->m_user_topic_show_days;
    }
    public function setUserTopicShowDays($value)
    {
        $this->m_user_topic_show_days = $value;
        return;
    }

    public function getUserTopicSortbyType()
    {
        return $this->m_user_topic_sortby_type;
    }
    public function setUserTopicSortbyType($value)
    {
        $this->m_user_topic_sortby_type = $value;
        return;
    }

    public function getUserTopicSortbyDir()
    {
        return $this->m_user_topic_sortby_dir;
    }
    public function setUserTopicSortbyDir($value)
    {
        $this->m_user_topic_sortby_dir = $value;
        return;
    }

    public function getUserPostShowDays()
    {
        return $this->m_user_post_show_days;
    }
    public function setUserPostShowDays($value)
    {
        $this->m_user_post_show_days = $value;
        return;
    }

    public function getUserPostSortbyType()
    {
        return $this->m_user_post_sortby_type;
    }
    public function setUserPostSortbyType($value)
    {
        $this->m_user_post_sortby_type = $value;
        return;
    }

    public function getUserPostSortbyDir()
    {
        return $this->m_user_post_sortby_dir;
    }
    public function setUserPostSortbyDir($value)
    {
        $this->m_user_post_sortby_dir = $value;
        return;
    }

    public function getUserNotify()
    {
        return $this->m_user_notify;
    }
    public function setUserNotify($value)
    {
        $this->m_user_notify = $value;
        return;
    }

    public function getUserNotifyPm()
    {
        return $this->m_user_notify_pm;
    }
    public function setUserNotifyPm($value)
    {
        $this->m_user_notify_pm = $value;
        return;
    }

    public function getUserNotifyType()
    {
        return $this->m_user_notify_type;
    }
    public function setUserNotifyType($value)
    {
        $this->m_user_notify_type = $value;
        return;
    }

    public function getUserAllowPm()
    {
        return $this->m_user_allow_pm;
    }
    public function setUserAllowPm($value)
    {
        $this->m_user_allow_pm = $value;
        return;
    }

    public function getUserAllowViewonline()
    {
        return $this->m_user_allow_viewonline;
    }
    public function setUserAllowViewonline($value)
    {
        $this->m_user_allow_viewonline = $value;
        return;
    }

    public function getUserAllowViewemail()
    {
        return $this->m_user_allow_viewemail;
    }
    public function setUserAllowViewemail($value)
    {
        $this->m_user_allow_viewemail = $value;
        return;
    }

    public function getUserAllowMassemail()
    {
        return $this->m_user_allow_massemail;
    }
    public function setUserAllowMassemail($value)
    {
        $this->m_user_allow_massemail = $value;
        return;
    }

    public function getUserOptions()
    {
        return $this->m_user_options;
    }
    public function setUserOptions($value)
    {
        $this->m_user_options = $value;
        return;
    }

    public function getUserAvatar()
    {
        return $this->m_user_avatar;
    }
    public function setUserAvatar($value)
    {
        $this->m_user_avatar = $value;
        return;
    }

    public function getUserAvatarType()
    {
        return $this->m_user_avatar_type;
    }
    public function setUserAvatarType($value)
    {
        $this->m_user_avatar_type = $value;
        return;
    }

    public function getUserAvatarWidth()
    {
        return $this->m_user_avatar_width;
    }
    public function setUserAvatarWidth($value)
    {
        $this->m_user_avatar_width = $value;
        return;
    }

    public function getUserAvatarHeight()
    {
        return $this->m_user_avatar_height;
    }
    public function setUserAvatarHeight($value)
    {
        $this->m_user_avatar_height = $value;
        return;
    }

    public function getUserSig()
    {
        return $this->m_user_sig;
    }
    public function setUserSig($value)
    {
        $this->m_user_sig = $value;
        return;
    }

    public function getUserSigBbcodeUid()
    {
        return $this->m_user_sig_bbcode_uid;
    }
    public function setUserSigBbcodeUid($value)
    {
        $this->m_user_sig_bbcode_uid = $value;
        return;
    }

    public function getUserSigBbcodeBitfield()
    {
        return $this->m_user_sig_bbcode_bitfield;
    }
    public function setUserSigBbcodeBitfield($value)
    {
        $this->m_user_sig_bbcode_bitfield = $value;
        return;
    }

    public function getUserFrom()
    {
        return $this->m_user_from;
    }
    public function setUserFrom($value)
    {
        $this->m_user_from = $value;
        return;
    }

    public function getUserIcq()
    {
        return $this->m_user_icq;
    }
    public function setUserIcq($value)
    {
        $this->m_user_icq = $value;
        return;
    }

    public function getUserAim()
    {
        return $this->m_user_aim;
    }
    public function setUserAim($value)
    {
        $this->m_user_aim = $value;
        return;
    }

    public function getUserYim()
    {
        return $this->m_user_yim;
    }
    public function setUserYim($value)
    {
        $this->m_user_yim = $value;
        return;
    }

    public function getUserMsnm()
    {
        return $this->m_user_msnm;
    }
    public function setUserMsnm($value)
    {
        $this->m_user_msnm = $value;
        return;
    }

    public function getUserJabber()
    {
        return $this->m_user_jabber;
    }
    public function setUserJabber($value)
    {
        $this->m_user_jabber = $value;
        return;
    }

    public function getUserWebsite()
    {
        return $this->m_user_website;
    }
    public function setUserWebsite($value)
    {
        $this->m_user_website = $value;
        return;
    }

    public function getUserOcc()
    {
        return $this->m_user_occ;
    }
    public function setUserOcc($value)
    {
        $this->m_user_occ = $value;
        return;
    }

    public function getUserInterests()
    {
        return $this->m_user_interests;
    }
    public function setUserInterests($value)
    {
        $this->m_user_interests = $value;
        return;
    }

    public function getUserActkey()
    {
        return $this->m_user_actkey;
    }
    public function setUserActkey($value)
    {
        $this->m_user_actkey = $value;
        return;
    }

    public function getUserNewpasswd()
    {
        return $this->m_user_newpasswd;
    }
    public function setUserNewpasswd($value)
    {
        $this->m_user_newpasswd = $value;
        return;
    }

    public function getUserFormSalt()
    {
        return $this->m_user_form_salt;
    }
    public function setUserFormSalt($value)
    {
        $this->m_user_form_salt = $value;
        return;
    }

    public function getUserNew()
    {
        return $this->m_user_new;
    }
    public function setUserNew($value)
    {
        $this->m_user_new = $value;
        return;
    }

    public function getUserReminded()
    {
        return $this->m_user_reminded;
    }
    public function setUserReminded($value)
    {
        $this->m_user_reminded = $value;
        return;
    }

    public function getUserRemindedTime()
    {
        return $this->m_user_reminded_time;
    }
    public function setUserRemindedTime($value)
    {
        $this->m_user_reminded_time = $value;
        return;
    }

    public function getOrigUserId()
    {
        return $this->m_user_id_Orig;
    }
    public function setOrigUserId($value)
    {
        if (isset($this->m_user_id_Orig)) { return; }
        $this->m_user_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUserId($arrValues['user_id']);
        $this->setUserType($arrValues['user_type']);
        $this->setGroupId($arrValues['group_id']);
        $this->setUserPermissions($arrValues['user_permissions']);
        $this->setUserPermFrom($arrValues['user_perm_from']);
        $this->setUserIp($arrValues['user_ip']);
        $this->setUserRegdate($arrValues['user_regdate']);
        $this->setUsername($arrValues['username']);
        $this->setUsernameClean($arrValues['username_clean']);
        $this->setUserPassword($arrValues['user_password']);
        $this->setUserPasschg($arrValues['user_passchg']);
        $this->setUserPassConvert($arrValues['user_pass_convert']);
        $this->setUserEmail($arrValues['user_email']);
        $this->setUserEmailHash($arrValues['user_email_hash']);
        $this->setUserBirthday($arrValues['user_birthday']);
        $this->setUserLastvisit($arrValues['user_lastvisit']);
        $this->setUserLastmark($arrValues['user_lastmark']);
        $this->setUserLastpostTime($arrValues['user_lastpost_time']);
        $this->setUserLastpage($arrValues['user_lastpage']);
        $this->setUserLastConfirmKey($arrValues['user_last_confirm_key']);
        $this->setUserLastSearch($arrValues['user_last_search']);
        $this->setUserWarnings($arrValues['user_warnings']);
        $this->setUserLastWarning($arrValues['user_last_warning']);
        $this->setUserLoginAttempts($arrValues['user_login_attempts']);
        $this->setUserInactiveReason($arrValues['user_inactive_reason']);
        $this->setUserInactiveTime($arrValues['user_inactive_time']);
        $this->setUserPosts($arrValues['user_posts']);
        $this->setUserLang($arrValues['user_lang']);
        $this->setUserTimezone($arrValues['user_timezone']);
        $this->setUserDst($arrValues['user_dst']);
        $this->setUserDateformat($arrValues['user_dateformat']);
        $this->setUserStyle($arrValues['user_style']);
        $this->setUserRank($arrValues['user_rank']);
        $this->setUserColour($arrValues['user_colour']);
        $this->setUserNewPrivmsg($arrValues['user_new_privmsg']);
        $this->setUserUnreadPrivmsg($arrValues['user_unread_privmsg']);
        $this->setUserLastPrivmsg($arrValues['user_last_privmsg']);
        $this->setUserMessageRules($arrValues['user_message_rules']);
        $this->setUserFullFolder($arrValues['user_full_folder']);
        $this->setUserEmailtime($arrValues['user_emailtime']);
        $this->setUserTopicShowDays($arrValues['user_topic_show_days']);
        $this->setUserTopicSortbyType($arrValues['user_topic_sortby_type']);
        $this->setUserTopicSortbyDir($arrValues['user_topic_sortby_dir']);
        $this->setUserPostShowDays($arrValues['user_post_show_days']);
        $this->setUserPostSortbyType($arrValues['user_post_sortby_type']);
        $this->setUserPostSortbyDir($arrValues['user_post_sortby_dir']);
        $this->setUserNotify($arrValues['user_notify']);
        $this->setUserNotifyPm($arrValues['user_notify_pm']);
        $this->setUserNotifyType($arrValues['user_notify_type']);
        $this->setUserAllowPm($arrValues['user_allow_pm']);
        $this->setUserAllowViewonline($arrValues['user_allow_viewonline']);
        $this->setUserAllowViewemail($arrValues['user_allow_viewemail']);
        $this->setUserAllowMassemail($arrValues['user_allow_massemail']);
        $this->setUserOptions($arrValues['user_options']);
        $this->setUserAvatar($arrValues['user_avatar']);
        $this->setUserAvatarType($arrValues['user_avatar_type']);
        $this->setUserAvatarWidth($arrValues['user_avatar_width']);
        $this->setUserAvatarHeight($arrValues['user_avatar_height']);
        $this->setUserSig($arrValues['user_sig']);
        $this->setUserSigBbcodeUid($arrValues['user_sig_bbcode_uid']);
        $this->setUserSigBbcodeBitfield($arrValues['user_sig_bbcode_bitfield']);
        $this->setUserFrom($arrValues['user_from']);
        $this->setUserIcq($arrValues['user_icq']);
        $this->setUserAim($arrValues['user_aim']);
        $this->setUserYim($arrValues['user_yim']);
        $this->setUserMsnm($arrValues['user_msnm']);
        $this->setUserJabber($arrValues['user_jabber']);
        $this->setUserWebsite($arrValues['user_website']);
        $this->setUserOcc($arrValues['user_occ']);
        $this->setUserInterests($arrValues['user_interests']);
        $this->setUserActkey($arrValues['user_actkey']);
        $this->setUserNewpasswd($arrValues['user_newpasswd']);
        $this->setUserFormSalt($arrValues['user_form_salt']);
        $this->setUserNew($arrValues['user_new']);
        $this->setUserReminded($arrValues['user_reminded']);
        $this->setUserRemindedTime($arrValues['user_reminded_time']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'user_type':
                    $this->setUserType($val);
                    break;
                case 'group_id':
                    $this->setGroupId($val);
                    break;
                case 'user_permissions':
                    $this->setUserPermissions($val);
                    break;
                case 'user_perm_from':
                    $this->setUserPermFrom($val);
                    break;
                case 'user_ip':
                    $this->setUserIp($val);
                    break;
                case 'user_regdate':
                    $this->setUserRegdate($val);
                    break;
                case 'username':
                    $this->setUsername($val);
                    break;
                case 'username_clean':
                    $this->setUsernameClean($val);
                    break;
                case 'user_password':
                    $this->setUserPassword($val);
                    break;
                case 'user_passchg':
                    $this->setUserPasschg($val);
                    break;
                case 'user_pass_convert':
                    $this->setUserPassConvert($val);
                    break;
                case 'user_email':
                    $this->setUserEmail($val);
                    break;
                case 'user_email_hash':
                    $this->setUserEmailHash($val);
                    break;
                case 'user_birthday':
                    $this->setUserBirthday($val);
                    break;
                case 'user_lastvisit':
                    $this->setUserLastvisit($val);
                    break;
                case 'user_lastmark':
                    $this->setUserLastmark($val);
                    break;
                case 'user_lastpost_time':
                    $this->setUserLastpostTime($val);
                    break;
                case 'user_lastpage':
                    $this->setUserLastpage($val);
                    break;
                case 'user_last_confirm_key':
                    $this->setUserLastConfirmKey($val);
                    break;
                case 'user_last_search':
                    $this->setUserLastSearch($val);
                    break;
                case 'user_warnings':
                    $this->setUserWarnings($val);
                    break;
                case 'user_last_warning':
                    $this->setUserLastWarning($val);
                    break;
                case 'user_login_attempts':
                    $this->setUserLoginAttempts($val);
                    break;
                case 'user_inactive_reason':
                    $this->setUserInactiveReason($val);
                    break;
                case 'user_inactive_time':
                    $this->setUserInactiveTime($val);
                    break;
                case 'user_posts':
                    $this->setUserPosts($val);
                    break;
                case 'user_lang':
                    $this->setUserLang($val);
                    break;
                case 'user_timezone':
                    $this->setUserTimezone($val);
                    break;
                case 'user_dst':
                    $this->setUserDst($val);
                    break;
                case 'user_dateformat':
                    $this->setUserDateformat($val);
                    break;
                case 'user_style':
                    $this->setUserStyle($val);
                    break;
                case 'user_rank':
                    $this->setUserRank($val);
                    break;
                case 'user_colour':
                    $this->setUserColour($val);
                    break;
                case 'user_new_privmsg':
                    $this->setUserNewPrivmsg($val);
                    break;
                case 'user_unread_privmsg':
                    $this->setUserUnreadPrivmsg($val);
                    break;
                case 'user_last_privmsg':
                    $this->setUserLastPrivmsg($val);
                    break;
                case 'user_message_rules':
                    $this->setUserMessageRules($val);
                    break;
                case 'user_full_folder':
                    $this->setUserFullFolder($val);
                    break;
                case 'user_emailtime':
                    $this->setUserEmailtime($val);
                    break;
                case 'user_topic_show_days':
                    $this->setUserTopicShowDays($val);
                    break;
                case 'user_topic_sortby_type':
                    $this->setUserTopicSortbyType($val);
                    break;
                case 'user_topic_sortby_dir':
                    $this->setUserTopicSortbyDir($val);
                    break;
                case 'user_post_show_days':
                    $this->setUserPostShowDays($val);
                    break;
                case 'user_post_sortby_type':
                    $this->setUserPostSortbyType($val);
                    break;
                case 'user_post_sortby_dir':
                    $this->setUserPostSortbyDir($val);
                    break;
                case 'user_notify':
                    $this->setUserNotify($val);
                    break;
                case 'user_notify_pm':
                    $this->setUserNotifyPm($val);
                    break;
                case 'user_notify_type':
                    $this->setUserNotifyType($val);
                    break;
                case 'user_allow_pm':
                    $this->setUserAllowPm($val);
                    break;
                case 'user_allow_viewonline':
                    $this->setUserAllowViewonline($val);
                    break;
                case 'user_allow_viewemail':
                    $this->setUserAllowViewemail($val);
                    break;
                case 'user_allow_massemail':
                    $this->setUserAllowMassemail($val);
                    break;
                case 'user_options':
                    $this->setUserOptions($val);
                    break;
                case 'user_avatar':
                    $this->setUserAvatar($val);
                    break;
                case 'user_avatar_type':
                    $this->setUserAvatarType($val);
                    break;
                case 'user_avatar_width':
                    $this->setUserAvatarWidth($val);
                    break;
                case 'user_avatar_height':
                    $this->setUserAvatarHeight($val);
                    break;
                case 'user_sig':
                    $this->setUserSig($val);
                    break;
                case 'user_sig_bbcode_uid':
                    $this->setUserSigBbcodeUid($val);
                    break;
                case 'user_sig_bbcode_bitfield':
                    $this->setUserSigBbcodeBitfield($val);
                    break;
                case 'user_from':
                    $this->setUserFrom($val);
                    break;
                case 'user_icq':
                    $this->setUserIcq($val);
                    break;
                case 'user_aim':
                    $this->setUserAim($val);
                    break;
                case 'user_yim':
                    $this->setUserYim($val);
                    break;
                case 'user_msnm':
                    $this->setUserMsnm($val);
                    break;
                case 'user_jabber':
                    $this->setUserJabber($val);
                    break;
                case 'user_website':
                    $this->setUserWebsite($val);
                    break;
                case 'user_occ':
                    $this->setUserOcc($val);
                    break;
                case 'user_interests':
                    $this->setUserInterests($val);
                    break;
                case 'user_actkey':
                    $this->setUserActkey($val);
                    break;
                case 'user_newpasswd':
                    $this->setUserNewpasswd($val);
                    break;
                case 'user_form_salt':
                    $this->setUserFormSalt($val);
                    break;
                case 'user_new':
                    $this->setUserNew($val);
                    break;
                case 'user_reminded':
                    $this->setUserReminded($val);
                    break;
                case 'user_reminded_time':
                    $this->setUserRemindedTime($val);
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
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['user_type'] = $this->getUserType();
        $arrValues['group_id'] = $this->getGroupId();
        $arrValues['user_permissions'] = $this->getUserPermissions();
        $arrValues['user_perm_from'] = $this->getUserPermFrom();
        $arrValues['user_ip'] = $this->getUserIp();
        $arrValues['user_regdate'] = $this->getUserRegdate();
        $arrValues['username'] = $this->getUsername();
        $arrValues['username_clean'] = $this->getUsernameClean();
        $arrValues['user_password'] = $this->getUserPassword();
        $arrValues['user_passchg'] = $this->getUserPasschg();
        $arrValues['user_pass_convert'] = $this->getUserPassConvert();
        $arrValues['user_email'] = $this->getUserEmail();
        $arrValues['user_email_hash'] = $this->getUserEmailHash();
        $arrValues['user_birthday'] = $this->getUserBirthday();
        $arrValues['user_lastvisit'] = $this->getUserLastvisit();
        $arrValues['user_lastmark'] = $this->getUserLastmark();
        $arrValues['user_lastpost_time'] = $this->getUserLastpostTime();
        $arrValues['user_lastpage'] = $this->getUserLastpage();
        $arrValues['user_last_confirm_key'] = $this->getUserLastConfirmKey();
        $arrValues['user_last_search'] = $this->getUserLastSearch();
        $arrValues['user_warnings'] = $this->getUserWarnings();
        $arrValues['user_last_warning'] = $this->getUserLastWarning();
        $arrValues['user_login_attempts'] = $this->getUserLoginAttempts();
        $arrValues['user_inactive_reason'] = $this->getUserInactiveReason();
        $arrValues['user_inactive_time'] = $this->getUserInactiveTime();
        $arrValues['user_posts'] = $this->getUserPosts();
        $arrValues['user_lang'] = $this->getUserLang();
        $arrValues['user_timezone'] = $this->getUserTimezone();
        $arrValues['user_dst'] = $this->getUserDst();
        $arrValues['user_dateformat'] = $this->getUserDateformat();
        $arrValues['user_style'] = $this->getUserStyle();
        $arrValues['user_rank'] = $this->getUserRank();
        $arrValues['user_colour'] = $this->getUserColour();
        $arrValues['user_new_privmsg'] = $this->getUserNewPrivmsg();
        $arrValues['user_unread_privmsg'] = $this->getUserUnreadPrivmsg();
        $arrValues['user_last_privmsg'] = $this->getUserLastPrivmsg();
        $arrValues['user_message_rules'] = $this->getUserMessageRules();
        $arrValues['user_full_folder'] = $this->getUserFullFolder();
        $arrValues['user_emailtime'] = $this->getUserEmailtime();
        $arrValues['user_topic_show_days'] = $this->getUserTopicShowDays();
        $arrValues['user_topic_sortby_type'] = $this->getUserTopicSortbyType();
        $arrValues['user_topic_sortby_dir'] = $this->getUserTopicSortbyDir();
        $arrValues['user_post_show_days'] = $this->getUserPostShowDays();
        $arrValues['user_post_sortby_type'] = $this->getUserPostSortbyType();
        $arrValues['user_post_sortby_dir'] = $this->getUserPostSortbyDir();
        $arrValues['user_notify'] = $this->getUserNotify();
        $arrValues['user_notify_pm'] = $this->getUserNotifyPm();
        $arrValues['user_notify_type'] = $this->getUserNotifyType();
        $arrValues['user_allow_pm'] = $this->getUserAllowPm();
        $arrValues['user_allow_viewonline'] = $this->getUserAllowViewonline();
        $arrValues['user_allow_viewemail'] = $this->getUserAllowViewemail();
        $arrValues['user_allow_massemail'] = $this->getUserAllowMassemail();
        $arrValues['user_options'] = $this->getUserOptions();
        $arrValues['user_avatar'] = $this->getUserAvatar();
        $arrValues['user_avatar_type'] = $this->getUserAvatarType();
        $arrValues['user_avatar_width'] = $this->getUserAvatarWidth();
        $arrValues['user_avatar_height'] = $this->getUserAvatarHeight();
        $arrValues['user_sig'] = $this->getUserSig();
        $arrValues['user_sig_bbcode_uid'] = $this->getUserSigBbcodeUid();
        $arrValues['user_sig_bbcode_bitfield'] = $this->getUserSigBbcodeBitfield();
        $arrValues['user_from'] = $this->getUserFrom();
        $arrValues['user_icq'] = $this->getUserIcq();
        $arrValues['user_aim'] = $this->getUserAim();
        $arrValues['user_yim'] = $this->getUserYim();
        $arrValues['user_msnm'] = $this->getUserMsnm();
        $arrValues['user_jabber'] = $this->getUserJabber();
        $arrValues['user_website'] = $this->getUserWebsite();
        $arrValues['user_occ'] = $this->getUserOcc();
        $arrValues['user_interests'] = $this->getUserInterests();
        $arrValues['user_actkey'] = $this->getUserActkey();
        $arrValues['user_newpasswd'] = $this->getUserNewpasswd();
        $arrValues['user_form_salt'] = $this->getUserFormSalt();
        $arrValues['user_new'] = $this->getUserNew();
        $arrValues['user_reminded'] = $this->getUserReminded();
        $arrValues['user_reminded_time'] = $this->getUserRemindedTime();
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
