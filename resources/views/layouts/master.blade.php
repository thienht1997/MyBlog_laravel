<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume - Start Bootstrap Theme</title>
    <base href="{{asset('navigave_layouts')}}/">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

</head>

<body id="page-top">
@include('components.header')

@include('components.navigave')
<div class="container-fluid p-0">

    @yield('content');

</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/resume.min.js"></script>
<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="{{asset('blog_layouts/js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('blog_layouts/js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('blog_layouts/js/bootstrap.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('blog_layouts/js/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('blog_layouts/js/active.js')}}"></script>
</body>

</html>
