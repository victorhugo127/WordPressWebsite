<?php
/**
 * Plugin Name: Aramorais Core
 * Description: Core functionalities for Aramorais website (CPTs, taxonomies).
 * Version: 1.0.0
 * Author: Victor Hugo
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ARAMORAIS_CORE_PATH', plugin_dir_path(__FILE__));

require_once plugin_dir_path(__FILE__) . 'includes/post-types.php';
require_once plugin_dir_path(__FILE__) . 'includes/taxonomies.php';
