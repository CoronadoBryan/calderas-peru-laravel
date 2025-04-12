@extends('layouts.layout')

@section('content')

<!--Start Services Details Page-->
<section class="project-three project-three--about">
    <div class="container">
        <div class="project-three__top">
            <div class="sec-title-style3">
              
                <h2 class="titulo">{{ $proyecto->titulo }}</h2> <!-- Título del proyecto -->
            </div>
        </div>

        <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                        "spaceBetween": 50,
                        "slidesPerView": 3,
                        "loop": true,
                        "pagination": {
                            "el": "#project-three__pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": "#team-one__swiper-button-next",
                            "prevEl": "#team-one__swiper-button-prev"
                        },
                        "autoplay": { "delay": 5000 },
                        "breakpoints": {
                            "0": {
                                "spaceBetween": 24,
                                "slidesPerView": 1
                            },
                            "375": {
                                "spaceBetween": 24,
                                "slidesPerView": 1
                            },
                            "575": {
                                "spaceBetween": 24,
                                "slidesPerView": 1
                            },
                            "768": {
                                "spaceBetween": 24,
                                "slidesPerView": 1
                            },
                            "992": {
                                "spaceBetween": 24,
                                "slidesPerView": 1
                            },
                            "1200": {
                                "spaceBetween": 24,
                                "slidesPerView": 1
                            }
                        }
                    }'>
            <div class="swiper-wrapper">
                <!-- Iterar sobre las imágenes del proyecto -->
                @for ($i = 1; $i <= 6; $i++)
                    @if ($proyecto["imagen_$i"])
                        <div class="swiper-slide">
                            <!--Start Project Three Single-->
                            <div class="project-three__single">
                                <div class="project-three__single-img">
                                    <div class="inner image-container"> <!-- Nueva clase añadida -->
                                        <img class="responsive-image" src="{{ asset('storage/' . $proyecto["imagen_$i"]) }}" alt="Imagen {{ $i }}"> <!-- Nueva clase añadida -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
            </div>
            <div class="swiper-pagination" id="project-three__pagination"></div>
        </div>
    </div>
</section>

<!-- Mostrar descripción si existe -->
@if (!empty($proyecto->descripcion))
<section class="services-details-page">
    <div class="container">
        <div class="row">
            <!--Start Services Details Page Content-->
            <div class="col-xl-8">
                <div class="services-details-page__content">
                    <div class="services-details-page__content-text1">
                        <div class="top-text">
                            <div class="icon">
                                <span class="icon-warehousing"></span>
                            </div>

                            <div class="title">
                                <h2>Descripción del Proyecto</h2>
                            </div>
                        </div>
                        <p style="margin-bottom: 50px">{!! $proyecto->descripcion !!}</p> <!-- Descripción del proyecto con HTML -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endsection

<style>
    .image-container {
        width: 100%; /* Asegura que el contenedor ocupe todo el ancho disponible */
        height: 550px; /* Fija la altura del contenedor */
        overflow: hidden; /* Oculta cualquier contenido que exceda el tamaño del contenedor */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .responsive-image {
        width: 100%; /* Ajusta la imagen al ancho del contenedor */
        height: 100%; /* Ajusta la imagen al alto del contenedor */
        object-fit: cover; /* Recorta la imagen para que se ajuste sin deformarse */
    }
    .titulo {
        text-align: center;
        font-size: 2.5rem; /* Tamaño de fuente grande */
        margin-bottom: 20px; /* Espacio debajo del título */
        color: #333; /* Color del texto */
    }
</style>