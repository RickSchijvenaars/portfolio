<nav class="uk-navbar-container uk-navbar-transparent uk-visible@m" id="mainnav" uk-navbar>
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <li><a class="uk-button-text menu-item" href="{{ route('home') }}">Home</a></li>
            <li><a class="uk-button-text menu-item" href="{{ route('aboutme') }}">About me</a></li>
            @guest
                <li><a class="logo" href="{{route('home')}}">RS</a>
                    <svg id="arrow">
                        <polygon points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "></polygon>
                    </svg>
                </li>
            @endguest
                <li><a class="uk-button-text menu-item" href="{{ route('projects') }}">My projects</a></li>
            @auth
                <li><a class="logo" href="{{route('home')}}">RS</a>
                    <svg id="arrow">
                        <polygon points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "></polygon>
                    </svg>
                </li>
            @endauth
                <li><a class="uk-button-text menu-item" href="{{ route('contact') }}">Contact</a></li>
            @auth
                <li><a class="uk-button-text menu-item" href="{{route('admin')}}">Admin</a></li>
                <li><a class="uk-button-text menu-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</nav>

<nav class="uk-navbar uk-navbar-container uk-hidden@m">
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href="#">
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
        </a>
        <div uk-dropdown="mode: click" class="vw-100">
            <ul class="uk-nav uk-dropdown-nav">
                <li><a class="menu-item" href="{{ route('home') }}">Home</a></li>
                <li><a class="menu-item" href="{{ route('aboutme') }}">About me</a></li>
                <li><a class="menu-item" href="{{ route('projects') }}">My projects</a></li>
                <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                @auth
                    <li><a class="menu-item" href="{{route('admin')}}">Admin</a></li>
                    <li><a class="menu-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>