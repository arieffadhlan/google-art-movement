<x-app-layout title="Artist">
    <div class="artist">
        {{-- Detail --}}
        <a href="{{ route('asset', $topImage['0']->asset_id) }}">
            <img src="{{ asset('images/' . $topImage['0']->asset_image) }}" class="artist-top-image">
        </a>
        <div class="artist-header d-flex flex-column justify-content-center align-items-center">
            <h1 class="artist-header-name">{{ $artist['0']->name }}</h1>
            <h2 class="artist-header-year">{{ $artist['0']->riwayat }}</h2>
            <div class="artist-header-social d-flex">
                <x-entity-social-media></x-entity-social-media>
            </div>
        </div>
        <div class="artist-description d-flex flex-column justify-content-center align-items-center">
            {!! $artist['0']->detail !!}
        </div>
    </div>

    {{-- Artikel --}}
    <div class="artist-article">
        <div class="artist-article-header d-flex justify-content-between align-items-center">
            <h3>563 artikel</h3>
            <a href="#" class="text-decoration-none">Lihat Semua</a>
        </div>
        <div class="artist-article-contents d-flex">
            <div class="swiper artist-article-contents-swiper">
                <div class="swiper-wrapper d-flex">
                    <div class="artist-article-content swiper-slide">
                        <a href="#" class="text-decoration-none">
                            <div class="artist-article-content-image">
                                <img src="{{ asset('images/ca1.png') }}">
                            </div>
                            <div class="artist-article-content-exhibit">
                                <span>Cerita</span>
                                <h3>8 Facts About Kara Walker</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    {{-- Asset --}}
    <div class="artist-asset">
        <div class="artist-asset-header d-flex justify-content-start align-items-start">
            <h3>Assets</h3>
        </div>
        <div class="artist-asset-contents d-flex">
            <div class="swiper artist-asset-contents-swiper mx-0">
                <div class="swiper-wrapper">
                    @foreach ($assets as $asset)
                        <div class="artist-asset-content d-flex swiper-slide">
                            <a href="{{ route('asset', $asset->asset_id) }}" class="position-relative text-decoration-none">
                                <img src="{{ asset('images/' . $asset->asset_image) }}"
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

    {{-- Kategori Lainnya --}}
    <div class="artist-kategori-lainnya">
        <div class="artist-kategori-lainnya-header d-flex justify-content-start align-items-start">
            <h3>Kategori Lainnya</h3>
        </div>
        <div class="artist-kategori-lainnya-contents d-flex">
            <div class="swiper artist-kategori-lainnya-contents-swiper mx-0">
                <div class="swiper-wrapper">
                    @foreach ($entities as $entity)
                        <div class="artist-kategori-lainnya-content d-flex swiper-slide">
                            <a href="{{ route('entity', $entity->entity_id) }}" class="position-relative text-decoration-none">
                                <img src="{{ $entity->entity_image }}"
                                    style="background-size: cover; width: 222px; height: 222px;">
                                <span class="w-100 position-absolute bottom-0 start-0 text-white">
                                    <div style="font-size: 1rem; font-weight: 500; line-height: 1.5rem;">
                                        {{ $entity->entity_name }}
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