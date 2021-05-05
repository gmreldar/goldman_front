<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache"/>
    <meta http-equiv="cache-control" content="max-age=604800"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('keywords')
    @yield('description')

    <title>@yield('title')</title>

    <link href="{{ asset('/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/fonts/fontawesome/css/all.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/ui.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet"/>
    @stack('style')
</head>
<body>

<header class="section-header">
    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-1 col-4">
                    <a href="http://bootstrap-ecommerce.com" class="brand-wrap">
                        <img class="logo" src="{{ asset('/images/logo.png') }}">
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="row">
                        <div class="col-md-1">
                            <span class="header__phone-icon"><i class="fa fa-phone"></i></span>
                        </div>
                        <div class="col-md-11">
                            <span class="header__phone-number"><a href="tel:79785210808">+7(978) 521-08-08 (с 10:00 до 22:00)</a></span>
                            <div class="header__work-time">
                                Заказы оформляются только через сайт
                            </div>
                        </div>
                    </div>
                </div> <!-- col.// -->
                <div class="col-lg-7 col-sm-6 col-12 text-right">
                    <div class="header__lk">
                        <div class="icontext mr-4">
                            <div class="icon icon-xs rounded-circle bg-light ">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="notify">5</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
</header> <!-- section-header.// -->
<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse sub__header" id="main_nav">
            <ul class="navbar-nav">
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="/category/{{ $category->slug }}">{{ $category->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div> <!-- collapse .// -->
    </div> <!-- container .// -->
</nav>

@yield('content')

<footer class="section-footer border-top">
    <div class="container">
        <section class="footer-top padding-y">
            <div class="row">
                <aside class="col-md-3">
                    <h6 class="title">О магазине</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Оплата</a></li>
                        <li><a href="#">Возврат</a></li>
                    </ul>
                </aside>
                <aside class="col-md-3">
                    <h6 class="title">Статьи</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Как выбрать ювелирное украшение</a></li>
                        <li><a href="#">Все об уходе за ювелирными изделиями</a></li>
                        <li><a href="#">Все статьи</a></li>
                    </ul>
                </aside>
            </div> <!-- row.// -->
        </section>    <!-- footer-top.// -->

        <section class="footer-bottom border-top row footer__items">
            <div class="col-md-6">
                <a href="#">Политика конфедициальности</a>
            </div>
            <div class="col-md-6 text-md-right footer__social">
                <div class="footer__social-links">
                    <i class="fab fa-vk"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </section>
    </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/script.js') }}" type="text/javascript"></script>
{{--<script src="{{ asset('/js/custom.js') }}" type="text/javascript"></script>--}}
@stack('scripts')
</body>
</html>
