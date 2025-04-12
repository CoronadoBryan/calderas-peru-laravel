@extends('layouts.layout')

@php
$title='Blog Gride';
$subTitle = 'Blog';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

<!--Start Blog Three-->
<section class="blog-two blog-two--three blog-two--three--blog">
    <div class="container">
        <div class="row">
            <!--Start Blog Two Single-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="blog-two__single">
                    <div class="blog-two__single-img">
                        <div class="overlay-img__outer">
                            <div class="name">
                                <p>Harley Russle</p>
                            </div>
                            <div class="overlay-img">
                                <img src="{{ asset('assets/img/blog/blog-v3-img4.jpg') }}" alt="#">
                            </div>
                        </div>
                        <div class="inner">
                            <img src="{{ asset('assets/img/blog/blog-v3-img1.jpg') }}" alt="#">
                        </div>
                    </div>

                    <div class="blog-two__single-content">
                        <h2><a href="{{ route('blogDetails') }}">How technology can help <br> redraw the supply</a></h2>
                        <ul class="meta-box">
                            <li><a href="#">Road Freight</a></li>
                            <li>-</li>
                            <li>July 13, 2025</li>
                        </ul>

                        <div class="btn-box">
                            <a href="{{ route('blogDetails') }}">Read More <span class="icon-right-arrow-5"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog Two Single-->

            <!--Start Blog Two Single-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="blog-two__single">
                    <div class="blog-two__single-img">
                        <div class="overlay-img__outer">
                            <div class="name">
                                <p>Harley Russle</p>
                            </div>
                            <div class="overlay-img">
                                <img src="{{ asset('assets/img/blog/blog-v3-img5.jpg') }}" alt="#">
                            </div>
                        </div>
                        <div class="inner">
                            <img src="{{ asset('assets/img/blog/blog-v3-img2.jpg') }}" alt="#">
                        </div>
                    </div>

                    <div class="blog-two__single-content">
                        <h2><a href="{{ route('blogDetails') }}">Going forward, a new normal <br> that has evolved</a>
                        </h2>
                        <ul class="meta-box">
                            <li><a href="#">Transport</a></li>
                            <li>-</li>
                            <li>August 13, 2025</li>
                        </ul>

                        <div class="btn-box">
                            <a href="{{ route('blogDetails') }}">Read More <span class="icon-right-arrow-5"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog Two Single-->

            <!--Start Blog Two Single-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="blog-two__single">
                    <div class="blog-two__single-img">
                        <div class="overlay-img__outer">
                            <div class="name">
                                <p>Harley Russle</p>
                            </div>
                            <div class="overlay-img">
                                <img src="{{ asset('assets/img/blog/blog-v3-img13.jpg') }}" alt="#">
                            </div>
                        </div>
                        <div class="inner">
                            <img src="{{ asset('assets/img/blog/blog-v3-img3.jpg') }}" alt="#">
                        </div>
                    </div>

                    <div class="blog-two__single-content">
                        <h2><a href="{{ route('blogDetails') }}">Advanced Service Functions <br> by Air Transport</a>
                        </h2>
                        <ul class="meta-box">
                            <li><a href="#">Air Freight</a></li>
                            <li>-</li>
                            <li>September 24, 2025</li>
                        </ul>

                        <div class="btn-box">
                            <a href="{{ route('blogDetails') }}">Read More <span class="icon-right-arrow-5"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog Two Single-->

            <!--Start Blog Two Single-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="blog-two__single">
                    <div class="blog-two__single-img">
                        <div class="overlay-img__outer">
                            <div class="name">
                                <p>Harley Russle</p>
                            </div>
                            <div class="overlay-img">
                                <img src="{{ asset('assets/img/blog/blog-v3-img14.jpg') }}" alt="#">
                            </div>
                        </div>
                        <div class="inner">
                            <img src="{{ asset('assets/img/blog/blog-v3-img7.jpg') }}" alt="#">
                        </div>
                    </div>

                    <div class="blog-two__single-content">
                        <h2><a href="{{ route('blogDetails') }}">Future Is Bright When You Are <br> More Prepared</a>
                        </h2>
                        <ul class="meta-box">
                            <li><a href="#">Oceanc</a></li>
                            <li>-</li>
                            <li>April 30, 2025</li>
                        </ul>

                        <div class="btn-box">
                            <a href="{{ route('blogDetails') }}">Read More <span class="icon-right-arrow-5"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog Two Single-->

            <!--Start Blog Two Single-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="blog-two__single">
                    <div class="blog-two__single-img">
                        <div class="overlay-img__outer">
                            <div class="name">
                                <p>Harley Russle</p>
                            </div>
                            <div class="overlay-img">
                                <img src="{{ asset('assets/img/blog/blog-v3-img15.jpg') }}" alt="#">
                            </div>
                        </div>
                        <div class="inner">
                            <img src="{{ asset('assets/img/blog/blog-v3-img8.jpg') }}" alt="#">
                        </div>
                    </div>

                    <div class="blog-two__single-content">
                        <h2><a href="{{ route('blogDetails') }}">The perfect logistics partner <br> for your business</a>
                        </h2>
                        <ul class="meta-box">
                            <li><a href="#">Logistic</a></li>
                            <li>-</li>
                            <li>January 09, 2025</li>
                        </ul>

                        <div class="btn-box">
                            <a href="{{ route('blogDetails') }}">Read More <span class="icon-right-arrow-5"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog Two Single-->

            <!--Start Blog Two Single-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="blog-two__single">
                    <div class="blog-two__single-img">
                        <div class="overlay-img__outer">
                            <div class="name">
                                <p>Harley Russle</p>
                            </div>
                            <div class="overlay-img">
                                <img src="{{ asset('assets/img/blog/blog-v3-img16.jpg') }}" alt="#">
                            </div>
                        </div>
                        <div class="inner">
                            <img src="{{ asset('assets/img/blog/blog-v3-img9.jpg') }}" alt="#">
                        </div>
                    </div>

                    <div class="blog-two__single-content">
                        <h2><a href="{{ route('blogDetails') }}">Moving your products across <br> all borders</a></h2>
                        <ul class="meta-box">
                            <li><a href="#">Rail Freight</a></li>
                            <li>-</li>
                            <li>February 16, 2025</li>
                        </ul>

                        <div class="btn-box">
                            <a href="{{ route('blogDetails') }}">Read More <span class="icon-right-arrow-5"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog Two Single-->

            <!--Start Blog Two Single-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="blog-two__single">
                    <div class="blog-two__single-img">
                        <div class="overlay-img__outer">
                            <div class="name">
                                <p>Harley Russle</p>
                            </div>
                            <div class="overlay-img">
                                <img src="{{ asset('assets/img/blog/blog-v3-img6.jpg') }}" alt="#">
                            </div>
                        </div>
                        <div class="inner">
                            <img src="{{ asset('assets/img/blog/blog-v3-img10.jpg') }}" alt="#">
                        </div>
                    </div>

                    <div class="blog-two__single-content">
                        <h2><a href="{{ route('blogDetails') }}">Why Transport is Key in <br> Logistics?</a></h2>
                        <ul class="meta-box">
                            <li><a href="#">Air Freight</a></li>
                            <li>-</li>
                            <li>November 13, 2025</li>
                        </ul>

                        <div class="btn-box">
                            <a href="{{ route('blogDetails') }}">Read More <span class="icon-right-arrow-5"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog Two Single-->

            <!--Start Blog Two Single-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="blog-two__single">
                    <div class="blog-two__single-img">
                        <div class="overlay-img__outer">
                            <div class="name">
                                <p>Harley Russle</p>
                            </div>
                            <div class="overlay-img">
                                <img src="{{ asset('assets/img/blog/blog-v3-img17.jpg') }}" alt="#">
                            </div>
                        </div>
                        <div class="inner">
                            <img src="{{ asset('assets/img/blog/blog-v3-img11.jpg') }}" alt="#">
                        </div>
                    </div>

                    <div class="blog-two__single-content">
                        <h2><a href="{{ route('blogDetails') }}">New York Door To Door <br> Transportation</a></h2>
                        <ul class="meta-box">
                            <li><a href="#">Cargo Freight</a></li>
                            <li>-</li>
                            <li>March 17, 2025</li>
                        </ul>

                        <div class="btn-box">
                            <a href="{{ route('blogDetails') }}">Read More <span class="icon-right-arrow-5"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog Two Single-->

            <!--Start Blog Two Single-->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="blog-two__single">
                    <div class="blog-two__single-img">
                        <div class="overlay-img__outer">
                            <div class="name">
                                <p>Harley Russle</p>
                            </div>
                            <div class="overlay-img">
                                <img src="{{ asset('assets/img/blog/blog-v3-img18.jpg') }}" alt="#">
                            </div>
                        </div>
                        <div class="inner">
                            <img src="{{ asset('assets/img/blog/blog-v3-img12.jpg') }}" alt="#">
                        </div>
                    </div>

                    <div class="blog-two__single-content">
                        <h2><a href="{{ route('blogDetails') }}">Acadian Road Emergency <br> Transport Services</a></h2>
                        <ul class="meta-box">
                            <li><a href="#">Oceanc</a></li>
                            <li>-</li>
                            <li> December 15, 2025</li>
                        </ul>

                        <div class="btn-box">
                            <a href="{{ route('blogDetails') }}">Read More <span class="icon-right-arrow-5"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Blog Two Single-->
        </div>

        <ul class="styled-pagination text-center clearfix">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="arrow next active"><a href="#"><span class="icon-right-arrow1"></span></a>
            </li>
        </ul>
    </div>
</section>
<!--End Blog Three-->

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