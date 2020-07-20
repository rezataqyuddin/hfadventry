<header id="site-head" class="uk-box-shadow-small">
    <div class="uk-container uk-container-expand" uk-navbar>
        <div class="uk-navbar-left">
            <!-- <a href="{{route('home')}}" class="uk-logo" title="">AAAA</a> -->
            <a class="uk-navbar-toggle uk-visible@s" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-push"></a>
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="{{ route('new-patient') }}">New Registry</a></li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <!-- Right Side Of Navbar -->
            <ul class="uk-navbar-nav">
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
                <li>
                    <a role="button" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="uk-navbar-dropdown uk-padding-small">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</header>

<div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

    </div>
</div>