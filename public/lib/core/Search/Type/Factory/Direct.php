<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Direct.php 44443 2013-01-05 20:30:09Z changi67 $

class Search_Type_Factory_Direct implements Search_Type_Factory_Interface
{
	function plaintext($value)
	{
		return new Search_Type_Whole($value);
	}

	function wikitext($value)
	{
		return new Search_Type_PlainText($value);
	}

	function timestamp($value)
	{
		return new Search_Type_Whole($value);
	}

	function identifier($value)
	{
		return new Search_Type_Whole($value);
	}

	function multivalue($values)
	{
		return new Search_Type_Whole((array) $values);
	}

	function sortable($value)
	{
		return new Search_Type_Whole($value);
	}
}

