@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '美麗見證 / Case', 'bradcam' => 'Case'])

    <!-- blog_area_start -->

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                @if (count($postsInfo) == 0)
                    <h3 class="text-center w-100">暫無資料</h3>
                @endif
                @foreach ($postsInfo as $post)
                    <div class="col-lg-4 mb-3 mb-lg-5 h-100">
                        <div class="blog_left_sidebar h-100">
                            <article class="blog_item h-100">
                                <div class="blog_item_img">
                                    <a class="" href="{{ route('case.show', $post->post_slug) }}">
                                        <img class="card-img rounded-0 img-fluid img-post lazy"
                                            data-src="{{ $post->post_front_cover ?? null ? env('APP_URL', 'https://museebeaux.com') . '/uploads/' . $post->post_front_cover : asset('images/about/about-05.jpg') }}"
                                            src="{{ $post->post_front_cover ?? null ? env('APP_URL', 'https://museebeaux.com') . '/uploads/' . $post->post_front_cover : asset('images/about/about-05.jpg') }}"
                                            alt="{{ $post->post_front_cover_alt ?? $post->post_title }}">
                                    </a>
                                    {{-- <a href="javascript:void(0)" class="blog_item_date">
                                        <p class="h3">{{ \Carbon\Carbon::parse($post->created_at)->format('d') }}</p>
                                        <p>{{ \Carbon\Carbon::parse($post->created_at)->format('M') }}</p>
                                    </a> --}}
                                </div>

                                <div class="blog_details"style="height: 305px;">
                                    <a class="d-inline-block" href="{{ route('case.show', $post->post_slug) }}">
                                        <h2>{{ $post->post_title }}</h2>
                                    </a>
                                    <p class="multiline-ellipsis">
                                        {!! Str::limit(str_replace(["\r\n", "\r", "\n"], '', strip_tags($post->post_content)), 100) !!}</p>
                                    {{-- <ul class="blog-info-link mt-3 mb-4 ml-auto list-unstyled">
                                        <li><a href="javascript:void(0)"><i class="fas fa-flag"></i>
                                                {{ DB::table('post_type_infos')->whereNull('deleted_at')->where('id', $post->post_type)->value('type_name') }}</a>
                                        </li>
                                        <li><a href="#"><i class="fas fa-calendar-alt"></i>
                                            {{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d H:m') }}</a>
                                        </li>
                                    </ul> --}}

                                    <div class="w-100 text-end">
                                        <a class="btn text-primary" href="{{ route('case.show', $post->post_slug) }}">繼續閱讀
                                            》</a>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>
                @endforeach

                <div class="overflow-auto mb-3">
                    {{ $postsInfo->onEachSide(3)->links('layouts_main.custom-pagination') }}
                </div>
            </div>
        </div>
    </section>
@endsection
