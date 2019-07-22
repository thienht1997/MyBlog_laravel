<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
       return view('index');
    }

    public function show_post()
    {
       return view('single-post');
    } 

    public function show_info()
    {
       return view('about-me');
    } 
}
