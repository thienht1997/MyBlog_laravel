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
    <div>
        <script>
            $(document).ready(function () {
                $("#create_form").hide();
                let isShow = false;
                $("#create_link").click(function () {
                    if (isShow == false) {
                        isShow = true;
                        $("#create_form").show();
                        $("#create_link").text('Hide Form');
                    } else if (isShow == true) {
                        $("#create_form").hide();
                        isShow = false;
                        $("#create_link").text('Show Form');
                    }
                });
            });
        </script>

    </div>
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-12">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            @can('manage')
                            <button id="create_link" class='btn btn-success float-right' value="Show form"> Show form
                            @endcan
                            </button>
                            <div class="line"></div>
                            <a href="#" class="post-tag">ToiLaThien</a>
                            <div id="create_form">
                                <form action="{{route('create_post')}}" method="post">
                                    @csrf
                                    <label for="">Add something new!</label> <br>
                                    <h3>Title:</h3>
                                    <input type="text" name="name" style="width: 100%" required>
                                    <br>
                                    <h3>Content:</h3>
                                    <textarea maxlength="10000" rows="7" name="content" style="width: 100%" required></textarea>
                                    <br><br>
                                    <input hidden type="text" name="category_id" value="1" style="width: 100%">
                                    <input type="submit" value="Add">
                                </form>
                                <br>
                            </div>
                            <h4><a href="#" class="post-headline"></a></h4>
                            <p></p>
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
                                pageNum += 1;
                                $.ajax({
                                    url: '{{ route('ajaxposts', 1) }}',
                                    method: 'get',
                                    data: page = 1,
                                    success: function (data) {
                                        data.forEach(function (value) {
                                            let postList = "<div class='row align-items-center'>" +
                                                "<div class='col-12 col-md-6'>" +
                                                "<div class='single-blog-thumbnail'>" +
                                                "<img src='img/blog-img/4.jpg' alt=''>" +
                                                "<div class='post-date'>" +
                                                "<a href='#'>12 <span>march</span></a>" +
                                                "</div>" +
                                                "</div>" +
                                                "</div>" +
                                                "<div class='col-12 col-md-6'>" +
                                                "<div class='single-blog-content'>" +
                                                "<div class='line'></div>" +
                                                "<a href='#' class='post-tag'>ToiLaThien</a>" +
                                                "<h4><a href='#' class='post-headline'>" + value.name + "</a></h4>" +
                                                "<p>" + value.content + "</p>" +
                                                "<div class='post-meta'>" +
                                                "</div>" +
                                                "</div>" +
                                                "</div>" +
                                                "</div>" + "<br>";

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
                        @can('manage')
                            <a href="{{route('post.delete', $post->id)}}"><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</button></a>
                        @endcan
                        <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp pt-2" data-wow-delay="0.3s"
                             data-wow-duration="1000ms">
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
                                        <a href="#" class="post-tag">ToiLaThien</a>
                                        <h4><a href="{{route('show_post', $post->id)}}" class="post-headline">{{$post->name}}</a></h4>
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

