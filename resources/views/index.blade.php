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
                                <button id="create_link1" class='btn btn-success float-right' value="Show form"> New
                                    post
                                    @endcan
                                </button>
                                <div class="line"></div>
                                <a href="#" class="post-tag">ToiLaThien</a>
                                @if(session()->has('key'))
                                    {{Auth::check() ? Session::forget('key') : ''}}
                                <script>
                                    $(document).ready(function () {
                                            $("#modalLoginForm").modal('show');
                                            $("#modalLoginForm").appendTo("body");
                                    });
                                </script>
                                @endif
                                @include('components.modal_login')
                                {{-- Modal --}}
                                <div id="myModal" class="modal fade centered" role="dialog" style='position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);'>
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="top:180px">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="classModalLabel">Create Post</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                    ×
                                                </button>
                                            </div>
                                            <form action="{{route('create_post')}}" method="post">

                                                <div class="modal-body">
                                                    @csrf
                                                    <label for="">Add something new!</label> <br>
                                                    <div class="form-group row">
                                                        <label for="staticEmail1"
                                                               class="col-sm-2 col-form-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="name"
                                                                   style="width: 100%" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="staticEmail1" class="col-sm-2 col-form-label">Content</label>
                                                        <div class="col-sm-10">
                                                            <textarea maxlength="10000" rows="7" class="form-control"
                                                                      name="content" style="width: 100%"
                                                                      required></textarea>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <input hidden type="text" name="category_id" value="1"
                                                           style="width: 100%">
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-success" value="Add">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>

                                </div>
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
                        <a href="{{route('post.delete', $post->id)}}">
                            <button type="button" class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete this?')">Delete
                            </button>
                        </a>
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
                                    <h4><a href="{{route('show_post', $post->id)}}"
                                           class="post-headline">{{$post->name}}</a></h4>
                                    <p>{{Str::limit($post->content, 100)}}.</p>
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

