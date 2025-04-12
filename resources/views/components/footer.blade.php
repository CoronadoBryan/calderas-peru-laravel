<footer class="footer-one footer-one--two style3">
    <div class="footer-one__bg" style="background-image: url('{{ asset('assets/img/footer/fondo-footer.png') }}');"></div>
    <div class="shape2 float-bob-y"><img src="{{ asset('assets/img/shape/footer-v2-shape2.png') }}" alt=""></div>
    <!-- Start Footer Main -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-main__bottom">
                <div class="row">
                    <!--Start Single Footer Widget-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="single-footer-widget footer-widget__about">
                            <div class="logo-box">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/img/resource/logo-5.png') }}" alt=""></a>
                            </div>
                            <div class="footer-widget__about-inner">
                                <div class="footer-widget__contact-box">
                                    <ul>
                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-pin"></span>
                                            </div>

                                            <div class="content-box">
                                                <p>Dirección</p>
                                                <h4>Av. Industrial 123, Lima, Perú</h4>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-paper-plane"></span>
                                            </div>

                                            <div class="content-box">
                                                <p>Email</p>
                                                <h4><a href="mailto:info@calderasperu.com">info@calderasperu.com</a></h4>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-out-call"></span>
                                            </div>

                                            <div class="content-box">
                                                <p>Teléfono</p>
                                                <h4><a href="tel:+51999999999">+51 999 999 999</a></h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Footer Widget-->

                    <!--Start Single Footer Widget-->
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget footer-widget__links">
                            <div class="title">
                                <h2>Enlaces Rápidos</h2>
                            </div>

                            <div class="footer-widget__links-box">
                                <ul>
                                    <li><a href="{{ route('about') }}">Misión y Visión</a></li>
                                    <li><a href="{{ route('services') }}">Nuestros Servicios</a></li>
                                    <li><a href="{{ route('contact') }}">Contáctanos</a></li>
                                    <li><a href="{{ route('projects') }}">Proyectos</a></li>
                                    <li><a href="{{ route('team') }}">Nuestro Equipo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Single Footer Widget-->

                    <!--Start Single Footer Widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-footer-widget footer-widget__links services">
                            <div class="title">
                                <h2>Nuestros Servicios</h2>
                            </div>

                            <div class="footer-widget__links-box">
                                <ul>
                                    <li><a href="#">Calderas de Vapor</a></li>
                                    <li><a href="#">Calentadores de Agua</a></li>
                                    <li><a href="#">Calentadores de Aceite Térmico</a></li>
                                    <li><a href="#">Mantenimiento Preventivo</a></li>
                                    <li><a href="#">Mantenimiento Correctivo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Single Footer Widget-->

                    <!--Start Single Footer Widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget single-footer__newsletter">
                            <div class="title">
                                <h2>Boletín Informativo</h2>
                            </div>
                            <div class="single-footer__newsletter-box">
                                <div class="single-footer__newsletter-text1">
                                    <p>¡Suscríbete a nuestro boletín!</p>
                                </div>
                                <form class="single-footer__newsletter-form">
                                    <div class="single-footer__newsletter-form-input">
                                        <input type="email" placeholder="Ingresa tu correo" name="email">
                                    </div>

                                    <div class="single-footer__newsletter-btn">
                                        <button class="thm-btn" type="submit">
                                            <span class="txt">Suscribirse</span>
                                            <i class="icon-right-arrow"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Single Footer Widget-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Main -->

    <!--Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__inner">
                <div class="copyright-text">
                    <p>© 2025 <a href="{{ route('index') }}">CALDERAS PERÚ,</a> Todos los derechos reservados.</p>
                </div>
                <div class="social-links">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-instagram"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                </div>
                <div class="copyright-menu">
                    <ul>
                        <li><a href="#">Términos y Condiciones</a></li>
                        <li><a href="#">Política de Privacidad</a></li>
                        <li><a href="#">Soporte</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer Bottom -->
</footer>