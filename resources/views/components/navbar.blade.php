<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
        <x-google-art-logo></x-google-art-logo>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav d-flex justify-content-center align-items-end ms-auto">
                <ul class="navbar-nav d-flex justify-content-around align-items-end">
                    @guest
                        @if (Route::is('login'))
                            <a class="nav-link fw-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrasi') }}</a>
                        @endif
                        @if (Route::is('register'))
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="nav-link fw-bold" href="{{ route('register') }}">{{ __('Registrasi') }}</a>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" hrefcolor: #202124;="#"
                                style="color: #202124; font-size: 15px; font-weight: 500;">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="#" style="color: #202124; font-size: 15px; font-weight: 500;">
                                Jelajahi
                            </a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="#" style="color: #202124; font-size: 15px; font-weight: 500;">
                                Mainkan
                            </a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="#" style="color: #202124; font-size: 15px; font-weight: 500;">
                                Di sekitar
                            </a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="#" style="color: #202124; font-size: 15px; font-weight: 500;">
                                Favorit
                            </a>
                        </li>
                        <li class="nav-item ms-3">
                            <div class="btn-group">
                                <button class="border-0" style="background-color: transparent;"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('images/2.jpg') }}" class="rounded-circle"
                                        style="width: 32px; height: 32px;">
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item">{{ Auth::user()->username }}</li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
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
    </div>
</nav>