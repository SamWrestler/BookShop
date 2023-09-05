<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/iransans.css" />
    <link rel="stylesheet" href="css/rubik.css" />
    <link rel="stylesheet" href="css/style.css" />
    @yield('style')
    <link rel="stylesheet" href="Fonts/FontAwesome/css/all.css" />
    <title>دکتر آرش رهسپار</title>
</head>
<body>
@yield('content')
<footer>
    <div class="footer__content">
        <h2>راه های ارتباطی</h2>
        <hr />
        <div class="media">
            <article>
                <i class="fa-brands fa-instagram"></i>
                <h2>اینستاگرام</h2>
            </article>
        </div>
    </div>
</footer>
@yield('script')
<script src="js/app.js"></script>
</body>
</html>
