@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '療程項目 / Services', 'bradcam' => 'Services'])

    <!-- dream_service_start -->
    <div class="dream_service extra_padding2 py-5">
        <div class="container">
            {{-- <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-95">
                        <span class="sub_heading">Services</span>
                        <h3></h3>
                    </div>
                </div>
            </div> --}}
            <div class="row my-5 justify-content-center">
                <ul class="nav nav-pills mb-3 mx-auto px-3 text-center" style="width: max-content;" id="pills-tab" role="tablist">
                    @foreach ($servicesInfo as $i => $service)
                    <li class="nav-item m-1" role="presentation">
                        <button class="nav-link {{ $i == 0 ? 'active' : '' }}" id="pills-{{ $service->id }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $service->id }}"
                            type="button" role="tab" aria-controls="pills-{{ $service->id }}" aria-selected="true">{{ $service->service_name }}</button>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="row p-0 mb-5">
                <div class="tab-content" id="pills-tabContent">
                    @foreach ($servicesInfo as $i => $service)
                    <div class="tab-pane fade {{ $i == 0 ? 'show active' : '' }}" id="pills-{{ $service->id }}" role="tabpanel" aria-labelledby="pills-{{ $service->id }}-tab">
                        <div class="row justify-content-between p-0">
                            <div class="col-lg-5 align-self-center">
                                <div class="single_dream text-center">
                                    <div class="thumb position-relative px-2">
                                        <img data-src="{{ $service->service_cover_front ?? null ? env('APP_URL', 'https://museebeaux.powerchi.com.tw') . '/uploads/' . $service->service_cover_front : asset('images/services/services-01.webp') }}"
                                            class="img-fluid w-75 mx-auto img-services rounded-top-circle lazy"
                                            alt="{{ $service->service_cover_front_alt ?? '尚水美博 - ' . $service->service_name }}">
                                        <div class="imgbg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 align-self-center">
                                <div class="row justify-content-start sub-list mt-3 g-0">
                                    <h2 class="text-primary mb-3">{{ $service->service_name }}</h2>
                                    <p class="text-secondary-emphasis">{{ $service->service_description }}</p>
                                    @foreach ($service->service_sub_list ?? [] as $item)
                                        <div class="col-lg-11 col-12 mb-2 mt-3 text-start">
                                            <h3 class="w-100 d-flex"><a class="btn btn-lg btn-list-item text-start" style="width:100%;"
                                                    href="{{ ($item['type'] ?? null) == null || ($item['article'] ?? null) == null ? 'javascript:void(0)' : route('services.items.show', ['type' => \App\Models\Admin\PostTypeInfo::find($item['type'] ?? null)->type_slug ?? '', 'slug' => \App\Models\Admin\PostsInfo::find($item['article'] ?? null)->post_slug ?? '']) }}">
                                                    {{ $item['item'] }}
                                                </a><a href="javascript:void(0);"><span class="ml-auto text-end" style="font-size: 0.8rem;margin-left: -20px;"> ＞ </span></a></h3>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- <div class="row">
                @foreach ($servicesInfo as $service)
                    <div class="col-xl-4 col-md-4 my-5 serives-items">
                        <div class="single_dream text-center">
                            <div class="thumb position-relative">
                                <img src="{{ $service->service_cover_front ?? null ? env('APP_URL', 'https://museebeaux.powerchi.com.tw') . '/uploads/' . $service->service_cover_front : asset('images/services/services-01.webp') }}"
                                    class="img-fluid w-75 mx-auto img-services"
                                    alt="{{ $service->service_cover_front_alt ?? '尚水美博 - ' . $service->service_name }}">
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

            </div> --}}
        </div>
    </div>
    <!-- dream_service_end -->
@endsection

@push('custom_css')
    <style>
        .page-header {
            margin-bottom: 0 !important;
        }
        .dream_service {
            /* min-height: 120vh; */
            background-image: url('{{ asset('images/bg.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .btn-list-item {
            color: #8e6f65;
            background-color: transparent;
            background-image: none;
            border-bottom: 1px solid #8e6f65;
        }

        .btn-list-item:hover {
            color: #fff;
            background-color: #8e6f65;
        }

        .btn-outline-primary {
            color: #8e6f65;
            background-color: transparent;
            background-image: none;
            border-color: #8e6f65;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #8e6f65;
            border-color: #8e6f65;
        }

        .btn-outline-primary:focus {
            box-shadow: 0 0 0 .25rem #8e6f6578;
        }

        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #8e6f65;
        }

        .nav-pills .nav-link {
            /* background: none; */
            border-bottom: 1px solid #8e6f65 !important;
            border-radius: unset;
            /* border-color: #8e6f65 !important; */
        }

        .nav-pills .nav-link:hover {
            color: #fff;
            background-color: #8e6f65;
        }

        .nav-link {
            display: block;
            padding: .5rem 1rem;
            color: #8e6f65;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        @media (max-width: 767px) {
            .dream_service {
                background-image: url('{{ asset('images/bg.jpg') }}');
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
            // $('.sub-list').hide();
            // $(window).on('resize', function() {
            //     if ($(window).width() > 767) {
            //         $('.sub-list').hide();
            //         $('.serives-items').hover(function() {
            //             $(this).find('.sub-list').slideDown('1500');
            //         }, function() {
            //             $(this).find('.sub-list').slideUp('1500');
            //         })
            //     } else {
            //         $('.sub-list').slideDown('1500');
            //     }
            // })
            // $(window).resize();

        });
    </script>
@endpush
