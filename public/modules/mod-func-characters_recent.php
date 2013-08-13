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

function module_characterss_recent_info()
{
	return array(
		'name' => tra('Most Recently Created Characters'),
		'description' => tra('Shows the most recently created characters.'),
		'prefs' => array(),
		'params' => array(),
		'common_params' => array('nonums', 'rows')
	);
}

function module_characters_recent($mod_reference, $module_params)
{
	global $tikilib, $user, $smarty;
	//$bindvars = array($type);
	$rows = $mod_reference['rows'];
	
	$query = "
SELECT 
	c.`character_id`, 
	c.`name`,
	u.userId,
	u.login
FROM `character` c
JOIN `character_user` cu
	ON c.character_id = cu.character_id
JOIN `users_users` u
	ON u.userId = cu.user_id
ORDER BY character_id DESC";
	$result = $tikilib->query($query);
	$ret = array();

	while (count($ret) <= $rows && $res = $result->fetchRow()) {
		$ret[] = $res;
	}

	$smarty->assign_by_ref('characters', $ret);
	$smarty->assign_by_ref('nonums', $module_params['nonums']);
}
