<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: mod-func-forums_most_commented_forums.php 44443 2013-01-05 20:30:09Z changi67 $

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
  header("location: index.php");
  exit;
}

function module_forums_recent_forums_info()
{
	return array(
		'name' => tra('Most Recently Used Forums'),
		'description' => tra('Display the specified number of forums sorted by most recently posted in.'),
		'prefs' => array('feature_forums'),
		'params' => array(),
		'common_params' => array('nonums', 'rows')
	);
}

function module_forums_recent_forums($mod_reference, $module_params)
{
	global $tikilib, $user, $smarty;
	//$bindvars = array($type);
	$rows = $mod_reference['rows'];
	
	$query = "
SELECT 
	threadId, 
	object AS 'forumId',
	IF(parentId>0,parentId,threadId) AS 'threadNo', 
	title,
	MAX(commentDate) AS 'commentDate'
FROM tiki_comments tc
WHERE tc.objectType = 'forum'
GROUP BY threadNo
ORDER BY commentDate DESC";
	$result = $tikilib->query($query);
	$ret = array();

	while (count($ret) <= $rows && $res = $result->fetchRow()) {
		if ($tikilib->user_has_perm_on_object($user, $res['forumId'], 'forum', 'tiki_p_forum_read')) { /*check perms on the forum not the post*/
			$ret[] = $res;
		}
	}

	$smarty->assign_by_ref('threads', $ret);
	$smarty->assign_by_ref('nonums', $module_params['nonums']);
}
