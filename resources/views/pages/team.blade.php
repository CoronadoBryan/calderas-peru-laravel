@extends('layouts.layout')

@php
$title='Our Team';
$subTitle = 'Our Team';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

        <!--Start Team Three-->
        <section class="team-three team-three--team">
            <div class="container">
                <div class="row">
                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="{{ asset('assets/img/team/team-v3-img1.jpg') }}" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="{{ route('teamDetails') }}">Rebecca Tylor</a></h3>
                                <p>CEO - Founder</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->

                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="{{ asset('assets/img/team/team-v3-img2.jpg') }}" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="{{ route('teamDetails') }}">Harley Russle</a></h3>
                                <p>Senior Worker</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->

                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="{{ asset('assets/img/team/team-v3-img3.jpg') }}" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="{{ route('teamDetails') }}">Helen Wilmore</a></h3>
                                <p>Sr. Manager</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->

                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="{{ asset('assets/img/team/team-v3-img4.jpg') }}" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="{{ route('teamDetails') }}">Jennifer Rivera</a></h3>
                                <p>Cargo Head</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->

                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="{{ asset('assets/img/team/team-v3-img5.jpg') }}" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="{{ route('teamDetails') }}">Jennifer Rivera</a></h3>
                                <p>Worker</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->

                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="{{ asset('assets/img/team/team-v3-img6.jpg') }}" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="{{ route('teamDetails') }}">Leonardo Axel</a></h3>
                                <p>Worker</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->

                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="{{ asset('assets/img/team/team-v3-img7.jpg') }}" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="{{ route('teamDetails') }}">Alexander Leo</a></h3>
                                <p>Worker</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->

                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="{{ asset('assets/img/team/team-v3-img8.jpg') }}" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="{{ route('teamDetails') }}">Theodore Sr.</a></h3>
                                <p>Worker</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Three Single-->
                </div>

                <div class="team-three--team__bottom">
                    <div class="text-box">
                        <p>We’re Experience. Become a team member!</p>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="{{ route('teamDetails') }}">
                            <span class="txt">Join Our Team</span> <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Team Three-->

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