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

    public function showPost()
    {
        return view('single-post');
    }

    public function showInfo()
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

    public function storageLink(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
        ]);

        Link::create($request->all());
        return redirect()->route('link')
            ->with('success', 'Link created successfully.');
    }

    public function editLink($id)
    {
        $link = Link::find($id);

        return view('storage', compact('link'));
    }

    public function updateLink(Request $request, Link $link)
    {
        $link->update($request->all());
        return redirect()->route('link')
            ->with('success', 'Link update successfully.');
    }

    public function destroyLink($id)
    {
        $link = Link::find($id);
        $link->delete();
        return redirect()->route('link')->with('success', 'Link delete successfully.');;
    }

    public function showEffectOne()
    {
        return view('js_nice_effect');
    }

    public function showEffectTwo()
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
