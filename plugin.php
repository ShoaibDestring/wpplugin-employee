<?php

/**
 * Plugin Name: Employee Plugin
 * Plugin URI: http://wordpress.local/wp-admin/plugins.php
 * Description: This employee plugin will create table with name emplyees and insert, dispalys data.
 * Author: Muhammad Shoaib
 * Author URI: http://wordpress.local/
 * Version: 1.0
 */
defined('ABSPATH') or die('No script!');
define('EMPLOYEE_PLUGIN_FILE', __FILE__);
define('EMPLOYEE_PLUGIN_DIR_PATH', plugin_dir_path(EMPLOYEE_PLUGIN_FILE));
define('EMPLOYEE_PLUGIN_DIR_URL', plugin_dir_url(EMPLOYEE_PLUGIN_FILE));
require_once __DIR__ . "/vendor/autoload.php";

use Destringpc1\WppluginEmployee\App;

$app = new App();
