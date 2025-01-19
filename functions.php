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

function add_custom_price_field() {
  add_meta_box(
      'custom_price_field', // ID
      'Price in USD', // عنوان
      'display_custom_price_field', // تابع برای نمایش فیلد
      'post', // نوع پست (می‌توانید به جای "post" از "page" یا هر نوع پست دیگری استفاده کنید)
      'normal', // مکان فیلد ('normal' برای نمایش در محتوای اصلی، 'side' برای کنار و 'advanced' برای بالای صفحه)
      'default' // اولویت
  );
}
add_action('add_meta_boxes', 'add_custom_price_field');

function display_custom_price_field($post) {
  $price = get_post_meta($post->ID, '_custom_price', true); // اگر فیلد قبلاً مقداردهی شده است
  ?>
  <label for="custom_price">Enter Price in USD:</label>
  <input type="text" name="custom_price" id="custom_price" value="<?php echo esc_attr($price); ?>" />
  <?php
}

function save_custom_price_field($post_id) {
  if (array_key_exists('custom_price', $_POST)) {
      update_post_meta(
          $post_id,
          '_custom_price',
          $_POST['custom_price']
      );
  }
}
add_action('save_post', 'save_custom_price_field');

function get_usd_to_iran_rate() {
  $api_url = 'https://v6.exchangerate-api.com/v6/d986a324517a7c2e7035dee3/latest/USD'; // آدرس API شما
  $response = wp_remote_get($api_url);

  if (is_wp_error($response)) {
      return 'Error fetching data';
  }

  $data = wp_remote_retrieve_body($response);
  $exchange_data = json_decode($data, true);
  
  // دیباگ کردن داده‌ها برای اطمینان از دریافت صحیح اطلاعات
  error_log(print_r($exchange_data, true));

  if ($exchange_data['result'] === 'success') {
      return $exchange_data['conversion_rates']['IRR']; // IRR کد ریال است
  } else {
      return 'API error';
  }
}


function display_price_in_irr($post_id) {
  $price_usd = get_post_meta($post_id, '_custom_price', true);
  if ($price_usd) {
      $rate = get_usd_to_iran_rate();
      if (is_numeric($rate)) {
          $price_irr = $price_usd * $rate;
          echo '<p>Price in IRR: ' . number_format($price_irr) . ' ریال</p>';
      } else {
          echo '<p>Error fetching exchange rate</p>';
      }
  }
}
add_action('the_content', 'display_price_in_irr');


function enqueue_custom_styles() {
  wp_enqueue_style('product_info', get_template_directory_uri() . '/assets/scss/product_info.css', array(), '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
