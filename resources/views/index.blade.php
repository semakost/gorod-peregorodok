<!DOCTYPE html>
<html lang="ru" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Город-Перегородок.ру</title>
        <meta name="description" content="Responsive Tailwind CSS Template" />
        <meta name="keywords" content="Перегородки межкомнатные, перегородки в стиле лофт, Каскадные перегородки" />
        <meta name="author" content="MarketNet" />
        <meta name="website" content="http://gorod-peregorodok.ru" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="version" content="1.0" />
        <!-- favicon -->
        <link href="assets/images/logo-icon1.ico" rel="shortcut icon">

        <!-- Css -->
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/icons.css" />
        <link rel="stylesheet" href="assets/css/tailwind.css" />
    </head>

    <body class="font-rubik text-base text-black dark:text-white dark:bg-slate-900">
        <!-- Loader Start -->
      <div id="preloader">
            <div id="status">
                <div class="logo">
                    <img src="assets/images/logo-icon1-64.png" class="d-block mx-auto animate-[spin_10s_linear_infinite]" alt="">
                </div>
                <div class="justify-content-center">
                    <div class="text-center">
                        <h4 class="mb-0 mt-2 text-lg font-semibold">Город ПЕРЕГОРОДОК</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Loader End -->

        <!-- Navbar Start -->
        <nav class="navbar" id="navbar">
            <div class="container flex flex-wrap items-center justify-end">
                <a class="navbar-brand" href="/">
                    <span class="inline-block dark:hidden">
                        <img src="assets/images/logo-dark1.png" class="l-dark" alt="">
                        <img src="assets/images/logo-light1.png" class="l-light" alt="">
                    </span>
                    <img src="assets/images/logo-light1.png" class="hidden dark:inline-block" alt="">
                </a>

                <div class="nav-icons flex items-center lg_992:order-2 ml-auto">
                    <!-- Navbar Button -->
                    <ul class="list-none menu-social mb-0 ps-lg-4 ms-2">
                        <li class="inline">
                            <a href="">
                                <span class="login-btn-primary"><span class="btn btn-sm btn-icon rounded-full bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white"><i class="uil uil-chat"></i></span></span>
                                <span class="login-btn-light"><span class="btn btn-sm btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-chat"></i></span></span>
                            </a>
                        </li>
                        <li class="inline">
                            <a href="">
                                <span class="login-btn-primary"><span class="btn btn-sm btn-icon rounded-full bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white"><i class="uil uil-phone"></i></span></span>
                                <span class="login-btn-light"><span class="btn btn-sm btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-phone"></i></span></span>
                            </a>
                        </li>
                        <li class="inline">
                            <a href="">
                                <span class="login-btn-primary"><span class="btn btn-sm btn-icon rounded-full bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white"><i class="uil uil-instagram"></i></span></span>
                                <span class="login-btn-light"><span class="btn btn-sm btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-instagram"></i></span></span>
                            </a>
                        </li>
                    </ul>
                    <!-- Navbar Collapse Manu Button -->
                    <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ml-3 text-dark dark:text-white lg_992:hidden" aria-controls="menu-collapse" aria-expanded="false">
                        <span class="sr-only">Navigation Menu</span>
                        <i class="mdi mdi-menu mdi-24px"></i>
                    </button>
                </div>

                <!-- Navbar Manu -->
                <div class="navigation lg_992:order-1 lg_992:flex hidden" id="menu-collapse">
                    <ul class="navbar-nav nav-light" id="navbar-navlist">
                        <li class="nav-item">
                            <a class="nav-link" href="#features">О Нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Портфолио</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testi">Отзывы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Прайс</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Команда</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Блог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Hero Start -->
        <section class="py-36 lg:py-64 w-full table relative" style="overflow: hidden !important;" id="home">
            <video class="video" loop="loop" autoplay="" muted="">
                <style>
                    video.video {
                        position: absolute;
                        top: 0;
                        width:100%;
                    }
                    @media (min-width: 540px){
                        video.video{
                            top: 0;
                        }
                    }
                    @media (min-width: 640px){
                        video.video{
                            top: -50px;
                        }
                    }
                    @media (min-width: 768px){
                        video.video{
                            top: -250px;
                        }
                    }
                    @media (min-width: 992px){
                        video.video{
                            top: -350px;
                        }
                    }
                    @media (min-width: 1024px){
                        video.video{
                            top: -500px;
                        }
                    }
                    @media (min-width: 1280px){
                        video.video{
                            top: -1200px;
                        }
                    }
                    @media (min-width: 1536px){
                        video.video{
                            top: -1500px;
                        }
                    }
                </style>
                <source src="assets/images/bg/IMG_5349.MP4" type="video/mp4" />

            </video>
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 mt-12">
                    <h4 class="text-white lg:text-5xl text-4xl lg:leading-normal leading-normal font-medium mb-7 position-relative">Перегородки межкомнатные <br><span class="typewrite relative text-type-element" data-period="2000" data-type='[ "Сделаем быстро", "Качественно", "Дорого", "Богато" ]'></span></h4>

                    <p class="text-white opacity-50 mb-0 max-w-2xl text-lg">Здесь может быть текст..</p>

                    <div class="relative mt-10">
                        <a href="" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md">ХОЧУ ПЕРЕГОРОДКУ !</a>
                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->



        <!-- Start -->
        <section class="relative md:py-24 py-16" id="features">
            <div class="container lg mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 pb-8 items-center">
                    <div>
                        <h6 class="text-orange-600 text-base font-medium uppercase mb-2">О НАС</h6>
                        <h3 class="mb-4 md:text-2xl text-xl font-semibold dark:text-white md:mb-0">Город перегородок передовая компания занимающаяся межкомнатными перегородками высокого качества под заказ <br> Просто бизнес</h3>
                    </div>

                    <div>
                        <p class="text-slate-400 dark:text-slate-300 max-w-xl">Сегодня современный мир интерьерного дизайна не обходится без межкомнатных стеклянных перегородок в стиле ЛОФТ.
                            <br><br>
                            Будь то квартира или офис, а открытое полное пространство всегда создает максимальную иллюзию света и простора.
                            <br><br>
                            Данные элементы интерьера набирают сегодня особой популярности, благодаря своей изящной конструкции, элегантному виду и эксплуатации. Стеклянные перегородки можно устанавливать в любом интерьере, опираясь на создание желаемого стиля.
                        </p>
                    </div>
                </div><!--end grid-->

                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-6">
                    <div class="features p-6 hover:shadow-xl hover:shadow-slate-100 dark:hover:shadow-slate-800 transition duration-500 rounded-3xl mt-8">
                        <div class="w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm">
                            <i class="uil uil-grids"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="" class="text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium">Главное преимущество</a>
                            <p class="text-slate-400 mt-3">это отсутствие порогов (подвесная система) Удобно и безопасно.</p>

                            <div class="mt-5">
                                <a href="" class="btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500">Подробнее <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="features p-6 shadow-xl shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-3xl mt-8">
                        <div class="w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm">
                            <i class="uil uil-presentation-line"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="" class="text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium">Гибкость</a>
                            <p class="text-slate-400 mt-3">Технология изготовления позволяет получать изделия разных форм и конфигураций. </p>

                            <div class="mt-5">
                                <a href="" class="btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500">Подробнее <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="features p-6 hover:shadow-xl hover:shadow-slate-100 dark:hover:shadow-slate-800 transition duration-500 rounded-3xl mt-8">
                        <div class="w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm">
                            <i class="uil uil-flower"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="" class="text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium">Цвет на быбор!</a>
                            <p class="text-slate-400 mt-3">Алюминиевый профиль позволяет создавать более легкие и прозрачные конструкции, не утяжеляющие пространство помещения</p>

                            <div class="mt-5">
                                <a href="" class="btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500">Подробнее <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="features p-6 shadow-xl shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-3xl mt-8">
                        <div class="w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm">
                            <i class="uil uil-flip-h"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="" class="text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium">Дизайн на выбор</a>
                            <p class="text-slate-400 mt-3">Заказчик сам может выбрать дизайн будущей перегородки. </p>

                            <div class="mt-5">
                                <a href="" class="btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500">Подробнее <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="features p-6 hover:shadow-xl hover:shadow-slate-100 dark:hover:shadow-slate-800 transition duration-500 rounded-3xl mt-8">
                        <div class="w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm">
                            <i class="uil uil-adjust-circle"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="" class="text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium">Пространство</a>
                            <p class="text-slate-400 mt-3">Установка конструкций из стекла позволяет расширить видимое пространство комнаты. </p>

                            <div class="mt-5">
                                <a href="" class="btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500">Подробнее <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="features p-6 shadow-xl shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-3xl mt-8">
                        <div class="w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm">
                            <i class="uil uil-fire"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="" class="text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium">В стиле LOFT</a>
                            <p class="text-slate-400 mt-3">Перегородки loft отличаются оригинальным внешним видом и прекрасно вписываются в интерьеры любых помещений, создавая при этом особую атмосферу.</p>

                            <div class="mt-5">
                                <a href="" class="btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500">Подробнее <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-orange-600 text-base font-medium uppercase mb-2">Как мы работаем</h6>
                    <h3 class="mb-4 md:text-2xl text-xl font-medium dark:text-white">От идеи к готовому продукту</h3>

                    <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">На всех этапах работы мы то то, мы то то...</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-8">
                    <div class="timeline relative">
                        <div class="timeline-item">
                            <div class="grid sm:grid-cols-2">
                                <div class="">
                                    <div class="duration date-label-left float-right md:mr-7 relative">
                                        <img src="assets/images/svg/design-thinking.svg" class="h-64 w-64" alt="">
                                    </div>
                                </div><!--end col-->
                                <div class="mt-4 md:mt-0">
                                    <div class="event event-description-right float-left text-left md:ml-7">
                                        <h5 class="text-lg dark:text-white mb-1 font-medium">Идея</h5>
                                        <p class="timeline-subtitle mt-3 mb-0 text-slate-400">У Вас появилась идея, как можно улучшить пространство в комнате с помощью перегородок в стиле ЛОФТ</p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div><!--end timeline item-->

                        <div class="timeline-item mt-5 pt-4">
                            <div class="grid sm:grid-cols-2">
                                <div class="md:order-1 order-2">
                                    <div class="event event-description-left float-left text-right md:mr-7">
                                        <h5 class="text-lg dark:text-white mb-1 font-medium">Заявка</h5>
                                        <p class="timeline-subtitle mt-3 mb-0 text-slate-400">Вы связались с нами для реализации своей идеи. Менеджер вам предварительно все посчитает и расскажет</p>
                                    </div>
                                </div><!--end col-->
                                <div class="md:order-2 order-1">
                                    <div class="duration duration-right md:ml-7 relative">
                                        <img src="assets/images/svg/coding.svg" class="h-64 w-64" alt="">
                                    </div>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div><!--end timeline item-->

                        <div class="timeline-item mt-5 pt-4">
                            <div class="grid sm:grid-cols-2">
                                <div class="mt-4 mt-sm-0">
                                    <div class="duration date-label-left float-right md:mr-7 relative">
                                        <img src="assets/images/svg/office-desk.svg" class="h-64 w-64" alt="">
                                    </div>
                                </div><!--end col-->
                                <div class="mt-4 mt-sm-0">
                                    <div class="event event-description-right float-left text-left md:ml-7">
                                        <h5 class="text-lg dark:text-white mb-1 font-medium">Дизайн</h5>
                                        <p class="timeline-subtitle mt-3 mb-0 text-slate-400">Замерщик и дизайнер подскажут какой стиль перегородки выбрать, подберут цвет т дизайн к вашему интерьеру.</p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div><!--end timeline item-->


                        <div class="timeline-item mt-5 pt-4">
                            <div class="grid sm:grid-cols-2">
                                <div class="md:order-1 order-2">
                                    <div class="event event-description-left float-left text-right md:mr-7">
                                        <h5 class="text-lg dark:text-white mb-1 font-medium">Монтаж</h5>
                                        <p class="timeline-subtitle mt-3 mb-0 text-slate-400">За короткое время после согласования монтажники вставят уже готовые блоки. Вам остается только наслаждаться результатом.</p>
                                    </div>
                                </div><!--end col-->
                                <div class="md:order-2 order-1">
                                    <div class="duration duration-right md:ml-7 relative">
                                        <img src="assets/images/svg/trace.svg" class="h-64 w-64" alt="">
                                    </div>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div><!--end timeline item-->


                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->


        <!-- Start -->
        <section class="py-24 w-full table relative" style="background: url('assets/images/bg/IMG_5350.JPG') center">
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl text-white font-medium">Закажите замерку сейчас!</h3>

                    <p class="text-white opacity-50 max-w-xl mx-auto">
                        Мы перезвоним Вам и раскажем как быстро вы сможете получить перегородку мечты.
                    </p>

                    <div class="relative mt-10">
                        <a href="" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md">Заказать звонок !</a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 bg-zinc-50 dark:bg-gray-800" id="portfolio">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-orange-600 text-base font-medium uppercase mb-2">Портфолио</h6>
                    <h3 class="mb-4 md:text-2xl text-xl font-medium dark:text-white">У нас много замечательных примеров работ</h3>

                    <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Тут можно написать много текста Тут можно написать много текста Тут можно написать много текста Тут можно написать много текста Тут можно написать много текста </p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-6 mt-12">
                    <style>
                        #portfolio .relative {
                            min-height: 150px;
                        }
                        #portfolio .relative img {
                            position: absolute !important;
                        }
                    </style>
                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img
                            src="assets/images/portfolio/1.jpg"
                            class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
                            alt=""
                        >
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/1.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500">Жорницкого 25</a>
                                <p class="text-slate-100 tag mb-0">4 створки, алюминий, стекло</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img
                            src="assets/images/portfolio/2.jpg"
                            class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
                            alt=""
                        >
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/2.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/3.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/3.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/4.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/4.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/5.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/5.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/6.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/6.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/7.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/7.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/8.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/8.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img
                            src="assets/images/portfolio/1.jpg"
                            class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
                            alt=""
                        >
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/1.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img
                            src="assets/images/portfolio/2.jpg"
                            class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
                            alt=""
                        >
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/2.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/3.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/3.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/4.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/4.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/5.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/5.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/6.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/6.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/7.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/7.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-sm overflow-hidden group">
                        <img src="assets/images/portfolio/8.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-50 transition duration-500 z-0"></div>

                        <div class="content">
                            <div class="icon absolute z-10 hidden group-hover:block top-4 right-4">
                                <a href="assets/images/portfolio/8.jpg" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                            </div>

                            <div class="absolute z-10 hidden group-hover:block bottom-4 left-4">
                                <a href="" class="h6 text-md font-medium text-white hover:text-orange-600 transition duration-500"></a>
                                <p class="text-slate-100 tag mb-0">В стиле ЛОФТ</p>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="py-24 w-full table relative" style="background: url('assets/images/bg/IMG_5350.JPG') center">
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl text-white font-medium">Закажите замерку сейчас!</h3>

                    <p class="text-white opacity-50 max-w-xl mx-auto">
                        Мы перезвоним Вам и раскажем как быстро вы сможете получить перегородку мечты.
                    </p>

                    <div class="relative mt-10">
                        <a href="" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md">Заказать звонок !</a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- start -->
        <section class="relative md:py-24 py-16 bg-zinc-50 dark:bg-gray-800" id="testi">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-orange-600 text-base font-medium uppercase mb-2">Отзывы</h6>
                    <h3 class="mb-4 md:text-2xl text-xl font-medium dark:text-white">Отзывы наших клиентов</h3>

                    <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Тут можно написать текст</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-8 relative">
                    <div class="tiny-two-item">
                        <div class="tiny-slide">
                            <div class="lg:flex p-6 lg:p-0 relative rounded-md shadow shadow-slate-200 dark:shadow-slate-700 bg-white dark:bg-black overflow-hidden m-2">
                                <img class="w-24 h-24 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto" src="assets/images/client/01.jpg" alt="" width="384" height="512">
                                <div class="pt-6 lg:p-6 text-center lg:text-left space-y-4">
                                    <p class="text-base text-slate-500 dark:text-slate-200"> " Это мой отзыв о работе с компанией Город-Перегородок " </p>

                                    <div>
                                        <span class="text-orange-600 block mb-1">Александр</span>
                                        <span class="text-slate-400 text-sm dark:text-white/60 block">Перегородка в стиле LOFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tiny-slide">
                            <div class="lg:flex p-6 lg:p-0 relative rounded-md shadow shadow-slate-200 dark:shadow-slate-700 bg-white dark:bg-black overflow-hidden m-2">
                                <img class="w-24 h-24 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto" src="assets/images/client/02.jpg" alt="" width="384" height="512">
                                <div class="pt-6 lg:p-6 text-center lg:text-left space-y-4">
                                    <p class="text-base text-slate-500 dark:text-slate-200"> " Это мой отзыв о работе с компанией Город-Перегородок " </p>

                                    <div>
                                        <span class="text-orange-600 block mb-1">Николай</span>
                                        <span class="text-slate-400 text-sm dark:text-white/60 block">Перегородка в стиле LOFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tiny-slide">
                            <div class="lg:flex p-6 lg:p-0 relative rounded-md shadow shadow-slate-200 dark:shadow-slate-700 bg-white dark:bg-black overflow-hidden m-2">
                                <img class="w-24 h-24 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto" src="assets/images/client/03.jpg" alt="" width="384" height="512">
                                <div class="pt-6 lg:p-6 text-center lg:text-left space-y-4">
                                    <p class="text-base text-slate-500 dark:text-slate-200"> " Это мой отзыв о работе с компанией Город-Перегородок " </p>

                                    <div>
                                        <span class="text-orange-600 block mb-1">Анна</span>
                                        <span class="text-slate-400 text-sm dark:text-white/60 block">Перегородка в стиле LOFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tiny-slide">
                            <div class="lg:flex p-6 lg:p-0 relative rounded-md shadow shadow-slate-200 dark:shadow-slate-700 bg-white dark:bg-black overflow-hidden m-2">
                                <img class="w-24 h-24 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto" src="assets/images/client/04.jpg" alt="" width="384" height="512">
                                <div class="pt-6 lg:p-6 text-center lg:text-left space-y-4">
                                    <p class="text-base text-slate-500 dark:text-slate-200"> " Это мой отзыв о работе с компанией Город-Перегородок " </p>

                                    <div>
                                        <span class="text-orange-600 block mb-1">Василий</span>
                                        <span class="text-slate-400 text-sm dark:text-white/60 block">Перегородка в стиле LOFT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->



        <!-- start -->
        <section class="relative md:py-24 py-16" id="pricing">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-orange-600 text-base font-medium uppercase mb-2">Прайс</h6>
                    <h3 class="mb-4 md:text-2xl text-xl font-medium dark:text-white">Калькулятор цен</h3>

                    <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Вы можете самостоятельно предварительно расчитать стоимость перегородки вашей мечты.</p>
                </div><!--end grid-->

                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 lg:w-1/3 px-0 md:px-3 mt-8">
                        <div
                            class="flex flex-col pt-8 pb-8 bg-zinc-50 hover:bg-white dark:bg-gray-800 dark:hover:bg-black rounded-md shadow shadow-slate-200 dark:shadow-slate-700 transition duration-500">
                            <div class="px-8 pb-8">
                                <h3 class="mb-6 text-lg md:text-xl font-medium dark:text-white">Деревянная</h3>
                                <div class="mb-6 dark:text-white/70">
                                    <span class="relative -top-5 text-2xl">₽</span>
                                    <span class="text-5xl font-semibold dark:text-white">3 000</span>
                                    <span class="inline-block ml-1">/ кв.метр</span>
                                </div>
                                <p class="mb-6 text-slate-430 dark:text-slate-300">Бюджетное решение </p>
                                <a href="" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md w-full">Рассчитать стоимость</a>
                            </div>
                            <div class="border-b border-slate-200 dark:border-slate-700"></div>
                            <ul class="self-start px-8 pt-8">
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 1</span>
                                </li>
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 2</span>
                                </li>
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 3</span>
                                </li>
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 4</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 px-0 md:px-3 mt-8">
                        <div
                            class="flex flex-col pt-8 pb-8 bg-zinc-50 hover:bg-white dark:bg-gray-800 dark:hover:bg-black rounded-md shadow shadow-slate-200 dark:shadow-slate-700 transition duration-500">
                            <div class="px-8 pb-8">
                                <div class="flex flex-wrap items-center justify-between">
                                    <h3 class="mb-6 text-lg md:text-xl font-medium dark:text-white">Алюминиевая</h3>
                                </div>
                                <div class="mb-6 dark:text-white/70">
                                    <span class="relative -top-5 text-2xl">₽</span>
                                    <span class="text-5xl font-semibold dark:text-white">8 000</span>
                                    <span class="inline-block ml-1">/ кв.метр</span>
                                </div>
                                <p class="mb-6 text-slate-430 dark:text-slate-300">ЦЕНА и КАЧЕСТВО</p>
                                <a href="" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md w-full">Рассчитать стоимость</a>
                            </div>
                            <div class="border-b border-slate-200 dark:border-slate-700"></div>
                            <ul class="self-start px-8 pt-8">
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 1</span>
                                </li>
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 2</span>
                                </li>
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 3</span>
                                </li>
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 4</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 px-0 md:px-3 mt-8">
                        <div
                            class="flex flex-col pt-8 pb-8 bg-zinc-50 hover:bg-white dark:bg-gray-800 dark:hover:bg-black rounded-md shadow shadow-slate-200 dark:shadow-slate-700 transition duration-500">
                            <div class="px-8 pb-8">
                                <h3 class="mb-6 text-lg md:text-xl font-medium dark:text-white">В стиле LOFT</h3>
                                <div class="mb-6 dark:text-white/70">
                                    <span class="relative -top-5 text-2xl">₽</span>
                                    <span class="text-5xl font-semibold dark:text-white">12 000</span>
                                    <span class="inline-block ml-1">/ кв.метр</span>
                                </div>
                                <p class="mb-6 text-slate-430 dark:text-slate-300">Заказали более 100 раз</p>
                                <a href="" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md w-full">Рассчитать стоимость</a>
                            </div>
                            <div class="border-b border-slate-200 dark:border-slate-700"></div>
                            <ul class="self-start px-8 pt-8">
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 1</span>
                                </li>
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 2</span>
                                </li>
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 3</span>
                                </li>
                                <li class="flex items-center my-1 text-slate-400 dark:text-slate-300">
                                    <i class="uil uil-check-circle text-lg text-green-600 mr-1"></i>
                                    <span>Преимущестово 4</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center text-slate-400 dark:text-slate-300 mt-2"><span class="text-orange-600">*</span>Носит ознакомительный характер, не является оффертой</div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 bg-zinc-50 dark:bg-gray-800" id="team">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-orange-600 text-base font-medium uppercase mb-2">Команда</h6>
                    <h3 class="mb-4 md:text-2xl text-xl font-medium dark:text-white">Наша креативная команда</h3>

                    <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Здесь тоже может быть текст о вашей команде</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-6 mt-8">
                    <div class="relative rounded-md shadow-lg overflow-hidden group">
                        <img src="assets/images/client/01.jpg" class="group-hover:origin-center group-hover:scale-105 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-30 z-0"></div>
                        <ul class="list-none absolute z-10 hidden group-hover:block top-4 right-4 mb-0">
                             <li class="mb-1"><a href="javascript:void(0)" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon btn-sm rounded-full"><i class="uil uil-instagram"></i></a></li>
                                                    </ul><!--end icon-->

                        <div class="content absolute left-4 bottom-4 right-4 bg-white dark:bg-black hidden group-hover:block p-4 rounded-md text-center">
                            <a href="" class="h5 text-md dark:text-white hover:text-orange-600 dark:hover:text-orange-600 font-medium">Василий Петрович</a>
                            <h6 class="text-slate-400 dark:text-slate-300 mb-0 font-light">Дизайнер</h6>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-lg overflow-hidden group">
                        <img src="assets/images/client/01.jpg" class="group-hover:origin-center group-hover:scale-105 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-30 z-0"></div>
                        <ul class="list-none absolute z-10 hidden group-hover:block top-4 right-4 mb-0">
                            <li class="mb-1"><a href="javascript:void(0)" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon btn-sm rounded-full"><i class="uil uil-instagram"></i></a></li>
                        </ul><!--end icon-->

                        <div class="content absolute left-4 bottom-4 right-4 bg-white dark:bg-black hidden group-hover:block p-4 rounded-md text-center">
                            <a href="" class="h5 text-md dark:text-white hover:text-orange-600 dark:hover:text-orange-600 font-medium">Василий Петрович</a>
                            <h6 class="text-slate-400 dark:text-slate-300 mb-0 font-light">Дизайнер</h6>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-lg overflow-hidden group">
                        <img src="assets/images/client/01.jpg" class="group-hover:origin-center group-hover:scale-105 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-30 z-0"></div>
                        <ul class="list-none absolute z-10 hidden group-hover:block top-4 right-4 mb-0">
                            <li class="mb-1"><a href="javascript:void(0)" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon btn-sm rounded-full"><i class="uil uil-instagram"></i></a></li>
                        </ul><!--end icon-->

                        <div class="content absolute left-4 bottom-4 right-4 bg-white dark:bg-black hidden group-hover:block p-4 rounded-md text-center">
                            <a href="" class="h5 text-md dark:text-white hover:text-orange-600 dark:hover:text-orange-600 font-medium">Василий Петрович</a>
                            <h6 class="text-slate-400 dark:text-slate-300 mb-0 font-light">Дизайнер</h6>
                        </div>
                    </div>

                    <div class="relative rounded-md shadow-lg overflow-hidden group">
                        <img src="assets/images/client/01.jpg" class="group-hover:origin-center group-hover:scale-105 transition duration-500" alt="">
                        <div class="absolute inset-0 group-hover:bg-black opacity-30 z-0"></div>
                        <ul class="list-none absolute z-10 hidden group-hover:block top-4 right-4 mb-0">
                            <li class="mb-1"><a href="javascript:void(0)" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white btn-icon btn-sm rounded-full"><i class="uil uil-instagram"></i></a></li>
                        </ul><!--end icon-->

                        <div class="content absolute left-4 bottom-4 right-4 bg-white dark:bg-black hidden group-hover:block p-4 rounded-md text-center">
                            <a href="" class="h5 text-md dark:text-white hover:text-orange-600 dark:hover:text-orange-600 font-medium">Василий Петрович</a>
                            <h6 class="text-slate-400 dark:text-slate-300 mb-0 font-light">Дизайнер</h6>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container mt-12">
                <div class="grid grid-cols-2 md:grid-cols-4">
                    <div class="counter-box position-relative text-center">
                        <h3 class="font-medium text-3xl mb-2 dark:text-white"><span class="counter-value" data-target="40">3</span>+</h3>
                        <span class="counter-head text-slate-400 dark:text-slate-300">Городов в России</span>
                    </div><!--end counter box-->

                    <div class="counter-box position-relative text-center">
                        <h3 class="font-medium text-3xl mb-2 dark:text-white"><span class="counter-value" data-target="200">1</span>+</h3>
                        <span class="counter-head text-slate-400 dark:text-slate-300">Сотрудников</span>
                    </div><!--end counter box-->

                    <div class="counter-box position-relative text-center">
                        <h3 class="font-medium text-3xl mb-2 dark:text-white"><span class="counter-value" data-target="457">200</span>K</h3>
                        <span class="counter-head text-slate-400 dark:text-slate-300">Клиентов</span>
                    </div><!--end counter box-->

                    <div class="counter-box position-relative text-center">
                        <h3 class="font-medium text-3xl mb-2 dark:text-white"><span class="counter-value" data-target="150">100</span>+</h3>
                        <span class="counter-head text-slate-400 dark:text-slate-300">Решений</span>
                    </div><!--end counter box-->
                </div><!--end grid-->
            </div><!--end container-->


        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="py-24 w-full table relative" style="background: url('assets/images/bg/IMG_5350.JPG') center">
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl text-white font-medium">Закажите замерку сейчас!</h3>

                    <p class="text-white opacity-50 max-w-xl mx-auto">
                        Мы перезвоним Вам и раскажем как быстро вы сможете получить перегородку мечты.
                    </p>

                    <div class="relative mt-10">
                        <a href="" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md">Заказать звонок !</a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 bg-zinc-50 dark:bg-gray-800" id="contact">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-orange-600 text-base font-medium uppercase mb-2">Контакты</h6>
                    <h3 class="mb-4 md:text-2xl text-xl font-medium dark:text-white">Оставьте заявку на оратную связь</h3>

                    <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Мы перезвоним вам в течение 5 минут</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-2 mt-8 items-center gap-6">
                    <div class="lg:col-span-8">
                        <div class="p-6 rounded-md shadow bg-white dark:bg-black">
                            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <input name="name" id="name" type="text" class="form-input" placeholder="Имя :">
                                    </div>

                                    <div class="lg:col-span-6 mb-5">
                                        <input name="email" id="email" type="email" class="form-input" placeholder="Email :">
                                    </div><!--end col-->
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <input name="subject" id="subject" class="form-input" placeholder="Тема :">
                                    </div>

                                    <div class="mb-5">
                                        <textarea name="comments" id="comments" class="form-input textarea h-28" placeholder="Сообщение :"></textarea>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md h-11 justify-center flex items-center">Отправить</button>
                            </form>
                        </div>
                    </div>

                    <div class="lg:col-span-4">
                        <div class="lg:ml-8">
                            <div class="flex">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-phone block rounded text-2xl dark:text-white mb-0"></i>
                                </div>

                                <div class="flex-1 ml-6">
                                    <h5 class="text-lg dark:text-white mb-2 font-medium">Телефон</h5>
                                    <a href="tel:+152534-468-854" class="text-slate-400">+7 999 987-65-42</a>
                                </div>
                            </div>

                            <div class="flex mt-4">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-envelope block rounded text-2xl dark:text-white mb-0"></i>
                                </div>

                                <div class="flex-1 ml-6">
                                    <h5 class="text-lg dark:text-white mb-2 font-medium">E-mail</h5>
                                    <a href="mailto:contact@example.com" class="text-slate-400">contact@mail.ru</a>
                                </div>
                            </div>

                            <div class="flex mt-4">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-map-marker block rounded text-2xl dark:text-white mb-0"></i>
                                </div>

                                <div class="flex-1 ml-6">
                                    <h5 class="text-lg dark:text-white mb-2 font-medium">Адрес</h5>
                                    <p class="text-slate-400 mb-2">Якутск, Проспект Ленина, 34, офис 56</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start Footer -->
        <footer class="py-8 bg-slate-800 dark:bg-gray-900">
            <div class="container">
                <div class="grid md:grid-cols-12 items-center">
                    <div class="md:col-span-3">
                        <a href="#" class="logo-footer">
                            <img src="assets/images/logo-light1.png" class="md:ml-0 mx-auto" alt="">
                        </a>
                    </div>

                    <div class="md:col-span-6 md:mt-0 mt-8">
                        <div class="text-center">
                            <p class="text-gray-400">© <script>document.write(new Date().getFullYear())</script> Город перегородок.ру при поддержке: <i class="mdi mdi-heart text-orange-700"></i><a href="gorod-peregorodok.ru/" target="_blank" class="text-reset">МаркетNet</a></p>
                        </div>
                    </div>

                    <div class="md:col-span-3 md:mt-0 mt-8">
                        <ul class="list-none foot-icon md:text-right text-center">
                            <li class="inline"><a href="" class="btn btn-icon btn-sm border rounded-md border-slate-700 dark:border-slate-800 hover:border-orange-600 bg-slate-800 dark:bg-gray-900 hover:bg-orange-600 dark:hover:bg-orange-600 text-gray-400 hover:text-white"><i class="uil uil-youtube"></i></a></li>
                            <li class="inline"><a href="" class="btn btn-icon btn-sm border rounded-md border-slate-700 dark:border-slate-800 hover:border-orange-600 bg-slate-800 dark:bg-gray-900 hover:bg-orange-600 dark:hover:bg-orange-600 text-gray-400 hover:text-white"><i class="uil uil-instagram"></i></a></li>
                            <li class="inline"><a href="" class="btn btn-icon btn-sm border rounded-md border-slate-700 dark:border-slate-800 hover:border-orange-600 bg-slate-800 dark:bg-gray-900 hover:bg-orange-600 dark:hover:bg-orange-600 text-gray-400 hover:text-white"><i class="uil uil-phone-alt"></i></a></li>
                            <li class="inline"><a href="" class="btn btn-icon btn-sm border rounded-md border-slate-700 dark:border-slate-800 hover:border-orange-600 bg-slate-800 dark:bg-gray-900 hover:bg-orange-600 dark:hover:bg-orange-600 text-gray-400 hover:text-white"><i class="uil uil-chat"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End Footer -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-orange-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <div class="fixed top-1/4 -right-1 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/gumshoejs/gumshoe.polyfills.min.js"></script>
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>
