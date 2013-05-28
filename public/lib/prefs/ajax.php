<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: ajax.php 44443 2013-01-05 20:30:09Z changi67 $

function prefs_ajax_list()
{

	return array(

		'ajax_autosave' => array(
			'name' => tra('Ajax auto-save'),
			'description' => tra('Saves your edits as you go along enabling you to recover your work after an "interruption". Also enables "Live" preview and is required for wysiwyg plugin processing.'),
			'help' => 'Lost+Edit+Protection',
			'type' => 'flag',
			'dependencies' => array(
				'feature_ajax',
			),
			'default' => 'y',
		),
		
	);
}
