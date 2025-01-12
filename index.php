<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <button class="more_info">اطلاعات بیشتر</button>
      <button class="slider-btn left-btn">◀</button>
      <button class="slider-btn right-btn">▶</button>
    </div>
  </div>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  
  <?php get_footer(); ?>
</body>
</html>
