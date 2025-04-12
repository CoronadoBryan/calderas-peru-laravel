<header class="main-header main-header-one">
    <div id="sticky-header" class="menu-area">
        <div class="main-header-one__outer">
            <div class="logo-box-one">
                <div class="logo-box-one__bg" style="background-image: url('{{ asset('assets/img/pattern/logo-box-one-pattern.png') }}');"></div>
                <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/logo/logo2.png') }}" alt="Logo" class="logo-img">
                </a>
            </div>

            <div class="main-header-one__right">
                <div class="container">
                    <div class="menu-area__inner">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="main-header-one__inner">
                                    <div class="main-header-one__bottom">
                                        <div class="main-header-one__bottom-left">
                                            <div class="navbar-wrap main-menu">
                                                <ul class="navigation">
                                                    <li class="menu-item-has-children"><a href="{{ route('index') }}">Inicio</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="{{ route('index') }}">Home One</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ route('about') }}">Empresa</a></li>
                                                    <li class=""><a href="{{ route('viewproyectos') }}">Proyectos</a>
                                                        {{-- <ul class="sub-menu">
                                                            <li><a href="{{ route('roadTransport') }}">Road Transport</a></li>
                                                            <li><a href="{{ route('airTransport') }}">Air Transport</a></li>
                                                            <li><a href="{{ route('cargoTransport') }}">Cargo Transport</a></li>
                                                            <li><a href="{{ route('oceanFreight') }}">Ocean Freight</a></li>
                                                            <li><a href="{{ route('railTransport') }}">Rail Transport</a></li>
                                                            <li><a href="{{ route('warehousing') }}">Warehousing</a></li>
                                                        </ul> --}}
                                                    </li>
                                                    <li class=""><a href="{{ route('formPresupuesto') }}">Solicitar</a></li>
                                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="{{ route('team') }}">Team</a></li>
                                                            <li><a href="{{ route('teamDetails') }}">Team Details</a></li>
                                                            <li><a href="{{ route('projects') }}">Projects</a></li>
                                                            <li><a href="{{ route('projectDetails') }}">Project Details</a></li>
                                                            <li><a href="{{ route('pagesError') }}">404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children"><a href="#">Blog</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="{{ route('blog') }}">Blog</a></li>
                                                            <li><a href="{{ route('blogStandard') }}">Blog Standard</a></li>
                                                            <li><a href="{{ route('blogDetails') }}">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="main-header-one__bottom-right">
                                            <div class="search-box">
                                                <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                            </div>

                                            <div class="btn-box">
                                                <a class="thm-btn" href="#">
                                                    <span class="txt">Capacitaciones</span> <i class="icon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/img/resource/mobile-menu-logo3.png') }}" alt="Logo"></a>
                            </div>
                            <div class="menu-outer">
                                <!--Trae el menu con js-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
<!--End Main Header Two -->

<style>
.logo-img {
    margin: 10px; /* Centra el logo horizontalmente */
    max-width: 150px; /* Ajusta el ancho máximo del logo */
    height: auto; /* Mantiene la proporción del logo */
    display: block; /* Elimina el espacio extra debajo de la imagen */
}
.logo-box-one{
    background-color: #fff; 
}
</style>