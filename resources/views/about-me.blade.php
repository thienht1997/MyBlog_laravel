@extends('layouts.master')
@section('title')
    About
@endsection
@section('content')
    <head>
        @section('css')
            <base href="{{asset('blog_layouts')}}/">
            <link rel="stylesheet" href="{{asset('blog_layouts/style.css')}}">
        @endsection
    </head>
    <body>
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/b1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100-0 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">ToiLaThien</a>
                            <p class="mb-3">Uhmm!!! ... I'm Thien.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->

                <!-- Single Blog Area -->
                {{-- <div class="col-12 col-md-4 col-lg-4">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="img/blog-img/1.jpg" alt="">
                        <!-- Catagory Title -->
                        <div class="catagory-title">
                            <a href="#">Tào lao post</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->

    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->

    <!-- ##### Blog Wrapper End ##### -->
    </body>
@endsection
