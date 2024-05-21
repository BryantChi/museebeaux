@extends('layouts_main.master')

@section('content')
    <!-- Carousel Start -->
    @include('layouts_main.hero')
    <!-- Carousel End -->

    @include('about')

    @php
        $services = \App\Models\Admin\ServicesInfo::all();
    @endphp
    <!-- Services Start -->
    <div class="container-fluid services py-5 mt-5">
        <div class="container py-5">
            <div class="section-title2 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-white-50">Services</p>
                <h3 class="display-62 text-white">療程介紹</h3>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                @foreach ($services as $service)
                <a href="{{ route('services.items', DB::table('post_type_infos')->whereNull('deleted_at')->where('type_name', 'like', '%' . $service->service_name . '%')->value('type_slug')) }}" class="d-block service-item rounded">
                    <div class="">
                        <img data-src="{{ env('APP_URL', 'https://museebeaux.powerchi.com.tw') . '/uploads/' . $service->service_icon }}"
                        src="{{ env('APP_URL', 'https://museebeaux.powerchi.com.tw') . '/uploads/' . $service->service_icon }}" class="img-fluid service-img-icon mx-auto lazy"
                            alt="{{ $service->service_icon_alt ?? '尚水美博 - ' . $service->service_name }}">
                    </div>
                    <div class="bg-white2 shadow-sm text-center p-4 position-relative mt-n52 mx-4">
                        <h4 class="text-white">{{ $service->service_name }}</h4>
                        <span class="text-light mt-3">{{ $service->service_description }}</span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Video Start -->
    <div class="container-fluid video py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h3 class="display-72 mb-4 text-white wow fadeIn" data-wow-delay="0.1s">資訊分享</h3>
                        <h5 class="fw-normal lh-base fst-italic text-white mb-5 wow fadeIn" data-wow-delay="0.3s">臥蠶、眼袋、淚溝、印地安紋 傻傻分不清？【57健康同學會】精華篇｜張予馨 謝牧翰
                            詹東峻 斯棋 Angela 亞梅</h5>
                        <a class="btn btn-light rounded-pill py-3 px-5 wow zoomInUp" data-wow-delay="0.5s" href="{{ route('blog') }}">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded">
                <div class="modal-header">
                    <h3 class="modal-title h6" id="exampleModalLabel">臥蠶、眼袋、淚溝、印地安紋 傻傻分不清？【57健康同學會】精華篇｜張予馨 謝牧翰 詹東峻 斯棋 Angela
                        亞梅</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        {{-- <iframe class="embed-responsive-item" src="{{ asset('images/臥蠶、眼袋、淚溝、印地安紋 傻傻分不清？【57健康同學會】精華篇｜張予馨 謝牧翰 詹東峻 斯棋  Angela 亞梅.mov') }}" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe> --}}
                        <video class="lazy embed-responsive-item vid" controls muted playsinline>
                            <source
                                data-src="{{ asset('images/臥蠶、眼袋、淚溝、印地安紋 傻傻分不清？【57健康同學會】精華篇｜張予馨 謝牧翰 詹東峻 斯棋  Angela 亞梅.mp4') }}">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <div class="container-fluid ev position-relative p-0">
        <div class="ev-title">
            <div class="section-title2 text-start mr-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-white-50">Environment</p>
                <h3 class="display-62 text-white">環境介紹</h3>
            </div>
        </div>
        <div class="swiper evSwiper wow fadeIn" data-wow-delay="0.5s">
            <div class="swiper-wrapper">
                @for ($i = 2; $i <= 9; $i++)
                <div class="swiper-slide">
                    <a href="{{ asset('images/ev/img_'.$i.'.jpg') }}" class="w-100 h-100" data-fancybox="_ev">
                        <img data-src="{{ asset('images/ev/img_'.$i.'.jpg') }}" src="{{ asset('images/ev/img_'.$i.'.jpg') }}" class="img-fluid hero-img lazy" style="background-color: #cecece;" alt="{{ $pageSettings->title ?? '' }}">
                    </a>
                </div>
                @endfor
            </div>
            {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> --}}
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </div>



@endsection

@push('custom_css')
    <style>
        h2 {
            font-size: 2.3rem !important;
        }
        h3 {
            font-size: 1.8rem !important;
        }
        span, p {
            font-size: 0.9rem !important;
        }
        .ev {
            height: 56vh;
        }
        .evSwiper {
            /* width: 100%;
            height: 100%; */
        }

        .evSwiper img {
            width: 100%;
            height: 56vh;
            object-fit: cover;
            object-position: center;
        }

        .ev-title {
            position: absolute;
            top: 10%;
            left: 5%;
            width: 50%;
            z-index: 2;
        }
    </style>
@endpush
@push('custom_scripts')
    <script>
        $(function() {

            $('a.scrollto').on('click', function(e) {
                e.preventDefault();

                var header = $('#sticky-header');
                console.log(e.target.hash);
                var selector = e.target.hash;
                var to = $(selector).offset().top - header.height();

                $('html, body').animate({
                    scrollTop: to
                }, 1000);

                $('.navbar-toggler').click();
            });

            var video = $('.vid')[0];
            // $('.btn-play').click(function() {
            //     video.play();
            // })

            // $('.btn-close').click(function() {
            //     video.pause();
            // })

            $('#videoModal').on('hidden.bs.modal', function() {
                video.pause();
            });

            $('#videoModal').on('shown.bs.modal', function() {
                video.play();
            });

            var swiper = new Swiper(".evSwiper", {
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


        })
    </script>
@endpush
