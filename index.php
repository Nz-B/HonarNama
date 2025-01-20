<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/scss/styles.scss">
    <title>صفحه نخست</title>
</head>
<body>
<?php get_header(); ?>
  
  <div class="slider-container">
    <div class="slider">
      <div class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p1.jpg" alt="Slide 1">
      </div>
      <div class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p2.jpg" alt="Slide 2">
      </div>
      <div class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p3.jpg" alt="Slide 3">
      </div>
    </div>
  </div>
  
<div class="exhibition-slider-container">
  <h2 class="exhibition-title">جدیدترین نمایشگاه‌ها</h2>
  <div class="exhibition-slider">
    <div class="exhibition-slide">
      <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/mmkwbqaymh.webp" alt="عنوان پست">
      <h3>نمایشگاه آنلاین</h3>
      <h1><a href="http://localhost/WordpressWorkshop/wordpress/2025/01/12/نمایشگاه-کرم-با-طعم-توت-فرنگی/">کرم با طعم توت فرنگی</a></h1>
      <h2 class="date">09 الی 12 دی ماه</h2>
      <h2 class="publisher">برگزارکننده: هنرنما</h2>
      <button class="more_info"><a href="http://localhost/WordpressWorkshop/wordpress/exhibition-info/" target="_blank">اطلاعات بیشتر</a></button>
      <!-- <button class="slider-btn left-btn">◀</button>
      <button class="slider-btn right-btn">▶</button> -->
    </div>
  </div>
</div>

<div class="product-slider-container">
  <h2 class="product-title">محبوب ترین آثار</h2>
  <div class="product-slider">
    <div class="product-slide">
      <a href="http://localhost/WordpressWorkshop/wordpress/product-info/" target="_blank">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2024/12/artwork_035c60f6-1366-447c-9556-42dd9a9ac96d.webp" alt="عنوان پست">
        <h1 id="painter-name">مهدی راحمی</h1>
      <h1>اکریلیک</h1>
      <h2 class="width">80⨯100 سانتی متر</h2>
      <hr>
      
      <h2 class="mony">
        <?php
          // $price_usd = 100; // قیمت دلاری
          // $price_irr = convert_price_to_irr($price_usd);

          // if ($price_irr) {
          //     echo "قیمت: " . number_format($price_irr) . " ریال";
          // } else {
          //     echo "قیمت قابل محاسبه نیست!";
          // }
        ?>
      </h2>
      <div class="overlay">
        <span class="overlay-text">اطلاعات بیشتر</span>
      </div>
    </a>
    </div>
    <div class="product-slide">
      <a href="http://localhost/WordpressWorkshop/wordpress/2024/12/24/picture1/">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2024/12/1722080820640.png" alt="عنوان پست">
        <h1 id="painter-name">فرینو اطلسی</h1>
      </a>
      <h1>کلاژ روی مقوا</h1>
      <h2 class="width">35⨯24 سانتی متر</h2>
      <hr>
      <h2 class="mony">
        <?php
          // دریافت قیمت تبدیل شده به ریال
          $converted_price = get_post_meta(get_the_ID(), 'converted_price_irr', true); // 'converted_price_irr' نام فیلد جدید است

          if ($converted_price) {
              echo '<p>قیمت به ریال: ' . number_format($converted_price) . ' ریال</p>'; // نمایش قیمت به ریال با فرمت هزارگان
          }
        ?>
      </h2>
      <div class="overlay">
        <span class="overlay-text">اطلاعات بیشتر</span>
      </div>
    </div>
    <div class="product-slide">
      <a href="http://localhost/WordpressWorkshop/wordpress/2024/12/24/محبوب-ترین-اثر3/">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2024/12/txwlusfloy.png" alt="عنوان پست">
        <h1 id="painter-name">پریسا شجاع‌زاده</h1>
      </a>
      <h1>پاستل روغنی روی مقوا</h1>
      <h2 class="width">51⨯60 سانتی متر</h2>
      <hr>
      <h2 class="mony"><?php 
        $post_id = get_the_ID(); // گرفتن ID پست در حال نمایش
        display_price_in_irr($post_id); // نمایش قیمت ریالی ?>
      </h2>
      <div class="overlay">
        <span class="overlay-text">اطلاعات بیشتر</span>
      </div>
    </div>
    <div class="product-slide">
      <a href="http://localhost/WordpressWorkshop/wordpress/2024/12/24/محبوب-ترین-اثر-4/">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2024/12/1729428713981-1.png" alt="عنوان پست">
        <h1 id="painter-name">محمدعلی فرجی‌جاه</h1>
      </a>
      <h1>رنگ روغن</h1>
      <h2 class="width">51⨯60 سانتی متر</h2>
      <hr>
      <h2 class="mony">قیمت</h2>
      <div class="overlay">
        <span class="overlay-text">اطلاعات بیشتر</span>
      </div>
    </div>
  </div>
</div>

<div class="news-slider-wrapper">
  <div class="news-slider-container">
    <h2 class="news-title">تازه‌های هنرنما</h2>
    <div class="news-slider">
      <div class="news-slide">
        <a href="#">
          <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/news1.webp" alt="عنوان پست">
          <h1>پرچم</h1>
        </a>
        <h1 id="painter-name">هانیه آزموده</h1>
      </div>
      <div class="news-slide">
        <a href="#">
          <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/news2.webp" alt="عنوان پست">
          <h1>جنگل پاک</h1>
        </a>
        <h1 id="painter-name">پگاه شاملو</h1>
      </div>
      <div class="news-slide">
        <a href="#">
          <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/news3.webp" alt="عنوان پست">
          <h1>چشم انداز آبی</h1>
        </a>
        <h1 id="painter-name">سایه منصور</h1>
      </div>
      <div class="news-slide">
        <a href="#">
          <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/news4.webp" alt="عنوان پست">
          <h1>از مجموعه: نوری تاریک می‌بینم</h1>
        </a>
        <h1 id="painter-name">مریم یسلیانی</h1>
      </div>
    </div>
  </div>
