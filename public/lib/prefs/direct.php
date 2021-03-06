<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: direct.php 44443 2013-01-05 20:30:09Z changi67 $

function prefs_direct_list()
{
	return array(
		'direct_pagination' => array(
			'name' => tra('Use direct pagination links'),
			'type' => 'flag',
			'default' => 'y',
		),
		'direct_pagination_max_middle_links' => array(
			'name' => tra('Max. number of links around the current item'),
			'type' => 'text',
			'size' => '4',
			'default' => 2,
		),
		'direct_pagination_max_ending_links' => array(
			'name' => tra('Max. number of links after the first or before the last item'),
			'type' => 'text',
			'size' => '4',
			'default' => 0,
		),
	);	
}
