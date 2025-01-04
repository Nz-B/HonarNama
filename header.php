<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/main.css">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="w-full px-4 pt-2">
        <div class="flex max-w-screen-xl mx-auto h-[70px] justify-between items-center">
            <div class="flex-none pl-3">
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else { ?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt="Default Logo">
                <?php } ?>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="/" class="menu-item">صفحه نخست</a></li>
                    <li><a href="/services" class="menu-item">آثار</a></li>
                    <li><a href="/exhibitions" class="menu-item">نمایشگاه‌ها</a></li>
                    <li><a href="/archive" class="menu-item">آرشیو</a></li>
                    <li><a href="/about" class="menu-item">درباره ما</a></li>
                    <li><a href="/contact" class="menu-item">تماس با ما</a></li>
                </ul>
            </nav>
            <!-- دکمه‌ها و آیکون‌ها -->
            <div class="actions flex items-center">
                <button><img class="icons" src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2024/12/search.png" alt="search"></button>
                <button><img class="icons" src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2024/12/Heart.png" alt="Heart"></button>
                <button><img class="icons" src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2024/12/buy.png" alt="buy"></button>
                <button><a href="<?php echo site_url('/http://localhost/WordpressWorkshop/wordpress/loing-singup/'); ?>"class="login">ورود/ثبت نام</a></button>
            </div>
        </div>
    </header>
<script src="assets/js/header.js"></script>
<main class="flex-auto">