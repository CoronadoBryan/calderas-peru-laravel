<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller; // Importa la clase base Controller
use App\Models\Proyecto;
use Illuminate\Http\Request;

class UserProyectoController extends Controller
{

    public function index()
    {
        // Obtener todos los proyectos
        $proyectos = Proyecto::all();
        return view('Frontend.proyectos.proyects', compact('proyectos'));
    }

    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id); // Obtiene el proyecto por ID o lanza un error 404
        return view('Frontend.proyectos.show', compact('proyecto'));
    }

}