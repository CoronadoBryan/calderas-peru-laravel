<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\AdminProyectoController;     
use App\Http\Controllers\User\UserProyectoController;   
use App\Http\Controllers\User\UserSolicitudController;  
use App\Http\Controllers\ProfileController;

// Home
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// Blog
Route::prefix('blog')->group(function () {
    Route::controller(BlogController::class)->group(function () {
        Route::get('/', 'blog')->name('blog');
        Route::get('/details', 'blogDetails')->name('blogDetails');
        Route::get('/standard', 'blogStandard')->name('blogStandard');
        Route::get('/contact', 'contact')->name('contact');
    });
});

// Pages
Route::prefix('pages')->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('/error', 'pagesError')->name('pagesError');
        Route::get('/project-details', 'projectDetails')->name('projectDetails');
        Route::get('/projects', 'projects')->name('projects');
        Route::get('/team', 'team')->name('team');
        Route::get('/team-details', 'teamDetails')->name('teamDetails');
    });
});

// Services
Route::prefix('services')->group(function () {
    Route::controller(ServicesController::class)->group(function () {
        Route::get('/about', 'about')->name('about');
        Route::get('/air-transport', 'airTransport')->name('airTransport');
        Route::get('/cargo-transport', 'cargoTransport')->name('cargoTransport');
        Route::get('/ocean-freight', 'oceanFreight')->name('oceanFreight');
        Route::get('/rail-transport', 'railTransport')->name('railTransport');
        Route::get('/road-transport', 'roadTransport')->name('roadTransport');
        Route::get('/', 'services')->name('services');
        Route::get('/warehousing', 'warehousing')->name('warehousing');
    });
});


// Proyectos
Route::prefix('proyectos')->group(function () {
    Route::controller(UserProyectoController::class)->group(function () {
        Route::get('/', 'index')->name('viewproyectos');
        Route::get('/{proyecto}', 'show')->name('proyectos.show'); 
    });
});



// Solicitudes
Route::prefix('solicitudes')->group(function () {
    Route::controller(UserSolicitudController::class)->group(function () {
        Route::get('/presupuesto', 'presupuesto')->name('formPresupuesto'); // Formulario para solicitar presupuesto
        Route::post('/presupuesto', 'enviarPresupuesto')->name('enviarPresupuesto'); // Enviar presupuesto
    });
});



// Dashboard
Route::middleware(['auth'])->group(function () {
    // Proyectos (Admin)
    Route::prefix('admin/proyectos')->middleware(['auth'])->group(function () {
        Route::controller(AdminProyectoController::class)->group(function () {
            Route::get('/dashboard', 'adminIndex')->name('dashboard'); // Listar proyectos
            Route::get('/create', 'create')->name('proyectos.create'); // Formulario para crear proyectos
            Route::post('/', 'store')->name('proyectos.store'); // Guardar un nuevo proyecto
            Route::get('/{proyecto}/edit', 'edit')->name('proyectos.edit'); // Formulario para editar un proyecto
            Route::put('/{proyecto}', 'update')->name('proyectos.update'); // Actualizar un proyecto
            Route::delete('/{proyecto}', 'destroy')->name('proyectos.destroy'); // Eliminar un proyecto
        });
});
});

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Autenticación (Breeze)
require __DIR__.'/auth.php';
