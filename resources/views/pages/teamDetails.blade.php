@extends('layouts.layout')

@php
$title='Team Details';
$subTitle = 'Team Details';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

        <!--Start Team Details-->
        <section class="team-details">
            <div class="container">
                <!--Start Team Details Top-->
                <div class="team-details__top">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="team-details__top-img">
                                <img src="{{ asset('assets/img/team/team-details-img1.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="team-details__top-content">
                                <div class="team-details__top-content-progress">
                                    <div class="team-details__top-content-progress-single">
                                        <div class="title">
                                            <h4>Success Rate 80%</h4>
                                        </div>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="80%">
                                                <div class="count-text">80%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="team-details__top-content-progress-single">
                                        <div class="title">
                                            <h4>Complete Work - 90%</h4>
                                        </div>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="90%">
                                                <div class="count-text r123">90%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="team-details__top-content-progress-single mb0">
                                        <div class="title">
                                            <h4>Satisfied Client - 95%</h4>
                                        </div>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="95%">
                                                <div class="count-text r93">95%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="team-details__top-content-bottom">
                                    <div class="team-details__top-content-contact-info">
                                        <ul>
                                            <li>
                                                <div class="text-box">
                                                    <p>Name</p>
                                                    <h3>Jennifer Rivera</h3>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="text-box">
                                                    <p>Position</p>
                                                    <h3>Senior Worker</h3>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="text-box">
                                                    <p>Experience</p>
                                                    <h3>20 Years</h3>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul>
                                            <li>
                                                <div class="text-box">
                                                    <p>Email</p>
                                                    <h3><a href="mailto:yourmail@email.com">jennifer12@gmail.com</a>
                                                    </h3>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="text-box">
                                                    <p>Phone</p>
                                                    <h3><a href="tel:123456789">+70 264 566 579</a></h3>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="text-box">
                                                    <p>Address</p>
                                                    <h3>Jones Street, New York</h3>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="team-details__top-content-social-links">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-twitter"></span></a>
                                        <a href="#"><span class="icon-instagram"></span></a>
                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team Details Top-->

                <!--Start Team Details Bottom-->
                <div class="team-details__bottom">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="team-details__bottom-content">
                                <h2>Summary</h2>
                                <h4>Hello There, Established fact that a reader will be distracted more-or-less normal
                                    distribution of letters</h4>
                                <p>It is a long established fact that a reader will be distracted more-or-less normal
                                    distribution of letters, as opposed to using content here content here, making it
                                    look readable English packages and web page editors now use Lorem of Ipsum as their
                                    default model.</p>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="team-details__bottom-form">
                                <div class="title-box">
                                    <h2>Contact Us</h2>
                                </div>

                                <form id="contact-form" action="assets/inc/mail.php" method="POST">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Full Name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="email" placeholder="Email" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="number" placeholder="Mobile" name="number">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Company" name="company">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <textarea name="message" placeholder="Messege"></textarea>
                                            </div>
                                            <div class="contact-page__btn">
                                                <button type="submit" class="thm-btn" data-loading-text="Please wait...">
                                                    <span class="txt">Sand Massage</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p class="ajax-response mb-0"></p>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team Details Bottom-->
            </div>
        </section>
        <!--End Team Details-->

        <!--Start Team Three-->
        <section class="team-three team-three--team-details">
            <div class="team-three__shape1">
                <img src="{{ asset('assets/img/shape/team-v3-shape1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="team-three__top">
                    <div class="sec-title-style3">
                        <div class="sub-title">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/title-marker-4.png') }}" alt="">
                            </div>
                            <h5>Team</h5>
                        </div>
                        <h2>Meet Our Staff</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="#">
                            <span class="txt">Become a Member</span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <!--Start Team Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="{{ asset('assets/img/team/team-v3-img1.jpg') }}" alt="">
                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="#">Rebecca Tylor</a></h3>
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
                                <h3><a href="#">Harley Russle</a></h3>
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
                                <h3><a href="#">Helen Wilmore</a></h3>
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
                                <h3><a href="#">Jennifer Rivera</a></h3>
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
                </div>
            </div>
        </section>
        <!--End Team Three-->

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