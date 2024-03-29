<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mortezaom/google-sans-cdn@master/fonts.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('vendors/fontawesome/all.min.css') }}"> --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    @if (request()->route()->uri == 'entity/{id}')
        <link rel="stylesheet" href="{{ asset('css/entity.css') }}">
    @elseif (request()->route()->uri == 'asset/{id}')
        <link rel="stylesheet" href="{{ asset('css/asset.css') }}">
    @elseif (request()->route()->uri == 'story/{id}')
        <link rel="stylesheet" href="{{ asset('css/story.css') }}">
    @elseif (request()->route()->uri == 'exhibit/{id}')
        <link rel="stylesheet" href="{{ asset('css/exhibit.css') }}">
    @elseif (request()->route()->uri == 'artist/{id}')
        <link rel="stylesheet" href="{{ asset('css/artist.css') }}">
    @elseif (request()->route()->uri == 'partner/{id}')
        <link rel="stylesheet" href="{{ asset('css/partner.css') }}">
    @elseif (request()->route()->uri == 'penelusuran')
        <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @endif
</head>

<body>
    <div id="app">
        <x-navbar></x-navbar>

        @guest
            <main class="py-4">
                @yield('content')
            </main>
        @else
            <main>
                {{ $slot }}
            </main>
        @endguest
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script> --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script>
        AOS.init();
    </script>
    <x-swiper-script></x-swiper-script>
</body>

</html>
