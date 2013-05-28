<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Abstract.php 44443 2013-01-05 20:30:09Z changi67 $

abstract class Search_Formatter_ValueFormatter_Abstract implements Search_Formatter_ValueFormatter_Interface
{
	function render($name, $value, array $entry)
	{
		return $value;
	}

	function canCache() 
	{
		return true;
	}
}

