<!-- slider_area_start -->
<div class="slider_area position-relative">
    <div class="swiper heroSwiper d-md-block d-none">
        <div class="swiper-wrapper">
            @foreach ($pageSettings->banner as $i => $banner)
            <div class="swiper-slide">
                <a href="{{ ($pageSettings->banner_link[$i] ?? '-') == '-' ? 'javascript:void(0);' : $pageSettings->banner_link[$i] }}" class="w-100 h-100">
                    <img src="{{ env('APP_URLs', 'http://museebeaux.powerchi.com.tw') . '/uploads/' . $banner }}" class="img-fluid hero-img" style="background-color: #cecece;" alt="{{ $pageSettings->banner_alt[$i] ?? '' }}">
                </a>
            </div>
            @endforeach
        </div>
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper heroSwiper d-md-none d-block">
        <div class="swiper-wrapper">
            @foreach ($pageSettings->banner_mob ?? $pageSettings->banner as $i => $banner)
            <div class="swiper-slide">
                <a href="{{ ($pageSettings->banner_link[$i] ?? '-') == '-' ? 'javascript:void(0);' : $pageSettings->banner_link[$i] }}" class="w-100 h-100">
                    <img src="{{ env('APP_URLs', 'http://museebeaux.powerchi.com.tw') . '/uploads/' . $banner }}" class="img-fluid hero-img" style="background-color: #cecece;" alt="{{ $pageSettings->banner_alt[$i] ?? '' }}">
                </a>
            </div>
            @endforeach
        </div>
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
        <div class="swiper-pagination"></div>
    </div>

    <div class="hero-content-text">

    </div>

    <div class="overlay-hero-bottom"></div>

</div>
<!-- slider_area_end -->
@push('third_party_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush
@push('custom_css')
    <style>
        .slider_area{
            height: 80vh;
        }
        .heroSwiper {
            width: 100%;
            height: 100%;
        }

        .heroSwiper .swiper-slide {
            background-position: center;
            background-size: cover;
        }

        .heroSwiper .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            background: #cecece;
        }

        .heroSwiper .swiper-button-next:after,
        .heroSwiper .swiper-button-prev:after {
            font-size: 16px;
            color: #ffffff;
            background: #eeeeeecc;
            padding: 15px 20px;
            border-radius: 50%;
        }

        .overlay-hero-bottom {
            position: absolute;
            width: 100%;
            height: 5rem;
            bottom: 0;
            z-index: 3;
            text-shadow: 0 0 100px whitesmoke;
            opacity: 9;
            background-image: linear-gradient(0deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.87) 25%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0.22) 75%,rgb(255, 255, 255, 0) 100%);
        }

        .hero-img {
            object-fit: cover;
            object-position: center;
        }

        @media (max-width: 768px) {
            .slider_area{
                height: 80vh;
            }
            .heroSwiper {
                height: 100%;
            }

            /* .heroSwiper .swiper-button-next, .heroSwiper .swiper-button-prev {
                display: none;
            } */
        }
    </style>
@endpush
@push('third_party_scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endpush
@push('custom_scripts')
    <script>
        var swiper = new Swiper(".heroSwiper", {
            loop: true,
            autoplay: true,
            speed: 2500,
            autoheight: true,
            centeredSlides: true,
            slidesPerView: 1,
            spaceBetween: 30,
            effect: "fade",
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endpush
