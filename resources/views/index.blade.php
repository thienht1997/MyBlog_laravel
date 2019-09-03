@extends('layouts.master')
@section('title')
    Blog tào lao
@endsection
@section('content')

    <head>
        @section('css')
            <link rel="stylesheet" href="{{asset('blog_layouts/style.css')}}">
        @endsection
    </head>
    <body>
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
                            <p>Blog đang trong quá trình xây dựng, chủ yếu do mình lười nên chắc còn lâu mới
                                xog..BlablablablablablablablaBlablablablablablablablaBlablablablablablabla</p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <script>
                        let pageNum = 1;
                        $(document).ready(function () {
                            $(document).on('click', '#readmore', function () {
                                pageNum +=1;
                                $.ajax({
                                    url: '{{ route('ajaxposts', 1) }}',
                                    method: 'get',
                                    data: page = 1,
                                    success: function (data) {
                                        data.forEach(function (value) {
                                            let postList = "<div class='row align-items-center'>" +
                                                "<div class='col-12 col-md-6'>"+
                                                "<div class='single-blog-thumbnail'>"+
                                                "<img src='img/blog-img/4.jpg' alt=''>"+
                                                "<div class='post-date'>"+
                                                "<a href='#'>12 <span>march</span></a>"+
                                             "</div>"+
                                            "</div>"+
                                            "</div>"+
                                            "<div class='col-12 col-md-6'>"+
                                                "<div class='single-blog-content'>"+
                                                "<div class='line'></div>"+
                                                "<a href='#' class='post-tag'>blog tào lao</a>"+
                                            "<h4><a href='#' class='post-headline'>"+ value.name+ "</a></h4>"+
                                            "<p>" + value.content + "</p>"+
                                            "<div class='post-meta'>"+

                                                "</div>"+
                                                "</div>"+
                                                "</div>"+
                                                "</div>"+ "<br>";

                                            $("#content").append(postList);
                                        });
                                    },
                                    error: function (error) {

                                    }
                                });
                            });
                        });

                    </script>
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
                    <!-- Single Blog Area  -->
                    <div id="content" class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.3s"
                         data-wow-duration="1000ms">

                    </div>

                    <!-- Load More -->
                    <div class="load-more-btn mt-100 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
                        <button id="readmore" class="btn original-btn">Read More</button>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </body>
    <!-- ##### Blog Wrapper End ##### -->

    <!-- ##### Instagram Feed Area Start ##### -->

@endsection

