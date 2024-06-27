@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '療程介紹 / Services', 'bradcam' => 'Services'])

    <!-- blog_area_start -->

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row {{ $typeSlug ?? null == null ? 'd-none' : ''  }}">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-95">
                        <span class="sub_heading">{{ $typeSlug }}</span>
                        <h3>{{ DB::table('post_type_infos')->whereNull('deleted_at')->where('type_slug', $typeSlug)->value('type_name') }}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        @if (count($postsInfo) == 0)
                            <h3 class="text-center">暫無資料</h3>
                        @endif

                        @foreach ($postsInfo as $post)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <a class=""
                                        href="{{ route('services.items.show', ['type' => DB::table('post_type_infos')->whereNull('deleted_at')->where('id', $post->post_type)->value('type_slug'), 'slug' => $post->post_slug]) }}">
                                        <img class="card-img rounded-0 img-fluid img-post lazy" data-src="{{ $post->post_front_cover ?? null ? env('APP_URL', 'https://museebeaux.powerchi.com.tw') . '/uploads/' . $post->post_front_cover : asset('images/about/about-05.jpg') }}"
                                        src="{{ $post->post_front_cover ?? null ? env('APP_URL', 'https://museebeaux.powerchi.com.tw') . '/uploads/' . $post->post_front_cover : asset('images/about/about-05.jpg') }}"
                                            alt="{{ $post->post_front_cover_alt ?? $post->post_title }}">
                                    </a>
                                    {{-- <a href="javascript:void(0)" class="blog_item_date">
                                        <p class="h3">{{ \Carbon\Carbon::parse($post->created_at)->format('d') }}</p>
                                        <p>{{ \Carbon\Carbon::parse($post->created_at)->format('M') }}</p>
                                    </a> --}}
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block"
                                        href="{{ route('services.items.show', ['type' => DB::table('post_type_infos')->whereNull('deleted_at')->where('id', $post->post_type)->value('type_slug'), 'slug' => $post->post_slug]) }}">
                                        <h2>{{ $post->post_title }}</h2>
                                    </a>
                                    <p class="multiline-ellipsis">
                                        {!! str_replace(["\r\n", "\r", "\n"], '', strip_tags($post->post_content)) !!}</p>
                                    <ul class="blog-info-link mt-3 mb-4 ml-auto list-unstyled">
                                        <li><a href="{{ route('services.items', DB::table('post_type_infos')->whereNull('deleted_at')->where('id', $post->post_type)->value('type_slug'))  }}"><i class="fas fa-flag"></i>
                                                {{ DB::table('post_type_infos')->whereNull('deleted_at')->where('id', $post->post_type)->value('type_name') }}</a>
                                        </li>
                                        <li><a href="#"><i class="fas fa-calendar-alt"></i>
                                            {{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d H:m') }}</a>
                                        </li>
                                    </ul>

                                    <div class="w-100 text-end">
                                        <a class="btn text-primary"
                                        href="{{ route('services.items.show', ['type' => DB::table('post_type_infos')->whereNull('deleted_at')->where('id', $post->post_type)->value('type_slug'), 'slug' => $post->post_slug]) }}">繼續閱讀 》</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                        <div class="overflow-auto mb-3">
                            {{ $postsInfo->onEachSide(3)->links('layouts_main.custom-pagination') }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-sticky">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget post_category_widget">
                            <div class="widget_title">Category</div>
                            <ul class="list cat-list">
                                @foreach ($typeInfo as $type)
                                @php
                                    if ($type->id == 4) {
                                        continue;
                                    }
                                @endphp
                                <li>
                                    <a href="{{ route('services.items', DB::table('post_type_infos')->whereNull('deleted_at')->where('id', $type->id)->value('type_slug'))  }}" class="d-flex">
                                        <p>{{ $type->type }}</p>
                                        <p>({{ $type->count }})</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>

                        {{-- <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside> --}}


                        {{-- <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('custom_css')

    <style>
        @media (min-width: 768px) {
            .ct_fixed {
                position: fixed;
                width: inherit;
                max-width: 23rem;
                max-height: 450px;
                overflow-y: scroll;
                scrollbar-width: none;
                top: 100px !important;
            }

        }
    </style>

@endpush

@push('custom_scripts')
    <script>
        $(function() {

            $(window).on('scroll', function() {
                var scrollPosition = $(window).scrollTop();
                var targetOffsetTop = $('.blog_left_sidebar').offset().top + 300;

                if (scrollPosition >= targetOffsetTop) {
                    $('.blog_right_sidebar').addClass('ct_fixed');
                } else {
                    $('.blog_right_sidebar').removeClass('ct_fixed');
                }
            })


        })
    </script>
@endpush
