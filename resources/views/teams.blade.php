@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '醫師團隊 / Teams', 'bradcam' => 'Teams'])

    <div class="team_area py-5">

        <div class="container">

            <div class="row my-5 pb-5 justify-content-center">
                <ul class="nav nav-pills mb-3 mx-auto px-3 text-center" style="width: max-content;" id="pills-tab" role="tablist">
                    @foreach ($teamsInfo as $i => $team)
                    <li class="nav-item m-1" role="presentation">
                        <button class="nav-link {{ $i == 0 ? 'active' : '' }}" id="pills-{{ $team->id }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $team->id }}"
                            type="button" role="tab" aria-controls="pills-{{ $team->id }}" aria-selected="true">{{ $team->name }}</button>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="row p-0 mb-5">
                <div class="tab-content" id="pills-tabContent">
                    @foreach ($teamsInfo as $i => $team)
                    <div class="tab-pane fade {{ $i == 0 ? 'show active' : '' }}" id="pills-{{ $team->id }}" role="tabpanel" aria-labelledby="pills-{{ $team->id }}-tab">
                        <div class="row justify-content-around p-0 m-0 g-0">
                            <div class="col-xl-3 col-md-6 col-lg-3  mb-5">
                                {{-- {{ ($i % 2) == 0 ? '' : 'order-md-2 order-1' }} --}}
                                <div class="single_team text-center position-relative">
                                    <div class="team_thumb position-relative z-2"
                                        style="background-color: #9b745700;box-shadow: 0px 0px 30px rgba(0, 0, 0, 0);opacity: 1;border-radius: 10rem;">
                                        <img src="{{ env('APP_URL', 'https://museebeaux.powerchi.com.tw') . '/uploads/' . $team->headshots }}" class="img-fluid w-d-75"
                                            alt="{{ $team->headshots_alt }}">
                                    </div>
                                    <div class="position-absolute bg-brown z-1 teams-mask"></div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-6 col-lg-8 team_content mb-5 px-md-0 mx-md-0">
                                {{-- {{ ($i % 2) == 0 ? '' : 'order-md-1 order-2' }} --}}
                                <div class="mb-4">
                                    <div class="team_title d-flex align-items-end">
                                        <h3 class="mb-0 text-primary">{{ $team->name }}</h3>
                                        <p class="mb-0 ms-3">{{ $team->role }}</p>
                                    </div>

                                    <div class="seperator w-100 bg-brown my-3" style="height: 3px"></div>

                                    <p class="text-justify">{{ $team->introduce }}</p>
                                </div>

                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3 {{ count($team->degree ?? []) == 0 || count($team->degree ?? []) == null ? 'd-none' : '' }}">
                                        <h4 class="mb-3 text-primary">學歷</h4>
                                        <ul class="list-unstyled">
                                            @foreach ($team->degree ?? [] as $key => $value)
                                                <li><span class="mx-2 text-primary"><i class="fas fa-chevron-right"></i></span> {{ $value }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 mb-3 {{ count($team->expertise ?? []) == 0 || count($team->expertise ?? []) == null ? 'd-none' : '' }}">
                                        <h4 class="mb-3 text-primary">專長</h4>
                                        <ul class="list-unstyled">
                                            @foreach ($team->expertise ?? [] as $key => $value)
                                                <li><span class="mx-2 text-primary"><i class="fas fa-chevron-right"></i></span> {{ $value }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 mb-3 {{ count($team->experience ?? []) == 0 || count($team->experience ?? []) == null ? 'd-none' : '' }}">
                                        <h4 class="mb-3 text-primary">經歷/資格</h4>
                                        <ul class="list-unstyled">
                                            @foreach ($team->experience ?? [] as $key => $value)
                                                <li><span class="mx-2 text-primary"><i class="fas fa-chevron-right"></i></span> {{ $value }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    {{-- <div class="col-lg-6 mb-3 {{ count($team->certificate_license ?? []) == 0 || count($team->certificate_license ?? []) == null ? 'd-none' : '' }} {{ count($team->certificate_license ?? []) ? 'd-none' : '' }}">
                                        <h4>證照/資格</h4>
                                        <ul>
                                            @foreach ($team->certificate_license ?? [] as $key => $value)
                                                <li>{{ $value }}</li>
                                            @endforeach
                                        </ul>
                                    </div> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

@endsection

@push('custom_css')
    <style>
        .page-header {
            margin-bottom: 0 !important;
        }
        .team_area {
            background-image: url('{{ asset('images/bg.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
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
        .teams-mask {
            position: absolute;
            width: 100%;
            height: 100%;
            top: -30px;
            left: -30px;
            opacity: 0.35;
        }

        @media (max-width: 768px) {
            .teams-mask {
                width: 75% !important;
                height: 100%;
                top: -25px;
                left: -15px;
                margin-left: 25px;
            }
        }
    </style>
@endpush
