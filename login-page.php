<?php
/* Template Name: Login Page */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/loing & Singup-style.css?v=1.1" type="text/css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>ساخت اکانت </h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-github"></i></a>
                </div>
                <span>!با ایمیل خود ثبت نام کنید </span>
                <div class="infield">
                    <input type="text" placeholder="نام " />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="email" placeholder="ایمیل " name="email" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="رمز عبور" />
                    <label></label>
                </div>
                <button>!ثبت نام کنید </button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>وارد شوید </h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo $authUrl; ?>" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-github"></i></a>
                </div>
                <span>!وارد اکانت خود شوید و از خدمات ما استفاده کنید </span>
                <div class="infield">
                    <input type="email" placeholder="ایمیل " name="email" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="پسورد " />
                    <label></label>
                </div>
                <a href="#" class="forgot">رمز عبور خود را فراموش کردید ؟</a>
                <button>وارد شوید </button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1> !هنرنما</h1>
                    <p>فراتر از تجسم شما</p>
                    <button>وارد حساب خود شوید </button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>!خوش برگشتید </h1>
                    <p>تجربه فراتر از تجسم با ما</p>
                    <button>ساخت اکانت</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>

    <!-- js code -->
    <script>
        const container = document.getElementById('container')
        const overlaycon = document.getElementById('overlaycon')
        const overlayBtn = document.getElementById('overlayBtn')

        overlayBtn.addEventListener('click', () => {
            container.classList.toggle('right-panel-active');

            overlayBtn.classList.remove('btnScaled')
            window.requestAnimationFrame(() => {
                overlayBtn.classList.add('btnScaled');
            })


        });
    </script>

</body>

</html>