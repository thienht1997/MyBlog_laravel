<?php

namespace App\Http\Controllers;

use App\Analysis;
use Illuminate\Http\Request;

class TiktokVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tiktok_video');
    }
}
