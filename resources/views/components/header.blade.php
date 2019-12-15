<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breaking News Area -->
                <div class="col-12 col-sm-8">
                    <div class="breaking-news-area">
                        <h2>Hello Guy I'm Thien</h2>
                    </div>

                </div>
                <!-- Top Social Area -->
                <div class="col-8 col-sm-4">
                    <div class="top-social-area">
                        <a target="_blank" rel="noopener noreferrer"
                           href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&to=thienht1997tt@gmail.com"
                           data-toggle="tooltip" data-placement="bottom">
                            <h7> thienht1997tt@gmail.com</h7>
                        </a>
                        <a href="{{route('index')}}" data-toggle="tooltip" data-placement="bottom" title="My phone"><i
                                class="fa fa-phone" aria-hidden="true"></i> 0356630128 </a>
                    </div>
                </div>
                <div class="">
                    @guest
                    @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="z-index: 999" href="#"
                           role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown"
                             style="z-index: 999">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>

</header>
