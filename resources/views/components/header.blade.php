<head>
    <base href="{{asset('navigave_layouts')}}/">
    <link href="css/resume.min.css" rel="stylesheet">
</head>
<body>

<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breaking News Area -->
                <div class="col-12 col-sm-8">
                    <div class="breaking-news-area">
                        <h2>Hello Guy I'm Thien</h2>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">I'm a Developer!</a></li>
                                <li><a href="#">Bloger!</a></li>
                                <li><a href="#">Dreamer!</a></li>
                                <li><a href="#">Thinker!</a></li>
                                <li><a href="#">And doer!</a></li>
                            </ul>

                        </div>

                    </div>

                </div>
                <!-- Top Social Area -->
                <div class="col-12 col-sm-4">
                    <div class="top-social-area">
                        <a target="_blank" rel="noopener noreferrer" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&to=thienht1997tt@gmail.com" data-toggle="tooltip" data-placement="bottom"><h7> thienht1997tt@gmail.com </h7></a>
                        <a href="{{route('index')}}" data-toggle="tooltip" data-placement="bottom" title="My phone"><i class="fa fa-phone" aria-hidden="true"></i> 0356630128 </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Area -->
    <div class="logo-area text-center">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <a href="{{route('index')}}" class="original-logo"><img src="img/core-img/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Nav Area -->
    <div class="original-nav-area" id="stickyNav">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between">

                    <!-- Subscribe btn -->
                    <div class="subscribe-btn">
                        <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">Subscribe</a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu" id="originalNav">
                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('about_me')}}">About Me</a></li>
                            </ul>

                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

</body>
