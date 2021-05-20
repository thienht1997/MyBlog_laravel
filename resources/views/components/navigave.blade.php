<head>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="{{route('about-me')}}">
            <span class="d-block d-lg-none"></span>
            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="navigave_layouts/img/profile.jpg" alt="">
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <script>
            $(document).ready(function() {
                $("#analysis").click(function() {
                    $("#modalLoginForm").modal('show');
                    $("#modalLoginForm").appendTo("body");
                });
            });
        </script>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('about-me')}}">About Me</a>
                </li>
                <li class="nav-item">
                    <a target="_blank" class="nav-link js-scroll-trigger" rel="noopener noreferrer" href="https://github.com/thienht1997">Github</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('link')}}">Storage</a>
                </li>
                <li class="nav-item">
                    <a id="analysis" class="nav-link js-scroll-trigger" href="{{ Auth::check() ? route('analysis') : route('index') }}">Analysis</a>
                    {{ Auth::check() ? '' : Session::put('key', 'true')}}
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('nice-effect-one')}}">Nice effect!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('nice-effect-two')}}">Nice effect!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('tiktok-index')}}">Tiktok Trending</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('index')}}">...</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('index')}}">...</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('index')}}">...</a>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('index')}}">...</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('index')}}">...</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('index')}}">...</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('index')}}">...</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('index')}}">...</a>
                </li>

            </ul>
        </div>
    </nav>
</body>