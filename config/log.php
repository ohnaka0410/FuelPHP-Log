<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.1
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * Fuel Log Package.
 *
 * @package     Fuel
 * @subpackage  Log
 * @author      ohnaka
 * @license     MIT License
 * @copyright   2018 ohnaka
 * @link        https://github.com/ohnaka0410/FuelPHP-Log
 */

return array(
	'default' => array(
		/**
		 * Logging Threshold.  Can be set to any of the following:
		 *
		 * Fuel::L_NONE
		 * Fuel::L_ERROR
		 * Fuel::L_WARNING
		 * Fuel::L_DEBUG
		 * Fuel::L_INFO
		 * Fuel::L_ALL
		 */
		'threshold'   => Fuel::L_WARNING,
		'path'        => APPPATH.'logs/',
		'file'        => date('Y').DS.date('m').DS.date('d').DS.'default.php',
		'format'      => '%level_name% - %datetime% --> %message%'.PHP_EOL,
		'date_format' => 'Y-m-d H:i:s',
		'line_break'  => false,
	),
);
