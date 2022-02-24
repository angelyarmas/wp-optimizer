<?php

/**
 * Plugin Name:     WP Turbo Speed
 * Plugin URI:      https://github.com/angelyarmas/wp-turbo-speed
 * Description:     Optimize WordPress sites to reach maximum speed.
 * Author:          Ángel Yarmas
 * Author URI:      https://github.com/angelyarmas
 * Text Domain:     wp-turbo-speed
 * Domain Path:     /languages
 * Version:         0.0.1
 *
 * @package         wp_turbo_speed
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

// Load composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

// Run plugin hooks and filters.
if (!function_exists('wp_turbo_speed_initialize_plugin')) {
  function wp_turbo_speed_initialize_plugin() {
    if (class_exists('\\Angelyarmas\\WP_Turbo_Speed\\Hooks')) {
      $plugin = New \Angelyarmas\WP_Turbo_Speed\Hooks;
      $plugin->run();
    }
  }

  wp_turbo_speed_initialize_plugin();
}

