<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: tiki-switch_perspective.php 44443 2013-01-05 20:30:09Z changi67 $

require_once 'tiki-setup.php';
require_once 'lib/perspectivelib.php';

$access->check_feature('feature_perspective');

$_SESSION['current_perspective'] = 0;

if ( isset($_REQUEST['perspective']) ) {
	$perspectivelib->set_perspective($_REQUEST['perspective']);
}

if ( isset($_REQUEST['back']) && isset($_SERVER['HTTP_REFERER']) ) {
	$access->redirect($_SERVER['HTTP_REFERER']);
} else {
	$access->redirect('index.php');
}

// EOF
