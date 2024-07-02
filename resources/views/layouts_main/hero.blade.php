<!-- slider_area_start -->
<div class="slider_area position-relative">
    <div class="swiper heroSwiper d-md-block d-none">
        <div class="swiper-wrapper">
            @foreach ($pageSettings->banner as $i => $banner)
            <div class="swiper-slide">
                <a href="{{ ($pageSettings->banner_link[$i] ?? '-') == '-' ? 'javascript:void(0);' : $pageSettings->banner_link[$i] }}" class="w-100 h-100">
                    <img data-src="{{ env('APP_URLs', 'http://museebeaux.com') . '/uploads/' . $banner }}" src="{{ env('APP_URLs', 'http://museebeaux.com') . '/uploads/' . $banner }}"
                    src="{{ env('APP_URLs', 'http://museebeaux.com') . '/uploads/' . $banner }}" src="{{ env('APP_URLs', 'http://museebeaux.com') . '/uploads/' . $banner }}" class="img-fluid hero-img lazy" style="background-color: #cecece;" alt="{{ $pageSettings->banner_alt[$i] ?? '' }}">
                </a>
            </div>
            @endforeach
        </div>
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
        {{-- <div class="swiper-pagination"></div> --}}
    </div>
    <div class="swiper heroSwiper d-md-none d-block">
        <div class="swiper-wrapper">
            @foreach ($pageSettings->banner_mob ?? $pageSettings->banner as $i => $banner)
            <div class="swiper-slide">
                <a href="{{ ($pageSettings->banner_link[$i] ?? '-') == '-' ? 'javascript:void(0);' : $pageSettings->banner_link[$i] }}" class="w-100 h-100">
                    <img data-src="{{ env('APP_URLs', 'http://museebeaux.com') . '/uploads/' . $banner }}" src="{{ env('APP_URLs', 'http://museebeaux.com') . '/uploads/' . $banner }}"
                    src="{{ env('APP_URLs', 'http://museebeaux.com') . '/uploads/' . $banner }}" src="{{ env('APP_URLs', 'http://museebeaux.com') . '/uploads/' . $banner }}" class="img-fluid hero-img lazy" style="background-color: #cecece;" alt="{{ $pageSettings->banner_alt[$i] ?? '' }}">
                </a>
            </div>
            @endforeach
        </div>
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
        {{-- <div class="swiper-pagination"></div> --}}
    </div>

    <div class="hero-content-text">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="d-none">{{ $pageSettings->title }}</h1>
                    <div class="text-center mb-4">
                        <img data-src="{{ asset('images/logo3.png') }}" src="{{ asset('images/logo3.png') }}" class="img-fluid lazy" alt="">
                    </div>
                    <p>
                        經驗與技術，是我們給您的保證<br>

                        用心與真誠，是我們給您的承諾。<br>

                        在這裡，您就是我們最自豪的鎮館之寶
                    </p>

                    <div class="hero-line"></div>
                    @php
                        $contact = App\Models\Admin\CompanyInfo::first();
                    @endphp
                    <a href="{{ $contact->company_line }}" class="btn btn-primary btn-lg hero-btn-reservation">預約諮詢</a>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="overlay-hero-bottom"></div> --}}

</div>
<!-- slider_area_end -->
@push('third_party_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush
@push('custom_css')
    <style>
        .slider_area{
            height: 100vh;
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

        .hero-line {
            width: 100%;
            height: 3px;
            background-color: white;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .hero-btn-reservation {
            letter-spacing: 5px;
            text-transform: uppercase;
        }

        .hero-content-text {
            width: 50vw;
            position: absolute;
            z-index: 3;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .hero-content-text img {
            width: 45% !important;
        }

        .hero-content-text p {
            line-height: 2.5rem !important;
        }

        @media (max-width: 768px) {
            .slider_area{
                height: 100vh;
            }
            .heroSwiper {
                height: 100%;
            }

            /* .heroSwiper .swiper-button-next, .heroSwiper .swiper-button-prev {
                display: none;
            } */

            .hero-content-text {
                width: 100vw;
            }
            .hero-content-text img {
                width: 45% !important;
            }

            .hero-content-text p {
                line-height: 1.5rem !important;
            }
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
            speed: 3000,
            autoheight: true,
            centeredSlides: true,
            slidesPerView: 1,
            spaceBetween: 30,
            effect: "fade",
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
        });
    </script>
@endpush
