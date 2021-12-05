<x-app-layout title="{{ $story['0']->story_title }}">
    <div class="story">
        {{-- Detail --}}
        <img src="{{ $story['0']->story_image }}" class="story-top-image">
        <div class="story-top-image-content container d-flex flex-column flex-wrap justify-content-center">
            <svg width="48px" height="48px" viewBox="0 0 48 48" class="story-top-image-icon" style="fill: #fff; width: 20px">
                <path d="M37.9 2l-10 10v22l10-9V2zm-36 10v29.3c0 .5.5 1 1 1 .2 0 .3-.1.5-.1C6.1 40.9 10 40 12.9 40c3.9 0 8.1.8 11 3V12c-2.9-2.2-7.1-3-11-3s-8.1.8-11 3zm44 27V12c-1.2-.9-2.5-1.5-4-2v27c-2.2-.7-4.6-1-7-1-3.4 0-8.3 1.3-11 3v4c2.7-1.7 7.6-3 11-3 3.3 0 6.7.6 9.5 2.1.2.1.3.1.5.1.5 0 1-.5 1-1V39z">
                </path>
            </svg>
            <h1 class="story-top-image-content-title">
                {{ $story['0']->story_title }}
            </h1>
            <div class="story-top-image-separator">
                <hr>
            </div>
            <h2 class="story-top-image-content-partner">
                <a href="{{ route('partner', $story['0']->partner_id) }}" class="text-decoration-none">
                    {{ $story['0']->partner_name }}
                </a>
            </h2>
            <div class="story-social-media">
                <x-exhibit-social-media></x-exhibit-social-media>
            </div>
        </div>
        <div class="story-detail container col-md-8 d-flex justify-content-center align-items-center">
            <p>{!! $story['0']->story_detail !!}</p> 
        </div>
        <a href="{{ route('partner', $story['0']->partner_id) }}" class="story-partner text-decoration-none">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{ $story['0']->partner_logo }}" class="story-partner-logo">
                <h2 class="story-partner-name">{{ $story['0']->partner_name }}</h2>
            </div>
        </a>
    </div>
</x-app-layout>