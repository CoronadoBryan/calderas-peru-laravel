<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // Importa la clase base Controller
use App\Models\Proyecto;
use Illuminate\Http\Request;

class AdminProyectoController extends Controller
{
    public function adminIndex()
    {
        // Obtener todos los proyectos
        $proyectos = Proyecto::paginate(10); // Cambia 10 por el número de proyectos por página
    
        // Retornar la vista del dashboard para el administrador
        return view('Backend.dashboard', compact('proyectos'));
    }

    public function create()
    {
        // Retornar la vista para crear un proyecto
        return view('Backend.proyectos.create_proyecto');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen_1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'imagen_2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ahora es opcional
            'imagen_3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ahora es opcional
            'imagen_4' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ahora es opcional
            'imagen_5' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ahora es opcional
            'imagen_6' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ahora es opcional
        ]);

        $data = $request->all();

        // Subir las imágenes y guardar las rutas
        for ($i = 1; $i <= 6; $i++) {
            if ($request->hasFile("imagen_$i")) {
                $data["imagen_$i"] = $request->file("imagen_$i")->store('proyectos', 'public');
            }
        }

        Proyecto::create($data);

        return redirect()->route('dashboard')->with('success', 'Proyecto creado con éxito.');
    }

    public function show(Proyecto $proyecto)
    {
        //
    }

    public function edit(Proyecto $proyecto)
    {
        // Retornar la vista para editar un proyecto
        return view('Backend.proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'string|max:255',
            'descripcion' => 'string',
            'imagen_1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ahora es opcional
            'imagen_2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ahora es opcional
            'imagen_3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ahora es opcional
            'imagen_4' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ahora es opcional
            'imagen_5' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ahora es opcional
            'imagen_6' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Ahora es opcional
        ]);

        $data = $request->all();

        // Subir las nuevas imágenes y guardar las rutas
        for ($i = 1; $i <= 6; $i++) {
            if ($request->hasFile("imagen_$i")) {
                $data["imagen_$i"] = $request->file("imagen_$i")->store('proyectos', 'public');
            } else {
                // Mantener la imagen existente si no se reemplaza
                $data["imagen_$i"] = $proyecto["imagen_$i"];
            }
        }

        // Actualizar el proyecto
        $proyecto->update($data);

        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado con éxito.');
    }

    public function destroy(Proyecto $proyecto)
    {
        // Eliminar el proyecto
        $proyecto->delete();

        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado con éxito.');
    }
}

