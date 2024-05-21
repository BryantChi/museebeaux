@php
    $contact = App\Models\Admin\CompanyInfo::first();
    // $servicesInfos = \App\Models\Admin\ServicesInfo::get('service_name');
@endphp
<!-- Footer Start -->
<div class="container-fluid footer py-md-3 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6 align-self-center">
                <a href="{{ route('index') }}">
                    <img data-src="{{ asset('images/logo_full_white.png') }}" class="lazy" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Our Office</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i><a class="text-light" href="{{ $contact->company_map_url }}" target="_blank">{{ $contact->company_address}}</a>
                </p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i><a class="text-light" href="tel:{{ $contact->company_phone }}">{{ $contact->company_phone }}</a></p>
                {{-- <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p> --}}
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $contact->company_line }}" target="_blank"><i
                            class="fab fa-line"></i></a>
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $contact->company_facebook }}" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    {{-- <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $contact->company_youtube }}" target="_blank"><i
                            class="fab fa-youtube"></i></a> --}}
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="{{ $contact->company_instagram }}" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Quick Links</h4>
                <a class="btn btn-link scrollto" href="{{ route('index') }}#about">品牌理念</a>
                <a class="btn btn-link" href="{{ route('teams') }}">醫療團隊</a>
                <a class="btn btn-link" href="{{ route('services') }}">療程介紹</a>
                <a class="btn btn-link" href="{{ route('case') }}">美麗見證</a>
                <a class="btn btn-link" href="{{ route('blog') }}">醫師專欄</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">營業時間</h4>
                <p class="mb-1">每週二至每週六</p>
                <h6 class="text-light">中午12:00至傍晚18:00</h6>
                <p class="mb-1">每週五加長營業時間</p>
                <h6 class="text-light">早上09:00至晚上09:00</h6>
                <p class="mb-1">週一</p>
                <h6 class="text-light">Closed</h6>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                Copyright &copy;
                {{ \Carbon\Carbon::now()->year }}
                <a class="fw-medium" href="#">Musee Beaux Clinic. </a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a class="fw-medium" href="mailto:bryantchi.work@gmail.com">MWStudio・BryantChi</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
