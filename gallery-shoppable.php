<?php 
/**
 * Plugin Name: Gallery Shoppable
 * Plugin URI: https://my-awesomeness-emporium.com
 * description: a plugin to create gallery awesomeness for your store.
 * Version: 1.0.0
 * Author: Mike
 * Author URI: #Mike
 * License: GPL2
 */

{
  /**
   * Define
   */
  define('GS_VERSION', '1.0.0');
  define('GS_URI', plugin_dir_url(__FILE__));
  define('GS_DIR', plugin_dir_path(__FILE__));
}

{
  /**
   * Include
   */
  require(GS_DIR . '/inc/static.php');
  require(GS_DIR . '/inc/helpers.php');
  require(GS_DIR . '/inc/hooks.php');
  require(GS_DIR . '/inc/ajax.php');
  require(GS_DIR . '/inc/template-tags.php');
}