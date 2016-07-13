<?php

/**
 * @package mdms - markdown management system
 * @subpackage TEMPLATE - a TEMPLATE for making plugins for mdms
 * @author Harry Park <harry@harrypark.io>
 * @link http://harrypark.io
 * @license http://opensource.org/licenses/MIT
 * @version 0.1
 */

require_once('Plugins.php');

class TEMPLATE extends Plugins
{
	public $enabled = false; // SET THIS TRUE TO FORCE ENABLE (can still disable in config after load)
}