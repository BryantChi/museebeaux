@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '聯絡資訊 / <br class="d-block d-md-none">Contact Us', 'bradcam' => 'contact'])

    <!-- Contact Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
                <h1 class="display-6">聯絡資訊</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-envelope fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">info@example.com</p>
                    <p class="mb-0">support@example.com</p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-phone fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">+012 345 67890</p>
                    <p class="mb-0">+012 345 67890</p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                    </div>
                    <p class="mb-2"><a href="https://maps.app.goo.gl/B7Ur51ZfviEWsW2N8">新北市板橋區文化路一段145號3樓</a></p>
                    <p class="mb-0"></p>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <iframe class="w-100 rounded"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14462.153833340966!2d121.462314!3d25.0157944!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a9efc216ff6b%3A0xd0020ca776b7ac6d!2z5bCa5rC0576O5Y2aIE11c8OpZUJlYXV4Q2xpbmlj!5e0!3m2!1szh-TW!2stw!4v1715527444225!5m2!1szh-TW!2stw"
                            frameborder="0" style="height: 100%; min-height: 300px; border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
