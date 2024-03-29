@if (request()->route()->uri == 'entity/{id}')
    <script>
        let swiperArtikel = new Swiper(".entity-article-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });

        let swiperGerakanSeniLainnya = new Swiper(".entity-gerakan-seni-lainnya-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });

        let swiperSenimanLainnya = new Swiper(".entity-seniman-lainnya-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });

        let swiperKategoriLainnya = new Swiper(".entity-kategori-lainnya-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });
    </script>
@elseif (request()->route()->uri == 'asset/{id}')
    <script>
        let swiperAssetDirekomendasikan = new Swiper(".asset-direkomendasikan-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });

        let swiperArtikelAsset = new Swiper(".asset-article-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });
    </script>
@elseif (request()->route()->uri == 'artist/{id}')
    <script>
        let swiperArtistArtikel = new Swiper(".artist-article-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });
        
        let swiperArtistAsset = new Swiper(".artist-asset-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });
        
        let swiperArtistKategoriLainnya = new Swiper(".artist-kategori-lainnya-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });
    </script>
@elseif (request()->route()->uri == 'partner/{id}')
    <script>
        let swiperPartnerArtikel = new Swiper(".partner-article-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });

        let swiperPartnerLainnya = new Swiper(".partner-lainnya-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });
    </script>
@elseif (request()->route()->uri == 'penelusuran')
    <script>
        let swiperEntityTerkait = new Swiper(".entity-terkait-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });

        let swiperArtikelTerkait = new Swiper(".entity-article-terkait-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });

        let swiperAssetTerkait = new Swiper(".entity-asset-terkait-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });

        let swiperArtistTerkait = new Swiper(".entity-artist-terkait-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });

        let swiperPartnerTerkait = new Swiper(".entity-partner-terkait-contents-swiper", {
            cssMode: true,
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            mousewheel: true,
            keyboard: true,
        });
    </script>
@endif