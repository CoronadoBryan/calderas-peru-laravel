@extends('layouts.layout')

@php
$title='Project Details';
$subTitle = 'Project Details';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

        <!--Start Project Details Page-->
        <section class="project-details-page">
            <div class="container">
                <div class="row">
                    <!--Start Services Details Page Content-->
                    <div class="col-xl-8">
                        <div class="services-details-page__content">
                            <div class="services-details-page__content-img1">
                                <img src="{{ asset('assets/img/project/project-details-img1.jpg') }}" alt="#">
                            </div>

                            <div class="services-details-page__content-text1">
                                <div class="top-text">
                                    <div class="icon">
                                        <span class="icon-ocean-freight1"></span>
                                    </div>

                                    <div class="title">
                                        <h2>Transport for Product</h2>
                                    </div>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                    using 'Content here, content here', making it look like readable English. packages
                                    and web page editors now use Lorem Ipsum as their default model.</p>

                                <p>Packages and web page editors now use Lorem Ipsum as their default
                                    model textlayout. The point of using are Ipsum is that it has a more-or-less normal
                                    distribution of letters, as opposed to using 'Content here content normal
                                    distribution of letters as opposed to here making readable making.</p>
                            </div>

                            <div class="services-details-page__content-text2">
                                <div class="title-box">
                                    <h2>Project Challenge</h2>
                                    <p>Readable and Packages editors now use Lorem Ipsum as their default model
                                        textlayout. The point of using the some is that it has a more-or-less normal
                                        distribution of letters as opposed to using.</p>
                                </div>

                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="services-details-page__content-text2-single text-center">
                                            <div class="icon-box">
                                                <span class="icon-checked-2"></span>
                                            </div>
                                            <div class="text">
                                                <h4>Packages and Web <br> Page Editors</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="services-details-page__content-text2-single text-center">
                                            <div class="icon-box">
                                                <span class="icon-checked-2"></span>
                                            </div>
                                            <div class="text">
                                                <h4>Professional and <br> Dedicated Team</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="services-details-page__content-text2-single text-center">
                                            <div class="icon-box">
                                                <span class="icon-checked-2"></span>
                                            </div>
                                            <div class="text">
                                                <h4>Trusted Construction <br> Agency</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="services-details-page__content-text3">
                                <div class="title-box">
                                    <h2>How it Work</h2>
                                    <p>Readable and Packages editors now use Lorem Ipsum as their default model
                                        textlayout. The point of using the some is that it has a more-or-less normal
                                        distribution of letters as opposed to using.</p>
                                </div>

                                <div class="services-details-page__content-text3-img">
                                    <div class="shape1"><img src="{{ asset('assets/img/shape/services-details-shape1.png') }}" alt="">
                                    </div>
                                    <div class="inner">
                                        <img src="{{ asset('assets/img/service/services-details-img2.jpg') }}" alt="">

                                        <div class="services-details-page__content-text3-img-video">
                                            <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="video-btn video-popup">
                                                <span class="txt">Play</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-details-page__text1">
                                <h2>Result</h2>
                                <p>Readable and Packages editors now use Lorem Ipsum as their default model textlayout.
                                    The point of using the some is that it has a more-or-less normal distribution of
                                    letters as opposed to using.</p>
                            </div>

                            <div class="project-details-page__text2 text-center">
                                <div class="big-icon">
                                    <span class="icon-quote11"></span>
                                </div>
                                <div class="rating-box">
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                    <a href="#"><i class="icon-star"></i></a>
                                </div>
                                <p>“Readable and Packages editors now use Lorem Ipsum as their default model textlayout
                                    point of using the some is that it has a more”</p>
                                <div class="author-box">
                                    <div class="icon-box">
                                        <span class="icon-user1"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Rebecca Tylor</p>
                                    </div>
                                </div>
                            </div>

                            <div class="services-details-page__pagination">
                                <div class="single-box">
                                    <div class="icon-box">
                                        <span class="icon-air-transport"></span>
                                    </div>
                                    <div class="text-box">
                                        <p><a href="#"><span class="icon-up-right-arrow"></span> Previous</a></p>
                                        <h2><a href="#">Air Transport</a></h2>
                                    </div>
                                </div>

                                <div class="single-box style2">
                                    <div class="text-box">
                                        <p><a href="#">Next <span class="icon-up-right-arrow"></span></a></p>
                                        <h2><a href="#">Read Transport</a></h2>
                                    </div>
                                    <div class="icon-box">
                                        <span class="icon-ready-to-go-your-goods fs"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Details Page Content-->

                    <!--Start Project Details Sidebar-->
                    <div class="col-xl-4">
                        <div class="project-details__sidebar">
                            <div class="project-details__sidebar-img">
                                <img src="{{ asset('assets/img/project/project-details-img2.jpg') }}" alt="">
                            </div>

                            <div class="project-details__sidebar-project-info">
                                <div class="title">
                                    <h2>Project Info</h2>
                                </div>
                                <ul>
                                    <li>
                                        <div class="title-box">
                                            <p>Client <span>:</span></p>
                                        </div>
                                        <div class="text-box">
                                            <p>Rebecca Tylor</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="title-box">
                                            <p>Category <span>:</span></p>
                                        </div>
                                        <div class="text-box">
                                            <p>Ocean Transport</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="title-box">
                                            <p>Location <span>:</span></p>
                                        </div>
                                        <div class="text-box">
                                            <p>New York to London</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="title-box">
                                            <p>Date <span>:</span></p>
                                        </div>
                                        <div class="text-box">
                                            <p>12 November, 2025</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="title-box">
                                            <p>Status <span>:</span></p>
                                        </div>
                                        <div class="text-box">
                                            <p>Completed</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="title-box">
                                            <p>Tags <span>:</span></p>
                                        </div>
                                        <div class="text-box">
                                            <p>Best Delivery</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Project Details Sidebar-->
                </div>
            </div>
        </section>
        <!--End Project Details Page-->

        <!--Start Project Two-->
        <section class="project-two project-two--project-details">
            <div class="container">
                <div class="sec-title-style3 text-center">
                    <div class="sub-title center">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/title-marker-4.png') }}" alt="">
                        </div>
                        <h5>Recent Project</h5>
                    </div>
                    <h2>Related Projects</h2>
                </div>

                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 24,
                "slidesPerView": 3,
                "loop": true,
                "pagination": {
                    "el": "#project-details__pagination",
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
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    },
                    "375": {
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    },
                    "575": {
                        "spaceBetween": 24,
                        "slidesPerView": 1
                    },
                    "768": {
                        "spaceBetween": 24,
                        "slidesPerView": 2
                    },
                    "992": {
                        "spaceBetween": 24,
                        "slidesPerView": 3
                    },
                    "1200": {
                        "spaceBetween": 24,
                        "slidesPerView": 3
                    }
                }
            }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-two__single">
                                <div class="project-two__single-img">
                                    <div class="inner">
                                        <img src="{{ asset('assets/img/project/project-v2-img10.jpg') }}" alt="">
                                        <div class="btn-box">
                                            <a href="#"><span class="icon-right-arrow-5"></span></a>
                                        </div>
                                        <div class="overlay-content">
                                            <p>Ocean Freight</p>
                                            <h2><a href="#">Transport for Product</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-two__single">
                                <div class="project-two__single-img">
                                    <div class="inner">
                                        <img src="{{ asset('assets/img/project/project-v2-img11.jpg') }}" alt="">
                                        <div class="btn-box">
                                            <a href="#"><span class="icon-right-arrow-5"></span></a>
                                        </div>
                                        <div class="overlay-content">
                                            <p>Ocean Freight</p>
                                            <h2><a href="#">Transport for Product</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="project-two__single">
                                <div class="project-two__single-img">
                                    <div class="inner">
                                        <img src="{{ asset('assets/img/project/project-v2-img12.jpg') }}" alt="">
                                        <div class="btn-box">
                                            <a href="#"><span class="icon-right-arrow-5"></span></a>
                                        </div>
                                        <div class="overlay-content">
                                            <p>Ocean Freight</p>
                                            <h2><a href="#">Transport for Product</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="project-details__pagination"></div>
            </div>
        </section>
        <!--End Project Two-->

        <!--Start Cta Three-->
        <section class="cta-two style3 style4">
            <div class="container">
                <div class="cta-two__inner">
                    <div class="shape1"><img src="{{ asset('assets/img/shape/cta-v3-shape1.png') }}" alt=""></div>
                    <div class="shape2"><img src="{{ asset('assets/img/shape/cta-v3-shape2.png') }}" alt=""></div>
                    <div class="shape3 float-bob-x"><img src="{{ asset('assets/img/shape/cta-v3-shape3.png') }}" alt=""></div>
                    <div class="cta-two__inner-box">
                        <div class="sec-title-style3">
                            <div class="sub-title">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/title-marker-3.png') }}" alt="">
                                </div>
                                <h5>Get in touch</h5>
                            </div>
                            <h2>Looking for the best logistics <br>
                                transport services</h2>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="#">
                                <span class="txt">Request a Quote</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cta Three-->

@endsection