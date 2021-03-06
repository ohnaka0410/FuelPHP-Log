# Fuel Log Package.

## Overview
This Package provide Log class with multi log files.

## Installing

Simply add `log` to your config.php `always_loaded.packages` config option.

## Usage

`fuel/app/config/log.php`
```php:
<?php
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
		// log file dir
		'path'        => APPPATH.'logs/',
		// log file
		'file'        => date('Y').DS.date('m').DS.date('d').DS.'default.php',
		// log format
		'format'      => '%level_name% - %datetime% --> %message%'.PHP_EOL,
		// date format in log
		'date_format' => 'Y-m-d H:i:s',
		// allow line break
		'line_break'  => false,
	),
);
```
