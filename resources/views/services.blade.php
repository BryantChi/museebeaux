@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '療程項目 / Services', 'bradcam' => 'Services'])

    <!-- dream_service_start -->
    <div class="dream_service extra_padding2">
        <div class="container">
            {{-- <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-95">
                        <span class="sub_heading">Services</span>
                        <h3>服務項目</h3>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                @foreach ($servicesInfo as $service)
                    <div class="col-xl-4 col-md-4 my-5 serives-items">
                        <div class="single_dream text-center">
                            <div class="thumb position-relative">
                                <img src="{{ $service->service_cover_front ?? null ? env('APP_URL', 'https://beauty4u-clinic.com') . '/uploads/' . $service->service_cover_front : asset('images/services/services-01.webp') }}"
                                    class="img-fluid w-75 mx-auto img-services"
                                    alt="{{ $service->service_cover_front_alt ?? '美美上美 - ' . $service->service_name }}">
                                <div class="imgbg"></div>
                            </div>
                            <h2>{{ $service->service_name }}</h2>
                            <p>{{ $service->service_description }}</p>
                        </div>
                        <div class="row justify-content-center sub-list mt-3 g-0">
                            @foreach ($service->service_sub_list ?? [] as $item)
                                <div class="col-lg-6 col-12 my-2 text-center">
                                    <h3><a class="btn btn-outline-primary w-100"
                                    href="{{ ($item['type'] ?? null) == null || ($item['article'] ?? null) == null ? 'javascript:void(0)' : route('services.items.show', ['type' => \App\Models\Admin\PostTypeInfo::find($item['type'] ?? null)->type_slug ?? '', 'slug' => \App\Models\Admin\PostsInfo::find($item['article'] ?? null)->post_slug ?? '']) }}">
                                        {{ $item['item'] }}
                                    </a></h3>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- dream_service_end -->
@endsection

@push('custom_css')
    <style>
        .dream_service {
            min-height: 120vh;
            background-image: url('{{ asset('images/about/about-bg2.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .btn-outline-primary {
            color: #4c2a8c;
            background-color: transparent;
            background-image: none;
            border-color: #4c2a8c;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #4c2a8c;
            border-color: #4c2a8c;
        }

        @media (max-width: 767px) {
            .dream_service {
                background-image: url('{{ asset('images/about/about-bg-mob2.jpg') }}');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }
        }
    </style>
@endpush

@push('custom_scripts')
    <script>
        $(function() {
            $('.sub-list').hide();
            $(window).on('resize',function() {
                if ($(window).width() > 767) {
                    $('.sub-list').hide();
                    $('.serives-items').hover(function() {
                        $(this).find('.sub-list').slideDown('1500');
                    }, function() {
                        $(this).find('.sub-list').slideUp('1500');
                    })
                } else {
                    $('.sub-list').slideDown('1500');
                }
            })
            $(window).resize();

        });
    </script>
@endpush
