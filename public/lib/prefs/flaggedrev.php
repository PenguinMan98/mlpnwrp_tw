<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: flaggedrev.php 44443 2013-01-05 20:30:09Z changi67 $

function prefs_flaggedrev_list()
{
	return array(
		'flaggedrev_approval' => array(
			'name' => tra('Revision Approval'),
			'description' => tra('Uses flagged revisions to hide unapproved wiki page revisions from users with lower privileges.'),
			'type' => 'flag',
			'perspective' => false,
			'default' => 'n',
			'help' => 'Flagged Revisions',
		),
		'flaggedrev_approval_categories' => array(
			'name' => tra('Revision Approval Categories'),
			'description' => tra('List of category IDs on which revision approval is required.'),
			'type' => 'text',
			'filter' => 'int',
			'separator' => ';',
			'dependencies' => array(
				'feature_categories',
			),
			'default' => array(''), //empty string needed to keep preference from setting unexpectedly
		),
	);
}

