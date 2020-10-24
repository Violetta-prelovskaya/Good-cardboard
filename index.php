<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="css/animate.css"> 
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap">
    <title>Document</title>

    <?php wp_head(); ?>
</head>
<body>
    <!-- Меню -->

    <section id="menu">
        <div class="menu-big">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#main">о компании</a></li>
                    <li><a href="#features">преимущества</a></li>
                    <li><a href="#productions">производство</a></li>
                    <li><a href="#products">продукция</a></li>
                    <li><a href="#client">наши клиенты</a></li>
                    <li><a href="#reviews">сертификаты</a></li>
                    <li><a href="#reviews">отзывы</a></li>
                    <li><a href="#contacts">контакты</a></li>
                </ul>
            </nav>
        </div>
        </div>

        <div class="menu-burger">
            <nav class="nav">
                <ul>
                    <li class="nav-item"><a href="#main" class="nav-link">о компании</a></li>
                    <li class="nav-item"><a href="#features" class="nav-link">преимущества</a></li>
                    <li class="nav-item"><a href="#productions" class="nav-link">производство</a></li>
                    <li class="nav-item"><a href="#products" class="nav-link">продукция</a></li>
                    <li class="nav-item"><a href="#client" class="nav-link">наши клиенты</a></li>
                    <li class="nav-item"><a href="#reviews" class="nav-link">сертификаты</a></li>
                    <li class="nav-item"><a href="#reviews" class="nav-link">отзывы</a></li>
                    <li class="nav-item"><a href="#contacts" class="nav-link">контакты</a></li>
                </ul>
            </nav>
        </div>

    </section>
    <!-- /Меню -->

    <div class="popup__form">
    <form action="#">
    <div class="popup__title">
    Форма обратной связи
    </div>
    <div class="popup__subtitle">
    Получите индивидуальное предложение на производство и поставку изделий
    </div>
    <div class="popup__label">
    Введите ваш номер телефона:
    </div>
    </form>
    </div>

    <!-- Шапка приложения -->
    <header class="header">

        <!-- container -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4 col-lg-4 col-md-5 col-sm-5">

                    <!-- header-menu -->
                    <div class="header-menu">
                        <a href="#" class="menu-btn hidden">
                            <span></span>
                        </a>
                    </div>
                    <!-- /header-menu -->

                    <!-- header-logo -->
                    <div class="header-logo">
                        <img class="header-logo__logo" src="images/header/header-logo.png" alt="Логотип">
                        <img class="header-logo__logo-small" src="images/header/header-logo-small.png" alt="Логотип">
                    </div> 
                    <!-- /header-logo -->
                </div>
                <div class="col-8 col-lg-8 col-md-7 col-sm-7">

                    <div class="header-text">

                        <!-- header-text__phone -->
                        <div class="header-text__phone">

                        <!-- phone-number -->
                        <div class="phone-number">
                            8 (347) <span class="bold">271-54-28</span>
                        </div>
                        <!-- /phone-number -->

                        <!-- phone-number -->
                        <div class="phone-number">
                            8 (937) <span class="bold">363-30-00</span>
                        </div>
                        <!-- /phone-number -->

                        </div>
                        <!-- /header-text__phone -->

                        <!-- header-text__button -->
                            <button class="header-text__button"><img class="header-text__icon" src="images/header/icon-phone.png"><span class="button-text">Заказать звонок</button>                  
                        <!-- /header-button -->

                    </div>
                </div>      
            </div>
        </div>
        <!-- /container -->
    </header>
    <!-- /Шапка приложения -->

    <!-- Main section -->

    <section id="main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-0 col-lg-6 col-md-0 col-sm-0">

                    <!-- main-img -->

                    <div class="main-img wow slideInLeft">
                    <img src="images/main/main-cardboard.png" alt="">
                    </div>

                    <!-- /main-img -->

                </div>

                <div class="col-12 col-lg-6 col-md-12 col-sm-12">

                    <!-- main-text -->

                    <div class="main-text wow slideInRight">
                        <h1 class="main-text__title">Производство упаковки из гофрокартона</h1>
                        <p class="main-text__subtitle">с доставкой по всей России</p>
                    </div>

                    <!-- /main-text -->

                    <!-- main-text__wrap -->

                    <div class="main-text__wrap">
                        <div class="main-text__form">
                            <p class="form-title">Получите индивидуальное предложение на производство и поставку гофропродукции</p>
                            <p class="form-subtitle">Образцы упаковки бесплатно</p>
                        </div>

                            <!-- form -->

                            <form class="form" action="#">
                            <input class="form-input" id="phone" placeholder="Введите номер телефона" type="tel">
                            <button class="form-button">Оставить заявку!</button>
                            </form>

                            <!-- /form -->

                            <span class="form-important">*Минимальный заказ 500 шт.</span>
                    </div>

                    <!-- /main-text__wrap -->

                </div>
            </div>
        </div>
    </section>

    <!-- /Main section -->



    <!-- Секция с фичами -->

    <section id="features">
        <div class="container px-0">
            <div class="features-line">
                <div class="features-progress">
                    <h2 class="progress-title">5 лет</h2>
                    <p class="progress-subtitle">На рынке изделий из гофрокартона</h3>
                </div>
                <div class="features-progress">
                    <h2 class="progress-title">до 5 000 000 м<sup>2</sup></h2>
                    <p class="progress-subtitle">Ежемесячный объем производства гофрокартона</h3>
                </div>
                <div class="features-progress">
                    <h2 class="progress-title">4 000 м<sup>2</sup></h2>
                    <p class="progress-subtitle">Площадь склада</h3>
                </div>
            </div>

            <div class="clearfix"></div>


            <div class="features-line">

                <div class="features-card  wow fadeInUp">
                    <div class="features-icon">
                        <img src="images/features/production.png" alt="">
                    </div>
                    <div class="features-text">
                        <h3 class="features-title">Производство</h3>
                        <h4 class="features-subtitle">4 технологические линии спо&shy;собны выполнить любой за&shy;каз любой сложности</h4>
                    </div>
                </div>

                <div class="features-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="features-icon">
                        <img src="images/features/samples.png" alt="">
                    </div>
                    <div class="features-text">
                        <h3 class="features-title">Бесплатные образцы</h3>
                        <h4 class="features-subtitle">Бесплатно делаем образцы гофроупаковки - это помогает заранее увидеть упаковку</h4>
                    </div>
                </div>

                <div class="features-card wow fadeInUp" data-wow-delay="0.4s">
                    <div class="features-icon">
                        <img src="images/features/quality.png" alt="">
                    </div>
                    <div class="features-text">
                        <h3 class="features-title">Стабильное качество</h3>
                        <h4 class="features-subtitle">Собственная лаборатория контролирует качество на каждом этапе производства</h4>
                    </div>
                </div>

                <div class="features-card wow fadeInUp" data-wow-delay="0.6s">
                    <div class="features-icon">
                        <img src="images/features/warehouse.png" alt="">
                    </div>
                    <div class="features-text">                    
                        <h3 class="features-title">Страховой запас</h3>
                        <h4 class="features-subtitle">Можем хранить запас гофро&shy;продукции на своих складах и поставлять партиями</h4>
                    </div>
                </div>

                <div class="features-card wow fadeInUp" data-wow-delay="0.8s">
                    <div class="features-icon">
                        <img src="images/features/print.png" alt="">
                    </div>
                    <div class="features-text">
                        <h3 class="features-title">Флексопечать</h3>
                        <h4 class="features-subtitle">Возможно нанесение вашего логотипа, текста или манипуляцион&shy;ных знаков</h4>
                    </div>
                </div>

                <div class="features-card wow fadeInUp" data-wow-delay="1s">
                    <div class="features-icon">
                        <img src="images/features/technology.png" alt="">
                    </div>
                    <div class="features-text">
                        <h3 class="features-title">Гидрофобные добавки</h3>
                        <h4 class="features-subtitle">На производстве реализована технология, которая позволяет гофрокартону стать прочнее</h4>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>

        </div>
    </section>

    <!-- /Секция с фичами -->

    <!-- Секция с карточками продуктов -->

    <section id="products">
        <div class="container">
            <h2 class="products-title">наша продукция</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="products-block">
                        <div class="products-img wow slideInLeft">
                            <img src="images/products/product_1.jpg" alt="Гофрокороб 4-х клапанный">
                        </div>
                        <h4 class="products-block__title">Гофрокороб 4-х клапанный</h4>
                        <button class="products-button button-o">Подробнее</button>
                        <button class="products-button">Получить рассчет</button>
                    </div>

                </div>
                <div class="col-12 col-lg-6">
                    <div class="products-block">
                        <div class="products-img wow slideInRight">
                            <img src="images/products/product_2.jpg" alt="Гофролоток">
                        </div>
                        <h4 class="products-block__title">Гофролоток</h4>
                        <button class="products-button button-o">Подробнее</button>
                        <button class="products-button">Получить рассчет</button>
                    </div>                    
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="products-block">
                        <div class="products-img wow slideInLeft">
                            <img src="images/products/product_3.jpg" alt="Гофрокороб самосборный (сложная высечка)">
                        </div>
                        <h4 class="products-block__title">Гофрокороб самосборный <span class="break">(сложная высечка)</span></h4>
                        <button class="products-button button-o">Подробнее</button>
                        <button class="products-button">Получить рассчет</button>
                    </div>

                </div>
                <div class="col-12 col-lg-6">
                    <div class="products-block">
                        <div class="products-img wow slideInRight">
                            <img src="images/products/product_4.jpg" alt="Листовой гофрокартон">
                        </div>
                        <h4 class="products-block__title">Листовой гофрокартон</h4>
                        <button class="products-button button-o">Подробнее</button>
                        <button class="products-button">Получить рассчет</button>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

    <!-- /Секция с карточками продуктов -->


    <!-- Секция с индивидуальным предложением -->

    <section id="offer">
        <div class="container">
            <div class="offer-text">
                <h3 class="offer-text__title">Получите индивидуальное предложение</h3>
                <h4 class="offer-text__subtitle">на производство и поставку изделий</h4>
                <p class="offer-text__type">Введите ваш номер телефона:</p>

                <!-- form -->

                <form class="offer-form" action="#">
                <input class="input-o" id="phone2" placeholder="+7 (XXX) XXX-XX-XX" type="tel">
                <button class="form-button">Оставить заявку!</button>

                </form>

                <span class="form-important important">*Минимальный заказ 500 шт.</span>
                    
                <!-- /form -->
            </div>
        </div>
    </section>

    <!-- /Секция с индивидуальным предложением -->

    <!-- Секция со слайдером -->

    <section id="productions">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 order-lg-first col-12">
                    <div class="productions-slider-top">
                        <img src="images/productions/pic_1.jpg" alt="Гофропродукция">
                        <img src="images/productions/pic_2.jpg" alt="Гофропродукция">
                        <img src="images/productions/pic_3.jpg" alt="Гофропродукция">
                        <img src="images/productions/pic_4.jpg" alt="Гофропродукция">
                        <img src="images/productions/pic_5.jpg" alt="Гофропродукция">
                        <img src="images/productions/pic_6.jpg" alt="Гофропродукция">
                    </div>
                    <div class="productions-slider-bottom">
                        <div class="productions-slider__item"><img src="images/productions/pic_1.jpg" alt="Гофропродукция"></div>
                        <div class="productions-slider__item"><img src="images/productions/pic_2.jpg" alt="Гофропродукция"></div>
                        <div class="productions-slider__item"><img src="images/productions/pic_3.jpg" alt="Гофропродукция"></div>
                        <div class="productions-slider__item"><img src="images/productions/pic_4.jpg" alt="Гофропродукция"></div>
                        <div class="productions-slider__item"><img src="images/productions/pic_5.jpg" alt="Гофропродукция"></div>
                        <div class="productions-slider__item"><img src="images/productions/pic_6.jpg" alt="Гофропродукция"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-first">
                    <div class="productions-block">
                        <h2 class="productions-block__title">Производство</h2>
                        <p class="productions-block__text">Современное оборудование позволяет производить до 5 миллионов квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам заказчика.</p>
                        <p class="productions-block__text">Досконально прорабатываем конструкции коробов и составы сырья, учитывая условия хранения, транспортировки и производства вашей продукции.</p>
                        <p class="productions-block__text">Возможно нанесение цветной флексопечати на поверхность коробов.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /Секция со слайдером -->

    <!-- Секция с клиентами -->

    <section id="client">
        <div class="container">

            <h2 class="client-title">наши клиенты</h2>

            <div class="client-box">

                <div class="client-box__line">

                    <div class="client-card card-odd wow fadeInUp">
                        <img src="images/clients/sunrise.png" alt="Восход">
                    </div>

                    <div class="client-card card-even wow fadeInUp" data-wow-delay="0.1s">
                        <img src="images/clients/siberian_crane.png" alt="СТЕРХ">
                    </div>

                    <div class="client-card card-odd wow fadeInUp" data-wow-delay="0.2s">
                        <img src="images/clients/silver_snow.png" alt="Серебряный снег">
                    </div>

                    <div class="client-card card-even wow fadeInUp" data-wow-delay="0.3s">
                        <img src="images/clients/avdon.png" alt="Авдон">
                    </div>

                </div>

                <div class="client-box__line">

                    <div class="client-card card-odd wow fadeInUp" data-wow-delay="0.4s">
                        <img src="images/clients/broiler.png" alt="Турбаслинские бройлеры">
                    </div>

                    <div class="client-card card-even wow fadeInUp" data-wow-delay="0.5s">
                        <img src="images/clients/bashkir_icecream.png" alt="Башкирское мороженое">
                    </div>

                    <div class="client-card card-odd wow fadeInUp" data-wow-delay="0.6s">
                        <img src="images/clients/allat.png" alt="Аллат">
                    </div>

                    <div class="client-card card-even wow fadeInUp" data-wow-delay="0.7s">
                        <img src="images/clients/Alternative.png" alt="Альтернатива">
                    </div>

                 </div>

                <div class="client-box__line">

                    <div class="client-card card-odd wow fadeInUp" data-wow-delay="0.8s">
                        <img src="images/clients/Indushkin.png" alt="Индюшкин">
                    </div>

                    <div class="client-card card-even wow fadeInUp" data-wow-delay="0.9s">
                        <img src="images/clients/salavat.png" alt="САЛАВАТСТЕКЛО">
                    </div>

                    <div class="client-card card-odd wow fadeInUp" data-wow-delay="1s">
                        <img src="images/clients/dairy_farmer.png" alt="Молочный фермер">
                    </div>

                    <div class="client-card card-even wow fadeInUp" data-wow-delay="1.1s">
                        <img src="images/clients/Megy.png" alt="МЕГИ">
                    </div>

                 </div>

        </div>
    </section>

    <!-- /Секция с клиентами -->

    <!-- Секция с отзывами -->

    <section id="reviews">
        <div class="container">
        <h2 class="reviews-title">Отзывы о сотрудничестве</h2>
        <div class="reviews-slider">
            <div class="reviews-slider_item"><img src="images/reviews/review_1.jpg" alt="Отзыв"></div>
            <div class="reviews-slider_item"><img src="images/reviews/review_2.jpg" alt="Отзыв"></div>
            <div class="reviews-slider_item"><img src="images/reviews/review_3.jpg" alt="Отзыв"></div>
            <div class="reviews-slider_item"><img src="images/reviews/review_1.jpg" alt="Отзыв"></div>
            <div class="reviews-slider_item"><img src="images/reviews/review_2.jpg" alt="Отзыв"></div>
            <div class="reviews-slider_item"><img src="images/reviews/review_3.jpg" alt="Отзыв"></div>            
        </div>
    </div>
    </section>

    <!-- /Секция с отзывами -->

    <!-- Контактная информация -->

    <section id="contacts">
        <div class="contacts-info">
            <h2 class="contacts-info_title">контакты</h2>
            <div class="contacts-info_info">
                <div class="info-text">
                <h4 class="info-title title-office">Адрес офиса</h4>
                <p>г. Уфа, Проспект октября, 46</p>
                </div>
                <div class="info-text">
                <h4 class="info-title">Адрес склада</h4>
                <p>г. Уфа, ул. Майкопская, 65/2</p>
                </div>
            </div>
            <div class="contacts-info_info">
                <div class="info-text">
                <h4 class="info-title title-phone">Тел.отдела продаж</h4>
                <p><a href="tel:+73472715428">8 (347) 271-54-28</a></p>
                <p><a href="tel:+79373633000">8 (937) 363-30-00</a></p>
                <button class="contacts-button">Заказать звонок</button>
                </div>
            </div>
            <div class="contacts-info_info info-mail">
                <div class="info-text title-mail">
                <h4 class="info-title">Е-mail</h4>
                <p><a href="mailto:urals.karton@gmail.com">urals.karton@gmail.com</a></p> 
                </div>
            </div>
            </div>
    <!-- Контактная информация -->
            
    <!-- Карта -->
    <div class="contacts-map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A748c1f44b8eadab0cdcf65d1f4659eacc3b3d62bc87f6dd7a36b113326d0411d&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=false"></script>       
    </div>
    <!-- /Карта -->
    </section>

    <!-- Подвал -->

    <section id="footer">
       <div class="container">
            <p class="footer-text">© www.gofra-ural.ru 2016, все права защищены</p>
       </div>
    </section>
    <!-- /Подвал -->

    <!-- Подключение анимации -->

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- Подключение слайдеров -->

    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="slick/slick.min.js"></script>

    <script src="js/jquery.maskedinput.min.js"></script>
    <script>
        jQuery(function($) {
            $("#phone, #phone2").mask("+7 (999) 999-99-99");
        });
    </script>

    <script>
        $('.menu-btn').on('click', function(e) {
            e.preventDefault;
            $(this).toggleClass('menu-btn_active');
            $('.menu-burger').toggleClass('menu-burger_active');
        });
        $('.nav-link').click(function() {
            $('.menu-burger').removeClass('menu-burger_active');
            $('.nav-link').removeClass('nav-link_active');
            $('.menu-btn').removeClass('menu-btn_active');
        });
    </script>
    
    <script type="text/javascript">
          $(document).ready(function() {
          $('.productions-slider-top').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
            nextArrow: '<div class="slider-arrow slider-arrow_right"></div>',
            arrows: false,
            fade: true,
            asNavFor: '.productions-slider-bottom',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                    arrows: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                    arrows: true
                    }
                }
                ]
          });
          $('.productions-slider-bottom').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<div class="slider-arrow slider-arrow_left"></div>',
            nextArrow: '<div class="slider-arrow slider-arrow_right"></div>',
            asNavFor: '.productions-slider-top',
            focusOnSelect: true
          });
          $('.reviews-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<div class="slider-reviews_arrow reviews-arrow_left"></div>',
            nextArrow: '<div class="slider-reviews_arrow reviews-arrow_right"></div>',
            arrows: true,
            responsive: [
            {
                breakpoint: 769,
                settings: {
                slidesToShow: 2
                }
            },
            {
                breakpoint: 577,
                settings: {
                slidesToShow: 1     
                }   
            },
            {
                breakpoint: 376,
                settings: {
                slidesToShow: 1,
                prevArrow: '<div class="slider-reviews_arrow fix-arrow_left"></div>',
                nextArrow: '<div class="slider-reviews_arrow fix-arrow_right"></div>'       
                }   
            }
            ]
            });
            });
    </script>
              
 
</body>
</html>