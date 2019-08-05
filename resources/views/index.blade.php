@extends('layouts.master')
@section('title')
Blog tào lao 
@endsection
@section('content')

   

   
    <!-- ##### Hero Area Start ##### -->
     {{-- Bỏ banner ở đây  --}}
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">blog tào lao</a>
                            <h4><a href="#" class="post-headline">Hihihihihi</a></h4>
                            <p>Blog đang trong quá trình xây dựng, chủ yếu do mình lười nên chắc còn lâu mới xog..BlablablablablablablablaBlablablablablablablablaBlablablablablablablablaBlablablablablablablablaBlablablablablablablablaBlablablablablablablablaBlablablablablablablablaBlablablablablablablablaBlablablablablablablabla:d</p>
                            <a href="#" class="btn original-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
             
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">


                    <!-- Single Blog Area  -->
                    @foreach ($posts as $post)
                        
                   
                    <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1000ms">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="single-blog-thumbnail">
                                    <img src="img/blog-img/4.jpg" alt="">
                                    <div class="post-date">
                                        <a href="#">12 <span>march</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Blog Content -->
                                <div class="single-blog-content">
                                    <div class="line"></div>
                                    <a href="#" class="post-tag">blog tào lao</a>
                                    <h4><a href="#" class="post-headline">{{$post->name}}</a></h4>
                                    <p>{{$post->content}}.</p>
                                    <div class="post-meta">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                
                    <!-- Load More -->
                    <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
                        <a href="#" class="btn original-btn">Read More</a>
                    </div>
                </div>

        
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

    <!-- ##### Instagram Feed Area Start ##### -->
   
    @endsection
   
