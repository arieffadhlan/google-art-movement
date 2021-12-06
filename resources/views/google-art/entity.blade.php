<x-app-layout title="{{ $entity['0']->name }}">
    <div class="entity">
        @php
            $jumlahStory = count($stories->toArray());
            $jumlahExhibit = count($exhibits->toArray());
            $totalArtikel = $jumlahStory + $jumlahExhibit;
        @endphp
        {{-- Detail --}}
        <img src="{{ $entity['0']->image }}" class="entity-top-image">
        <div class="entity-header d-flex flex-column justify-content-center align-items-center">
            <h1 class="entity-header-name">{{ $entity['0']->name }}</h1>
            <h2 class="entity-header-year">{{ $entity['0']->year }} - ...</h2>
            <div class="entity-header-social d-flex">
                <x-entity-social-media></x-entity-social-media>
            </div>
        </div>
        <div class="entity-description d-flex flex-column justify-content-center align-items-center">
            {!! $entity['0']->desc !!}
        </div>

        {{-- Artikel --}}
        <div class="entity-article">
            <div class="entity-article-header d-flex justify-content-between align-items-center">
                <h3>{{ $totalArtikel }} artikel</h3>
                <a href="#" class="text-decoration-none">Lihat Semua</a>
            </div>
            <div class="entity-article-contents d-flex">
                <div class="swiper entity-article-contents-swiper">
                    <div class="swiper-wrapper d-flex">
                        @foreach ($stories as $story)
                            <div class="entity-article-content swiper-slide">
                                <a href="{{ route('story', $story->story_id) }}" class="text-decoration-none">
                                    <div class="entity-article-content-image">
                                        <img src="{{ $story->story_image }}">
                                    </div>
                                    <div class="entity-article-content-exhibit">
                                        <span>Cerita</span>
                                        <h3>{{ Str::limit($story->story_title, 55) }}</h3>
                                        {{-- <h4>{{ $story->partner_name }}</h4> --}}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        @foreach ($exhibits as $exhibit)
                            <div class="entity-article-content swiper-slide">
                                <a href="{{ route('exhibit', $exhibit->exhibit_id) }}" class="text-decoration-none">
                                    <div class="entity-article-content-image">
                                        <img src="{{ $exhibit->exhibit_image }}">
                                    </div>
                                    <div class="entity-article-content-exhibit">
                                        <span>Cerita</span>
                                        <h3>{{ Str::limit($exhibit->exhibit_title, 55) }}</h3>
                                        <h4>{{ $exhibit->partner_name }}</h4>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        {{-- Gerakan Seni Lainnya --}}
        <div class="entity-gerakan-seni-lainnya">
            <div class="entity-gerakan-seni-lainnya-header d-flex justify-content-start align-items-start">
                <h3>Assets</h3>
            </div>
            <div class="entity-gerakan-seni-lainnya-contents d-flex">
                <div class="swiper entity-gerakan-seni-lainnya-contents-swiper ms-0">
                    <div class="swiper-wrapper">
                        @foreach ($assets as $asset)
                            <div class="entity-gerakan-seni-lainnya-content d-flex swiper-slide">
                                <a href="{{ route('asset', $asset->id) }}" class="position-relative text-decoration-none">
                                    <img src="{{ $asset->image }}"
                                        style="background-size: cover; width: 222px; height: 222px;">
                                    <span class="w-100 position-absolute bottom-0 start-0 text-white">
                                        <div style="font-size: 1rem; font-weight: 500; line-height: 1.5rem;">
                                            {{ $asset->title }}
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

        {{-- Seniman lainnya --}}
        <div class="entity-seniman-lainnya">
            <div class="entity-seniman-lainnya-header d-flex justify-content-start align-items-start">
                <h3>Seniman Lainnya</h3>
            </div>
            <div class="entity-seniman-lainnya-contents d-flex">
                <div class="swiper entity-seniman-lainnya-contents-swiper ms-0">
                    <div class="swiper-wrapper">
                        @foreach ($artists as $artist)
                            <div class="entity-seniman-lainnya-content d-flex swiper-slide">
                                <a href="{{ route('artist', $artist->id) }}" class="position-relative text-decoration-none">
                                    <img src="{{ $artist->image }}"
                                        style="background-size: cover; width: 222px; height: 222px;">
                                    <span class="w-100 position-absolute bottom-0 start-0 text-white">
                                        <div style="font-size: 1rem; font-weight: 500; line-height: 1.5rem;">
                                            {{ $artist->name }}
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
        <div class="entity-kategori-lainnya">
            <div class="entity-kategori-lainnya-header d-flex justify-content-start align-items-start">
                <h3>Kategori Lainnya</h3>
            </div>
            <div class="entity-kategori-lainnya-contents d-flex">
                <div class="swiper entity-kategori-lainnya-contents-swiper ms-0">
                    <div class="swiper-wrapper">
                        @foreach ($entities as $entity)
                            <div class="entity-kategori-lainnya-content d-flex swiper-slide">
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
    </div>
</x-app-layout>
