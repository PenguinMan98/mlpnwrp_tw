<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: UrlEncodeAccentTest.php 44443 2013-01-05 20:30:09Z changi67 $

/**
 * @group integration
 */

class TikiLib_UrlEncodeAccentTest extends PHPUnit_Framework_TestCase
{
	protected function setUp()
	{
		$this->tikilib = TikiLib::lib('tiki');
	}

	public function testUrlEncodeAccent_shouldNotChangeValidUrlString()
	{
		$str = 'SomeString';
		$this->assertEquals($str, $this->tikilib->urlencode_accent($str));
	}
	
	public function testUrlEncodeAccent_shouldChangeStringWithInvalidCharactersForUrl()
	{
		$str = 'http://tiki.org/Página en español';
		$modifedString = 'http://tiki.org/P%C3%A1gina%20en%20espa%C3%B1ol';
		$this->assertEquals($modifedString, $this->tikilib->urlencode_accent($str));
	}
}
