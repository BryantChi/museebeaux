<!-- Footer Start -->
<div class="container-fluid footer py-md-3 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6 align-self-center">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('images/logo_full_white.png') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Our Office</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>新北市板橋區文化路一段145號3樓
                </p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>02-2969-8528</p>
                {{-- <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p> --}}
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="javascript:void(0);"><i
                            class="fab fa-line"></i></a>
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="javascript:void(0);"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="javascript:void(0);"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-primary rounded-circle me-2" href="javascript:void(0);"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Quick Links</h4>
                <a class="btn btn-link scrollto" href="{{ route('index') }}#about">品牌理念</a>
                <a class="btn btn-link" href="javascript:void(0);">醫療團隊</a>
                <a class="btn btn-link" href="javascript:void(0);">療程介紹</a>
                <a class="btn btn-link" href="javascript:void(0);">美麗見證</a>
                <a class="btn btn-link" href="javascript:void(0);">醫師專欄</a>
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
