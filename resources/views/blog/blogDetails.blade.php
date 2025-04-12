@extends('layouts.layout')

@php
$title='Blog Details';
$subTitle = 'Blog Details';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

<!--Start Blog Details-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <!--Start Blog Standard Page Content-->
            <div class="col-xl-8">
                <div class="blog-details__content">

                    <!--Start Blog Standard Page Single-->
                    <div class="blog-standard-page__single">
                        <div class="blog-standard-page__single-img">
                            <img src="{{ asset('assets/img/blog/blog-details-img1.jpg') }}" alt="">
                        </div>
                        <div class="blog-standard-page__single-content">
                            <ul class="meta-box">
                                <li><a href="#"><i class="icon-user1"></i> By admin</a></li>
                                <li><a href="#"><i class="icon-date"></i> March 27, 2025</a></li>
                                <li><a href="#"><i class="icon-comments"></i> 03 Comments</a></li>
                                <li><a href="#"><i class="icon-tag"></i> Air Freight</a></li>
                            </ul>
                            <h2><a href="#">Advanced Service Functions by <br> Ocean Transport</a></h2>

                            <p>Packages and web page editors now use Lorem Ipsum as their default model
                                textlayout. The point of using are Ipsum is that it has a more-or-less normal
                                distribution of letterng It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at its layout. The
                                point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                letters, as opposed to using Content here, content here, making it look like
                                readable English. packages and web page editors now use Lorem Ipsum as their
                                default model.</p>


                            <div class="blog-details__content-text1 text-center">
                                <div class="big-icon">
                                    <span class="icon-quote11"></span>
                                </div>
                                <p>“Readable and Packages editors now use Lorem Ipsum as their default <br>
                                    model textlayout point of using the some is that it has a more”</p>
                                <div class="author-box">
                                    <div class="icon-box">
                                        <span class="icon-user1"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Rebecca Tylor</p>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-details__content-text2">
                                <div class="title-box">
                                    <h2>Safest Logistics Solutions Provider <br> With Integrity</h2>
                                    <p>Readable and Packages editors now use Lorem Ipsum as their default model
                                        textlayout. The point of using the some is that it has a more-or-less
                                        normal distribution of letters as opposed to using.</p>
                                </div>

                                <div class="blog-details__content-text2-img">
                                    <div class="shape1"><img src="{{ asset('assets/img/shape/blog-details-shape1.png') }}" alt=""></div>
                                    <img src="{{ asset('assets/img/blog/blog-details-img2.jpg') }}" alt="">
                                    <div class="video-btn">
                                        <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="video-one__video-btn video-popup">
                                            <span class="txt">Play</span>
                                        </a>
                                    </div>
                                </div>
                                <p class="text1">Packages and web page editors now use Lorem Ipsum as their
                                    default model textlayout. The point of using are Ipsum is that it has a
                                    more-or-less normal distribution of letterng.</p>
                            </div>

                            <div class="blog-details__tag-share">
                                <div class="blog-details__tag-share-tag">
                                    <div class="title">
                                        <h3>Tags:</h3>
                                    </div>

                                    <ul>
                                        <li><a href="#">Transport</a></li>
                                        <li><a href="#">Logistic</a></li>
                                        <li><a href="#">Air</a></li>
                                    </ul>
                                </div>

                                <div class="blog-details__tag-share-share">
                                    <div class="title">
                                        <h3>Share:</h3>
                                    </div>
                                    <div class="social-links">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-twitter"></span></a>
                                        <a href="#"><span class="icon-instagram"></span></a>
                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>


                            <div class="comment-one">
                                <div class="title-box">
                                    <h2>Comments (02)</h2>
                                </div>

                                <div class="comment-one__single">
                                    <div class="comment-one__single-inner">
                                        <div class="comment-one__single-top">
                                            <div class="author-box">
                                                <div class="img-box">
                                                    <img src="{{ asset('assets/img/blog/blog-details-img3.jpg') }}" alt="">
                                                </div>

                                                <div class="title">
                                                    <h3>Jhon Smith</h3>
                                                </div>
                                            </div>

                                            <div class="date-box">
                                                <p><span class="icon-date"></span> 21April, 2025 - 08:30am</p>
                                            </div>
                                        </div>

                                        <div class="comment-one__single-bottom">
                                            <p>Packages and web page editors now use Lorem Ipsum as their
                                                default model textlayout point of using are Ipsum is that it has
                                                normal Packages.</p>
                                            <div class="btn-box">
                                                <a href="#"><span class="icon-reply-arrow"></span> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-one__single ml50">
                                    <div class="comment-one__single-inner">
                                        <div class="comment-one__single-top">
                                            <div class="author-box">
                                                <div class="img-box">
                                                    <img src="{{ asset('assets/img/blog/blog-details-img4.jpg') }}" alt="">
                                                </div>

                                                <div class="title">
                                                    <h3>Jhon Smith</h3>
                                                </div>
                                            </div>

                                            <div class="date-box">
                                                <p><span class="icon-date"></span> 21April, 2025 - 08:30am</p>
                                            </div>
                                        </div>

                                        <div class="comment-one__single-bottom">
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less
                                                normal distribution of letters opposed to using. <span class="icon1"><img src="{{ asset('assets/img/icon/blog-details-icon1.png') }}" alt=""></span> <span class="icon2"><img src="{{ asset('assets/img/icon/blog-details-icon2.png') }}" alt=""></span></p>
                                            <div class="btn-box">
                                                <a href="#"><span class="icon-reply-arrow"></span> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="blog-details__form">
                                <div class="title-box">
                                    <h2>Lave a Reply</h2>
                                </div>
                                <form id="contact-form" action="assets/inc/sendemail.php" class="contact-page__form contact-form-validated">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="email" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Subject" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <textarea name="message" placeholder="Wright your massage"></textarea>
                                            </div>
                                            <div class="contact-page__btn">
                                                <button type="submit" class="thm-btn">
                                                    <span class="txt">Sand Massage</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Standard Page Single-->
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
<!--End Blog Details-->

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