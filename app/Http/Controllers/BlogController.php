<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
       $posts = Post::all();
       return view('index', compact('posts'));
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
