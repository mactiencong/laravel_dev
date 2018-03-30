<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
class Blog extends Controller
{
    public function index()
    {
        $blogs = \App\Blog::all();
        return view('blog', ['blogs' => $blogs]);
    }
}