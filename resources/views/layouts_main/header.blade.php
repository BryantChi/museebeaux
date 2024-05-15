<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top" id="sticky-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
            <a href="{{ route('index') }}" class="navbar-brand">
                <img class="img-fluid mt-2" src="{{ asset('images/logo_full.png') }}" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto" id="navigation">
                    <a href="{{ route('index') }}#about"
                        class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }} scrollto">品牌理念</a>
                    {{-- <a href="javascript:void(0)" onclick="building();" class="nav-item nav-link">醫療團隊</a> --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">醫療團隊</a>
                        <div class="dropdown-menu bg-light rounded-0 m-0">
                            <a href="javascript:void(0)" onclick="building();" class="dropdown-item">Ａ醫療團隊</a>
                            <a href="javascript:void(0)" onclick="building();" class="dropdown-item">Ｂ醫療團隊</a>
                        </div>
                    </div>
                    <a href="{{ route('services') }}" class="nav-item nav-link {{ Request::is('services*') ? 'active' : '' }}">療程介紹</a>
                    <a href="{{ route('case') }}" class="nav-item nav-link {{ Request::is('case*') ? 'active' : '' }}">美麗見證</a>
                    <a href="{{ route('blog') }}" class="nav-item nav-link {{ Request::is('blog*') ? 'active' : '' }}">醫師專欄</a>
                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">聯絡資訊</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light rounded-0 m-0">
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="blog.html" class="dropdown-item">Blog Article</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div> --}}

                </div>
                {{-- <div class="border-start ps-4 d-none d-lg-block">
                    <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                </div> --}}
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
@push('custom_scripts')
    <script>
        function building() {
            Swal.fire('功能尚未開放', '敬請期待', 'warning');
        }
    </script>
@endpush
