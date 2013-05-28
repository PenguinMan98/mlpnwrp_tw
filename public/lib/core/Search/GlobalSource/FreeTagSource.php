<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: FreeTagSource.php 44443 2013-01-05 20:30:09Z changi67 $

class Search_GlobalSource_FreeTagSource implements Search_GlobalSource_Interface
{
	private $freetaglib;

	function __construct()
	{
		$this->freetaglib = TikiLib::lib('freetag');
	}

	function getProvidedFields()
	{
		return array('freetags', 'freetags_text');
	}

	function getGlobalFields()
	{
		return array(
			'freetags_text' => true,
		);
	}

	function getData($objectType, $objectId, Search_Type_Factory_Interface $typeFactory, array $data = array())
	{
		$tags = $this->freetaglib->get_tags_on_object($objectId, $objectType);

		$textual = array();
		$ids = array();

		foreach ($tags['data'] as $entry) {
			$textual[] = $entry['tag'];
			$ids[] = $entry['tagId'];
		}

		return array(
			'freetags' => $typeFactory->multivalue($ids),
			'freetags_text' => $typeFactory->plaintext(implode(' ', $textual)),
		);
	}
}

