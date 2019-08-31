<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
       $posts = Post::where('id','<',10)->get();
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

    public function ajaxPostData()
    {
        $posts = Post::all();
        return response()->json($posts);
    }
}
