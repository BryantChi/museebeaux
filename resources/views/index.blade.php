@extends('layouts_main.master')

@section('content')
    <!-- Carousel Start -->
    @include('layouts_main.hero')
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid about-img bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s"
                                src="{{ asset('images/about/brand1.jpg') }}" alt="">
                            <img class="img-fluid about-img2 bg-white w-50 wow fadeIn" data-wow-delay="0.2s"
                                src="{{ asset('images/about/brand3.jpg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid about-img2 bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s"
                                src="{{ asset('images/about/brand4.jpg') }}" alt="">
                            <img class="img-fluid about-img bg-white w-100 wow fadeIn" data-wow-delay="0.4s"
                                src="{{ asset('images/about/brand2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                        <h3 class="display-6">品牌理念</h3>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="{{ asset('images/about/brand5.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5>Our tea is one of the most popular drinks in the world</h5>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                                diam et eos. Clita erat ipsum et lorem et sit</p>
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <h5>Daily use of a cup of tea is good for your health</h5>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                                diam et eos. Clita erat ipsum et lorem et sit</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="{{ asset('images/about/brand6.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid services py-5 mt-5">
        <div class="container py-5">
            <div class="section-title2 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-white-50">Services</p>
                <h3 class="display-6 text-white">療程介紹</h3>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                <a href="javascript:void(0)" class="d-block service-item rounded">
                    <div class="">
                        <img src="{{ asset('images/service/service1.png') }}" class="img-fluid service-img-icon mx-auto"
                            alt="">
                    </div>
                    <div class="bg-white2 shadow-sm text-center p-4 position-relative mt-n52 mx-4">
                        <h4 class="text-white">眼部精緻</h4>
                        <span class="text-light mt-3">藉由雙眼皮再造，眼袋移除，淚溝填補，提眼瞼肌拉提，讓容易洩漏實際年齡的眼周重新回到年輕自然的狀態。</span>
                    </div>
                </a>
                <a href="javascript:void(0)" class="d-block service-item rounded">
                    <div class="">
                        <img src="{{ asset('images/service/service2.png') }}" class="img-fluid service-img-icon mx-auto"
                            alt="">
                    </div>
                    <div class="bg-white2 shadow-sm text-center p-4 position-relative mt-n52 mx-4">
                        <h4 class="text-white">緊緻拉提</h4>
                        <span class="text-light mt-3">完美雕塑俐落輪廓，不讓給隨著時間流逝，有趕緊至拉提，堅守青春無痕。</span>
                    </div>
                </a>
                <a href="javascript:void(0)" class="d-block service-item rounded">
                    <div class="">
                        <img src="{{ asset('images/service/service3.png') }}" class="img-fluid service-img-icon mx-auto"
                            alt="">
                    </div>
                    <div class="bg-white2 shadow-sm text-center p-4 position-relative mt-n52 mx-4">
                        <h4 class="text-white">再造美顏</h4>
                        <span class="text-light mt-3">藉由醫師評估，用專業的增減法，重塑臉部輪廓及肌膚狀態，用細微的改變，無限放大屬於您自己的美麗。</span>
                    </div>
                </a>
                <a href="javascript:void(0)" class="d-block service-item rounded">
                    <div class="">
                        <img src="{{ asset('images/service/service4.png') }}" class="img-fluid service-img-icon mx-auto"
                            alt="">
                    </div>
                    <div class="bg-white2 shadow-sm text-center p-4 position-relative mt-n52 mx-4">
                        <h4 class="text-white">肌膚管理</h4>
                        <span class="text-light mt-3">專業醫師親診，搭配專業儀器診療及美容護膚療程，打造屬於自己的肌膚管理療程，讓肌膚停在完美的狀態。</span>
                    </div>
                </a>
                <a href="javascript:void(0)" class="d-block service-item rounded border-left">
                    <div class="">
                        <img src="{{ asset('images/service/service5.png') }}" class="img-fluid service-img-icon mx-auto"
                            alt="">
                    </div>
                    <div class="bg-white2 shadow-sm text-center p-4 position-relative mt-n52 mx-4">
                        <h4 class="text-white">體態雕塑</h4>
                        <span class="text-light mt-3">針對體態給予全面治療，找到對的方式優雅塑身，重拾緊實有致，成就對曲線的完美想像。</span>
                    </div>
                </a>
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
                        <h3 class="display-7 h2 mb-4 text-white wow fadeIn" data-wow-delay="0.1s">資訊分享</h3>
                        <h5 class="fw-normal lh-base fst-italic text-white mb-5 wow fadeIn" data-wow-delay="0.3s">臥蠶、眼袋、淚溝、印地安紋 傻傻分不清？【57健康同學會】精華篇｜張予馨 謝牧翰
                            詹東峻 斯棋 Angela 亞梅</h5>
                        <a class="btn btn-light rounded-pill py-3 px-5 wow zoomInUp" data-wow-delay="0.5s" href="">Explore More</a>
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
                    <h3 class="modal-title" id="exampleModalLabel">臥蠶、眼袋、淚溝、印地安紋 傻傻分不清？【57健康同學會】精華篇｜張予馨 謝牧翰 詹東峻 斯棋 Angela
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
                <h3 class="display-6 text-white">環境介紹</h3>
            </div>
        </div>
        <div class="swiper evSwiper wow fadeIn" data-wow-delay="0.5s">
            <div class="swiper-wrapper">
                @for ($i = 2; $i <= 9; $i++)
                <div class="swiper-slide">
                    <a href="{{ asset('images/ev/img_'.$i.'.jpg') }}" class="w-100 h-100" data-fancybox="_ev">
                        <img src="{{ asset('images/ev/img_'.$i.'.jpg') }}" class="img-fluid hero-img" style="background-color: #cecece;" alt="{{ $pageSettings->title ?? '' }}">
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
        document.addEventListener("DOMContentLoaded", function() {
            var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));

            if ("IntersectionObserver" in window) {
                var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(video) {
                        if (video.isIntersecting) {
                            for (var source in video.target.children) {
                                var videoSource = video.target.children[source];
                                if (typeof videoSource.tagName === "string" && videoSource
                                    .tagName === "SOURCE") {
                                    videoSource.src = videoSource.dataset.src;
                                }
                            }

                            video.target.load();
                            video.target.classList.remove("lazy");
                            lazyVideoObserver.unobserve(video.target);
                        }
                    });
                });

                lazyVideos.forEach(function(lazyVideo) {
                    lazyVideoObserver.observe(lazyVideo);
                });
            }
        });
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
