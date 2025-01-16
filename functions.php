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

function add_theme_scripts() {
  // اضافه کردن فایل جاوااسکریپت اسلایدر
  wp_enqueue_script('slider-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);

  // اضافه کردن استایل‌های قالب
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0'); // تبدیل به CSS
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

function get_post_slider() {
  // گرفتن پست‌های وردپرس
  $args = array(
      'post_type' => 'post', // نوع پست (اینجا "post" یعنی نوشته‌های وردپرس)
      'posts_per_page' => 5, // تعداد پست‌هایی که در اسلایدر نمایش داده می‌شه
  );

  $query = new WP_Query($args); // کوئری گرفتن پست‌ها

  // نمایش پست‌ها در اسلایدر
  if ($query->have_posts()) {
      echo '<div class="slider">';
      while ($query->have_posts()) {
          $query->the_post();
          echo '<div class="slide">';
          if (has_post_thumbnail()) { // بررسی وجود تصویر شاخص
              the_post_thumbnail('large'); // نمایش تصویر شاخص
          }
          echo '<h2>' . get_the_title() . '</h2>'; // نمایش عنوان پست
          echo '</div>';
      }
      echo '</div>';
  }

  wp_reset_postdata(); // بازنشانی اطلاعات کوئری
}

function enqueue_theme_styles() {
  // استایل اصلی
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/styles.css');

  // استایل فوتر
  wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

