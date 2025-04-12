@extends('layouts.layout')

@section('content')

<section class="services-three services-three--services">
    <div class="container">
        <div class="services-three--services__top">
            <div class="title-box">
                <h2>Estos son nuestros<br>Proyectos</h2>
            </div>
        </div>

        <div class="row">
            @foreach ($proyectos as $proyecto)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Enlace al detalle del proyecto -->
                    <a href="{{ route('proyectos.show', $proyecto->id) }}" class="services-three__single">
                        <div class="services-three__single-img">
                            <div class="inner" style="width: 100%; height: 250px; overflow: hidden; position: relative;">
                                <!-- Imagen del proyecto -->
                                <img src="{{ asset('storage/' . $proyecto->imagen_1) }}" alt="{{ $proyecto->titulo }}" 
                                    style="width: 100%; height: 100%; object-fit: cover; position: absolute;">
                                
                            </div>
                        </div>

                        <div class="services-three__single-content">
                            <div class="services-three__single-content-inner">
                                <h2>{{ $proyecto->titulo }}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
.services-three__single-img .inner {
    width: 100%;
    height: 250px; /* Altura fija para todos los div */
    overflow: hidden;
    position: relative;
}

.services-three__single-img .inner img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ajusta la imagen al tamaño del contenedor */
    position: absolute;
}
</style>

@endsection
