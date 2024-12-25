<?php
if (!defined('ABSPATH'))
  exit;

if (file_exists('./vendor/autoload.php'))
  require "./vendor/autoload.php";
require_once('inc/helpers.php');
require_once("inc/CustomFields.php");

include_once("inc/HodCodeTheme.php");
$instance = HodCodeTheme::getInstance();
$instance->init();
include_once("inc/vite.php");

// uncomment if you want a simple custom post type named event is added
// include_once("inc/PostTypes/CustomPostType.php");


include_once("inc/SearchEndpoint.php");



function remove_wp_block_library_css()
{
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('wc-block-style'); // REMOVE WOOCOMMERCE BLOCK CSS
  wp_dequeue_style('global-styles'); // REMOVE THEME.JSON
}
add_action('wp_enqueue_scripts', 'remove_wp_block_library_css', 100);

function theme_supports() {
  // فعال کردن پشتیبانی از لوگو
  add_theme_support('custom-logo', array(
      'height' => 100, // ارتفاع دلخواه
      'width' => 100,  // عرض دلخواه
      'flex-height' => true, // انعطاف در ارتفاع
      'flex-width' => true,  // انعطاف در عرض
      'header-text' => array('site-title', 'site-description'), // فعال‌سازی متن سرصفحه
  ));
}
add_action('after_setup_theme', 'theme_supports');