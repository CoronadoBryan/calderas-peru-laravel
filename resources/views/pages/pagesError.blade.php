@extends('layouts.layout')

@php
$title='404';
$subTitle = '404 Page Not Found';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

        <!--Start Error Page-->
        <section class="error-page">
            <div class="error-page__bg" style="background-image: url('{{ asset('assets/img/background/error-page-bg.jpg') }}');"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__wrapper text-center">
                            <div class="error-page__content">
                                <div class="shape1"><img src="{{ asset('assets/img/shape/error-page-shape1.png') }}" alt=""></div>
                                <h2>4<span><img src="{{ asset('assets/img/shape/error-page-shape2.png') }}" alt=""></span>4</h2>
                                <h3>Opps! Page Not Found</h3>
                                <p>The point of using are Ipsum is that it has a more-or-less normal distribution of
                                    <br> letterng It is a long established fact.
                                </p>
                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('index') }}">
                                        <span class="txt">Back to Homepage</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Error Page-->

        <!--Start Cta Three-->
        <section class="cta-two style3">
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