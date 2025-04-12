@extends('layouts.layout')

@php
$header='false';
$footer='false';
@endphp

@section('content')

    <div class="fix">

        <!--Start Main Header One -->
        <header class="main-header main-header-one">
            <div id="sticky-header" class="menu-area">
                <div class="main-header-one__outer">
                    <div class="logo-box-one">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('assets/img/logo/logo2.png') }}" alt="Logo" class="logo-img">
                        </a>
                    </div>
        
                    <div class="main-header-one__right">
                        <div class="container">
                            <div class="menu-area__inner">
                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                                <div class="menu-wrap">
                                    <nav class="menu-nav">
                                        <div class="main-header-one__inner">
                                            <div class="main-header-one__bottom">
                                                <div class="main-header-one__bottom-left">
                                                    <div class="navbar-wrap main-menu">
                                                        <ul class="navigation">
                                                            <li class="menu-item-has-children"><a href="{{ route('index') }}">Inicio</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{ route('index') }}">Home One</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="{{ route('about') }}">Empresa</a></li>
                                                            <li class="menu-item-has-children"><a href="{{ route('viewproyectos') }}">Proyectos</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{ route('roadTransport') }}">Road Transport</a></li>
                                                                    <li><a href="{{ route('airTransport') }}">Air Transport</a></li>
                                                                    <li><a href="{{ route('cargoTransport') }}">Cargo Transport</a></li>
                                                                    <li><a href="{{ route('oceanFreight') }}">Ocean Freight</a></li>
                                                                    <li><a href="{{ route('railTransport') }}">Rail Transport</a></li>
                                                                    <li><a href="{{ route('warehousing') }}">Warehousing</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{ route('team') }}">Team</a></li>
                                                                    <li><a href="{{ route('teamDetails') }}">Team Details</a></li>
                                                                    <li><a href="{{ route('projects') }}">Projects</a></li>
                                                                    <li><a href="{{ route('projectDetails') }}">Project Details</a></li>
                                                                    <li><a href="{{ route('pagesError') }}">404</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="menu-item-has-children"><a href="#">Blog</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                                                    <li><a href="{{ route('blogStandard') }}">Blog Standard</a></li>
                                                                    <li><a href="{{ route('blogDetails') }}">Blog Details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
        
                                                <div class="main-header-one__bottom-right">
                                                    <div class="search-box">
                                                        <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                                    </div>
        
                                                    <div class="btn-box">
                                                        <a class="thm-btn" href="#">
                                                            <span class="txt">Capacitaciones</span> <i class="icon-right-arrow"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
        
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="{{ route('index') }}"><img src="{{ asset('assets/img/resource/mobile-menu-logo3.png') }}" alt="Logo"></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Trae el menu con js-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header Two -->
        
        <style>
        .logo-img {
            margin: 10px; /* Centra el logo horizontalmente */
            max-width: 160px; /* Ajusta el ancho máximo del logo */
            height: auto; /* Mantiene la proporción del logo */
            display: block; /* Elimina el espacio extra debajo de la imagen */
        }
        .sticky-menu .logo-box-one {
            background-color: #fff; /* Cambia el color de fondo */
            
        }
        .logo{
            witdh: 100px;
        }

      
        </style>
        <!--End Main Header One -->

        <!--Start Main Slider One-->
        <section class="main-slider main-slider-one">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 7000
            }}'>

                <div class="swiper-wrapper">

                    <!--Start Swiper Slide Single-->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url('{{ asset('assets/img/slider/slide1.jpg') ?: asset('assets/img/slider/default-slide.jpg') }}');">
                        </div>
                        <div class="container">
                            <div class="main-slider-one__single">
                                <div class="main-slider-one__content">
                                    <h2>Calidad y eficiencia <br> <span>para tus</span> necesidades</h2>
                                    <p>Más de 30 años de experiencia.</p>
                                    <div class="btn-box">
                                        <a class="thm-btn" href="#">
                                            <span class="txt">Ver Productos</span> <i class="icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Swiper Slide Single-->

                    <!--Start Swiper Slide Single-->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url('{{ asset('assets/img/slider/slide2.jpg') }}');">
                        </div>
                      
                        <div class="container">
                            <div class="container">
                                <div class="main-slider-one__single">
                                    <div class="main-slider-one__content">
                                        <h2>Innovación y calidad <br> <span>para tus</span> proyectos</h2>
                                        <p>Expertos en soluciones de calefacción industrial.</p>
                                        <div class="btn-box">
                                            <a class="thm-btn" href="#">
                                                <span class="txt">Conoce Más</span> <i class="icon-right-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Swiper Slide Single-->

                    <!--Start Swiper Slide Single-->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url('{{ asset('assets/img/slider/slide3.jpg') }}');">
                        </div>
                        <div class="container">
                            <div class="main-slider-one__single">
                                <div class="main-slider-one__content">
                                    <h2>Calderas de alta calidad <br> <span>para tus</span> proyectos</h2>
                                    <p>Especialistas en soluciones de calefacción industrial.</p>
                                    <div class="btn-box">
                                        <a class="thm-btn" href="#">
                                            <span class="txt">Conoce Más</span> <i class="icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Swiper Slide Single-->
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>

                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>
        <!--End Main Slider One-->

        <!--Start About One-->
        <div class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-one__img clearfix">
                            <div class="shape1 float-bob-x"><img src="{{ asset('assets/img/shape/about-v1-shape1.png') }}" alt="">
                            </div>
                            <div class="inner clearfix">
                                <img class="float-bob-y" src="{{ asset('assets/img/about/nosotros.png') }}" alt="">
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="about-one__content">
                            <div class="about-one__content-top">
                                <div class="sec-title">
                                    <div class="sub-title">
                                        <h5><span class="icon-right-arrow-1"></span> Nuestra Historia</h5>
                                    </div>
                                    <h2>25 Años Liderando el Mercado <br>
                                        Industrial en el Perú</h2>
                                </div>

                                <div class="text">
                                    <p>CALDERAS PERU S.A. es una empresa con 25 años de experiencia, que nació para satisfacer las necesidades del mercado industrial en sectores clave como el industrial, alimentario, químico, papelero, minero, y más. Contribuimos al crecimiento de la industria nacional ofreciendo equipos de alta calidad con garantía y un servicio post-venta único.

                                        Nos especializamos en el diseño, fabricación, reparación, mantenimiento e instalación de CALDERAS DE VAPOR, CALENTADORES DE AGUA, CALENTADORES DE ACEITE TÉRMICO, EQUIPOS AUXILIARES, MAQUINARIA AGROINDUSTRIAL, SAUNAS Y BAÑOS TURCOS. Nuestra misión es garantizar la calidad en cada uno de nuestros servicios, acorde a las exigencias del mercado productivo y la calidad industrial de su empresa.
                                        
                                        Además, ofrecemos el mejor servicio post-venta en el país, con atención inmediata y servicio de emergencias 24/7 para resolver cualquier problema en su sala de calderas, ofreciendo mantenimiento predictivo, preventivo y correctivo para todo tipo de equipos.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="about-one__content-features">
                    <div class="row">
                        <div class="col-md-4 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="icon-box">
                                    {{-- <img src="{{ asset('assets/img/icon/about/mission.png') }}" alt="#"> --}}
                                </div>
                                <div class="text-box">
                                    <h4>Misión</h4>
                                    <p>Satisfacer las necesidades energéticas de la industria mediante el diseño y fabricación de equipos de alta calidad y eficiencia.</p>
                                    <p>Nos enfocamos en ofrecer soluciones personalizadas que cumplan con los estándares más exigentes, garantizando la satisfacción de nuestros clientes y contribuyendo al desarrollo sostenible del sector industrial.</p>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-md-4 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="icon-box">
                                    {{-- <img src="{{ asset('assets/img/icon/about/vision.png') }}" alt="#"> --}}
                                </div>
                                <div class="text-box">
                                    <h4>Visión</h4>
                                    <p>Ser reconocidos como líderes en el mercado de la energía térmica y la generación de vapor, destacándonos por nuestra innovación tecnológica y compromiso con el medio ambiente.</p>
                                    <p>Aspiramos a expandir nuestras operaciones a nivel internacional, consolidando nuestra posición como una empresa confiable y competitiva en el sector.</p>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-md-4 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="icon-box">
                                    {{-- <img src="{{ asset('assets/img/icon/about/policy.png') }}" alt="#"> --}}
                                </div>
                                <div class="text-box">
                                    <h4>Política de la Empresa</h4>
                                    <p>Estamos comprometidos con la excelencia en cada uno de nuestros productos y servicios, promoviendo una cultura de responsabilidad ambiental.</p>
                                    <p>Nos esforzamos por cumplir con todas las normativas vigentes, garantizar la seguridad de nuestras operaciones y fomentar prácticas sostenibles que beneficien tanto a nuestros clientes como al entorno.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End About One-->

      

        <!--Start Working Process One-->
        {{-- <section class="working-process-one">
            <div class="working-process-one__bg" style="background-image: url('{{ asset('assets/img/background/working-process-v1-bg.jpg') }}');"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5><span class="icon-right-arrow-1"></span> Check our steps</h5>
                    </div>
                    <h2>Our Freight Working Process</h2>
                </div>
                <div class="row">
                    <!--Start Working Process One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="working-process-one__single">
                            <div class="shape1"><img src="{{ asset('assets/img/shape/working-process-v1-shape1.png') }}" alt=""></div>
                            <div class="working-process-one__single-top">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/working-process/step-1.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h2>Step - 1</h2>
                                </div>
                            </div>
                            <div class="working-process-one__single-content">
                                <h2><a href="#">The Paperwork</a></h2>
                                <p>Once you place your order via mail or fax our field staff will collect the documents
                                    and
                                    consignments from the shipper.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Working Process One Single-->

                    <!--Start Working Process One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="working-process-one__single ml60">
                            <div class="shape1"><img src="{{ asset('assets/img/shape/working-process-v1-shape1.png') }}" alt=""></div>
                            <div class="working-process-one__single-top">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/working-process/step-2.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h2>Step - 2</h2>
                                </div>
                            </div>
                            <div class="working-process-one__single-content">
                                <h2><a href="#">Select Location</a></h2>
                                <p>We’ll evaluate the size and weight of your cargo, find just the right carrier to fly
                                    your goods to their destination.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Working Process One Single-->

                    <!--Start Working Process One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="working-process-one__single ml80">
                            <div class="working-process-one__single-top">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/working-process/step-3.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h2>Step - 3</h2>
                                </div>
                            </div>
                            <div class="working-process-one__single-content">
                                <h2><a href="#">Partners Till The End</a></h2>
                                <p>Our teams will be working hard at every step of the journey to ensure that your
                                    shipment is delivered on time.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Working Process One Single-->
                </div>
            </div>
        </section> --}}
        <!--End Working Process One-->

    

        <!--Start Choose Us One-->
        <section class="choose-us-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5><span class="icon-right-arrow-1"></span> ¿Por qué elegirnos?</h5>
                    </div>
                    <h2>Razones para elegir Calderas Perú</h2>
                </div>
                <div class="row">
                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-global-network"></span>
                                    </div>
                                    <h3><a href="#">Calidad Garantizada</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Ofrecemos calderas y equipos industriales fabricados con los más altos estándares de calidad, asegurando un rendimiento óptimo y duradero.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->

                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-right-time-delivery"></span>
                                    </div>
                                    <h3><a href="#">Entrega Puntual</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Nos comprometemos a entregar nuestros productos en el tiempo acordado, asegurando la continuidad de tus operaciones.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->

                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-support"></span>
                                    </div>
                                    <h3><a href="#">Soporte 24/7</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Brindamos atención inmediata y soporte técnico las 24 horas, los 7 días de la semana, para resolver cualquier inconveniente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->

                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-special-shipments"></span>
                                    </div>
                                    <h3><a href="#">Soluciones Personalizadas</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Diseñamos y fabricamos calderas a medida para satisfacer las necesidades específicas de cada cliente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->

                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-enter-product-details"></span>
                                    </div>
                                    <h3><a href="#">Mantenimiento Integral</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Ofrecemos servicios de mantenimiento preventivo, correctivo y predictivo para garantizar el óptimo funcionamiento de tus equipos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->

                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-esteemed-company"></span>
                                    </div>
                                    <h3><a href="#">Experiencia y Confianza</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Con años de experiencia en el mercado, somos la elección confiable para más de 1000 empresas en todo el país.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->
                </div>
            </div>
        </section>
        <!--End Choose Us One-->

        <!--Start Project One-->
        {{-- <section class="project-one">
            <div class="project-one__bg" style="background-image: url('{{ asset('assets/img/bg/project-v1-bg.jpg') }}');"></div>
            <div class="shape1"><img src="{{ asset('assets/img/shape/project-v1-shape1.png') }}" alt=""></div>
            <div class="shape2"><img src="{{ asset('assets/img/shape/project-v1-shape2.png') }}" alt=""></div>
            <div class="container">
                <div class="project-one__top">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h5><span class="icon-right-arrow-1"></span> Recent Project</h5>
                        </div>
                        <h2>Transporting Across <br> The World</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="{{ route('projects') }}">
                            <span class="txt">View All Project</span> <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="auto-container">
                <div class="project-one__bottom">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50,
                    "slidesPerView": 3,
                    "loop": true,
                    "pagination": {
                        "el": "#project-one__pagination",
                        "type": "bullets",
                        "clickable": true
                        },
                    "navigation": {
                        "nextEl": "#team-one__swiper-button-next",
                        "prevEl": "#team-one__swiper-button-prev"
                    },
                    "autoplay": { "delay": 5000 },
                    "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "768": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "992": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "1200": {
                            "spaceBetween": 40,
                            "slidesPerView": 4
                        }
                    }
                }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!--Start  Single Project One-->
                                <div class="project-one__single">
                                    <div class="project-one__single-overlay-bg"></div>
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="{{ asset('assets/img/project/project-v1-img1.jpg') }}" alt="#">
                                        </div>
                                        <div class="overlay-box">
                                            <span>N.01</span>
                                        </div>
                                    </div>

                                    <div class="project-one__single-content">
                                        <span class="categories">Large Warehouse</span>
                                        <h3><a href="{{ route('projectDetails') }}">Warehouse & Services</a></h3>

                                        <div class="project-one__single-content-bottom">
                                            <div class="text-box">
                                                <p>Freight Consolidators connects your business with international.</p>
                                            </div>
                                            <div class="btn-box">
                                                <a class="thm-btn" href="{{ route('projectDetails') }}">
                                                    <span class="txt">View Details</span> <i class="icon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End  Single Project One-->
                            </div>

                            <div class="swiper-slide">
                                <!--Start  Single Project One-->
                                <div class="project-one__single">
                                    <div class="project-one__single-overlay-bg"></div>
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="{{ asset('assets/img/project/project-v1-img2.jpg') }}" alt="#">
                                        </div>
                                        <div class="overlay-box">
                                            <span>N.02</span>
                                        </div>
                                    </div>

                                    <div class="project-one__single-content">
                                        <span class="categories">Premium Tankers</span>
                                        <h3><a href="{{ route('projectDetails') }}">Transport for Product</a></h3>

                                        <div class="project-one__single-content-bottom">
                                            <div class="text-box">
                                                <p>Freight Consolidators connects your business with international.</p>
                                            </div>
                                            <div class="btn-box">
                                                <a class="thm-btn" href="{{ route('projectDetails') }}">
                                                    <span class="txt">View Details</span> <i class="icon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End  Single Project One-->
                            </div>

                            <div class="swiper-slide">
                                <!--Start  Single Project One-->
                                <div class="project-one__single">
                                    <div class="project-one__single-overlay-bg"></div>
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="{{ asset('assets/img/project/project-v1-img3.jpg') }}" alt="">
                                        </div>
                                        <div class="overlay-box">
                                            <span>N.03</span>
                                        </div>
                                    </div>

                                    <div class="project-one__single-content">
                                        <span class="categories">Air Transportation</span>
                                        <h3><a href="{{ route('projectDetails') }}">Transport for Product</a></h3>

                                        <div class="project-one__single-content-bottom">
                                            <div class="text-box">
                                                <p>Freight Consolidators connects your business with international.</p>
                                            </div>
                                            <div class="btn-box">
                                                <a class="thm-btn" href="{{ route('projectDetails') }}">
                                                    <span class="txt">View Details</span> <i class="icon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End  Single Project One-->
                            </div>

                            <div class="swiper-slide">
                                <!--Start  Single Project One-->
                                <div class="project-one__single">
                                    <div class="project-one__single-overlay-bg"></div>
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="{{ asset('assets/img/project/project-v1-img4.jpg') }}" alt="#">
                                        </div>
                                        <div class="overlay-box">
                                            <span>N.04</span>
                                        </div>
                                    </div>

                                    <div class="project-one__single-content">
                                        <span class="categories">Road Transportation</span>
                                        <h3><a href="{{ route('projectDetails') }}">Specialized Transport</a></h3>

                                        <div class="project-one__single-content-bottom">
                                            <div class="text-box">
                                                <p>Freight Consolidators connects your business with international.</p>
                                            </div>
                                            <div class="btn-box">
                                                <a class="thm-btn" href="{{ route('projectDetails') }}">
                                                    <span class="txt">View Details</span> <i class="icon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End  Single Project One-->
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-pagination" id="project-one__pagination"></div>
                </div>
            </div>
        </section> --}}
        <!--End Project One-->

     

     

        <!-- Start Faq One-->
        <section class="faq-one">
            <div class="big-title">
                <h2>Preguntas Frecuentes</h2>
            </div>
            <div class="faq-one__bg" style="background-image: url('{{ asset('assets/img/resource/preguntas_frecuentes.png') }}');"></div>
            <div class="container">
                <div class="row">
                    <!-- Start Faq One Faq-->
                    <div class="col-xl-6">
                        <div class="faq-one__faq">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h5><span class="icon-right-arrow-1"></span> FAQ</h5>
                                </div>
                                <h2>Preguntas y Respuestas</h2>
                            </div>
        
                            <ul class="accrodion-grp faq-one__accrodion" data-grp-name="faq-one-accrodion">
                                <!-- Start Faq One Single-->
                                <li class="accrodion active">
                                    <div class="accrodion-title">
                                        <h2><span>01.</span> ¿Qué tipos de calderas ofrecen?</h2>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <span>Respuesta:</span>
                                            <p>Ofrecemos calderas de vapor, calentadores de agua, calentadores de aceite térmico y equipos personalizados para diversas industrias.</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Faq One Single-->
        
                                <!-- Start Faq One Single-->
                                <li class="accrodion">
                                    <div class="accrodion-title">
                                        <h2><span>02.</span> ¿Realizan mantenimiento de calderas?</h2>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <span>Respuesta:</span>
                                            <p>Sí, ofrecemos servicios de mantenimiento preventivo, correctivo y predictivo para garantizar el óptimo funcionamiento de sus equipos.</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Faq One Single-->
        
                                <!-- Start Faq One Single-->
                                <li class="accrodion">
                                    <div class="accrodion-title">
                                        <h2><span>03.</span> ¿Ofrecen soporte técnico 24/7?</h2>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <span>Respuesta:</span>
                                            <p>Sí, contamos con un equipo de soporte técnico disponible las 24 horas, los 7 días de la semana para atender cualquier emergencia.</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Faq One Single-->
        
                                <!-- Start Faq One Single-->
                                <li class="accrodion">
                                    <div class="accrodion-title">
                                        <h2><span>04.</span> ¿Pueden personalizar las calderas según mis necesidades?</h2>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <span>Respuesta:</span>
                                            <p>Sí, diseñamos y fabricamos calderas a medida para satisfacer los requerimientos específicos de cada cliente.</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Faq One Single-->
                            </ul>
                        </div>
                    </div>
                    <!-- End Faq One Faq-->
        
                    <!-- Start Faq One Contact Info-->
                    <div class="col-xl-6">
                        <div class="faq-one__contact-info wow fadeInRight" data-wow-delay=".3s">
                            <div class="title-box">
                                <p>Contáctanos</p>
                                <h3>¿Necesitas ayuda? Obtén una consulta gratuita</h3>
                            </div>
        
                            <div class="faq-one__contact-info-number">
                                <div class="icon">
                                    <span class="icon-call"></span>
                                </div>
        
                                <div class="text">
                                    <p>¿Tienes alguna pregunta?</p>
                                    <h3><a href="tel:999 938 966">(51) 999 938 966</a></h3>
                                </div>
                            </div>
        
                          
                        </div>
                    </div>
                    <!-- End Faq One Contact Info-->
                </div>
            </div>
        </section>
        <!-- End Faq One-->

    </div>

@endsection