<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: SpecialChar.php 44443 2013-01-05 20:30:09Z changi67 $

class JisonParser_WikiCKEditor_SpecialChar extends JisonParser_Wiki_SpecialChar
{
	function protect(&$input) {
		return $input;
	}

	function unprotect(&$input) {
		return $input;
	}
}