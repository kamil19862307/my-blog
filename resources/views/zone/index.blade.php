<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Всё о PHP - PHP.Zone</title>
    <meta name="description" content="Всё о разработке на языке PHP: статьи, обучающие курсы, вопросы и ответы, задачи с собеседований, работа. На PHP.Zone (ранее WebShake) вы найдёте всё необходимое для PHP-разработчика.">
    <meta name="keywords" content="PHP, разработка на PHP, программирование на PHP, обучение программированию на PHP, статьи о разработке на PHP, IT и PHP, технологии PHP-разработчиков">
    <link rel="canonical" href="https://php.zone/" />
    <meta property="og:image" content="https://php.zone/app/img/og-image.png?phpzone" />
    <meta name="twitter:image:src" content="https://php.zone/app/img/og-image.png?phpzone" />
    <meta property="og:image:width" content="1074" />
    <meta property="og:image:height" content="479" />
    <link rel="alternate" href="/feed/" title="PHP.Zone" type="application/rss+xml" />
    <meta name="theme-color" content="#00B2FD">
    <link rel="icon" href="/favicon.svg">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
{{--    <link rel="manifest" href="/manifest.json">--}}
{{--    <link href="/new/build/allStyles.min.css?1711198253299" rel="stylesheet">--}}
    @vite([
        'resources/css/bootstrap.css',
        'resources/js/bootstrap.bundle.js',
    ])
    <link rel="preload" href="/fa/fonts/fontawesome-webfont.woff2?v=4.7.0" as="font" type="font/woff2" crossorigin>
    <script charset="UTF-8" src="//web.webpushs.com/js/push/c4ad7e4c18fb5791a34a0361512a6787_1.js" async></script>


    <meta name="28da589a5797e589b1f2309ad7e5dc19" content="">

</head>

<body>
<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white scrolling-navbar top-nav-collapse">
        <div class="container px-0">
            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="/" title="PHP.Zone">
                <strong><span style="color: #00B0F9">php</span><span style="color: #212121">.zone</span></strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto mrMenuLeftPc">
                    <li class="mr-2 nav-item active ">
                        <a class="nav-link" href="/">Статьи</a>
                    </li>

                    <li class="mr-2 nav-item ">
                        <a class="nav-link" href="/courses">Курсы</a>
                    </li>

                    <li class="mr-2 nav-item  dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Задачи
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="/problems">Алгоритмические задачи</a>
                            <a class="dropdown-item" href="/puzzles">Логические задачи</a>
                        </div>
                    </li>

                    <li class="mr-2 nav-item ">
                        <a class="nav-link" href="/code">Песочница</a>
                    </li>

                    <li class="mr-2 nav-item ">
                        <a class="nav-link" href="/tests">Тесты</a>
                    </li>

                    <li class="mr-2 nav-item ">
                        <a class="nav-link" href="/q-and-a">Q&A</a>
                    </li>

                    <li class="mr-2 nav-item ">
                        <a class="nav-link" href="/job">Работа</a>
                    </li>

                    <li class="nav-item  dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Автор
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink2">

                            <a class="dropdown-item" href="/about">Как я стал программистом</a>
                            <a class="dropdown-item" href="/reviews">Отзывы учеников</a>
                            <a class="dropdown-item" href="/donate">Поддержать</a>
                            <a class="dropdown-item" href="/contacts">Контакты</a>

                        </div>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons float-right">
                    <li class=" nav-item">
                        <a class="nav-link" href="/search?searchid=2715247&text=php&web=0"><span class="fa fa-search"></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/user/31437"><i id="scoreIcon" class="fa fa-star-o font-weight-bold"></i> <div id="userScore" style="display: inline-block">0</div></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="/user/31437">Мой профиль</a>
                            <a class="dropdown-item" href="/subscriptions">Подписки</a>
                            <a class="dropdown-item" href="/user/logout">Выйти</a>
                        </div>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>

        </div>
    </nav>
    <!-- Navbar -->

</header>

<!--Main Navigation-->
<div style="text-align: center;margin-top:65px; width:100%;" class="showOnMobile">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <a onclick="yaCounter34416790.reachGoal('click-telegram-in-header')" class="btn btn-info btn-sm mx-0" style="font-size:large;width:100%" target="_blank" rel="nofollow" href="https://t.me/php_zone"><i class="fa fa-telegram fa-lg"></i> Чат в Telegram</a>
                <div class="card">
                    <a onclick="yaCounter34416790.reachGoal('click-telegram-in-header')" class="btn btn-elegant btn-sm mx-0" style="font-size:large;width:100%" target="_blank" rel="nofollow" href="https://t.me/+-ADYOGyUdWwyMTFi"><i class="fa fa-telegram fa-lg"></i> Премиум чат</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="width:100%;text-align: center;" class="showOnMobile">
    <div style="width:92%;margin-left:auto;margin-right:auto;">
        <div class="card red my-2">
            <!-- Content -->
            <div class="card-body text-white text-center">

                Задайте никнейм, чтобы скрыть свою почту! Это делается в
                <a class="white-text" style="text-decoration: underline" href="/user/31437/edit">профиле</a>.
            </div>
        </div>
    </div>
</div>

