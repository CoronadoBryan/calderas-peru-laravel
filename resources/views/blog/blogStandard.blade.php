@extends('layouts.layout')

@php
$title='Blog Standard';
$subTitle = 'Blog Standard';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

        <!--Start Blog Standard Page-->
        <section class="blog-standard-page">
            <div class="container">
                <div class="row">
                    <!--Start Blog Standard Page Content-->
                    <div class="col-xl-8">
                        <div class="blog-standard-page__content">
                            <!--Start Blog Standard Page Single-->
                            <div class="blog-standard-page__single">
                                <div class="blog-standard-page__single-img">
                                    <img src="{{ asset('assets/img/blog/blog-standard-img1.jpg') }}" alt="">
                                    <div class="logo-box">
                                        <img src="{{ asset('assets/img/blog/blog-standard-page-logo1.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="blog-standard-page__single-content">
                                    <ul class="meta-box">
                                        <li><a href="#"><i class="icon-user1"></i> By admin</a></li>
                                        <li><a href="#"><i class="icon-date"></i> November 13, 2025</a></li>
                                        <li><a href="#"><i class="icon-comments"></i> 02 Comments</a></li>
                                        <li><a href="#"><i class="icon-tag"></i> Rail Transport</a></li>
                                    </ul>
                                    <h2><a href="{{ route('blogDetails') }}">Rail Transport Service Functions by <br> Translo
                                            Logister</a></h2>
                                    <p>Packages and web page editors now use Lorem Ipsum as their default model
                                        textlayout. The point of using are Ipsum is that it has a more-or-less normal
                                        distribution of letterng...</p>
                                    <div class="btn-box">
                                        <a class="thm-btn" href="{{ route('blogDetails') }}">
                                            <span class="txt">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--End Blog Standard Page Single-->

                            <!--Start Blog Standard Page Single-->
                            <div class="blog-standard-page__single">
                                <div class="blog-standard-page__single-img">
                                    <img src="{{ asset('assets/img/blog/blog-standard-img2.jpg') }}" alt="">
                                    <div class="logo-box">
                                        <img src="{{ asset('assets/img/blog/blog-standard-page-logo2.png') }}" alt="">
                                    </div>
                                    <div class="video-btn">
                                        <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="video-one__video-btn video-popup">
                                            <span class="txt">Play</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="blog-standard-page__single-content">
                                    <ul class="meta-box">
                                        <li><a href="#"><i class="icon-user1"></i> By admin</a></li>
                                        <li><a href="#"><i class="icon-date"></i> March 27, 2025</a></li>
                                        <li><a href="#"><i class="icon-comments"></i> 03 Comments</a></li>
                                        <li><a href="#"><i class="icon-tag"></i> Air Freight</a></li>
                                    </ul>
                                    <h2><a href="{{ route('blogDetails') }}">Advanced Service Functions by <br> Rail Transport
                                            Service</a></h2>
                                    <p>Packages and web page editors now use Lorem Ipsum as their default model
                                        textlayout. The point of using are Ipsum is that it has a more-or-less normal
                                        distribution of letterng...</p>
                                    <div class="btn-box">
                                        <a class="thm-btn" href="{{ route('blogDetails') }}">
                                            <span class="txt">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--End Blog Standard Page Single-->

                            <!--Start Blog Standard Page Single-->
                            <div class="blog-standard-page__single">
                                <div class="blog-standard-page__single-content">
                                    <div class="logo-box">
                                        <img src="{{ asset('assets/img/blog/blog-standard-page-logo3.png') }}" alt="">
                                    </div>
                                    <ul class="meta-box style2">
                                        <li><a href="#"><i class="icon-user1"></i> By admin</a></li>
                                        <li><a href="#"><i class="icon-date"></i> April 30, 2025</a></li>
                                        <li><a href="#"><i class="icon-comments"></i> 06 Comments</a></li>
                                        <li><a href="#"><i class="icon-tag"></i> Logistic</a></li>
                                    </ul>
                                    <h2><a href="{{ route('blogDetails') }}">Advanced Service Functions by <br> Road Fraight</a>
                                    </h2>
                                    <p>Packages and web page editors now use Lorem Ipsum as their default model
                                        textlayout. The point of using are Ipsum is that it has a more-or-less normal
                                        distribution of letterng...</p>
                                    <div class="btn-box">
                                        <a class="thm-btn" href="{{ route('blogDetails') }}">
                                            <span class="txt">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--End Blog Standard Page Single-->

                            <!--Start Blog Standard Page Single-->
                            <div class="blog-standard-page__single">
                                <div class="blog-standard-page__single-img">
                                    <img src="{{ asset('assets/img/blog/blog-standard-img3.jpg') }}" alt="">
                                    <div class="logo-box">
                                        <img src="{{ asset('assets/img/blog/blog-standard-page-logo2.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="blog-standard-page__single-content">
                                    <ul class="meta-box">
                                        <li><a href="#"><i class="icon-user1"></i> By admin</a></li>
                                        <li><a href="#"><i class="icon-date"></i> February 28, 2025</a></li>
                                        <li><a href="#"><i class="icon-comments"></i> 04 Comments</a></li>
                                        <li><a href="#"><i class="icon-tag"></i> Ocean </a></li>
                                    </ul>
                                    <h2><a href="{{ route('blogDetails') }}">Ocean Freight Service Functions <br> by Translo</a>
                                    </h2>
                                    <p>Packages and web page editors now use Lorem Ipsum as their default model
                                        textlayout. The point of using are Ipsum is that it has a more-or-less normal
                                        distribution of letterng...</p>
                                    <div class="btn-box">
                                        <a class="thm-btn" href="{{ route('blogDetails') }}">
                                            <span class="txt">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--End Blog Standard Page Single-->

                            <ul class="styled-pagination text-center clearfix">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="arrow next active"><a href="#"><span class="icon-right-arrow1"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Blog Standard Page Content-->

                    <!--Start Sidebar-->
                    <div class="col-xl-4">
                        <div class="sidebar">
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__search wow fadeInUp" data-wow-delay=".1s">
                                <div class="title-box">
                                    <h2>Search</h2>
                                </div>
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search Here...">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__latest-post wow fadeInUp" data-wow-delay=".2s">
                                <div class="title-box">
                                    <h2>Latest Post</h2>
                                </div>
                                <ul class="sidebar__latest-post-list">
                                    <li>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/img/blog/sidebar-img1.jpg') }}" alt="">
                                        </div>

                                        <div class="text-box">
                                            <p>Air Freight - Jun 13, 2025</p>
                                            <h3><a href="#">Advanced Service by <br> Rail Transport</a></h3>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/img/blog/sidebar-img2.jpg') }}" alt="">
                                        </div>

                                        <div class="text-box">
                                            <p>Air Freight - Jun 13, 2025</p>
                                            <h3><a href="#">A New Normal That <br> Has Evolved</a></h3>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/img/blog/sidebar-img3.jpg') }}" alt="">
                                        </div>

                                        <div class="text-box">
                                            <p>Air Freight - Jun 13, 2025</p>
                                            <h3><a href="#">How technology can <br> help redraw supply</a></h3>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="img-box">
                                            <img src="{{ asset('assets/img/blog/sidebar-img4.jpg') }}" alt="">
                                        </div>

                                        <div class="text-box">
                                            <p>Air Freight - Jun 13, 2025</p>
                                            <h3><a href="#">Advanced Service by <br> Rail Transport</a></h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__services wow fadeInUp" data-wow-delay=".3s">
                                <div class="title-box">
                                    <h2>Categories</h2>
                                </div>
                                <ul class="sidebar__services-list">
                                    <li><a href="#">Road Transport <span class="icon-right-arrow-5"></span></a></li>
                                    <li><a href="#">Air Transport <span class="icon-right-arrow-5"></span></a></li>
                                    <li><a href="#">Cargo Transport <span class="icon-right-arrow-5"></span></a></li>
                                    <li><a href="#">Ocean Freight <span class="icon-right-arrow-5"></span></a></li>
                                    <li><a href="#">Rail Transport <span class="icon-right-arrow-5"></span></a></li>
                                    <li><a href="#">Warehousing <span class="icon-right-arrow-5"></span></a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__tag wow fadeInUp" data-wow-delay=".4s">
                                <div class="title-box">
                                    <h2>Tags</h2>
                                </div>
                                <ul class="sidebar__tag-list">
                                    <li><a href="#">Logistic</a></li>
                                    <li><a href="#">Transport</a></li>
                                    <li><a href="#">Cargo</a></li>
                                    <li><a href="#">Air Freight</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Ocean</a></li>
                                    <li><a href="#">Rail</a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->
                        </div>
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </section>
        <!--End Blog Standard Page-->

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