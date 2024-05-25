@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '聯絡資訊 / <br class="d-block d-md-none">Contact Us', 'bradcam' => 'Contact'])

    <!-- Contact Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="row g-5 mb-5 justify-content-center">
                <div class="col-lg-7">
                    <div class="row p-0 m-0 justify-content-center">
                        <div class="col-md-5 mb-3 text-center wow fadeInUp" data-wow-delay="0.5s">
                            <a href="{{ $companyInfo->company_map_url }}">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                            </div>
                            </a>
                            <p class="mb-2"><a href="{{ $companyInfo->company_map_url }}">{{ $companyInfo->company_address }}</a></p>
                            <p class="mb-0"></p>
                        </div>
                        <div class="col-md-5 mb-3 text-center wow fadeInUp" data-wow-delay="0.4s">
                            <a href="tel:{{ $companyInfo->company_phone }}">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-phone fa-2x text-white"></i>
                            </div>
                            </a>
                            <p class="mb-2"><a href="tel:{{ $companyInfo->company_phone }}">{{ $companyInfo->company_phone }}</a></p>
                            <p class="mb-0"></p>
                        </div>
                        <div class="col-md-5 mb-3 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <a href="{{ $companyInfo->company_facebook }}" target="_blank">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fab fa-facebook-f fa-2x text-white"></i>
                            </div>
                            </a>
                            <p class="mb-2"><a href="{{ $companyInfo->company_facebook }}" target="_blank">{{ $companyInfo->company_name }}</a></p>
                            <p class="mb-0"></p>
                        </div>
                        <div class="col-md-5 mb-3 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <a href="{{ $companyInfo->company_instagram }}" target="_blank">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fab fa-instagram fa-2x text-white"></i>
                            </div>
                            </a>
                            <p class="mb-2"><a href="{{ $companyInfo->company_instagram }}" target="_blank">{{ $companyInfo->company_name }}</a></p>
                            <p class="mb-0"></p>
                        </div>
                        <div class="col-md-5 mb-3 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <a href="{{ $companyInfo->company_line }}" target="_blank">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fab fa-line fa-2x text-white"></i>
                            </div>
                            </a>
                            <p class="mb-2"><a href="{{ $companyInfo->company_line }}" target="_blank">{{ $companyInfo->company_name }}</a></p>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h2 class="h4">交通方式</h2>
                    <div class="contents">
                        {!! $companyInfo->company_transportation !!}
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.5s">
                    <div id="map" style="height: 400px; position: relative; overflow: hidden;">

                        {!! $companyInfo->company_map_iframe !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@push('custom_css')
    <style>
        /* .contact_area {
            background-image: url("../../images/about/about-bg2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        } */

        #map iframe {
            border: 0;
            width: 100% !important;
            height: 100% !important;
        }

        .media-body a:hover {
            color: #bfa197 !important;
        }

        .media-body p {
            margin-bottom: 0 !important;
        }

        @media (max-width: 767px) {
            /* .contact_area {
                background-image: url("../../images/about/about-bg-mob2.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            } */
        }
    </style>

<style>
    .contact .contents * {
        all: unset;
        all: revert;
    }

    .contact img {
        max-width: 100% !important;
    }

    .contact iframe {
        max-width: 100% !important;
        height: 25rem;
    }


    @media (max-width: 768px) {
        .contact img {
            max-width: 100% !important;
            height: auto !important;
        }

        .contact iframe {
            max-width: 100% !important;
            height: 15rem !important;
        }
    }
</style>
@endpush
