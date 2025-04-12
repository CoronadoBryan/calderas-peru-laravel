@extends('layouts.layout')

@php
$title='Cargo Transport';
$subTitle = 'Cargo Transport';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

        <!--Start Services Details Page-->
        <section class="services-details-page">
            <div class="container">
                <div class="row">
                    <!--Start Services Details Page Content-->
                    <div class="col-xl-8">
                        <div class="services-details-page__content">
                            <div class="services-details-page__content-img1">
                                <img src="{{ asset('assets/img/service/services-details-img5.jpg') }}" alt="#">
                            </div>

                            <div class="services-details-page__content-text1">
                                <div class="top-text">
                                    <div class="icon">
                                        <span class="icon-experience"></span>
                                    </div>

                                    <div class="title">
                                        <h2>Cargo Transport Services</h2>
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
                                    <h2>Benefit of Service</h2>
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
                                        <h2><a href="#">Ocean Transport</a></h2>
                                    </div>
                                    <div class="icon-box">
                                        <span class="icon-ocean-freight1 fs"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Details Page Content-->

                    <!--Start Sidebar-->
                    <x-sidebar/>
                    <!--End Sidebar-->
                </div>
            </div>
        </section>
        <!--End Services Details Page-->

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