</div>

<div class="Webinar-slider-container">
  <h2 class="Webinar-title">وبینارها</h2>
  <div class="Webinar-slider">
    <div class="Webinar-slide">
      <a href="#">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/1727072696_56.png" alt="عنوان پست">
        <h1>وبینار خلق تصاویر با هوش مصنوعی</h1>
      </a>
      <h1 id="teacher-name">حسین خلیلی</h1>
      <h2 class="date">1403/10/13 - ساعت 18 الی 20</h2>
      <hr>
      <div class="container">
        <button>ثبت نام</button>
        <h2 class="mony">رایگان</h2>
      </div>
    </div>
    <div class="Webinar-slide">
      <a href="#">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/1714659262_59.png" alt="عنوان پست">
        <h1>وبینار از نمایشگر تا چاپ</h1>
      </a>
      <h1 id="teacher-name">فرزاد ولیزاده</h1>
      <h2 class="date">1403/10/19 - ساعت 20 الی 22</h2>
      <hr>
      <div class="container">
        <button>ثبت نام</button>
        <h2 class="mony">قیمت</h2>
      </div>
    </div>
    <div class="Webinar-slide">
      <a href="#">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/1621248394_50.jpg" alt="عنوان پست">
        <h1>وبینار مقدمات سایه‌زنی حروف (کالیگرافی)</h1>
      </a>
      <h1 id="teacher-name">بهنام اتابک</h1>
      <h2 class="date">1403/10/23 - ساعت 15 الی 18</h2>
      <hr>
      <div class="container">
        <button>ثبت نام</button>
        <h2 class="mony">قیمت</h2>
      </div>
    </div>
  </div>
</div>

<div class="artists-slider-container">
  <h2 class="artists-title">هنرمندان برجسته آذر ماه</h2>
  <div class="artists-slider">
    <div class="artists-slide">
      <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/آنالی-طاهریان.webp" alt="عنوان پست">
      <h1 id="teacher-name">آنالی طاهریان</h1>
      <h3>محمودآباد _ 1370</h3>
    </div>
    <div class="artists-slide">
      <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/موسی-ربانی.webp" alt="عنوان پست">
      <h1 id="teacher-name">موسی ربانی</h1>
      <h3>اصفهان _ 1366</h3>
    </div>
    <div class="artists-slide">
      <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/مریم-بیگی.webp" alt="عنوان پست">
      <h1 id="teacher-name">مریم بیگی</h1>
      <h3>تهران _ 1367</h3>
    </div>
    <div class="artists-slide">
      <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/امیرحسین-نعیما.webp" alt="عنوان پست">
      <h1 id="teacher-name">امیر حسین نعیما</h1>
      <h3>مازندران _ 1375</h3>
    </div>
    <div class="artists-slide">
      <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/یغما-سروشه.webp" alt="عنوان پست">
      <h1 id="teacher-name">یغما سروشه</h1>
      <h3>تهران _ 1372</h3>
    </div>
    <div class="artists-slide">
      <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/مسعود-حاتمی.webp" alt="عنوان پست">
      <h1 id="teacher-name">مسعود حاتمی</h1>
      <h3>رشت _ 1362</h3>
    </div>
  </div>
</div>

<div class="articles-slider-container">
  <h2 class="articles-title">اخبار و مقالات</h2>
  <div class="articles-slider">
    <div class="articles-slide-right">
      <a href="http://localhost/WordpressWorkshop/wordpress/exhibition-info/" target="_blank">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/mmkwbqaymh.webp" alt="عنوان پست">
        <h1>کرم با طعم توت فرنگی</h1>
        <h3>نمایشگاه انفرادی «کرم با طعم توت‌فرنگی» با نقاشی‌های الهه جعفری، روز یکشنبه نهم دی‌ماه به صورت آنلاین در سایت ‌هنرنما به نمایش درمی‌آید. </h3>
      </a>
    </div>

    <div class="Container">
      <div class="article-card">
        <a href="#">
          <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2024/12/logo.png" alt="چرا هنرنما؟">
          <div class="text-content">
            <h1>چرا هنرنما؟</h1>
            <h3>هنرنما پلتفرمی با قابلیت خریدوفروش امن آثار گرانبهای شماست!</h3>
          </div>
        </a>
      </div>

      <div class="article-card">
        <a href="#">
          <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/download-1.jpg" alt="نمایشگاه‌های مجازی">
          <div class="text-content">
            <h1>نحوه شرکت در نمایشگاه‌های مجازی</h1>
            <h3>برای شرکت در نمایشگاه‌ها ابتدا باید وارد حساب کاربری خود شوید و سپس...</h3>
          </div>
        </a>
      </div>

      <div class="article-card">
        <a href="#">
          <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/1727072696_56.png" alt="وبینار هوش مصنوعی">
          <div class="text-content">
            <h1>وبینار آنلاین:</h1>
            <h1>خلق تصاویر با هوش مصنوعی</h1>
            <h3>استفاده از هوش مصنوعی در این روزها به یک نیاز اساسی تبدیل شده است...</h3>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

</body>
</html>
