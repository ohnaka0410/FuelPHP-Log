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

\Autoloader::add_core_namespace('Fuel\\Log');

\Autoloader::add_classes(array(
	'Fuel\\Log\\Log'   => __DIR__.'/classes/log.php',
));
