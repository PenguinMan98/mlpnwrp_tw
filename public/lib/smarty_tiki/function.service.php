<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: function.service.php 44443 2013-01-05 20:30:09Z changi67 $

function smarty_function_service($params, $smarty)
{
	global $prefs;
	$smarty->loadPlugin('smarty_modifier_escape');

	if (! isset($params['controller'])) {
		return 'missing-controller';
	}

	if ($prefs['feature_sefurl'] == 'y') {
		$url = "tiki-{$params['controller']}";

		if (isset($params['action'])) {
			$url .= "-{$params['action']}";
		}

		unset($params['controller']);
		unset($params['action']);
	} else {
		$url = 'tiki-ajax_services.php';
	}

	if (count($params)) {
		$url .= '?' . http_build_query($params, '', '&');
	}

	return smarty_modifier_escape($url);
}

