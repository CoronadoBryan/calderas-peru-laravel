@extends('layouts.layout')

{{-- @php
$title='About Us';
$subTitle = 'About Us';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp --}}

@section('content')

<!--Start About Three-->
<section class="about-three">
    <div class="container">
        <div class="row">
            <!--Start About Three Img-->
            <div class="col-xl-6">
                <div class="about-three__img">
                    <div class="shape1"><img src="{{ asset('assets/img/shape/about-v3-shape1.png') }}" alt=""></div>
                    <div class="about-three__img1 wow fadeInLeft" data-wow-delay=".1s">
                        <img src="{{ asset('assets/img/about/about-v3-img1.jpg') }}" alt="">
                    </div>
                    <div class="about-three__img2 wow fadeInRight" data-wow-delay=".1s">
                        <img src="{{ asset('assets/img/about/about-v3-img2.jpg') }}" alt="">
                    </div>
                    <div class="about-three__img-icon-box">
                        <div class="round-text">
                            <div class="curved-circle-3 rotate-me">
                                Calderas Peru Lideres en la Industria - 
                            </div>
                        </div>
                        <div class="icon">
                            <img src="{{ asset('assets/img/logo/logo-mini.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--End About Three Img-->

            <!--Start About Three Content-->
            <div class="col-xl-6">
                <div class="about-three__content">
                    <div class="sec-title-style3">
                        <div class="sub-title">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/title-marker-4.png') }}" alt="">
                            </div>
                            <h5>Sobre Nosotros</h5>
                        </div>
                        <h2>La Mejor Empresa de <br>
                            Calderas Industriales</h2>
                    </div>
                    <div class="about-three__content-text">
                        <p>En Calderas Perú, nos especializamos en el diseño, fabricación y mantenimiento de calderas industriales, ofreciendo soluciones personalizadas para satisfacer las necesidades de diversas industrias.</p>
                    </div>
            
                    <ul class="about-three__content-list">
                        <li>
                            <div class="icon-box">
                                <span class="icon-global-network"></span>
                            </div>
            
                            <div class="text-box">
                                <h3>Calidad Garantizada</h3>
                                <p>Fabricamos calderas con los más altos estándares de calidad <br>
                                    para garantizar un rendimiento óptimo y duradero.</p>
                            </div>
                        </li>
            
                        <li>
                            <div class="icon-box">
                                <span class="icon-enter-product-details"></span>
                            </div>
            
                            <div class="text-box">
                                <h3>Seguridad y Confiabilidad</h3>
                                <p>Ofrecemos equipos seguros y confiables, diseñados para <br>
                                    cumplir con las normativas más exigentes.</p>
                            </div>
                        </li>
                    </ul>
            
                    <div class="about-three__content-bottom">
                        <div class="btn-box">
                            <a class="thm-btn" href="#">
                                <span class="txt">Conoce Más Sobre Nosotros</span>
                            </a>
                        </div>
            
                        <div class="author-box">
                            <div class="img-box">
                                <img src="{{ asset('assets/img/about/about-v2-img4-.jpg') }}" alt="">
                            </div>
            
                            <div class="text-box">
                                <p>¿Necesitas Ayuda?</p>
                                <h3><a href="tel:123456789">+51 999 999 999</a></h3>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
            <!--End About Three Content-->
        </div>
    </div>
</section>
<!--End About Three-->



<!--Start Brand Two-->
<section class="brand-one brand-one--two">
    <div class="big-title-box">calderas peru</div>
    <div class="container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
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
                                        "slidesPerView": 2
                                    },
                                    "767": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 3
                                    },
                                    "991": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 4
                                    },
                                    "1199": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 5
                                    }
                                }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('assets/img/brand/brand-v2-img1.png') }}" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="{{ asset('assets/img/brand/brand-v2-img1.png') }}" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('assets/img/brand/brand-v2-img2.png') }}" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="{{ asset('assets/img/brand/brand-v2-img2.png') }}" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('assets/img/brand/brand-v2-img3.png') }}" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="{{ asset('assets/img/brand/brand-v2-img3.png') }}" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('assets/img/brand/brand-v2-img4.png') }}" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="{{ asset('assets/img/brand/brand-v2-img4.png') }}" alt="#">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img-box">
                        <img src="{{ asset('assets/img/brand/brand-v2-img5.png') }}" alt="#">
                    </div>

                    <div class="img-box2">
                        <img src="{{ asset('assets/img/brand/brand-v2-img5.png') }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brand Two -->


@endsection