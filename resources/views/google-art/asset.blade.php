<x-app-layout title="{{ $asset['0']->asset_title }} - {{ $asset['0']->artist_name }}">
    <div class="container asset">
        <div class="asset-top-image d-flex justify-content-center mt-4">
            <img src="{{ $asset['0']->asset_image }}">
        </div>
        <hr class="asset-separator">
        <div class="asset-header d-flex justify-content-between">
            <div class="asset-header-left d-flex align-items-center">
                <div class="asset-header-left-bio">
                    <h1>{{ $asset['0']->asset_title }}</h1>
                    <h2>
                        <span class="asset-header-left-bio-artist">
                            <a href="{{ route('artist', $asset['0']->artist_id) }}"
                                class="text-decoration-none">{{ $asset['0']->artist_name }}</a>
                        </span>
                        <span class="asset-header-left-bio-year">2014</span>
                    </h2>
                </div>
                <div class="asset-header-left-action">
                    <x-asset-action></x-asset-action>
                </div>
            </div>
            <div class="asset-header-right">
                <a href="{{ route('partner', $asset['0']->partner_id) }}" class="text-decoration-none">
                    <span class="d-flex flex-column justify-content-end align-items-end">
                        <img src="{{ $asset['0']->partner_logo }}"
                            class="asset-header-right-image">
                        <div class="asset-header-right-text">
                            <h3 class="asset-header-right-text-content text-end">
                                {{ $asset['0']->partner_name }}
                                <br>
                                <span>{{ $asset['0']->partner_location }}</span>
                            </h3>
                        </div>
                    </span>
                </a>
            </div>
        </div>

        <section class="asset-description">
            <div class="asset-description-content">
                {!! $asset['0']->asset_desc !!}
            </div>
        </section>
        
        <section class="asset-detail">
            <p class="asset-detail-title m-0">Detail</p>
            <div class="asset-detail-content">
                {!! $asset['0']->asset_detail !!}
            </div>
        </section>

        <section class="asset-dapatkan-aplikasi mb-4">
            <div class="asset-dapatkan-aplikasi-content d-flex justify-content-between align-items-center">
                <header class="d-flex align-items-start" style="top: 8px">
                    <x-icon-dapatkan-aplikasi></x-icon-dapatkan-aplikasi>
                    <h2>Dapatkan Aplikasi</h2>
                </header>
                <p style="width: 310px">Jelajahi museum dan coba Art Transfer, Pocket Gallery, Art Selfie, serta fitur
                    lainnya</p>
                <div class="link-google-and-app-store w-auto d-flex flex-wrap align-items-center">
                    <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.cultural&amp;referrer=utm_source%3Dstella%26utm_medium%3Dappbadge%26utm_campaign%3Dasset"
                        target="_blank" rel="noopener" role="button" aria-label="Dapatkan aplikasinya di Google Play"
                        data-gacategory="appbadge" data-gaaction="header" data-galabel="android">
                        <img class="TKl5s"
                            src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png"
                            style="width: 152px; height: 58px">
                    </a>
                    <a href="https://itunes.apple.com/app/arts-culture/id1050970557?pt=9008&amp;ct=stella-asset&amp;mt=8"
                        target="_blank" rel="noopener" role="button" aria-label="Dapatkan aplikasinya di App Store"
                        data-gacategory="appbadge" data-gaaction="header" data-galabel="ios">
                        <img class="ViTU3b"
                            src="//www.gstatic.com/culturalinstitute/stella/apple-app-store-badge-en.svg">
                    </a>
                </div>
            </div>
        </section>

        {{-- Direkomendasikan --}}
        <div class="asset-direkomendasikan mb-4">
            <div class="asset-direkomendasikan-header d-flex justify-content-start align-items-start">
                <h3>Direkomendasikan</h3>
            </div>
            <div class="asset-direkomendasikan-contents d-flex">
                <div class="swiper asset-direkomendasikan-contents-swiper ms-0">
                    <div class="swiper-wrapper">
                        @foreach ($assets as $asset)
                            <div class="asset-direkomendasikan-content d-flex swiper-slide">
                                <a href="{{ route('asset', $asset->asset_id) }}"
                                    class="position-relative text-decoration-none">
                                    <img src="{{ $asset->asset_image }}"
                                        style="background-size: cover; width: 222px; height: 222px;">
                                    <span class="w-100 position-absolute bottom-0 start-0 text-white">
                                        <div style="font-size: 1rem; font-weight: 500; line-height: 1.5rem;">
                                            {{ $asset->asset_title }}
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
    </div>
</x-app-layout>
