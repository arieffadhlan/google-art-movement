<x-app-layout title="{{ $exhibit['0']->exhibit_title }}">
    <div class="exhibit">
        {{-- Detail --}}
        <img src="{{ $exhibit['0']->exhibit_image }}" class="exhibit-top-image">
        <div class="exhibit-top-image-content container d-flex flex-column flex-wrap justify-content-center">
            <svg width="48px" height="48px" viewBox="0 0 48 48" class="exhibit-top-image-icon" style="fill: #fff; width: 20px">
                <path d="M37.9 2l-10 10v22l10-9V2zm-36 10v29.3c0 .5.5 1 1 1 .2 0 .3-.1.5-.1C6.1 40.9 10 40 12.9 40c3.9 0 8.1.8 11 3V12c-2.9-2.2-7.1-3-11-3s-8.1.8-11 3zm44 27V12c-1.2-.9-2.5-1.5-4-2v27c-2.2-.7-4.6-1-7-1-3.4 0-8.3 1.3-11 3v4c2.7-1.7 7.6-3 11-3 3.3 0 6.7.6 9.5 2.1.2.1.3.1.5.1.5 0 1-.5 1-1V39z">
                </path>
            </svg>
            <div class="exhibit-top-image-content-date">{{ $exhibit['0']->exhibit_date }}</div>
            <h1 class="exhibit-top-image-content-title">
                {{ $exhibit['0']->exhibit_title }}
            </h1>
            <div class="exhibit-top-image-separator">
                <hr>
            </div>
            <h2 class="exhibit-top-image-content-partner">
                <a href="#" class="text-decoration-none">
                    {{ $exhibit['0']->partner_name }}
                </a>
            </h2>
            <div class="exhibit-social-media">
                <x-exhibit-social-media></x-exhibit-social-media>
            </div>
        </div>
        <div class="exhibit-detail container col-md-8 d-flex justify-content-center align-items-center">
            <p>{!! $exhibit['0']->exhibit_detail !!}</p> 
        </div>
        <div class="exhibit-partner-logo d-flex flex-column justify-content-center align-items-center">
            <img src="{{ $exhibit['0']->partner_logo }}">
            <h2 class="exhibit-partner-name">{{ $exhibit['0']->partner_name }}</h2>
        </div>
    </div>
</x-app-layout>