<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function about ()
    {
        return view('Frontend/about/about');
    }
    public function railTransport ()
    {
        return view('Frontend/services/warehousing');
    }

    public function show(Proyecto $proyecto)
    {
        return view('Frontend.proyectos.show', compact('proyecto'));
    }


}