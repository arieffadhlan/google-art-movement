<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/volt.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <div id="app">
        <x-navbar-dashboard></x-navbar-dashboard>

        @guest
            <main class="py-4">
                @yield('content')
            </main>
        @else
            <main class="content">
                {{-- <x-dashboard-top-nav></x-dashboard-top-nav> --}}
                {{ $slot }}
            </main>
        @endguest
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/onscreen/dist/on-screen.umd.min.js') }}"></script>
    <script src="{{ asset('vendors/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendors/simple-datatables/simple-datatables.js') }}"></script>
    @if (request()->route()->uri == 'dashboard/entity')
        <script>
            let tableEntity = document.querySelector('#tableEntity');
            let dataTableEntity = new simpleDatatables.DataTable(tableEntity);
        </script>
    @elseif (request()->route()->uri == 'dashboard/asset')
        <script>
            let tableAsset = document.querySelector('#tableAsset');
            let dataTableAsset = new simpleDatatables.DataTable(tableAsset);
        </script>
    @elseif (request()->route()->uri == 'dashboard/story')
        <script>
            let tableStory = document.querySelector('#tableStory');
            let dataTableStory = new simpleDatatables.DataTable(tableStory);
        </script>
    @elseif (request()->route()->uri == 'dashboard/exhibit')
        <script>
            let tableExhibit = document.querySelector('#tableExhibit');
            let dataTableExhibit = new simpleDatatables.DataTable(tableExhibit);
        </script>
    @elseif (request()->route()->uri == 'dashboard/artist')
        <script>
            let tableArtist = document.querySelector('#tableArtist');
            let dataTableArtist = new simpleDatatables.DataTable(tableArtist);
        </script>
    @elseif (request()->route()->uri == 'dashboard/partner')
        <script>
            let tablePartner = document.querySelector('#tablePartner');
            let dataTablePartner = new simpleDatatables.DataTable(tablePartner);
        </script>
    @endif
	<script src="{{ asset('js/volt.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
