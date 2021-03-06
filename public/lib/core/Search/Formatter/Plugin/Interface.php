<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Interface.php 44443 2013-01-05 20:30:09Z changi67 $

interface Search_Formatter_Plugin_Interface
{
	const FORMAT_WIKI = 'wiki';
	const FORMAT_HTML = 'html';

	function getFields();

	function getFormat();

	function prepareEntry($entry);

	function renderEntries(Search_ResultSet $entries);
}

