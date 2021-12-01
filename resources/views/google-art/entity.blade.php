<x-app-layout title="Entity">
    <div class="entity">
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
            {{ $entity['0']->desc }}
        </div>

        {{-- Artikel --}}
        <div class="entity-article">
            <div class="entity-article-header d-flex justify-content-between align-items-center">
                <h3>563 artikel</h3>
                <a href="#" class="text-decoration-none">Lihat Semua</a>
            </div>
            <div class="entity-article-contents d-flex">
                <div class="swiper entity-article-contents-swiper">
                    <div class="swiper-wrapper">
                        <div class="entity-article-content">
                            <a href="#" class="text-decoration-none">
                                <div class="entity-article-content-image">
                                    <img
                                        src="https://lh6.ggpht.com/kjkJFK3aTuZpM0CsGJM06oHbbuoT-AAP-xjEDWGXGmU3Q064xb8tYvLOwC3b=w336-c-h336-rw-v1">
                                </div>
                                <div class="entity-article-content-exhibit">
                                    <span>Cerita</span>
                                    <h3>Artmossphere: Moscow Biennale of Street Art 2014</h3>
                                    <h4>Artmossphere Studio</h4>
                                </div>
                            </a>
                        </div>
                        <div class="entity-article-content">
                            <a href="#" class="text-decoration-none">
                                <div class="entity-article-content-image">
                                    <img
                                        src="https://lh5.ggpht.com/wIxNp15wGCCYQ-DvrVWw7hMXz574UN6Yco_thE8Ddk7-_uuYdokfqmPLZNCb=w336-c-h336-rw-v1">
                                </div>
                                <div class="entity-article-content-exhibit">
                                    <span>Cerita</span>
                                    <h3>Los Muros Hablan: The Walls Speak</h3>
                                    <h4>Los Muros Hablan</h4>
                                </div>
                            </a>
                        </div>
                        <div class="entity-article-content">
                            <a href="#" class="text-decoration-none">
                                <div class="entity-article-content-image">
                                    <img
                                        src="https://lh4.ggpht.com/FnSQMYUCC6GOgRkPNhfUt-KdU3EdjajW9qiuV4kmAs6rQsTRjx4Dn8t-Xfg=w336-c-h336-rw-v1">
                                </div>
                                <div class="entity-article-content-exhibit">
                                    <span>Cerita</span>
                                    <h3>Li Hui: V</h3>
                                    <h4>UCCA Center for Contemporary Art</h4>
                                </div>
                            </a>
                        </div>
                        <div class="entity-article-content">
                            <a href="#" class="text-decoration-none">
                                <div class="entity-article-content-image">
                                    <img
                                        src="https://lh3.ggpht.com/WdNn_ILQIV_nqvLxvaj-dSzGIFyoL1Vktk_QyeRJ46evAXmZOTxkRqGt4s3P=w336-c-h336-rw-v1">
                                </div>
                                <div class="entity-article-content-exhibit">
                                    <span>Cerita</span>
                                    <h3>Lee Mingwei: Sonic Blossom</h3>
                                    <h4>UCCA Center for Contemporary Art</h4>
                                </div>
                            </a>
                        </div>
                        <div class="entity-article-content">
                            <a href="#" class="text-decoration-none">
                                <div class="entity-article-content-image">
                                    <img
                                        src="https://lh4.ggpht.com/gGBKpyeRrkoEKlo0nWzXhOSngLx8_O2JeFaIreewPUzWOB_k33SDyRt8HUOe=w336-c-h336-rw-v1">
                                </div>
                                <div class="entity-article-content-exhibit">
                                    <span>Cerita</span>
                                    <h3>SOI Málaga (MAUS)</h3>
                                    <h4>Centro de Arte Contemporáneo Málaga</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Gerakan Seni Lainnya --}}
        <div class="entity-gerakan-seni-lainnya">
            <div class="entity-gerakan-seni-lainnya-header d-flex justify-content-start align-items-start">
                <h3>Assets</h3>
            </div>
            <div class="entity-gerakan-seni-lainnya-contents d-flex">
                <div class="swiper entity-gerakan-seni-lainnya-contents-swiper mx-0">
                    <div class="swiper-wrapper">
                        @foreach ($assets as $asset)
                            <div class="entity-gerakan-seni-lainnya-content d-flex swiper-slide">
                                <a href="/home/entity" class="position-relative text-decoration-none">
                                    <img src="{{ asset('images/' . $asset->image) }}"
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
                <div class="swiper entity-seniman-lainnya-contents-swiper mx-0">
                    <div class="swiper-wrapper">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="entity-seniman-lainnya-content d-flex swiper-slide">
                                <a href="/home/entity" class="position-relative text-decoration-none">
                                    <img src="https://lh4.ggpht.com/Rv0QSZFTet-UhVdAoKnhUrNEM6PPLIakBBiE-AmDPp2jEi5OmedNQRkm0XhY=w336-c-h336-rw-v1"
                                        style="background-size: cover; width: 222px; height: 222px;">
                                    <span class="w-100 position-absolute bottom-0 start-0 text-white">
                                        <div style="font-size: 1rem; font-weight: 500; line-height: 1.5rem;">
                                            Yeondo Jung
                                        </div>
                                        <div
                                            style="font-family: Roboto; font-size: 0.75rem; font-weight: 400; line-height: 1rem;">
                                            122 item
                                        </div>
                                    </span>
                                </a>
                            </div>
                        @endfor
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        {{-- Media Lainnya --}}
        <div class="entity-media-lainnya">
            <div class="entity-media-lainnya-header d-flex justify-content-start align-items-start">
                <h3>Media Lainnya</h3>
            </div>
            <div class="entity-media-lainnya-contents d-flex">
                <div class="swiper entity-media-lainnya-contents-swiper mx-0">
                    <div class="swiper-wrapper">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="entity-media-lainnya-content d-flex swiper-slide">
                                <a href="/home/entity" class="position-relative text-decoration-none">
                                    <img src="https://lh5.ggpht.com/7uSRFYfxDjwwEUKCLm9C7vZUyeIHEOj9Sn51NLxdK2iRVr7dArBidzFXgX3w=w336-c-h336-rw-v1"
                                        style="background-size: cover; width: 222px; height: 222px;">
                                    <span class="w-100 position-absolute bottom-0 start-0 text-white">
                                        <div style="font-size: 1rem; font-weight: 500; line-height: 1.5rem;">
                                            Tinta
                                        </div>
                                        <div
                                            style="font-family: Roboto; font-size: 0.75rem; font-weight: 400; line-height: 1rem;">
                                            69.215 item
                                        </div>
                                    </span>
                                </a>
                            </div>
                        @endfor
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