<!--Main layout-->
<main class="mt-5 pt-5">
    <div class="container">

        <!--Section: Post-->
        <section>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <aside class="col-lg-2 mb-4 hideOnMobile sidebar pl-0 pr-0" style="z-index: 90" id="sidebar">

                    <div class="card blue mb-4 font09">
                        <div class="card-body text-white text-center">
                            <div class="mb-2">
                                Укажите никнейм, чтобы скрыть почту
                            </div>
                            <a class="btn btn-outline-white btn-sm" href="/user/31437/edit">Задать никнейм</a>
                        </div>
                    </div>



                    <div class="card mb-4">
                        <a style="font-size: .75rem" onclick="yaCounter34416790.reachGoal('click-telegram-in-sidebar')" rel="nofollow" target="_blank" href="https://t.me/php_zone" class="btn btn-sm btn-light-blue m-0 mx-0 mr-0 px-0 mt-0 shadow-none rounded"><i style="font-size: .8rem" class="fa fa-telegram"></i> Чат в Telegram</a>
                        <div class="mt-2 card">
                            <a style="font-size: .75rem" onclick="yaCounter34416790.reachGoal('click-telegram-in-sidebar')" rel="nofollow" target="_blank" href="https://t.me/+-ADYOGyUdWwyMTFi" class="btn btn-sm btn-elegant m-0 mx-0 mr-0 px-0 mt-0 shadow-none rounded"><i style="font-size: .8rem" class="fa fa-telegram"></i> Премиум чат</a>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="sidebar-block-header card-header px-0">Новости проекта</div>
                        <div class="card-body text-left pt-2 px-0">
                            <a onclick="yaCounter34416790.reachGoal('click-vkontakte-in-sidebar')" rel="nofollow" target="_blank" href="https://vk.com/php_zone"><img src="https://php.zone/app/img/social/vk.svg" width="33"  alt="ВКонтакте"></a>
                            <a onclick="yaCounter34416790.reachGoal('click-telegram-chat-in-sidebar')" rel="nofollow" target="_blank" href="https://t.me/php_zone_chan"><img src="https://php.zone/app/img/social/telegram2.svg" width="33"  alt="YouTube"></a>
                            <!--            <a onclick="yaCounter34416790.reachGoal('click-facebook-in-sidebar')" rel="nofollow" target="_blank" href="https://www.facebook.com/php.zone.chan/"><img src="https://php.zone/app/img/social/facebook.svg" width="33"  alt="Facebook"></a>-->
                            <a onclick="yaCounter34416790.reachGoal('click-twitter-in-sidebar')" rel="nofollow" target="_blank" href="https://twitter.com/php_zone_chan"><img src="https://php.zone/app/img/social/twitter.svg" width="33"  alt="Twitter"></a>
                            <a onclick="yaCounter34416790.reachGoal('click-twitter-in-sidebar')" rel="nofollow" target="_blank" href="https://www.youtube.com/channel/UCXhQnwQUhGuz15pddQRW2-g"><img src="https://php.zone/app/img/social/youtube.svg" width="33"  alt="YouTube"></a>
                        </div>

                    </div>


                    <div id="stickySidebar">

                        <!--Card-->
                        <div class="card mb-4">



                            <div class="sidebar-block-header card-header px-0"><a style="color: #212529" href="/courses">Курсы <span style="color: white">PHP</span></a></div>

                            <!--Card content-->
                            <div class="card-body pt-2 px-0" style="padding-right: 0">
                                <ul class="list-unstyled mb-0 font09">
                                    <li>
                                        <a onclick="yaCounter34416790.reachGoal('click-html-in-sidebar')" href="/kurs-html-dlya-nachinayushih"
                                           title="Курс HTML для начинающих">                    HTML для начинающих
                                        </a>            </li>
                                    <li>
                                        <a onclick="yaCounter34416790.reachGoal('click-php-in-sidebar')" href="/kurs-php-dlya-nachinayushih"
                                           title="Курс PHP для начинающих">                        PHP для начинающих
                                        </a>            </li>
                                    <li>
                                        <a onclick="yaCounter34416790.reachGoal('click-mysql-in-sidebar')" href="/php-i-mysql-s-nulya"
                                           title="Курс MySQL с нуля">                        MySQL с нуля
                                        </a>            </li>

                                    <li>
                                        <a onclick="yaCounter34416790.reachGoal('click-oop-in-sidebar')" href="/oop-v-php-prodvinutyj-kurs"
                                           title="ООП в PHP">                        ООП в PHP
                                        </a>            </li>

                                    <li>
                                        <a onclick="yaCounter34416790.reachGoal('click-pro-in-sidebar')" href="/php-dlya-professionalov"
                                           title="PHP для профессионалов">                        PHP для профи
                                        </a>            </li>

                                    <li>
                                        <a onclick="yaCounter34416790.reachGoal('click-symfony-in-sidebar')" href="/symfony-course"
                                           title="Курс по Symfony">                        Курс по Symfony
                                        </a>            </li>

                                    <li>
                                        <a onclick="yaCounter34416790.reachGoal('click-laravel-insides-in-sidebar')" href="/laravel-insides"
                                           title="Курс по Laravel">                        Внутренности Laravel
                                        </a>            </li>

                                </ul>


                            </div>

                        </div>
                        <!--/.Card-->




                        <div id="userLastSolutions" style="display:none;">
                        </div>

                        <noindex>
                            <div class="card rgba-red-strong mb-4 mt-1 pt-2">
                                <div class="card-body text-white text-center">
                                    <div class="font09 mb-2"><a class="white-text" target="_blank" rel="nofollow" href="/vpsnl">VPS в Нидерландах
                                            <br> от 64 руб./месяц <br><small>(может пригодиться если пользуешься Интернетом)</small></a></div>

                                    <div style="text-align: center">
                                        <div style="text-align: center;" class="font09">

                                            <div class="">
                                                <a class="btn btn-white btn-sm mx-0" style="font-size: 0.7rem !important;"  target="_blank" rel="nofollow" href="/vpsnl">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </noindex>

                    </div>
                    <!-- sticky sidebar end -->


                </aside>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-8 col-md-9 mb-4">
                    <!--Section: Cards-->
                    <section>

                        <!--Section: Jumbotron-->
                        <section class="card jimbotron ohMyJum"  >

                            <!-- Content -->
                            <div class="card-body text-white text-center pb-5 pt-4 px-5 my-1">

                                <div class="mb-2 font-weight-bold">
                                    <h1 style="font-size: 3.53rem;display: inline;margin: 0; font-weight: 700!important;">php</h1><span style="font-size: 3.53rem;display: inline;margin: 0; font-weight: 700!important;color: #212121">.zone</span>
                                </div>
                                <div class="mb-4" style="font-size: 1.07rem">
                                    Сообщество PHP-разработчиков
                                </div>
                                <div class="mb-4">
                                    <div class="text-justify" style="font-size: 0.95rem">
                                        PHP - это скриптовый язык программирования, который применим для широкого круга задач.
                                        По скорости выполнения кода он является одним из самых быстрых среди интерпретируемых языков программирования.
                                        PHP&nbsp;имеет большую библиотеку встроенных функций для самых разных задач, особенно для работы с базами данных, сетевыми соединениями и файлами, благодаря чему PHP является самым популярным языком программирования при разработке сайтов и других веб-приложений.
                                        <span id="mainDescription" class="collapse">

                                            На этом сайте вы можете бесплатно пройти <a class="white-text" style="text-decoration: underline" href="/courses">курсы PHP</a> - они являются одними из самых понятных и простых в русскоязычном интернете. По крайней мере, так говорят
                                            <a class="white-text" style="text-decoration: underline" href="/reviews">ученики</a>.
                                            Помимо этого у нас приветствуется обмен знаниями среди участников сообщества - можно публиковать статьи о разработке на PHP, помогать другим участникам в Q&A, вести умные беседы в Telegram - не&nbsp;забудьте вступить в наш уютный <a class="white-text" style="text-decoration: underline" href="https://t.me/php_zone">чат PHP-разработчиков</a>.
                                            Наше сообщество состоит из множества людей с разным опытом и мировоззрением, у нас принято быть вежливыми. Оскорбление других участников - недопустимо.
                                            Если эти правила вам подходят - добро пожаловать в клуб!
                                        </span>
                                    </div>
                                    <div id="mainDescriptionShow" style="display: inline-block;width: 100%" class="text-center">
                                        <a onclick="$('#mainDescriptionShow').remove()" data-toggle="collapse" data-target="#mainDescription"
                                           aria-expanded="false" aria-controls="mainDescription"><i class="fa fa-arrow-circle-down"></i> Показать больше <i class="fa fa-arrow-circle-down"></i></a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="mb-4 mx-auto" style="max-width: 650px">
                                        <a class="btn btn-outline-white mb-2" href="/courses">Курсы PHP-разработчиков <i class="fa fa-graduation-cap"></i></a>
                                        <br>
                                        <a class="btn btn-sm btn-white"
                                           href="/">Все статьи</a>
                                        <a class="btn btn-sm btn-outline-white"
                                           href="/rubric/backend"><i class="fa fa-hashtag"></i>Backend</a>
                                        <a class="btn btn-sm btn-outline-white"
                                           href="/rubric/frontend"><i class="fa fa-hashtag"></i>Frontend</a>
                                        <a class="btn btn-sm btn-outline-white"
                                           href="/rubric/opinions"><i class="fa fa-hashtag"></i>Мнения</a>
                                        <a class="btn btn-sm btn-outline-white"
                                           href="/rubric/diy"><i class="fa fa-hashtag"></i>DIY</a>
                                        <a class="btn btn-sm btn-outline-white"
                                           href="/rubric/tools"><i class="fa fa-hashtag"></i>Инструменты</a>
                                        <a class="btn btn-sm btn-outline-white"
                                           href="/rubric/etc"><i class="fa fa-hashtag"></i>Прочее</a>
                                    </div>
                                    <a class="btn btn-outline-white" href="/post/offer-rules">Написать статью</a>
                                    <a class="btn btn-outline-white" href="/post/offer-theme">Предложить тему</a>
                                </div>

                            </div>
                            <!-- Content -->
                        </section>
                        <!--Section: Jumbotron-->


                        <div>

                            <hr class="my-5">


                            <div>

                                <a href="https://php.zone/post/rabbitmq-scaling-ordering">
                                    <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                                        <strong>Ныряем в кроличью нору: йинещбоос кодяроп меуритнараг</strong>
                                    </h3>
                                </a>

                                <div class="dark-grey-text mx-2"><p>Давайте честно, проектировать надежные событийно-ориентированные системы сложно. Во-первых, ни один брокер сообщений не гарантирует вам exactly-once доставку сообщения, и вам придется добиваться этого собственными силами. Во-вторых, без хорошего понимания работы вашего брокера – а RabbitMQ – сложный брокер – вы не сможете настроить надежную обработку сообщений. Кроме того, есть еще одно важное свойство, проявляемое в событийно-ориентированных системах, которое не надо игнорировать, – это порядок сообщений. События всегда происходят в определенном порядке и должны в том же порядке быть обработаны консьюмерами, иначе ваша система может начать вести себя неожиданно. </p>
                                    <p><!--more--></div>
                                <a href="https://php.zone/post/rabbitmq-scaling-ordering" class="btn btn-primary btn-md">Читать далее
                                    <i class="fa fa-book ml-2"></i>
                                </a>

                                <div class="m-2 mt-3">
                                    <div>

                                        <div class="mt-2">
                                            <a href="/tag/php">#php</a>
                                            <a href="/tag/rabbitmq">#rabbitmq</a>
                                            <a href="/tag/очередь_сообщений">#очередь сообщений</a>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-3" style="display:inline-block;">
                                                <a class="mr-1" href="https://php.zone/user/4706">@lolychank</a>
                                            </div>
                                            <div class="mb-3" style="display:inline-block;">
                                                <span class="dark-grey-text">26.01.2023 в 16:36</span>
                                            </div>
                                        </div>

                                        <div class="mr-3" style="display:inline-block;">
                                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 4526</span>
                                        </div>
                                        <div class="dark-grey-text mr-3" style="display: inline-block">
                                            <a onclick="postRatingUp(1160)" class="postRatingUp text-primary" data-post-id="1160"><i class="fa fa-arrow-up postRatingUpArrow1160"></i></a> <div class="postRating postRatingValue1160" data-post-id="1160" style="display: inline-block">+4</div> <a onclick="postRatingDown(1160)" class="postRatingDown text-primary" data-post-id="1160"><i class="fa fa-arrow-down postRatingDownArrow1160"></i></a>
                                        </div>
                                        <div style="display:inline-block;">
                                            <a href="https://php.zone/post/rabbitmq-scaling-ordering#comments"><i class="fa fa-comment"></i> 0</a>
                                        </div>
                                    </div>                                    </div>
                            </div>

                            <hr class="my-5">
                            <div class="card rgba-blue-slight p-4 my-4">
                                <div class="font11 mb-3 font-weight-bold"><a class="" href="/problems">Алгоритмические задачи</a></div>
                                <div>
                                    <ul class="list-unstyled card-text font09">
                                        <li class="mb-2"><a href="/problems/1">Привет, мир!</a></li>
                                        <li class="mb-2"><a href="/problems/2">Развернуть строку</a></li>
                                        <li class="mb-2"><a href="/problems/3">Чётные числа</a></li>
                                        <li class="mb-2"><a href="/problems/4">Числа Фибоначчи</a></li>
                                    </ul>
                                    <a href="/problems" class="btn btn-sm btn-elegant shadow-none ml-0">Все задачи</a>
                                </div>
                            </div>
                            <hr class="my-5">
                            <div>

                                <a href="https://php.zone/post/rabbitmq">
                                    <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                                        <strong>Ныряем в кроличью нору</strong>
                                    </h3>
                                </a>

                                <div class="dark-grey-text mx-2"><p>RabbitMQ является чуть ли не самым популярным решением для реализации очередей на сегодняшний день. И в то же время одним из самых сложных с точки зрения разработки и эксплуатации. Если вы поищите статьи по теме, с большой доли вероятности найдете материалы, в которых не погружаются дальше декларации простой очереди и публикации и получения сообщений из нее. И как только вы столкнетесь с проблемами, связанными с гарантиями доставки, реализацией отложенных сообщений, переполнения очередей, получения сообщений батчами, вам придется погрузиться в документацию или книги в поисках ответов на эти вопросы. Данная статья целиком основана на моем опыте работы с кроликом и содержит ответы на большинство популярных задач, решаемых этим брокером очередей. Во всех примерах будет использоваться PHP, однако то же самое почти с теми же терминами и определениями можно сделать на любом другом языке программирования. </p>
                                    <p><!--more--></div>
                                <a href="https://php.zone/post/rabbitmq" class="btn btn-primary btn-md">Читать далее
                                    <i class="fa fa-book ml-2"></i>
                                </a>

                                <div class="m-2 mt-3">
                                    <div>

                                        <div class="mt-2">
                                            <a href="/tag/php">#php</a>
                                            <a href="/tag/rabbitmq">#rabbitmq</a>
                                            <a href="/tag/очередь_сообщений">#очередь сообщений</a>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-3" style="display:inline-block;">
                                                <a class="mr-1" href="https://php.zone/user/4706">@lolychank</a>
                                            </div>
                                            <div class="mb-3" style="display:inline-block;">
                                                <span class="dark-grey-text">08.01.2023 в 15:40</span>
                                            </div>
                                        </div>

                                        <div class="mr-3" style="display:inline-block;">
                                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 14517</span>
                                        </div>
                                        <div class="dark-grey-text mr-3" style="display: inline-block">
                                            <a onclick="postRatingUp(1159)" class="postRatingUp text-primary" data-post-id="1159"><i class="fa fa-arrow-up postRatingUpArrow1159"></i></a> <div class="postRating postRatingValue1159" data-post-id="1159" style="display: inline-block">+12</div> <a onclick="postRatingDown(1159)" class="postRatingDown text-primary" data-post-id="1159"><i class="fa fa-arrow-down postRatingDownArrow1159"></i></a>
                                        </div>
                                        <div style="display:inline-block;">
                                            <a href="https://php.zone/post/rabbitmq#comments"><i class="fa fa-comment"></i> 1</a>
                                        </div>
                                    </div>                                    </div>
                            </div>

                            <hr class="my-5">

                            <div>

                                <a href="https://php.zone/post/moy-dolgiy-put-do-php-razrabotchika">
                                    <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                                        <strong>Мой долгий путь до PHP-разработчика</strong>
                                    </h3>
                                </a>

                                <div class="dark-grey-text mx-2"><p>Всем привет, меня зовут Владимир я хотел бы рассказать как именно я стал PHP-разработчиком, и в данный момент уже работаю около года. Так же хочу рассказать насколько сильно мне помог курс на данном сайте, если что извиняюсь за орфографию.</p>
                                    <p><!--more--></div>
                                <a href="https://php.zone/post/moy-dolgiy-put-do-php-razrabotchika" class="btn btn-primary btn-md">Читать далее
                                    <i class="fa fa-book ml-2"></i>
                                </a>

                                <div class="m-2 mt-3">
                                    <div>

                                        <div class="mt-2">
                                            <a href="/tag/php">#php</a>
                                            <a href="/tag/работа">#работа</a>
                                            <a href="/tag/junior">#junior</a>
                                            <a href="/tag/устройство_на_работу">#устройство на работу</a>
                                            <a href="/tag/программирование_для_начинающих">#программирование для начинающих</a>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-3" style="display:inline-block;">
                                                <a class="mr-1" href="https://php.zone/user/8142">@Vladimir96</a>
                                            </div>
                                            <div class="mb-3" style="display:inline-block;">
                                                <span class="dark-grey-text">02.10.2022 в 15:08</span>
                                            </div>
                                        </div>

                                        <div class="mr-3" style="display:inline-block;">
                                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 4209</span>
                                        </div>
                                        <div class="dark-grey-text mr-3" style="display: inline-block">
                                            <a onclick="postRatingUp(1158)" class="postRatingUp text-primary" data-post-id="1158"><i class="fa fa-arrow-up postRatingUpArrow1158"></i></a> <div class="postRating postRatingValue1158" data-post-id="1158" style="display: inline-block">+3</div> <a onclick="postRatingDown(1158)" class="postRatingDown text-primary" data-post-id="1158"><i class="fa fa-arrow-down postRatingDownArrow1158"></i></a>
                                        </div>
                                        <div style="display:inline-block;">
                                            <a href="https://php.zone/post/moy-dolgiy-put-do-php-razrabotchika#comments"><i class="fa fa-comment"></i> 5</a>
                                        </div>
                                    </div>                                    </div>
                            </div>

                            <hr class="my-5">
                            <div class="my-4 rgba-blue-slight" style="width: 100%;padding: 20px;text-align: center">
                                <div style="margin-bottom: 10px"><a onclick="yaCounter34416790.reachGoal('banner-forum')" class="font11 text-black" href="https://php.zone/post/offer-theme" target="_blank">Есть вопрос по программированию?</a></div>
                                <div style="margin-bottom: 10px"><a onclick="yaCounter34416790.reachGoal('banner-forum')" class="font09 text-black" href="https://php.zone/post/offer-theme" target="_blank">Спроси на форуме. Здесь ответят.</a></div>
                                <a onclick="yaCounter34416790.reachGoal('banner-forum')" target="_blank" rel="noopener noreferrer" class="btn btn-elegant shadow-none btn-sm" href="https://php.zone/q-and-a">Создать тему</a>
                            </div>
                            <hr class="my-5">
                            <div>

                                <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-php-razrabotchikom">
                                    <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                                        <strong>Как я устроился на работу PHP-разработчиком</strong>
                                    </h3>
                                </a>

                                <div class="dark-grey-text mx-2"><p>Всем привет! Хотелось бы поделиться своей историей трудоустройства.</p>
                                    <p><!--more--></div>
                                <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-php-razrabotchikom" class="btn btn-primary btn-md">Читать далее
                                    <i class="fa fa-book ml-2"></i>
                                </a>

                                <div class="m-2 mt-3">
                                    <div>

                                        <div class="mt-2">
                                            <a href="/tag/php">#php</a>
                                            <a href="/tag/работа">#работа</a>
                                            <a href="/tag/junior">#junior</a>
                                            <a href="/tag/устройство_на_работу">#устройство на работу</a>
                                            <a href="/tag/программирование_для_начинающих">#программирование для начинающих</a>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-3" style="display:inline-block;">
                                                <a class="mr-1" href="https://php.zone/user/15521">@zick</a>
                                            </div>
                                            <div class="mb-3" style="display:inline-block;">
                                                <span class="dark-grey-text">16.06.2022 в 16:20</span>
                                            </div>
                                        </div>

                                        <div class="mr-3" style="display:inline-block;">
                                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 10920</span>
                                        </div>
                                        <div class="dark-grey-text mr-3" style="display: inline-block">
                                            <a onclick="postRatingUp(1157)" class="postRatingUp text-primary" data-post-id="1157"><i class="fa fa-arrow-up postRatingUpArrow1157"></i></a> <div class="postRating postRatingValue1157" data-post-id="1157" style="display: inline-block">+3</div> <a onclick="postRatingDown(1157)" class="postRatingDown text-primary" data-post-id="1157"><i class="fa fa-arrow-down postRatingDownArrow1157"></i></a>
                                        </div>
                                        <div style="display:inline-block;">
                                            <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-php-razrabotchikom#comments"><i class="fa fa-comment"></i> 1</a>
                                        </div>
                                    </div>                                    </div>
                            </div>

                            <hr class="my-5">

                            <div>

                                <a href="https://php.zone/post/staticheskiy-analiz-v-php">
                                    <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                                        <strong>Статический анализ в PHP</strong>
                                    </h3>
                                </a>

                                <div class="dark-grey-text mx-2"><p>Все мы привыкли к определению, что PHP – это язык со слабой динамической типизацией. В этом одновременно его преимущество и недостаток. Преимущества заключаются в том, что вы имеете больше возможностей по работе с динамическими данными: вызывать функции или объекты из строки, передавать и возвращать <strong>mixed</strong> типы и многое другое. В конце концов, только в PHP вы можете одновременно увидеть ужасные реализации паттерна ActiceRecord с динамическими свойствами (которые физически не определены в классе) и элегантные контейнеры внедрения зависимостей, которые дают значительно больше возможностей, чем аналогичные контейнеры в языках с сильной статической типизацией. Если говорить о недостатках, то это, разумеется, баги, связанные как раз с тем, что мы точно не знаем, что нам может вернуть, например, та же анонимная функция, каких типов параметры она принимает, какие ключи есть в массиве и так далее. По этой причине вам приходится обогащать свой код проверками в духе <strong>isset($data['key'])</strong> и тому подобное.</p>
                                    <p><!--more--></div>
                                <a href="https://php.zone/post/staticheskiy-analiz-v-php" class="btn btn-primary btn-md">Читать далее
                                    <i class="fa fa-book ml-2"></i>
                                </a>

                                <div class="m-2 mt-3">
                                    <div>

                                        <div class="mt-2">
                                            <a href="/tag/php">#php</a>
                                            <a href="/tag/psalm">#psalm</a>
                                            <a href="/tag/статический_анализ_кода">#статический анализ кода</a>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-3" style="display:inline-block;">
                                                <a class="mr-1" href="https://php.zone/user/4706">@lolychank</a>
                                            </div>
                                            <div class="mb-3" style="display:inline-block;">
                                                <span class="dark-grey-text">15.12.2021 в 18:11</span>
                                            </div>
                                        </div>

                                        <div class="mr-3" style="display:inline-block;">
                                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 7191</span>
                                        </div>
                                        <div class="dark-grey-text mr-3" style="display: inline-block">
                                            <a onclick="postRatingUp(1156)" class="postRatingUp text-primary" data-post-id="1156"><i class="fa fa-arrow-up postRatingUpArrow1156"></i></a> <div class="postRating postRatingValue1156" data-post-id="1156" style="display: inline-block">+4</div> <a onclick="postRatingDown(1156)" class="postRatingDown text-primary" data-post-id="1156"><i class="fa fa-arrow-down postRatingDownArrow1156"></i></a>
                                        </div>
                                        <div style="display:inline-block;">
                                            <a href="https://php.zone/post/staticheskiy-analiz-v-php#comments"><i class="fa fa-comment"></i> 3</a>
                                        </div>
                                    </div>                                    </div>
                            </div>

                            <hr class="my-5">
                            <div class="card rgba-blue-slight p-4 my-4">
                                <div class="font11 mb-3 font-weight-bold"><a class="" href="/job">Новые вакансии</a></div>
                                <div>
                                    <ul class="list-unstyled card-text font09">
                                        <li class="mb-2">
                                            <a href="https://php.zone/job/vacancies/83">Backend разработчик в TravelTech стартап <span class="">От 150000₽</span></a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="https://php.zone/job/vacancies/82">Fullstack Developer <span class="">70000₽ - 300000₽</span></a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="https://php.zone/job/vacancies/81">PHP, Fullstack dev. (Part time проект) <span class="">10000₽ - 100000₽</span></a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="https://php.zone/job/vacancies/80">PHP developer Laravel <span class="">200000₽ - 250000₽</span></a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="https://php.zone/job/vacancies/79">PHP(Symfony) developer <span class="">До 200000₽</span></a>
                                        </li>
                                    </ul>
                                    <a href="/job" class="btn btn-sm btn-elegant shadow-none ml-0">Все вакансии</a>
                                    <a href="/job/vacancies/add" class="btn btn-sm btn-outline-elegant shadow-none ml-0">Разместить вакансию бесплатно</a>
                                </div>
                            </div>

                            <hr class="my-5">
                            <div>

                                <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-posle-prohozhdeniya-kursa-po-php">
                                    <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                                        <strong>Как я устроился на работу после прохождения курса по PHP</strong>
                                    </h3>
                                </a>

                                <div class="dark-grey-text mx-2"><p>Я искал и изучал много материала в интернете. Проходил много платных курсов.<br />
                                        Я всегда хотел быть web разработчиком, работать с PHP, MySQL, JS, HTML, CSS. В 2017 году Я купил курсы от geekbrains. Курсы неплохие, но, к сожалению, особого результата мне не дали. Помогли закончить университет, но не найти работу. Найти работу программиста - вот что мне нужно было от курсов и обучения, платного и бесплатного в интернете.</p>
                                    <p>Я смотрел много бесплатных уроков на Ютубе, скачивал их с торрента, проходил курсы в html академии. 3-4 раза бросал, причем так, что как будто навсегда. Наконец я решил сменить направления с фронтенд разработки на бэкенд. Именно на фронтенд поначалу делал упор. На очередном собеседовании мне сказали что для фронта ты знаешь мало, а прошел я очень многое уже и фреймворки даже знал, сказали, посмотри в сторону backend.</p>
                                    <p><!--more--></div>
                                <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-posle-prohozhdeniya-kursa-po-php" class="btn btn-primary btn-md">Читать далее
                                    <i class="fa fa-book ml-2"></i>
                                </a>

                                <div class="m-2 mt-3">
                                    <div>

                                        <div class="mt-2">
                                            <a href="/tag/php">#php</a>
                                            <a href="/tag/работа">#работа</a>
                                            <a href="/tag/junior">#junior</a>
                                            <a href="/tag/устройство_на_работу">#устройство на работу</a>
                                            <a href="/tag/программирование_для_начинающих">#программирование для начинающих</a>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-3" style="display:inline-block;">
                                                <a class="mr-1" href="https://php.zone/user/21427">@<span class="__cf_email__" data-cfemail="e68294898891948dd7a6848dc89493">[email&#160;protected]</span></a>
                                            </div>
                                            <div class="mb-3" style="display:inline-block;">
                                                <span class="dark-grey-text">09.12.2021 в 14:37</span>
                                            </div>
                                        </div>

                                        <div class="mr-3" style="display:inline-block;">
                                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 4797</span>
                                        </div>
                                        <div class="dark-grey-text mr-3" style="display: inline-block">
                                            <a onclick="postRatingUp(1155)" class="postRatingUp text-primary" data-post-id="1155"><i class="fa fa-arrow-up postRatingUpArrow1155"></i></a> <div class="postRating postRatingValue1155" data-post-id="1155" style="display: inline-block">+6</div> <a onclick="postRatingDown(1155)" class="postRatingDown text-primary" data-post-id="1155"><i class="fa fa-arrow-down postRatingDownArrow1155"></i></a>
                                        </div>
                                        <div style="display:inline-block;">
                                            <a href="https://php.zone/post/kak-ya-ustroilsya-na-rabotu-posle-prohozhdeniya-kursa-po-php#comments"><i class="fa fa-comment"></i> 3</a>
                                        </div>
                                    </div>                                    </div>
                            </div>

                            <hr class="my-5">

                            <div>

                                <a href="https://php.zone/post/kphp-in-life">
                                    <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                                        <strong>Пробуем KPHP: реально ли его использовать в своих проектах</strong>
                                    </h3>
                                </a>

                                <div class="dark-grey-text mx-2"><p>ВК - крупнейшая социальная сеть в России. Её код изначально был написан на PHP - языке, позволяющим быстро реализовывать функционал веб-сайтов. Однако, PHP является интерпретируемым языком, что само собой не есть хорошо для высоких нагрузок. </p>
                                    <p><!--more--></div>
                                <a href="https://php.zone/post/kphp-in-life" class="btn btn-primary btn-md">Читать далее
                                    <i class="fa fa-book ml-2"></i>
                                </a>

                                <div class="m-2 mt-3">
                                    <div>

                                        <div class="mt-2">
                                            <a href="/tag/highload">#highload</a>
                                            <a href="/tag/vk">#vk</a>
                                            <a href="/tag/kphp">#kphp</a>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-3" style="display:inline-block;">
                                                <a class="mr-1" href="https://php.zone/user/1">@ivashkevich</a>
                                            </div>
                                            <div class="mb-3" style="display:inline-block;">
                                                <span class="dark-grey-text">25.08.2021 в 06:24</span>
                                            </div>
                                        </div>

                                        <div class="mr-3" style="display:inline-block;">
                                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 18026</span>
                                        </div>
                                        <div class="dark-grey-text mr-3" style="display: inline-block">
                                            <a onclick="postRatingUp(1154)" class="postRatingUp text-primary" data-post-id="1154"><i class="fa fa-arrow-up postRatingUpArrow1154"></i></a> <div class="postRating postRatingValue1154" data-post-id="1154" style="display: inline-block">+11</div> <a onclick="postRatingDown(1154)" class="postRatingDown text-primary" data-post-id="1154"><i class="fa fa-arrow-down postRatingDownArrow1154"></i></a>
                                        </div>
                                        <div style="display:inline-block;">
                                            <a href="https://php.zone/post/kphp-in-life#comments"><i class="fa fa-comment"></i> 4</a>
                                        </div>
                                    </div>                                    </div>
                            </div>

                            <hr class="my-5">
                            <div class="card rgba-blue-slight p-4 my-4">
                                <div class="font11 mb-3 font-weight-bold"><a class="" href="/tests">Онлайн тесты</a></div>
                                <div>
                                    <ul class="list-unstyled card-text font09">
                                        <li class="mb-2"><a href="/test-html">Тест на знание основ HTML</a></li>
                                        <li class="mb-2"><a href="/test-php">Тест на знание основ PHP</a></li>
                                        <li class="mb-2"><a href="/test-oop-v-php">Тест на знание ООП в PHP</a></li>
                                    </ul>
                                    <a href="/tests" class="btn btn-sm btn-elegant shadow-none ml-0">Все тесты</a>
                                </div>
                            </div>

                            <hr class="my-5">
                            <div>

                                <a href="https://php.zone/post/kak-ya-primenyal-kurs-oop-v-php-v-realnoy-praktike">
                                    <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                                        <strong>Как я применял курс ООП в PHP в реальной практике. Результат, выводы, сравнения</strong>
                                    </h3>
                                </a>

                                <div class="dark-grey-text mx-2"><p>Вообще не люблю писать отзывы, ни хорошие, ни тем более плохие. Но вам не могу не написать.</p>
                                    <p>Наконец-то пройден ООП в PHP! Я давно задумал проект для внутренних нужд своей компании. Не мог написать даже полурабочий прототип, все чего-то не понимал, не хватало знаний. Проект получался сложный, все время там что-то ломалось и т.д.</p>
                                    <p><!--more--></div>
                                <a href="https://php.zone/post/kak-ya-primenyal-kurs-oop-v-php-v-realnoy-praktike" class="btn btn-primary btn-md">Читать далее
                                    <i class="fa fa-book ml-2"></i>
                                </a>

                                <div class="m-2 mt-3">
                                    <div>

                                        <div class="mt-2">
                                            <a href="/tag/php">#php</a>
                                            <a href="/tag/ооп">#ооп</a>
                                            <a href="/tag/отзыв">#отзыв</a>
                                            <a href="/tag/курсы">#курсы</a>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-3" style="display:inline-block;">
                                                <a class="mr-1" href="https://php.zone/user/15783">@ivan.tretiakov</a>
                                            </div>
                                            <div class="mb-3" style="display:inline-block;">
                                                <span class="dark-grey-text">06.07.2021 в 14:41</span>
                                            </div>
                                        </div>

                                        <div class="mr-3" style="display:inline-block;">
                                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 12950</span>
                                        </div>
                                        <div class="dark-grey-text mr-3" style="display: inline-block">
                                            <a onclick="postRatingUp(1151)" class="postRatingUp text-primary" data-post-id="1151"><i class="fa fa-arrow-up postRatingUpArrow1151"></i></a> <div class="postRating postRatingValue1151" data-post-id="1151" style="display: inline-block">+9</div> <a onclick="postRatingDown(1151)" class="postRatingDown text-primary" data-post-id="1151"><i class="fa fa-arrow-down postRatingDownArrow1151"></i></a>
                                        </div>
                                        <div style="display:inline-block;">
                                            <a href="https://php.zone/post/kak-ya-primenyal-kurs-oop-v-php-v-realnoy-praktike#comments"><i class="fa fa-comment"></i> 3</a>
                                        </div>
                                    </div>                                    </div>
                            </div>

                            <hr class="my-5">

                            <div>

                                <a href="https://php.zone/post/screen-v-linux">
                                    <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                                        <strong>Как запускать долгоживущие скрипты на удаленном сервере</strong>
                                    </h3>
                                </a>

                                <div class="dark-grey-text mx-2"><p>Зачастую приходится на удаленном сервере запускать скрипты вручную. К примеру, для миграции данных из одного хранилища в другое. Как обычно это происходит: заходим на сервак по ssh, запускаем скрипт, он там нам выводит какой-то прогресс (например, обработанные ID), после чего завершается. Однако, часто бывает так, что нужно запустить долгоживущий скрипт. Мне приходилось запускать скрипты, выполняющиеся несколько дней подряд. При этом, нельзя гарантировать что ssh-соединение не разорвётся из-за нестабильного интернета. И вот тут начинаются проблемы - мы можем не узнать, что скрипт корректно завершил свою работу. Не можем узнать, на каком ID он остановился, если произошла какая-то ошибка. О том, как эту проблему решить, мы и поговорим в этой статье.</p>
                                    <p><!--more--></div>
                                <a href="https://php.zone/post/screen-v-linux" class="btn btn-primary btn-md">Читать далее
                                    <i class="fa fa-book ml-2"></i>
                                </a>

                                <div class="m-2 mt-3">
                                    <div>

                                        <div class="mt-2">
                                            <a href="/tag/linux">#linux</a>
                                            <a href="/tag/ssh">#ssh</a>
                                            <a href="/tag/cli">#cli</a>
                                            <a href="/tag/screen">#screen</a>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-3" style="display:inline-block;">
                                                <a class="mr-1" href="https://php.zone/user/1">@ivashkevich</a>
                                            </div>
                                            <div class="mb-3" style="display:inline-block;">
                                                <span class="dark-grey-text">24.06.2021 в 19:00</span>
                                            </div>
                                        </div>

                                        <div class="mr-3" style="display:inline-block;">
                                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 6389</span>
                                        </div>
                                        <div class="dark-grey-text mr-3" style="display: inline-block">
                                            <a onclick="postRatingUp(1150)" class="postRatingUp text-primary" data-post-id="1150"><i class="fa fa-arrow-up postRatingUpArrow1150"></i></a> <div class="postRating postRatingValue1150" data-post-id="1150" style="display: inline-block">+5</div> <a onclick="postRatingDown(1150)" class="postRatingDown text-primary" data-post-id="1150"><i class="fa fa-arrow-down postRatingDownArrow1150"></i></a>
                                        </div>
                                        <div style="display:inline-block;">
                                            <a href="https://php.zone/post/screen-v-linux#comments"><i class="fa fa-comment"></i> 4</a>
                                        </div>
                                    </div>                                    </div>
                            </div>

                            <hr class="my-5">
                            <div class="card rgba-blue-slight p-4 my-4">
                                <div class="font11 mb-3 font-weight-bold"><a class="" href="/tests">Онлайн тесты</a></div>
                                <div>
                                    <ul class="list-unstyled card-text font09">
                                        <li class="mb-2"><a href="/test-html">Тест на знание основ HTML</a></li>
                                        <li class="mb-2"><a href="/test-php">Тест на знание основ PHP</a></li>
                                        <li class="mb-2"><a href="/test-oop-v-php">Тест на знание ООП в PHP</a></li>
                                    </ul>
                                    <a href="/tests" class="btn btn-sm btn-elegant shadow-none ml-0">Все тесты</a>
                                </div>
                            </div>

                            <hr class="my-5">
                            <div>

                                <a href="https://php.zone/post/kak-otpravit-soobshenie-v-telegram-na-php">
                                    <h3 class="my-3 mx-2 font-weight-bold dark-grey-text">
                                        <strong>Как сделать уведомления в телеграм на PHP</strong>
                                    </h3>
                                </a>

                                <div class="dark-grey-text mx-2"><p>Привет! Сегодня поговорим о том, как можно отправить себе сообщение в телеграмме с помощью PHP. Это удобно использовать, когда нужно получить уведомление о каком-то событии, произошедшем на бэкенде. Например, я таким образом получаю уведомления о новых комментариях к урокам.</p>
                                    <p><!--more--></div>
                                <a href="https://php.zone/post/kak-otpravit-soobshenie-v-telegram-na-php" class="btn btn-primary btn-md">Читать далее
                                    <i class="fa fa-book ml-2"></i>
                                </a>

                                <div class="m-2 mt-3">
                                    <div>

                                        <div class="mt-2">
                                            <a href="/tag/php">#php</a>
                                            <a href="/tag/telegram">#telegram</a>
                                            <a href="/tag/notifications">#notifications</a>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-3" style="display:inline-block;">
                                                <a class="mr-1" href="https://php.zone/user/1">@ivashkevich</a>
                                            </div>
                                            <div class="mb-3" style="display:inline-block;">
                                                <span class="dark-grey-text">23.06.2021 в 20:08</span>
                                            </div>
                                        </div>

                                        <div class="mr-3" style="display:inline-block;">
                                            <span class="dark-grey-text"><i class="fa fa-eye"></i> 15285</span>
                                        </div>
                                        <div class="dark-grey-text mr-3" style="display: inline-block">
                                            <a onclick="postRatingUp(1149)" class="postRatingUp text-primary" data-post-id="1149"><i class="fa fa-arrow-up postRatingUpArrow1149"></i></a> <div class="postRating postRatingValue1149" data-post-id="1149" style="display: inline-block">+9</div> <a onclick="postRatingDown(1149)" class="postRatingDown text-primary" data-post-id="1149"><i class="fa fa-arrow-down postRatingDownArrow1149"></i></a>
                                        </div>
                                        <div style="display:inline-block;">
                                            <a href="https://php.zone/post/kak-otpravit-soobshenie-v-telegram-na-php#comments"><i class="fa fa-comment"></i> 3</a>
                                        </div>
                                    </div>                                    </div>
                            </div>

                            <hr class="my-5">
                        </div>

                        <nav aria-label="pagination"><ul class="pagination pagination-lg justify-content-center"><li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">&larr; Назад</a></li><li class="page-item"><a class="page-link" href="/2">Далее &rarr;</a></li></ul></nav>
                    </section>
                    <!--Section: Cards-->
                    <hr class="my-5">

                    <div class="card readAlso">
                        <h5 class="card-header">Реклама</h5>
                        <div class="card-body pb-0">
                            <div class="font09 mb-3">
                                <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')" href="https://php.zone/post/samye-populyarnye-skiny-dlya-cs-go">
                                    Самые популярные скины для CS:GO                                    </a>
                            </div>
                            <div class="font09 mb-3">
                                <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')" href="https://php.zone/post/microsoft-office-2021-kakim-funkcionalom-on-obladaet">
                                    Microsoft Office 2021: каким функционалом он обладает?                                    </a>
                            </div>
                            <div class="font09 mb-3">
                                <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')" href="https://php.zone/post/vazhnost-obnovleniy-dlya-bitriks-i-php">
                                    Важность обновлений для Битрикс и PHP                                    </a>
                            </div>
                            <div class="font09 mb-3">
                                <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')" href="https://php.zone/post/v-kakih-sluchayah-mozhno-vosstanovit-dannye-s-zhestkogo-diska">
                                    В каких случаях можно восстановить данные с жесткого диска?                                    </a>
                            </div>
                            <div class="font09 mb-3">
                                <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')" href="https://php.zone/post/angjelskije-ritmy-zakhvatyvajushhaja-istorija-o-zhizni-poslje-smjerti">
                                    &laquo;Ангельские ритмы&raquo;: захватывающая история о жизни после смерти                                    </a>
                            </div>
                            <div class="font09 ">
                                <a onclick="yaCounter34416790.reachGoal('click-reklamnye-posty-in-footer')" href="https://php.zone/post/luchshie-kursy-po-biznes-analitike-reyting-i-rekomendacii">
                                    Подборка лучших курсов по бизнес-аналитике: рейтинг от &quot;Азбука курсов&quot;                                    </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Grid column-->




                <!--Grid column-->
                <aside class="col-lg-2 mb-4 hideOnMobile sidebar pl-0 pr-0" style="z-index: 90" id="sidebar-right">

                    <div class="card mb-4" id="stickySidebar2">

                        <div class="sidebar-block-header card-header px-0 pt-0 font11">Читайте также</div>
                        <div class="card-body pt-2 px-0 pb-0">
                            <ul class="list-unstyled mb-3 font09">
                                <li class="mb-2"><a onclick="yaCounter34416790.reachGoal('click-read-also-in-sidebar')" href="https://php.zone/symfony-course/slushateli-kak-rabotayut-i-kak-ih-ispolzovat-ne-po-standartu" class="font09 mb-2">Слушатели: как работают и как их использовать не по стандарту</a></li>
                                <li class="mb-2"><a onclick="yaCounter34416790.reachGoal('click-read-also-in-sidebar')" href="https://php.zone/kurs-php-dlya-nachinayushih/usloviya-v-php" class="font09 mb-2">Условия в PHP</a></li>
                                <li class="mb-2"><a onclick="yaCounter34416790.reachGoal('click-read-also-in-sidebar')" href="https://php.zone/kurs-php-dlya-nachinayushih/massivy-v-php" class="font09 mb-2">Изучаем массивы в PHP</a></li>
                                <li class="mb-2"><a onclick="yaCounter34416790.reachGoal('click-read-also-in-sidebar')" href="https://php.zone/kurs-php-dlya-nachinayushih/get-zaprosy-v-php" class="font09 mb-2">GET-запросы в PHP</a></li>
                                <li class="mb-2"><a onclick="yaCounter34416790.reachGoal('click-read-also-in-sidebar')" href="https://php.zone/kurs-php-dlya-nachinayushih/funkcii-v-php" class="font09 mb-2">Функции в PHP</a></li>
                                <li class="mb-2"><a onclick="yaCounter34416790.reachGoal('click-read-also-in-sidebar')" href="https://php.zone/kurs-php-dlya-nachinayushih/otladka-php-koda-s-pomoshchyu-xdebug-v-phpstorm" class="font09 mb-2">Отладка PHP 8 с помощью Xdebug 3 в PHPStorm</a></li>
                                <li class="mb-2"><a onclick="yaCounter34416790.reachGoal('click-read-also-in-sidebar')" href="https://php.zone/kurs-php-dlya-nachinayushih/kak-rabotaet-php" class="font09 mb-2">Как работает PHP</a></li>
                                <li class="mb-2"><a onclick="yaCounter34416790.reachGoal('click-read-also-in-sidebar')" href="https://php.zone/php-i-mysql-s-nulya/vidy-svyazey-v-bazah-dannyh-mysql" class="font09 mb-2">Виды связей в базах данных</a></li>
                            </ul>
                            <div class="card mb-2 text-center">
                                <a style="font-size: .75rem" onclick="yaCounter34416790.reachGoal('click-offer-post-in-sidebar')" href="/post/offer" class="btn btn-sm btn-elegant m-0 mx-0 mr-0 px-0 shadow-none rounded">Написать статью</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <a style="font-size: .75rem" onclick="yaCounter34416790.reachGoal('click-donate-in-sidebar')" rel="nofollow" href="/donate" class="btn btn-sm btn-pink m-0 mx-0 mr-0 px-0 mt-0 shadow-none rounded"><span class="fa fa-heart"></span> Поддержать проект</a>
                        </div>

                        <div class="card blue mb-4 mt-3 pt-2">
                            <div class="card-body text-white text-center">
                                <div class="font09 mb-2"><a class="white-text" href="/php-i-mysql-s-nulya">Бесплатный курс MySQL с нуля</a></div>

                                <div style="text-align: center">
                                    <div style="text-align: center;" class="font09">

                                        <div class="">
                                            <a class="btn btn-white btn-sm mx-0" style="font-size: 0.7rem !important;" href="/php-i-mysql-s-nulya">Начать обучение</a>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>


                        <!--ads place-->

                    </div>




                </aside>
                <!--Grid column-->
            </div>
            <!--Grid row-->


        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->

<div class="container">
    <div class="row">
        <div class="col-lg-2 mb-3 hideOnMobile"></div>

        <!--Grid column-->
        <div class="col-lg-8 col-md-9 mb-3">

            <div class="card rgba-blue-slight p-4 my-4">
                <div class="font11 mb-3 font-weight-bold"><a class="" href="/courses">Онлайн курсы</a></div>
                <div>
                    <ul class="list-unstyled card-text font09">
                        <li class="mb-2"><a href="/kurs-html-dlya-nachinayushih">Курс HTML для начинающих</a></li>
                        <li class="mb-2"><a href="/kurs-php-dlya-nachinayushih">Курс PHP для начинающих</a></li>
                        <li class="mb-2"><a href="/php-i-mysql-s-nulya">Курс MySQL для начинающих</a></li>
                        <li class="mb-2"><a href="/oop-v-php-prodvinutyj-kurs">Курс ООП в PHP</a></li>
                    </ul>
                    <a href="/courses" class="btn btn-sm btn-elegant shadow-none ml-0">Все курсы</a>
                </div>
            </div>

            <!--            -->
            <div class="card readAlso">
                <div class="card-header font11">Популярное за сутки</div>
                <div class="card-body">
                    <div class="font09 mb-3">
                        <a onclick="yaCounter34416790.reachGoal('click-read-also')" href="https://php.zone/symfony-course/slushateli-kak-rabotayut-i-kak-ih-ispolzovat-ne-po-standartu">
                            Слушатели: как работают и как их использовать не по стандарту                            </a>
                    </div>
                    <div class="font09 mb-3">
                        <a onclick="yaCounter34416790.reachGoal('click-read-also')" href="https://php.zone/kurs-php-dlya-nachinayushih/usloviya-v-php">
                            Условия в PHP                            </a>
                    </div>
                    <div class="font09 mb-3">
                        <a onclick="yaCounter34416790.reachGoal('click-read-also')" href="https://php.zone/kurs-php-dlya-nachinayushih/massivy-v-php">
                            Изучаем массивы в PHP                            </a>
                    </div>
                    <div class="font09 mb-3">
                        <a onclick="yaCounter34416790.reachGoal('click-read-also')" href="https://php.zone/kurs-php-dlya-nachinayushih/get-zaprosy-v-php">
                            GET-запросы в PHP                            </a>
                    </div>
                    <div class="font09 ">
                        <a onclick="yaCounter34416790.reachGoal('click-read-also')" href="https://php.zone/kurs-php-dlya-nachinayushih/funkcii-v-php">
                            Функции в PHP                            </a>
                    </div>
                </div>
            </div>

            <div class="card rgba-blue-slight p-4 my-4">
                <div class="font11 mb-3 font-weight-bold"><a class="" href="/tests">Онлайн тесты</a></div>
                <div>
                    <ul class="list-unstyled card-text font09">
                        <li class="mb-2"><a href="/test-html">Тест на знание основ HTML</a></li>
                        <li class="mb-2"><a href="/test-php">Тест на знание основ PHP</a></li>
                        <li class="mb-2"><a href="/test-oop-v-php">Тест на знание ООП в PHP</a></li>
                    </ul>
                    <a href="/tests" class="btn btn-sm btn-elegant shadow-none ml-0">Все тесты</a>
                </div>
            </div>


            <div class="card readAlso">
                <div class="card-header font11">Сейчас читают</div>
                <div class="card-body">
                    <div class="font09 mb-3">
                        <a onclick="yaCounter34416790.reachGoal('click-interesting-in-footer')" href="https://php.zone/kurs-html-dlya-nachinayushih/kak-sozdat-html-stranicu">
                            Создаём свою первую HTML-страницу                            </a>
                    </div>
                    <div class="font09 mb-3">
                        <a onclick="yaCounter34416790.reachGoal('click-interesting-in-footer')" href="https://php.zone/kurs-php-dlya-nachinayushih/otladka-php-koda-s-pomoshchyu-xdebug-v-phpstorm">
                            Отладка PHP 8 с помощью Xdebug 3 в PHPStorm                            </a>
                    </div>
                    <div class="font09 mb-3">
                        <a onclick="yaCounter34416790.reachGoal('click-interesting-in-footer')" href="https://php.zone/kurs-html-dlya-nachinayushih/chto-delat-posle-izucheniya-osnov-html">
                            Что делать после прохождения курса HTML                            </a>
                    </div>
                    <div class="font09 mb-3">
                        <a onclick="yaCounter34416790.reachGoal('click-interesting-in-footer')" href="https://php.zone/kurs-html-dlya-nachinayushih/kak-sdelat-opisanie-stranicy-dlya-poiskovikov">
                            Теги для поисковиков                            </a>
                    </div>
                    <div class="font09 ">
                        <a onclick="yaCounter34416790.reachGoal('click-interesting-in-footer')" href="https://php.zone/kurs-html-dlya-nachinayushih/tegi-v-html">
                            Теги как основа HTML-страницы                            </a>
                    </div>
                </div>
            </div>

            <div class="card rgba-blue-slight p-4 my-4">
                <div class="font11 mb-3 font-weight-bold"><a class="" href="/tests">Онлайн тесты</a></div>
                <div>
                    <ul class="list-unstyled card-text font09">
                        <li class="mb-2"><a href="/test-html">Тест на знание основ HTML</a></li>
                        <li class="mb-2"><a href="/test-php">Тест на знание основ PHP</a></li>
                        <li class="mb-2"><a href="/test-oop-v-php">Тест на знание ООП в PHP</a></li>
                    </ul>
                    <a href="/tests" class="btn btn-sm btn-elegant shadow-none ml-0">Все тесты</a>
                </div>
            </div>


        </div>
        <!--Grid column-->
        <div class="col-lg-2 mb-3 hideOnMobile"></div>
    </div>
</div>

<div style="text-align: center; width:100%;" class="showOnMobile mb-4">
    <a class="btn btn-success" style="font-size:large;width:92%;padding: 0.84rem 1.14rem" target="_blank" rel="nofollow" href="https://play.google.com/store/apps/details?id=com.logistorm.brainteaser"><i class="fa fa-android fa-lg"></i> Логические задачи с собеседований</a>
</div>

<!--Footer-->
<footer id="footer" class="page-footer mdb-color darken-2 mt-4 center-on-small-only">

    <!--Footer links-->
    <div class="container">
        <div class="row mt-4">
            <!--First column-->
            <div class="col-lg-3 col-md-6">
                <img src="/app/img/avatars/author.png" style="width: 140px;" class="mb-4" alt="Артём Ивашкевич">
                <h5 class="title mb-3">
                    <strong>Об авторе</strong>
                </h5>
                <p>Если вам интересно узнать <br> как я стал программистом, <br>читайте <a style="text-decoration: underline;" href="https://php.zone/about">вот эту</a> статью.</p>
            </div>
            <!--/.First column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Second column-->
            <div class="col-lg-3 col-md-6 ml-auto">
                <h5 class="title mb-3">
                    <a href="https://php.zone/courses">Курсы <span style="color: #2e3951">PHP</span></a>
                </h5>
                <ul>
                    <li>
                        <a href="https://php.zone/kurs-html-dlya-nachinayushih">Курс HTML для начинающих</a>
                    </li>
                    <li>
                        <a href="https://php.zone/kurs-php-dlya-nachinayushih">PHP для начинающих</a>
                    </li>
                    <li>
                        <a href="https://php.zone/php-i-mysql-s-nulya">Курс MySQL с нуля</a>
                    </li>
                    <li>
                        <a href="https://php.zone/oop-v-php-prodvinutyj-kurs">ООП в PHP</a>
                    </li>
                    <li>
                        <a href="https://php.zone/php-dlya-professionalov">PHP для профессионалов</a>
                    </li>
                    <li>
                        <a href="https://php.zone/symfony-course">Курс по Symfony</a>
                    </li>
                    <li>
                        <a href="https://php.zone/laravel-insides">Курс по Laravel</a>
                    </li>
                </ul>

                <h5 class="title mb-3 mt-4">
                    <strong>Тесты</strong>
                </h5>
                <ul>
                    <li><a href="/test-html">Тест по основам HTML</a></li>
                    <li><a href="/test-php">Тест по основам PHP</a></li>
                    <li><a href="/test-oop-v-php">Тест по ООП в PHP</a></li>
                    <li><a href="/test-mysql">Тест по основам MySQL</a></li>
                </ul>
            </div>
            <!--/.Second column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Third column-->
            <div class="col-lg-3 col-md-6 ml-auto">
                <h5 class="title mb-3">
                    <strong>Статьи</strong>
                </h5>
                <ul>
                    <li><a href="/rubric/backend">Backend</a></li>
                    <li><a href="/rubric/frontend">Frontend</a></li>
                    <li><a href="/rubric/opinions">Мнения</a></li>
                    <li><a href="/rubric/diy">DIY</a></li>
                    <li><a href="/rubric/tools">Инструменты</a></li>
                    <li><a href="/rubric/etc">Прочее</a></li>
                    <li><a href="/rubric/other">Другое</a></li>
                </ul>

                <h5 class="title mb-3 mt-4">
                    <strong>Разное</strong>
                </h5>
                <ul>
                    <li><a href="/code">Песочница</a></li>
                    <li><a href="/problems">Алгоритмические задачи</a></li>
                    <li><a href="/puzzles">Логические задачи</a></li>
                    <li><a href="/q-and-a">Вопросы и ответы</a></li>
                </ul>
            </div>
            <!--/.Third column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Fourth column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <ul>
                    <li><a href="/donate">Поддержать&nbsp;проект</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                    <li><a href="/reviews">Отзывы учеников</a></li>
                    <li><a href="/rating">Рейтинг</a></li>
                    <li><a href="/privacy">Конфиденциальность</a></li>
                    <li><a href="/contract">Договор-оферта</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer links-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4 text-center">
        <a rel="nofollow" href="https://vk.com/php_zone" target="_blank">
            <i class="fa fa-vk mr-3"></i>
        </a>

        <a rel="nofollow" href="https://t.me/php_zone_chan" target="_blank">
            <i class="fa fa-telegram mr-3"></i>
        </a>

        <!--        <a rel="nofollow" href="https://www.facebook.com/php.zone.chan/" target="_blank">-->
        <!--            <i class="fa fa-facebook mr-3"></i>-->
        <!--        </a>-->

        <a rel="nofollow" href="https://twitter.com/php_zone_chan" target="_blank">
            <i class="fa fa-twitter mr-3"></i>
        </a>

        <a rel="nofollow" href="https://www.youtube.com/channel/UCXhQnwQUhGuz15pddQRW2-g" target="_blank">
            <i class="fa fa-youtube mr-3"></i>
        </a>

        <a href="https://php.zone/feed" target="_blank">
            <i class="fa fa-rss mr-3"></i>
        </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center font-small">
        Самозанятый Ивашкевич&nbsp;А.В. ИНН&nbsp;543570142160 <br>
        © 2016-2024 PHP.Zone
        <br>


        <!-- Yandex.Metrika counter --> <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(34416790, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/34416790" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-70299615-1', 'auto');
            ga('send', 'pageview');
        </script>

        <div class="footerPlaceForFixedBottom"></div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<a style="background-color: #00B0F9 !important;" title="Наверх" id="back-to-top" href="#" class="btn btn-primary" role="button" data-placement="left"><i class="fa fa-chevron-up"></i></a>

<script src="https://php.zone/new/build/users.min.js?1711198253299"></script>



<script>
</script>


</body>

</html><!--Process Time: 0.032469034194946--><!--MySQL Queries: 8--><!--Memory peak usage: 3.356315612793 Mb-->
