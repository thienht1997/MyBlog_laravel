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
        $link_ids = array_column($links->toArray(), 'id');
        return view('storage', compact('links', 'link_ids'));
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

    public function edit_link($id)
    {
        $link = Link::find($id);

        return view('storage', compact('link'));
    }

    public function update_link(Request $request, Link $link)
    {
        $link->update($request->all());
        return redirect()->route('link')
            ->with('success', 'Link update successfully.');
    }

    public function delete_link($id)
    {
        $link = Link::find($id);
        $link->delete();
        return redirect()->route('link')->with('success', 'Link delete successfully.');;
    }

    public function show_effect()
    {
        return view('js_nice_effect');
    }

    public function show_effect_1()
    {
        return view('js_nice_effect_1');
    }

    public function sendMail()
    {
        $details = [
            'title' => 'Về chuyện 2 con thằn lằn con',
            'body' => 'Hai con thằn lằn con đùa nhau cắn nhau đứt kiu',
            'total_link' => count(Link::all()),
            'total_post' => count(Post::all()),
        ];
        \Mail::to('thienht1997tt@gmail.com')->send(new \App\Mail\MyTestMail($details));
       
        return redirect()->route('link')->with('success', 'Mail send successfully.');;
    }

    public function ajaxChangeImportantLevel($id, $important_level){
        $link = Link::findOrFail($id);
        $link->update(array('important_level' => $important_level));
    }
}
