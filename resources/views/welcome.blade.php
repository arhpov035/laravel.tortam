<!doctype html>
<html lang="ru">
<head>
    <link rel="icon" href="favicon.ico">
    <title>Главная - MODX Revolution</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>

    <title>Hello, world!</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap_card_tovarov.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('fancybox/css/fancybox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('fancybox/css/panzoom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/adaptive.css') }}">


</head>
<body>
<a class="reset"></a>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="/">
            <img src="{{ url('img/LogoTop.png') }}" class="top" alt="" loading="lazy"
                 style="margin-top: -3px;"/>
            <img src="{{ url('img/logoBottom.png') }}" class="bottom" alt="" loading="lazy"/>
        </a>
        <noindex>
            <button type="button" class="btn btn-success mob top" style="display: none;">Заказать звонок</button>
        </noindex>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse center" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 add_phone">
                <li class="nav-item">
                    <a class="nav-link" href="product/kapkeyki/">
                        <img src="{{ url('img/icon/original-cupcake.jpg') }}" alt="Капкейки">
                        Капкейки
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product/torty/">
                        <img src="{{ url('img/icon/cake1.png') }}" alt="Торты">
                        Торты
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product/zefir/">
                        <img src="{{ url('img/icon/free-icon-marshmallow-1918904.png') }}" alt="Зефир">
                        Зефир
                    </a>

                </li>
            </ul>
            <button type="button" class="btn btn-success mob bottom" style="display: none;">Заказать звонок</button>
            <ul class="navbar-nav social_network">
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://vk.com/odeshop" rel="nofollow" target="_blank">
                        <img src="{{ url('img/icon/vk.png') }}" alt="">
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://t.me/+79004972740" rel="nofollow" target="_blank">
                        <img src="{{ url('img/icon/telegram.png') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar -->

<!-- Jumbotron -->

<!-- Jumbotron -->
</header>


<section class="main" style="background-color: #eee;">
    <div id="pdopage" class="text-center container py-5">
        <div class="row rows">
            <h2>Топ 10</h2>
            <div class="block_sort">
                <div class="items">
                    <div class="item">
                        <a class=""
                           href="/?sort=pagetitle&dir=DESC">По
                            имени</a>
                    </div>
                    <div class="item">
                        <a class="" href="/?sort=price&dir=DESC">По
                            цене</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                         data-mdb-ripple-color="light">
                        <img src="{{ url('img/ins/278045702_691877835352905_8653884343742406043_n.jpg') }}"
                             class="w-100 card_img" loading="lazy" alt="Капкейк 3">

                        <a href="product/kapkeyki/kapkeyk-3">
                            <div class="mask">
                                <div class="d-flex justify-content-start align-items-end h-100">
                                    <s class="green">
                                        <h5>


                                        </h5>
                                    </s>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body param">
                        <div class="block_top">
                            <!--                <p class="tpl_content">-->
                            <!--                    <img class="tpl_product_icon" src="original-cupcakejpg') }}" alt="">-->
                            <!--                    <a href="product/kapkeyki/" class="tpl_product_title">Капкейки</a>-->
                            <!--                </p>-->
                            <a href="product/kapkeyki/kapkeyk-3" class="text-reset">
                                <div class="parent_category">Капкейк 3</div>
                            </a>
                        </div>
                        <div class="block_bottom">
                            <h6 class="mb-3">

                                <div>Цена за 2 кг</div>


                                <div class="ms-2 price text-success bold">
                                    ₽
                                    <span class="price_js">3500</span>
                                </div>
                            </h6>

                        </div>
                    </div>
                    <a href="#!" class="btn btn-primary ripple-surface tpl_order" data-bs-toggle="modal"
                       data-bs-target="#placeOrderModal" tabindex="0">Заказать</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                         data-mdb-ripple-color="light">
                        <img src="{{ url('img/ins/277964890_277310644600450_4743255161510599923_n.jpg') }}"
                             class="w-100 card_img" loading="lazy" alt="Капкейк 2">

                        <a href="product/kapkeyki/kapkeyk-2">
                            <div class="mask">
                                <div class="d-flex justify-content-start align-items-end h-100">
                                    <s class="green">
                                        <h5>


                                        </h5>
                                    </s>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body param">
                        <div class="block_top">
                            <!--                <p class="tpl_content">-->
                            <!--                    <img class="tpl_product_icon" src="original-cupcakejpg') }}" alt="">-->
                            <!--                    <a href="product/kapkeyki/" class="tpl_product_title">Капкейки</a>-->
                            <!--                </p>-->
                            <a href="product/kapkeyki/kapkeyk-2" class="text-reset">
                                <div class="parent_category">Капкейк 2</div>
                            </a>
                        </div>
                        <div class="block_bottom">
                            <h6 class="mb-3">

                                <div>Цена за 2 кг</div>


                                <div class="ms-2 price text-success bold">
                                    ₽
                                    <span class="price_js">3500</span>
                                </div>
                            </h6>

                        </div>
                    </div>
                    <a href="#!" class="btn btn-primary ripple-surface tpl_order" data-bs-toggle="modal"
                       data-bs-target="#placeOrderModal" tabindex="0">Заказать</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                         data-mdb-ripple-color="light">
                        <img src="{{ url('img/photo_2022-05-30_13-55-02.jpg') }}" class="w-100 card_img" loading="lazy"
                             alt="Торт 1">

                        <a href="product/torty/produkt-dva">
                            <div class="mask">
                                <div class="d-flex justify-content-start align-items-end h-100">
                                    <s class="green">
                                        <h5>


                                        </h5>
                                    </s>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body param">
                        <div class="block_top">
                            <!--                <p class="tpl_content">-->
                            <!--                    <img class="tpl_product_icon" src="{{ url('img/icon/cake1.png') }}" alt="">-->
                            <!--                    <a href="product/torty/" class="tpl_product_title">Торты</a>-->
                            <!--                </p>-->
                            <a href="product/torty/produkt-dva" class="text-reset">
                                <div class="parent_category">Торт 1</div>
                            </a>
                        </div>
                        <div class="block_bottom">
                            <h6 class="mb-3">

                                <div>Цена за 2 кг</div>


                                <div class="ms-2 price text-success bold">
                                    ₽
                                    <span class="price_js">3000</span>
                                </div>
                            </h6>

                        </div>
                    </div>
                    <a href="#!" class="btn btn-primary ripple-surface tpl_order" data-bs-toggle="modal"
                       data-bs-target="#placeOrderModal" tabindex="0">Заказать</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                         data-mdb-ripple-color="light">
                        <img src="{{ url('img/ins/277735851_446388840614371_2850798150990065609_n.jpg') }}"
                             class="w-100 card_img" loading="lazy" alt="Капкейк 1">

                        <a href="product/kapkeyki/pervyy-kapkeyk">
                            <div class="mask">
                                <div class="d-flex justify-content-start align-items-end h-100">
                                    <s class="green">
                                        <h5>


                                        </h5>
                                    </s>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body param">
                        <div class="block_top">
                            <!--                <p class="tpl_content">-->
                            <!--                    <img class="tpl_product_icon" src="original-cupcakejpg') }}" alt="">-->
                            <!--                    <a href="product/kapkeyki/" class="tpl_product_title">Капкейки</a>-->
                            <!--                </p>-->
                            <a href="product/kapkeyki/pervyy-kapkeyk" class="text-reset">
                                <div class="parent_category">Капкейк 1</div>
                            </a>
                        </div>
                        <div class="block_bottom">
                            <h6 class="mb-3">

                                <div>Цена за 2 кг</div>


                                <div class="ms-2 price text-success bold">
                                    ₽
                                    <span class="price_js">3400</span>
                                </div>
                            </h6>

                        </div>
                    </div>
                    <a href="#!" class="btn btn-primary ripple-surface tpl_order" data-bs-toggle="modal"
                       data-bs-target="#placeOrderModal" tabindex="0">Заказать</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                         data-mdb-ripple-color="light">
                        <img src="{{ url('img/ins/287971470_136536748722102_1195394072049721301_n.jpg') }}"
                             class="w-100 card_img" loading="lazy" alt="Торт 19">

                        <a href="product/torty/tort-19">
                            <div class="mask">
                                <div class="d-flex justify-content-start align-items-end h-100">
                                    <s class="green">
                                        <h5>


                                        </h5>
                                    </s>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body param">
                        <div class="block_top">
                            <!--                <p class="tpl_content">-->
                            <!--                    <img class="tpl_product_icon" src="{{ url('img/icon/cake1.png') }}" alt="">-->
                            <!--                    <a href="product/torty/" class="tpl_product_title">Торты</a>-->
                            <!--                </p>-->
                            <a href="product/torty/tort-19" class="text-reset">
                                <div class="parent_category">Торт 19</div>
                            </a>
                        </div>
                        <div class="block_bottom">
                            <h6 class="mb-3">

                                <div>Цена за 2 кг</div>


                                <div class="ms-2 price text-success bold">
                                    ₽
                                    <span class="price_js">2560</span>
                                </div>
                            </h6>

                        </div>
                    </div>
                    <a href="#!" class="btn btn-primary ripple-surface tpl_order" data-bs-toggle="modal"
                       data-bs-target="#placeOrderModal" tabindex="0">Заказать</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                         data-mdb-ripple-color="light">
                        <img src="{{ url('img/ins/275413662_1015524392379060_8351304912857318155_n.jpg') }}"
                             class="w-100 card_img" loading="lazy" alt="Торт 5">

                        <a href="product/torty/kopiya-zefir-2">
                            <div class="mask">
                                <div class="d-flex justify-content-start align-items-end h-100">
                                    <s class="green">
                                        <h5>


                                        </h5>
                                    </s>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body param">
                        <div class="block_top">
                            <!--                <p class="tpl_content">-->
                            <!--                    <img class="tpl_product_icon" src="{{ url('img/icon/cake1.png') }}" alt="">-->
                            <!--                    <a href="product/torty/" class="tpl_product_title">Торты</a>-->
                            <!--                </p>-->
                            <a href="product/torty/kopiya-zefir-2" class="text-reset">
                                <div class="parent_category">Торт 5</div>
                            </a>
                        </div>
                        <div class="block_bottom">
                            <h6 class="mb-3">

                                <div>Цена за 2 кг</div>


                                <div class="ms-2 price text-success bold">
                                    ₽
                                    <span class="price_js">2560</span>
                                </div>
                            </h6>

                        </div>
                    </div>
                    <a href="#!" class="btn btn-primary ripple-surface tpl_order" data-bs-toggle="modal"
                       data-bs-target="#placeOrderModal" tabindex="0">Заказать</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                         data-mdb-ripple-color="light">
                        <img src="{{ url('img/ins/275418284_1048292646029692_3051564749320542255_n.jpg') }}"
                             class="w-100 card_img" loading="lazy" alt="Торт 6">

                        <a href="product/torty/kopiya-zefir1">
                            <div class="mask">
                                <div class="d-flex justify-content-start align-items-end h-100">
                                    <s class="green">
                                        <h5>


                                        </h5>
                                    </s>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body param">
                        <div class="block_top">
                            <!--                <p class="tpl_content">-->
                            <!--                    <img class="tpl_product_icon" src="{{ url('img/icon/cake1.png') }}" alt="">-->
                            <!--                    <a href="product/torty/" class="tpl_product_title">Торты</a>-->
                            <!--                </p>-->
                            <a href="product/torty/kopiya-zefir1" class="text-reset">
                                <div class="parent_category">Торт 6</div>
                            </a>
                        </div>
                        <div class="block_bottom">
                            <h6 class="mb-3">

                                <div>Цена за 2 кг</div>


                                <div class="ms-2 price text-success bold">
                                    ₽
                                    <span class="price_js">2560</span>
                                </div>
                            </h6>

                        </div>
                    </div>
                    <a href="#!" class="btn btn-primary ripple-surface tpl_order" data-bs-toggle="modal"
                       data-bs-target="#placeOrderModal" tabindex="0">Заказать</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                         data-mdb-ripple-color="light">
                        <img src="{{ url('img/ins/277360552_335979528502043_5788557003001443267_n.jpg') }}"
                             class="w-100 card_img" loading="lazy" alt="Торт 8">

                        <a href="product/torty/tort-8">
                            <div class="mask">
                                <div class="d-flex justify-content-start align-items-end h-100">
                                    <s class="green">
                                        <h5>


                                        </h5>
                                    </s>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body param">
                        <div class="block_top">
                            <!--                <p class="tpl_content">-->
                            <!--                    <img class="tpl_product_icon" src="{{ url('img/icon/cake1.png') }}" alt="">-->
                            <!--                    <a href="product/torty/" class="tpl_product_title">Торты</a>-->
                            <!--                </p>-->
                            <a href="product/torty/tort-8" class="text-reset">
                                <div class="parent_category">Торт 8</div>
                            </a>
                        </div>
                        <div class="block_bottom">
                            <h6 class="mb-3">

                                <div>Цена за 2 кг</div>


                                <div class="ms-2 price text-success bold">
                                    ₽
                                    <span class="price_js">2560</span>
                                </div>
                            </h6>

                        </div>
                    </div>
                    <a href="#!" class="btn btn-primary ripple-surface tpl_order" data-bs-toggle="modal"
                       data-bs-target="#placeOrderModal" tabindex="0">Заказать</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                         data-mdb-ripple-color="light">
                        <img src="{{ url('img/ins/280696361_477155780874614_406492900920153626_n.jpg') }}"
                             class="w-100 card_img" loading="lazy" alt="Торт 15">

                        <a href="product/torty/tort-15">
                            <div class="mask">
                                <div class="d-flex justify-content-start align-items-end h-100">
                                    <s class="green">
                                        <h5>


                                        </h5>
                                    </s>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body param">
                        <div class="block_top">
                            <!--                <p class="tpl_content">-->
                            <!--                    <img class="tpl_product_icon" src="{{ url('img/icon/cake1.png') }}" alt="">-->
                            <!--                    <a href="product/torty/" class="tpl_product_title">Торты</a>-->
                            <!--                </p>-->
                            <a href="product/torty/tort-15" class="text-reset">
                                <div class="parent_category">Торт 15</div>
                            </a>
                        </div>
                        <div class="block_bottom">
                            <h6 class="mb-3">

                                <div>Цена за 2 кг</div>


                                <div class="ms-2 price text-success bold">
                                    ₽
                                    <span class="price_js">2560</span>
                                </div>
                            </h6>

                        </div>
                    </div>
                    <a href="#!" class="btn btn-primary ripple-surface tpl_order" data-bs-toggle="modal"
                       data-bs-target="#placeOrderModal" tabindex="0">Заказать</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                         data-mdb-ripple-color="light">
                        <img src="{{ url('img/ins/287175774_3413581748874283_468874189875178056_n.jpg') }}"
                             class="w-100 card_img" loading="lazy" alt="Торт 18">

                        <a href="product/torty/tort-18">
                            <div class="mask">
                                <div class="d-flex justify-content-start align-items-end h-100">
                                    <s class="green">
                                        <h5>


                                        </h5>
                                    </s>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body param">
                        <div class="block_top">
                            <!--                <p class="tpl_content">-->
                            <!--                    <img class="tpl_product_icon" src="{{ url('img/icon/cake1.png') }}" alt="">-->
                            <!--                    <a href="product/torty/" class="tpl_product_title">Торты</a>-->
                            <!--                </p>-->
                            <a href="product/torty/tort-18" class="text-reset">
                                <div class="parent_category">Торт 18</div>
                            </a>
                        </div>
                        <div class="block_bottom">
                            <h6 class="mb-3">

                                <div>Цена за 2 кг</div>


                                <div class="ms-2 price text-success bold">
                                    ₽
                                    <span class="price_js">2560</span>
                                </div>
                            </h6>

                        </div>
                    </div>
                    <a href="#!" class="btn btn-primary ripple-surface tpl_order" data-bs-toggle="modal"
                       data-bs-target="#placeOrderModal" tabindex="0">Заказать</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="main" style="background-color: #eee; margin-top: 0">-->
<!--    <div class="ya_maps">-->
<!--        <div class="ya_maps">-->
<!--            <script src="//yastatic.net/taxi-widget/ya-taxi-widget.js"></script><div class="ya-taxi-widget" data-use-location="true" data-app="3" data-redirect="1178268795219780156" data-tariff="econom" data-lang="ru" data-size="m" data-title="Студенецкая Набережная, 8" data-point-a="" data-point-b="41.452822,52.729302" data-ref="https%3A%2F%2Ftortam.ru%2F" data-theme="normal" data-proxy-url="https://{app}.redirect.appmetrica.yandex.com/route?start-lat={start-lat}&amp;start-lon={start-lon}&amp;end-lat={end-lat}&amp;end-lon={end-lon}&amp;ref={ref}&amp;appmetrica_tracking_id={redirect}&amp;tariffClass={tariff}&amp;lang={lang}"></div>-->
<!--        </div>-->
<!--        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae351c502210d6f4b34687dac1cd9130d877e8afd5ee867014dedf9c8512e46f8&amp;width=1222&amp;height=577&amp;lang=ru_RU&amp;scroll=true"></script>-->
<!--    </div>-->
<!--</section>-->
<!-- Modal -->
<div class="modal fade" id="placeOrderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered filling">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="modal-header">
                        <div class="h2 formModalTitleOrder">Оформление заказа</div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="col-8 form_order_block">
                        <div class="row">
                            <div class="col text-center">
                                <div class="h2 text-center">Информация о заказе</div>
                                <div class="col">
                                    <img class="w-25 img_inser" src="{{ url('img/184.jpg') }}" alt="Product name">
                                </div>

                                <div class="cake_price">
                                    <div class="h5">Product name</div>
                                    <span class="bold">Цена:</span> <span class="insertPrice"></span> р.
                                </div>
                                <div class="cake_weight">
                                    <span class="bold">Вес торта:</span> <span class="insertKg">2</span> кг
                                    <div class="insertWeightsSlide">
                                        <div class="weights slide">
                                            <div class="item border rounded active" data-title="c1">
                                                <div class="num_kg">
                                                    <div>2</div>
                                                    <div>кг</div>
                                                </div>
                                                <div class="hint">
                                                    <div>3 - 5</div>
                                                    <div>человек</div>
                                                </div>
                                            </div>
                                            <div class="item border rounded" data-title="c2">
                                                <div class="num_kg">
                                                    <div>2.5</div>
                                                    <div>кг</div>
                                                </div>
                                                <div class="hint">
                                                    <div>5 - 7</div>
                                                    <div>человек</div>
                                                </div>
                                            </div>
                                            <div class="item border rounded" data-title="c3">
                                                <div class="num_kg">
                                                    <div>3</div>
                                                    <div>кг</div>
                                                </div>
                                                <div class="hint">
                                                    <div>7 - 9</div>
                                                    <div>человек</div>
                                                </div>
                                            </div>
                                            <div class="item border rounded four" data-title="c4">
                                                <div class="num_kg">
                                                    <div>4</div>
                                                    <div>кг</div>
                                                </div>
                                                <div class="hint">
                                                    <div>9 - 11</div>
                                                    <div>человек</div>
                                                </div>
                                            </div>
                                            <div class="item border rounded" data-title="c5">
                                                <div class="num_kg">
                                                    <div>5</div>
                                                    <div>кг</div>
                                                </div>
                                                <div class="hint shipping">
                                                    <div>11 - 13</div>
                                                    <div>человек</div>
                                                    <div class="free_shipping">бесплатная<br> доставка</div>
                                                </div>
                                            </div>
                                            <div class="item border rounded hide" data-title="c6">
                                                <div class="num_kg">
                                                    <div>6</div>
                                                    <div>кг</div>
                                                </div>
                                                <div class="hint shipping">
                                                    <div>13 - 15</div>
                                                    <div>человек</div>
                                                    <div class="free_shipping">бесплатная<br> доставка</div>
                                                </div>
                                            </div>
                                            <div class="item border rounded hide" data-title="c7">
                                                <div class="num_kg">
                                                    <div>7</div>
                                                    <div>кг</div>
                                                </div>
                                                <div class="hint shipping">
                                                    <div>15 - 17</div>
                                                    <div>человек</div>
                                                    <div class="free_shipping">бесплатная<br> доставка</div>
                                                </div>
                                            </div>
                                            <div class="item border rounded hide" data-title="c8">
                                                <div class="num_kg">
                                                    <div>8</div>
                                                    <div>кг</div>
                                                </div>
                                                <div class="hint shipping">
                                                    <div>17 - 19</div>
                                                    <div>человек</div>
                                                    <div class="free_shipping">бесплатная<br> доставка</div>
                                                </div>
                                            </div>
                                            <div class="item border rounded hide" data-title="c9">
                                                <div class="num_kg">
                                                    <div>9</div>
                                                    <div>кг</div>
                                                </div>
                                                <div class="hint shipping">
                                                    <div>19 - 21</div>
                                                    <div>человек</div>
                                                    <div class="free_shipping">бесплатная<br> доставка</div>
                                                </div>
                                            </div>
                                            <div class="item border rounded hide" data-title="c10">
                                                <div class="num_kg">
                                                    <div>10</div>
                                                    <div>кг</div>
                                                </div>
                                                <div class="hint shipping">
                                                    <div>21 - 23</div>
                                                    <div>человек</div>
                                                    <div class="free_shipping">бесплатная<br> доставка</div>
                                                </div>
                                            </div>
                                            <div class="item border rounded hide" data-title="c11">
                                                <div class="num_kg">
                                                    <div>11</div>
                                                    <div>кг</div>
                                                </div>
                                                <div class="hint shipping">
                                                    <div>23 - 25</div>
                                                    <div>человек</div>
                                                    <div class="free_shipping">бесплатная<br> доставка</div>
                                                </div>
                                            </div>
                                            <div class="item border rounded more">
                                                <img class="" src="{{ url('img/svg/expand-less.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="bold">Начинка:</span> <span
                                        class="insertTitleFiling">Птичье молоко</span>
                                    <div class="row">
                                        <div class="filling sliders prew">
                                            <div class="slider">
                                                <img src="{{ url('img/praga-shok.jpg') }}" alt="Прага шоколадная">
                                                <div class="desc_slide">
                                                    <div class="title">Прага шоколадная</div>
                                                    <button type="button" class="btn btn-outline-primary get_filling"
                                                            data-id="9" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal">Подробнее
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="slider">
                                                <img src="{{ url('img/bird-milk.jpg') }}" alt="Птичье молоко">
                                                <div class="desc_slide">
                                                    <div class="title">Птичье молоко</div>
                                                    <button type="button" class="btn btn-outline-primary get_filling"
                                                            data-id="10" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal">Подробнее
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="slider">
                                                <img src="smetannik.jpg') }}" alt="Сметанник">
                                                <div class="desc_slide">
                                                    <div class="title">Сметанник</div>
                                                    <button type="button" class="btn btn-outline-primary get_filling"
                                                            data-id="11" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal">Подробнее
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="slider">
                                                <img src="{{ url('img/trufel-s-romom-2.jpg') }}" alt="Трюфель с ромом">
                                                <div class="desc_slide">
                                                    <div class="title">Трюфель с ромом</div>
                                                    <button type="button" class="btn btn-outline-primary get_filling"
                                                            data-id="23" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal">Подробнее
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--                    <div>Надпись: Без надписи</div>-->
                            </div>
                        </div>
                        <div class="h2 text-center text-danger" style="margin-top: 20px;">Заполните форму!</div>
                        <form class="ajax_form" id="formOrder" action="" method="post">
                            <input type="hidden" name="checkbox" value="">

                            <input id="number_order" type="hidden" name="number_order"
                                   value="5">
                            <input type="hidden" name="img" value="https://tortam.ru/">
                            <input type="hidden" name="href" value="">
                            <input type="hidden" name="id_product" value="">
                            <input type="hidden" name="title" value="">
                            <input type="hidden" name="price" value="">
                            <input type="hidden" name="weight" value="">
                            <input type="hidden" name="filling" value="">
                            <input type="hidden" name="inscription" value="Без надписи">
                            <div class="mb-3">
                                <input type="name" name="name" class="form-control" id="form_name_order"
                                       aria-describedby="emailHelp" placeholder="Введите имя" value="">
                                <span class="error_name"></span>
                            </div>
                            <div class="mb-3">
                                <input type="tel" name="tel" class="form-control" id="form_tel_order"
                                       placeholder="+7(999) 999-9999">
                                <span class="error_tel"></span>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="checkbox" id="exampleCheck1">
                                <label class="form-check-label checkbox" for="exampleCheck1">Я согласен на обработку
                                    персональных
                                    данных</label>
                            </div>

                            <button type="submit" class="btn btn-primary orderSubmit">Заказать</button>


                            <input type="hidden" name="af_action" value="b89c4ca539a7e7c322d2ded361a17dce"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog filling">
        <div class="modal-content filling_replace">

        </div>
    </div>
</div>


<!--Footer-->
<footer class="bg-light text-lg-start">
    <div class="py-4 text-center">

    </div>

    <hr class="m-0"/>

    <div class="text-center py-4 align-items-center">
        <ul class="navbar-nav social_network">
            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://vk.com/odeshop" rel="nofollow" target="_blank">
                    <img src="{{ url('img/icon/vk.png') }}" alt="">
                </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://t.me/+79004972740" rel="nofollow" target="_blank">
                    <img src="{{ url('img/icon/telegram.png') }}" alt="">
                </a>
            </li>
        </ul>
    </div>
    </div>


    <div class="nav_bar_menu_bottom_fixed">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 add_phone">
                    <li class="nav-item">
                        <a class="nav-link" href="product/kapkeyki/">
                            <img src="{{ url('img/icon/original-cupcake.jpg') }}" alt="Капкейки">
                            Капкейки
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product/torty/">
                            <img src="{{ url('img/icon/cake1.png') }}" alt="Торты">
                            Торты
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product/zefir/">
                            <img src="{{ url('img/free-icon-marshmallow-1918904.png') }}" alt="Зефир">
                            Зефир
                        </a>

                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('js/inputMask.js') }}"></script>
    <script src="{{ url('js/slick.js') }}"></script>
    <script src="{{ url('js/slides.js') }}"></script>
    <script src="{{ url('fancybox/js/fancybox.umd.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
    <script src="{{ url('js/function.js') }}"></script>
    <script src="{{ url('js/ajax.js') }}"></script>
    <script src="{{ url('js/mdb.min.js') }}"></script>


</body>
</html>
