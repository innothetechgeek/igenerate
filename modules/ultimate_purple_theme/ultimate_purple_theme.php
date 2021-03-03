<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Ultimate Purple Theme
Description: Ultimate Purple Theme for Perfex CRM
Version: 2.0.0
Author: Hélder Valentim
Author URI: https://dweb.digital
Requires at least: 2.3.2
*/

define('ULTIMATE_PURPLE_THEME_MODULE_NAME', 'ultimate_purple_theme');
define('ULTIMATE_PURPLE_THEME_CSS', module_dir_path(ULTIMATE_PURPLE_THEME_MODULE_NAME, 'assets/css/theme_styles.css'));

$CI = &get_instance();

/**
 * Register the activation chat
 */
register_activation_hook(ULTIMATE_PURPLE_THEME_MODULE_NAME, 'ultimate_purple_theme_activation_hook');

/**
 * The activation function
 */
function ultimate_purple_theme_activation_hook()
{
	require(__DIR__ . '/install.php');
}

/**
 * Load the chat helper
 */
$CI->load->helper(ULTIMATE_PURPLE_THEME_MODULE_NAME . '/ultimate_purple_theme');
