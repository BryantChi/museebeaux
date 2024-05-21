<!-- Page Header Start -->
<div class="container-fluid page-header px-0 mb-5 wow fadeIn position-relative" data-wow-delay="0.1s">
    <img data-src="{{ $pageSettings->banner == '' ? asset('images/hero-sub-default.jpg') : $pageSettings->banner }}" class="img-fluid d-none d-md-block sub-hero-img lazy" alt="{{ $pageSettings->banner_alt ?? '' }}">
    <img data-src="{{ $pageSettings->banner_mob == '' ? asset('images/hero-sub-default.jpg') : $pageSettings->banner_mob }}" class="img-fluid d-block d-md-none sub-hero-img lazy" alt="{{ $pageSettings->banner_alt_mob ?? '' }}">
    <div class="overlay2 sub-hero-overlay"></div>

    <div class="container text-center py-5 position-absolute top-50 start-50 translate-middle z-3">
        @if (($seoBradcamTitleType ?? 'h1') == 'h1')
        <h1 class="display-62 h3 text-primary mb-4 animated slideInDown">{!! $bradcam_title !!}</h1>
        @else
        <h2 class="display-62 h3 text-primary mb-4 animated slideInDown">{!! $bradcam_title !!}</h2>
        @endif
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">{!! $bradcam !!}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

@push('custom_css')
    <style>
        .sub-hero-img {
            width: 100%;
            height: 36vh;
            object-fit: cover;
            object-position: center;
        }
        .sub-hero-overlay {
            z-index: 2;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@endpush
