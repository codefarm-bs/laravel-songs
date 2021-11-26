<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mb-5">
    <div class="container col-md-9">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://percept.ir/um/5553/614263bd58b06.jpg" class="rounded-circle" height="30" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav flex-fill">
                <li class="nav-item">
                    <a class="nav-link" href="/about">{{ __('default.about') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/songs">{{ __('default.songs') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">{{ __('default.contact') }}</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('default.login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('default.register') }}</a>
                        </li>
                    @endif
                @else
                    <div class="collapse navbar-collapse" id="usernavigation">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @endguest

                <div class="collapse navbar-collapse" id="locale">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <div class="nav-link dropdown-toggle" id="localelink" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ app()->getLocale() }}
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="navbarLocaleDropdown">
                                <li>
                                    <form action="{{ route('locale.switch') }}?locale=fa" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">فا</button>
                                    </form>
                                </li>
                                <li>
                                    <form action="{{ route('locale.switch') }}?locale=en" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">en</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</nav>

