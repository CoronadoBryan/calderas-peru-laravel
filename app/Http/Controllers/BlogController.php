<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog ()
    {
        return view('blog/blog');
    }
    public function blogDetails ()
    {
        return view('blog/blogDetails');
    }
    public function blogStandard ()
    {
        return view('blog/blogStandard');
    }
    public function contact ()
    {
        return view('blog/contact');
    }

}