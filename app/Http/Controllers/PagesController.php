<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pagesError ()
    {
        return view('pages/pagesError');
    }
    public function projectDetails ()
    {
        return view('pages/projectDetails');
    }
    public function projects ()
    {
        return view('pages/projects');
    }
    public function team ()
    {
        return view('pages/team');
    }
    public function teamDetails ()
    {
        return view('pages/teamDetails');
    }
    
}