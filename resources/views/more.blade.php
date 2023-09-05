@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="/css/more.css">
    <link rel="stylesheet" href="splide/dist/css/splide.min.css" />

@endsection
@section('content')
    <section class="hero">
        <nav class="container">
            <i class="fa-light fa-cart-shopping" id="open-cart"></i>
            <a href="#"><i class="far fa-arrow-left"></i></a>
        </nav>
        <div class="cover" id="cover"></div>
        <section class="navigation" id="navigation">
            <div class="close">
                <i class="fa-solid fa-xmark-large" id="close-cart"></i>
            </div>
            <div class="navigation__title">
                <div class="frame">
                    <i class="fa-regular fa-cart-shopping"></i>
                </div>
                <h2>سبد خرید</h2>
            </div>
            <div class="navigation__cart container">
                <table>
                    <tr>
                        <th>عنوان</th>
                        <th>تعداد</th>
                        <th>قیمت</th>
                        <th>حذف</th>
                    </tr>
                    <tr>
                        <td>1.خرد ذهن</td>
                        <td>
                            <form action="">
                                <select name="" id="">
                                    <option value="1">1</option>
                                </select>
                            </form>
                        </td>
                        <td>۱۲۷۰۰۰ ءتء</td>
                        <td>
                            <div class="delete">
                                <a href="#">حذف از سبد</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2.خشم بی خشم</td>
                        <td>
                            <form action="">
                                <select name="" id="">
                                    <option value="1">1</option>
                                </select>
                            </form>
                        </td>
                        <td>۱۲۷۰۰۰ ءتء</td>
                        <td>
                            <div class="delete">
                                <a href="#">حذف از سبد</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>۳.زبان بدن</td>
                        <td>
                            <form action="">
                                <select name="" id="">
                                    <option value="1">1</option>
                                </select>
                            </form>
                        </td>
                        <td>۱۲۷۰۰۰ ءتء</td>
                        <td>
                            <div class="delete">
                                <a href="#">حذف از سبد</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="navigation__total">
                <div class="price">
                    <h2>جمع کل</h2>
                    <h2>۳۸۱۰۰۰ ءتء</h2>
                </div>
                <a href="#" class="buy-btn">ادامه فرآیند و پرداخت</a>
            </div>
        </section>
        <hr />
        <section class="splide container" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="images/khashm.jpg" alt="khashm" height="350px" />
                    </li>
                    <li class="splide__slide">
                        <img src="images/khashm.jpg" alt="khashm" height="350px" />
                    </li>
                    <li class="splide__slide">
                        <img src="images/khashm.jpg" alt="khashm" height="350px" />
                    </li>
                </ul>
            </div>
        </section>
        <hr />
    </section>
    <section class="info container">
        <div class="first-row">
        <span>
          <h2 class="subject">عنوان کتاب:</h2>
          <h2 class="body">خرد ذهن</h2>
        </span>
            <span>
          <h2 class="subject">موضوع:</h2>
          <h2 class="body">خرد ذهن</h2>
        </span>
        </div>
        <div class="second-row">
        <span>
          <h2 class="subject">نویسنده:</h2>
          <h2 class="body">خرد ذهن</h2>
        </span>
            <span>
          <h2 class="subject">مترجم:</h2>
          <h2 class="body">خرد ذهن</h2>
        </span>
        </div>
        <div class="third-row">
        <span>
          <h2 class="subject">خلاصه:</h2>
          <h2>
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
            ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
            در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را
            می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
            الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این
            صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و
            شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای
            اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
            استفاده قرار گیرد.
          </h2>
        </span>
        </div>
    </section>
    <section class="price__section container">
        <div class="price__fee">
            <h2>قیمت:</h2>
            <span>
          <h2>۱۹۲۰۰۰</h2>
          <h2>ءتء</h2>
        </span>
        </div>
        <button class="add__to__cart" id="add__to__cart">
            <h2>افزودن به سبد خرید</h2>
            <i class="fas fa-shopping-cart"></i>
            <i class="far fa-check"></i>
        </button>
    </section>
@endsection
@section('script')
    <script src="splide/dist/js/splide.min.js"></script>
    <script src="/js/more.js"></script>
    <script>
        new Splide(".splide").mount();
    </script>
@endsection
