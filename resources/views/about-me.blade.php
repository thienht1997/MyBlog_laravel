    @extends('layouts.master')
    @section('title')
        Về tôi ...
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
                            <h2>about me</h2>
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
                                <a href="#" class="post-tag">Blog tào lao</a>
                                <p class="mb-3">Chào mọi người, mình tên là Hồ Thanh Thiên.
                                    Mình lập website này ra có 2 mục đích là chia sẻ và lưu lại những thứ mình thấy hay ho
                                    đối với mình vậy nên mọi người hãy đóng góp ý kiến giúp mình về những thứ mình chia sẻ
                                    cũng như có gì hay muốn mình chia sẻ cứ bình luận bên dưới hay gửi contact cho mình ở
                                    mục Contact Me.

                                    À mình quên nói với các bạn mình là một lập trình viên PHP, kinh nghiệm cũng còn ít thôi
                                    nhưng cũng muốn chia sẻ tiện được các tiền bối vào chém cho biết thêm vài cái mới. Nên
                                    nếu có gì mình sai thì mong các bạn góp ý cho mình sửa nhé.

                                    Cuối cùng thì cảm ơn mọi người, mong mình giúp được gì cho mọi người. :)</p>
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
