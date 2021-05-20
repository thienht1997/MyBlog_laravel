@extends('layouts.master')
@section('title')
Tiktok Trending
@endsection
@section('content')

<head>
    @section('css')
    <link rel="stylesheet" href="{{asset('blog_layouts/style.css')}}">
    @endsection
</head>

<body>
    <div>
    </div>
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <app-component></app-component>
        </div>
</body>
<!-- ##### Blog Wrapper End ##### -->

<!-- ##### Instagram Feed Area Start ##### -->

@endsection