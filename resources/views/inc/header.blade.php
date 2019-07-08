<header id="header" class="">
    <div id="header-wrap">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2 center">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <ul>
                    <li class="current"><a href="/"><div>Home</div></a></li>
                    <li><a href="#"><div>Features</div></a></li>
                    <li><a href="#"><div>Categories</div></a></li>
                    <li><a href="#"><div>Authors</div></a></li>
                    <li><a href="#"><div>Portfolio</div></a></li>
                    <li><a href="#"><div>Blog</div></a></li>
                    <li><a href="#"><div>Contribute</div></a></li>
                    <li><a href="#"><div>Contact</div></a></li>

                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('users.index') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('profile-form').submit();">
                                    {{ __('Profile') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                                        
                </ul>

                <!-- Top Search
                ============================================= -->
                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                    </form>
                </div><!-- #top-search end -->

            </div>

        </nav><!-- #primary-menu end -->

    </div>

</header>