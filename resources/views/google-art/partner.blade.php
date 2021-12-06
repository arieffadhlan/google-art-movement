<x-app-layout title="{{ $partner['0']->name }}">
    <div class="partner">
        {{-- Detail --}}
        <img src="{{ $partner['0']->image }}" class="partner-top-image">
        <div class="partner-header d-flex flex-column justify-content-center align-items-center">
            <h1 class="partner-header-logo">
                <img src="{{ $partner['0']->logo }}">
            </h1>
            <h2 class="partner-header-name">{{ $partner['0']->name }}</h2>
            <h2 class="partner-header-location">{{ $partner['0']->location }}</h2>
            <div class="partner-header-social d-flex">
                <x-entity-social-media></x-entity-social-media>
            </div>
        </div>
        <div class="partner-detail d-flex flex-column justify-content-center align-items-center">
            {!! $partner['0']->detail !!}
        </div>
    </div>

    {{-- Partner Lainnya --}}
    <div class="partner-lainnya mb-4">
        <div class="partner-lainnya-header d-flex justify-content-start align-items-start">
            <h3>Partner Lainnya</h3>
        </div>
        <div class="partner-lainnya-contents d-flex">
            <div class="swiper partner-lainnya-contents-swiper ms-0">
                <div class="swiper-wrapper">
                    @foreach ($partners as $partner)
                        <div class="partner-lainnya-content d-flex swiper-slide">
                            <a href="{{ route('partner', $partner->id) }}" class="position-relative text-decoration-none">
                                <img src="{{ $partner->image }}"
                                    style="background-size: cover; width: 222px; height: 222px;">
                                <span class="w-100 position-absolute bottom-0 start-0 text-white">
                                    <div style="font-size: 1rem; font-weight: 500; line-height: 1.5rem;">
                                        {{ $partner->name }}
                                    </div>
                                </span>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</x-app-layout>