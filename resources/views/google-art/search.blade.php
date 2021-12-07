<x-app-layout title="Hasil Penelurusan">
    <div class="penelusuran">
        @if ($entities->isNotEmpty())            
            @php
                $jumlahStory = count($entity_stories->toArray());
                $jumlahExhibit = count($entity_exhibits->toArray());
                $totalArtikel = $jumlahStory + $jumlahExhibit;
            @endphp
            <div class="entity-result">
                <div class="entity-terkait mt-0">
                    <div class="entity-terkait-header d-flex justify-content-start align-items-start">
                        <h3>Entity Terkait</h3>
                    </div>
                    <div class="entity-terkait-contents d-flex">
                        <div class="swiper entity-terkait-contents-swiper ms-0">
                            <div class="swiper-wrapper">
                                @foreach ($entities as $entity)
                                    <div class="entity-terkait-content d-flex swiper-slide">
                                        <a href="{{ route('entity', $entity->id) }}" class="position-relative text-decoration-none">
                                            <img src="{{ $entity->image }}"
                                                style="background-size: cover; width: 222px; height: 222px;">
                                            <span class="w-100 position-absolute bottom-0 start-0 text-white">
                                                <div style="font-size: 1rem; font-weight: 500; line-height: 1.5rem;">
                                                    {{ $entity->name }}
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
                {{-- Artikel --}}
                <div class="entity-article-terkait">
                    <div class="entity-article-terkait-header d-flex justify-content-between align-items-center">
                        <h3>{{ $totalArtikel }} artikel terkait</h3>
                        <a href="#" class="text-decoration-none">Lihat Semua</a>
                    </div>
                    <div class="entity-article-terkait-contents d-flex">
                        <div class="swiper entity-article-terkait-contents-swiper">
                            <div class="swiper-wrapper d-flex">
                                @foreach ($entity_stories as $story)
                                    <div class="entity-article-terkait-content swiper-slide">
                                        <a href="{{ route('story', $story->story_id) }}" class="text-decoration-none">
                                            <div class="entity-article-terkait-content-image">
                                                <img src="{{ $story->story_image }}">
                                            </div>
                                            <div class="entity-article-terkait-content-exhibit">
                                                <span>Cerita</span>
                                                <h3>{{ Str::limit($story->story_title, 55) }}</h3>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                                @foreach ($entity_exhibits as $exhibit)
                                    <div class="entity-article-terkait-content swiper-slide">
                                        <a href="{{ route('exhibit', $exhibit->exhibit_id) }}" class="text-decoration-none">
                                            <div class="entity-article-terkait-content-image">
                                                <img src="{{ $exhibit->exhibit_image }}">
                                            </div>
                                            <div class="entity-article-terkait-content-exhibit">
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
                
                {{-- Assets --}}
                <div class="entity-asset-terkait">
                    <div class="entity-asset-terkait-header d-flex justify-content-start align-items-start">
                        <h3>Asset terkait</h3>
                    </div>
                    <div class="entity-asset-terkait-contents d-flex">
                        <div class="swiper entity-asset-terkait-contents-swiper ms-0">
                            <div class="swiper-wrapper">
                                @foreach ($entity_assets as $asset)
                                    <div class="entity-asset-terkait-content d-flex swiper-slide">
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
            </div>
        @elseif($story->isNotEmpty())
            <div class="entity-article-terkait">
                <div class="entity-article-terkait-header d-flex justify-content-start align-items-start">
                    <h3>Story terkait</h3>
                </div>
                <div class="entity-article-terkait-contents d-flex">
                    <div class="entity-article-terkait-content">
                        <a href="{{ route('story', $story['0']->id) }}" class="text-decoration-none">
                            <div class="entity-article-terkait-content-image">
                                <img src="{{ $story['0']->image }}">
                            </div>
                            <div class="entity-article-terkait-content-exhibit">
                                <span>Cerita</span>
                                <h3>{{ Str::limit($story['0']->title, 55) }}</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @elseif($exhibit->isNotEmpty())
            <div class="entity-article-terkait">
                <div class="entity-article-terkait-header d-flex justify-content-start align-items-start">
                    <h3>Exhibit terkait</h3>
                </div>
                <div class="entity-article-terkait-contents d-flex">
                    <div class="entity-article-terkait-content">
                        <a href="{{ route('exhibit', $exhibit['0']->id) }}" class="text-decoration-none">
                            <div class="entity-article-terkait-content-image">
                                <img src="{{ $exhibit['0']->image }}">
                            </div>
                            <div class="entity-article-terkait-content-exhibit">
                                <span>Cerita</span>
                                <h3>{{ Str::limit($exhibit['0']->title, 55) }}</h3>
                                <h4>{{ $exhibit['0']->partner_name }}</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @elseif($asset->isNotEmpty())
            <div class="entity-asset-terkait">
                <div class="entity-asset-terkait-header d-flex justify-content-start align-items-start">
                    <h3>Asset terkait</h3>
                </div>
                <div class="entity-asset-terkait-contents d-flex">
                    <div class="entity-asset-terkait-content d-flex">
                        <a href="{{ route('asset', $asset['0']->id) }}" class="position-relative text-decoration-none">
                            <img src="{{ $asset['0']->image }}" style="background-size: cover; width: 222px; height: 222px;">
                            <span class="w-100 position-absolute bottom-0 start-0 text-white">
                                <div style="font-size: 1rem; font-weight: 500; line-height: 1.5rem;">
                                    {{ $asset['0']->title }}
                                </div>
                            </span>
                        </a>
                      </div>
                </div>
            </div>
        @elseif($artist->isNotEmpty())
            <div class="entity-artist-terkait">
                <div class="entity-artist-terkait-header d-flex justify-content-start align-items-start">
                    <h3>Seniman Terkait</h3>
                </div>
                <div class="entity-artist-terkait-contents d-flex">
                    <div class="entity-artist-terkait-content d-flex swiper-slide">
                        <a href="{{ route('artist', $artist['0']->id) }}" class="position-relative text-decoration-none">
                            <img src="{{ $artist['0']->image }}" style="background-size: cover; width: 222px; height: 222px;">
                            <span class="w-100 position-absolute bottom-0 start-0 text-white">
                                <div style="font-size: 1rem; font-weight: 500; line-height: 1.5rem;">
                                    {{ $artist['0']->name }}
                                </div>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        @elseif($partner->isNotEmpty())
            <div class="entity-partner-terkait">
                <div class="entity-partner-terkait-header d-flex justify-content-start align-items-start">
                    <h3>Partner Terkait</h3>
                </div>
                <div class="entity-partner-terkait-contents d-flex">
                    <div class="entity-partner-terkait-content d-flex swiper-slide">
                        <a href="{{ route('partner', $partner['0']->id) }}" class="position-relative text-decoration-none">
                            <img src="{{ $partner['0']->image }}" style="background-size: cover; width: 222px; height: 222px;">
                            <span class="w-100 position-absolute bottom-0 start-0 text-white">
                                <div style="font-size: 1rem; font-weight: 500; line-height: 1.5rem;">
                                    {{ $partner['0']->name }}
                                </div>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        @else
            <section class="tidak-ada-hasil container d-flex flex-column justify-content-center align-items-center">
                <svg width="24px" height="24px" viewBox="0 0 48 48" class="tidak-ada-hasil-icon">
                    <path d="M31 28h-1.59l-.55-.55C30.82 25.18 32 22.23 32 19c0-7.18-5.82-13-13-13S6 11.82 6 19s5.82 13 13 13c3.23 0 6.18-1.18 8.45-3.13l.55.55V31l10 9.98L40.98 38 31 28zm-12 0c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9z">
                    </path>
                </svg>
                <div>Maaf, tidak ada hasil</div>
            </section>
        @endif
    </div>
</x-app-layout>