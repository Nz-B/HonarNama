<?php
/* Template Name: Exhibition Info */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/exhibition info.scss?v=1.1" type="text/css">
    <title>اطلاعات نمایشگاه</title>
</head>
<body>
<?php get_header(); ?>

<div class="container">
    <div class="container_right">
        <div class="exhibition">
            <h1>نمایشگاه انفرادی «کرم با طعم توت‌فرنگی»</h1>
            <p>الهه جعفری، هنرمند برجسته، با مجموعه‌ای از نقاشی‌های منحصربه‌فرد خود شما را به نمایشگاه انفرادی «کِرم با طعم توت‌فرنگی» دعوت می‌کند. این نمایشگاه با رویکردی نوآورانه، در تاریخ یکشنبه، نهم دی‌ماه، به صورت مجازی و حضوری برگزار می‌شود.</p>
        </div>

        <div class="exhibition_inPerson">
            <h1>🌐 بازدید مجازی :</h1>
            <p>در عصر دیجیتال، امکان دسترسی به آثار هنری بدون محدودیت مکانی یک فرصت استثنایی است. این نمایشگاه به‌طور کامل در سایت هنرنما به صورت آنلاین ارائه می‌شود، تا شما بتوانید از هر نقطه‌ای، بدون نیاز به حضور فیزیکی، غرق در فضای هنری شوید.  پس از ثبت نام، در زمان مقرر از طریق حساب کاربری خود می‌توانید وارد نمایشگاه شوید.</p>
        </div>

        <div class="exhibition_virtual">
            <h1>📍 بازدید حضوری :</h1>
            <p>اگر به تماشای آثار از نزدیک علاقه‌مندید، نمایشگاه  به صورت حضوری در شرکت پتروپاس، واقع در تهران، سعادت‌آباد، بلوار فرهنگ میزبان شما خواهیم بود. فضایی حرفه‌ای و الهام‌بخش در انتظار شماست تا از نزدیک با جزئیات هنر خلاقانه این هنرمند ارتباط برقرار کنید.</p>
        </div>
    </div>
    <div class="container_left">
        <img src="http://localhost/WordpressWorkshop/wordpress/wp-content/uploads/2025/01/mmkwbqaymh.webp" alt="">

        <section class="max-w-2xl mx-auto p-6 ">
            <ul class="space-y-4">
                <li class="flex justify-between">
                    <span class="font-semibold text-lg text-gray-700">افتتاحیه:</span>
                    <span class="text-gray-600">1403/10/09</span>
                </li>   
                <hr class="li_hr">
                <br style="height: 6px;"> 
                <li class="flex justify-between">
                    <span class="font-semibold text-lg text-gray-700">اختتامیه:</span>
                    <span class="text-gray-600">1403/10/12</span>
                </li>  
                <hr class="li_hr">
                <br style="height: 6px;"> 
                <li class="flex justify-between">
                    <span class="font-semibold text-lg text-gray-700">زمان بازدید صبح:</span>
                    <span class="text-gray-600">8 الی 12</span>
                </li>  
                <hr class="li_hr">
                <br style="height: 6px;"> 
                <li class="flex justify-between">
                    <span class="font-semibold text-lg text-gray-700">زمان بازدید بعدازظهر:</span>
                    <span class="text-gray-600">15 الی 22</span>
                </li>
                <hr class="li_hr">  
                <br style="height: 6px;">  
                <li class="flex justify-between">
                    <span class="font-semibold text-lg text-gray-700">هزینه دسترسی آنلاین به نمایشگاه:</span>
                    <span class="text-gray-600">رایگان</span>
                </li>
            </ul>
            <button class="section_btn">ثبت نام</button>
        </section>
    </div>
</div>



<?php get_footer(); ?>

</body>
</html>