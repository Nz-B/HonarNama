<?php
/* Template Name: product Info */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/product_info.scss?v=1.1" type="text/css">
    <title>اطلاعات اثر</title>
</head>
<body>
<?php get_header(); ?>

<div class="product-section">
    <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2024/12/artwork_035c60f6-1366-447c-9556-42dd9a9ac96d.webp" alt="">
    <div class="product-info">
        <h1>مهدی راحمی</h1>
        <hr class="top-mony">
        <h3 class="num-mony">25,000,000</h3>
        <h3 class="txt-mony">تومان</h3>
        <button>خریداثر</button>
        <hr class="under-mony">
        <section class="max-w-2xl mx-auto p-6 ">
            <ul class="space-y-4">
                <li class="flex justify-between">
                    <span class="font-semibold text-lg text-gray-700">تکنیک:</span>
                    <span class="text-gray-600">اکریلیک</span>
                </li>   
                <li class="flex justify-between">
                    <span class="font-semibold text-lg text-gray-700">ابعاد:</span>
                    <span class="text-gray-600">80×100 سانتی‌متر</span>
                </li>   
                <li class="flex justify-between">
                    <span class="font-semibold text-lg text-gray-700">تاریخ خلق اثر:</span>
                    <span class="text-gray-600">1403</span>
                </li>   
                <li class="flex justify-between">
                    <span class="font-semibold text-lg text-gray-700">دارای قاب:</span>
                    <span class="text-gray-600">خیر</span>
                </li>   
                <li class="flex justify-between">
                    <span class="font-semibold text-lg text-gray-700">کد اثر:</span>
                    <span class="text-gray-600">02080071904</span>
                </li>
            </ul>
        </section>
    </div>
</div>

<!-- <hr class="container_border"> -->
<!-- <div class="container">
    <div class="container_section">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/Images.svg" alt="Images">
        <img class="container_section_hr" src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/hr.svg" alt="">
        <h1>تنوع آثار</h1>
        <h3>بیش از 15 هزار اثر هنری تایید شده است. شما می‌توانید به راحتی اثر مورد علاقه خودتان را پیدا کنید.</h3>
    </div>
    <div class="container_section">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/Wallet.svg" alt="Wallet">
        <hr class="custom-hr">
        <h1>خرید راحت و با اطمینان</h1>
        <h3>برای خرید یا فروش می توانید مشاوره تخصصی داشته باشید.</h3>
    </div>
    <div class="container_section">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/Check-Broken.svg" alt="Check-Broken">
        <hr class="custom-hr">
        <h1>ضمانت اصالت آثار</h1>
        <h3>هر اثر هنری خریداری شما از هنرنما با سرتیفیکیت یا سند اثر ارائه می شود.</h3>
    </div>
</div> -->
<!-- <hr class="container_border"> -->

<div class="product-slider-container">
  <h2 class="product-title">آثار دیگر...</h2>
  <div class="product-slider">
    <div class="product-slide">
      <a href="">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/xrgkuyvyuz.webp" alt="عنوان پست">
        <h1 id="painter-name">پرویز ابیضی</h1>
      </a>
      <h1>رنگ روغن</h1>
      <h2 class="width">47⨯27 سانتی متر</h2>
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
      <a href="">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/sbdrmivkvb.webp" alt="عنوان پست">
        <h1 id="painter-name">حسن فتح‌الامین</h1>
      </a>
      <h1>چاپ کلاسیک</h1>
      <h2 class="width">35⨯50 سانتی متر</h2>
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
      <a href="">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/hddluloxws.webp" alt="عنوان پست">
        <h1 id="painter-name">محسن امیرحسین</h1>
      </a>
      <h1>رنگ روغن</h1>
      <h2 class="width">120⨯90 سانتی متر</h2>
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
      <a href="">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/spbyilymak.webp" alt="عنوان پست">
        <h1 id="painter-name">مصطفی سلیمی</h1>
      </a>
      <h1>مرکب</h1>
      <h2 class="width">40⨯30 سانتی متر</h2>
      <hr>
      <h2 class="mony">قیمت</h2>
      <div class="overlay">
        <span class="overlay-text">اطلاعات بیشتر</span>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

</body>
</html>