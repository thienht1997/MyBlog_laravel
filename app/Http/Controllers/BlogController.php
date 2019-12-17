<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->take(10)->get();
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

    public function ajaxPostData($page)
    {
        $posts = Post::orderBy('id', 'asc')->limit($page * 5, 5)->get();
        return response()->json($posts);
    }

    public function storage()
    {
        $links = Link::all();
        return view('storage', compact('links'));
    }

    public function create_link(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
        ]);

        Link::create($request->all());
        return redirect()->route('link')
            ->with('success', 'Link created successfully.');
    }

    public function delete_link($id)
    {
        $link = Link::find($id);
        $link->delete();
        return redirect()->route('link');
    }

    public function show_effect()
    {
        return view('js_nice_effect');
    }
}
