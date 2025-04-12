@extends('layouts.layout')

@php
$title='Contact Us';
$subTitle = 'Contact Us';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

        <!--Start Contact Page-->
        <section class="contact-page">
            <div class="shape1 float-bob-y"><img src="{{ asset('assets/img/shape/contact-page-shape1.png') }}" alt=""></div>
            <div class="shape2 float-bob-y"><img src="{{ asset('assets/img/shape/contact-page-shape2.png') }}" alt=""></div>
            <div class="container">
                <div class="row">
                    <!--Start Contact Page Contact Info-->
                    <div class="col-xl-5">
                        <div class="contact-page__contact-info">
                            <div class="sec-title-style3">
                                <div class="sub-title">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/title-marker-4.png') }}" alt="">
                                    </div>
                                    <h5>Get In Touch</h5>
                                </div>
                                <h2>Contact Us Today</h2>
                            </div>

                            <ul>
                                <li>
                                    <div class="icon-box">
                                        <span class="icon-telephone-call"></span>
                                    </div>

                                    <div class="text-box">
                                        <p>Call Us Toll Free</p>
                                        <h2><a href="tel:123456789">+123 556 8824</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon-box">
                                        <span class="icon-location"></span>
                                    </div>

                                    <div class="text-box">
                                        <p>London Office</p>
                                        <h2>4517 Washington Ave. <br> Manchester</h2>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon-box">
                                        <span class="icon-email"></span>
                                    </div>

                                    <div class="text-box">
                                        <p>Email Us</p>
                                        <h2><a href="mailto:yourmail@email.com">translo@Support.com</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon-box">
                                        <span class="icon-time"></span>
                                    </div>

                                    <div class="text-box">
                                        <p>Opening Time</p>
                                        <h2>Thursday - Saturday <br>
                                            10am : 08pm</h2>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Contact Page Contact Info-->

                    <!--Start Contact Page Form-->
                    <div class="col-xl-7">
                        <div class="contact-page__form-box">
                            <div class="title">
                                <h2>Feel free to write Us</h2>
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

                            <div class="contact-page__form-box-text">
                                <p><span>Nots:</span> Packages and web page editors now use Lorem Ipsum as their default
                                    model textlayout.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Page Form-->
                </div>
            </div>
        </section>
        <!--End Contact Page-->

        <!--Start Google Map Two-->
        <section class="google-map-two">
            <iframe src="{{ asset('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd') }}" class="google-map-two__map" allowfullscreen></iframe>
        </section>
        <!--End Google Map Two-->

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