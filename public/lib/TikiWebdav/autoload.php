<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: autoload.php 44443 2013-01-05 20:30:09Z changi67 $

require_once 'lib/ezcomponents/Base/src/base.php';

/**
 * Autoload ezc classes 
 * 
 * @param string $className 
 */
function webdav_autoload($className)
{
    ezcBase::autoload($className);
}

spl_autoload_register('webdav_autoload');
