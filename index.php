<?php
use App\Core\Route;
if (version_compare(PHP_VERSION, '8.0.0', '<'))
exit('Your PHP version is ' . PHP_VERSION . '. The script requires PHP 8.0 or higher.');

require 'vendor/autoload.php';

/**
 * Require routes file
 */
require 'routes/web.php';

/**
 * Require configuration file
 */
require 'config/database.php';

require 'bootstrap/app.php';

/**
 * define root path
 */

define('ROOT_PATH', __DIR__ . '/');
/**
 * Handle routes from Route helper class
 */

Route::handle($_SERVER['PHP_SELF']);