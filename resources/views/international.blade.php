@extends('layouts_main.master')

@section('content')

{{-- 1. Hero Section --}}
<div class="position-relative w-100 overflow-hidden intl-hero wow fadeIn" id="international-hero" data-wow-delay="0.1s">
    <img src="{{ asset('images/about/brand1.jpg') }}" alt="Medical Room" class="position-absolute w-100 h-100 top-0 start-0 lazy intl-hero-img" style="object-fit: cover; object-position: center;" data-src="{{ asset('images/about/brand1.jpg') }}">
    <div class="position-absolute w-100 h-100 top-0 start-0" style="background: rgba(37,44,48,0.55);"></div>
    <div class="container position-relative z-3 h-100 d-flex flex-column justify-content-center align-items-center text-center">
        <div class="wow fadeInUp" data-wow-delay="0.2s">
            <p class="small text-uppercase mb-2 fw-medium" style="letter-spacing: 0.2em; color: #C5A47E;">
                Global Patient Center
            </p>
            <h1 class="fw-light mb-4 text-white intl-hero-title" style="font-family: 'Playfair Display', serif; text-shadow: 0 1px 3px rgba(0,0,0,0.25);">
                海外客人手術預約與療程須知
            </h1>
        </div>
        <div class="wow fadeInUp text-center mx-auto" data-wow-delay="0.4s" style="max-width: 650px;">
            <p class="small mb-4 text-white" style="line-height: 1.9; text-shadow: 0 1px 2px rgba(0,0,0,0.4);">
                為提供海外旅客更完善、安全的醫療服務體驗，以下為海外客人預約手術前後之流程與重要須知，敬請詳閱並配合相關安排。
            </p>
            <a href="{{ route('contact') }}" class="btn rounded-0 py-2 px-4 fw-bold small btn-consult" style="background-color: #ffffff; color: #2D2926; letter-spacing: 2px;">
                預約線上諮詢
            </a>
        </div>
    </div>
</div>

{{-- 2. Process Section --}}
<section id="process" class="bg-white position-relative" style="padding-top: 5rem; padding-bottom: 5.5rem; overflow-x: hidden;">
    <div class="container">
        <div class="row mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-12">
                <span class="text-primary fw-medium text-uppercase d-block mb-2" style="letter-spacing: 0.18em; font-size: 0.78rem;">The Journey</span>
                <h2 class="mb-0" style="font-family: 'Playfair Display', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem); font-weight: 300;">
                    海外醫療服務流程
                </h2>
            </div>
        </div>

        <div class="row g-4 position-relative">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card h-100 border-0 rounded-0 process-card position-relative bg-transparent">
                    <div class="card-body p-4 p-md-5 d-flex flex-column align-items-start border border-light" style="background-color: #fafafa;">
                        <span class="d-block text-primary fw-bold mb-3" style="font-family: 'Playfair Display', serif; font-size: 3rem; opacity: 0.2; line-height: 1;">01</span>
                        <h3 class="h5 fw-bold mb-3">海外初步諮詢</h3>
                        <p class="text-muted small mb-4" style="line-height: 1.8;">
                            海外期間可先透過本院官方 LINE 視訊諮詢，由專業諮詢師與醫師共同進行初步評估，了解您的基本狀況與需求，並提供可能適合的手術方式與方向說明。
                        </p>
                        <div class="mt-auto w-100">
                            <p class="text-primary small fw-bold mb-0" style="font-size: 0.75rem; border-top: 1px solid rgba(142, 111, 101, 0.2); padding-top: 1rem;">
                                *視訊諮詢僅為初步評估，實際手術內容仍須以到院面診為準
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="card h-100 border-0 rounded-0 process-card position-relative bg-transparent">
                    <div class="card-body p-4 p-md-5 d-flex flex-column align-items-start border border-light" style="background-color: #fafafa;">
                        <span class="d-block text-primary fw-bold mb-3" style="font-family: 'Playfair Display', serif; font-size: 3rem; opacity: 0.2; line-height: 1;">02</span>
                        <h3 class="h5 fw-bold mb-3">確認行程與安排</h3>
                        <p class="text-muted small mb-3" style="line-height: 1.8;">
                            若您已確定返國或來台日期，請儘早與我們聯繫，以利安排：
                        </p>
                        <ul class="list-unstyled text-start w-100 small text-muted mb-4 border-start border-primary border-2 ps-3 py-1">
                            <li class="mb-2">到院面對面諮詢時間</li>
                            <li class="mb-2">術前檢查</li>
                            <li>手術日期</li>
                        </ul>
                        <p class="text-muted small fst-italic mt-auto mb-0" style="font-size: 0.75rem;">
                            提早規劃有助於確保療程流程順暢，並避免因時間不足影響手術安排。
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="card h-100 border-0 rounded-0 process-card position-relative bg-transparent">
                    <div class="card-body p-4 p-md-5 d-flex flex-column align-items-start" style="background-color: #f4eeeb; border: 1px solid rgba(142,111,101,0.15);">
                        <span class="d-block fw-bold mb-3" style="font-family: 'Playfair Display', serif; font-size: 3rem; opacity: 0.15; line-height: 1; color: var(--primary);">03</span>
                        <h3 class="h5 fw-bold mb-3" style="color: var(--dark);">術後留台與回診</h3>
                        <ul class="list-unstyled text-start w-100 small text-muted mb-4" style="line-height: 1.8;">
                            <li class="d-flex mb-3">
                                <span class="me-2 text-primary">•</span>
                                <span>術後需至少留在台灣 <strong style="color: var(--dark);">5–7 天以上</strong>。</span>
                            </li>
                            <li class="d-flex mb-3">
                                <span class="me-2 text-primary">•</span>
                                <span>術後約一週需回診檢查與拆線。</span>
                            </li>
                            <li class="d-flex">
                                <span class="me-2 text-primary">•</span>
                                <span>是否可搭機返國，須由醫師於回診時評估確認。</span>
                            </li>
                        </ul>
                        <div class="w-100 pt-3 mt-auto text-start" style="border-top: 1px solid rgba(142,111,101,0.18);">
                            <p class="fw-bold mb-2" style="font-size: 0.8rem; color: var(--dark);">基本回診時程：</p>
                            <div class="d-flex justify-content-between text-muted" style="font-size: 0.75rem;">
                                <span>1週</span>
                                <span>1.5個月</span>
                                <span>3個月</span>
                            </div>
                            <p class="text-muted text-center mt-3 mb-0" style="font-size: 0.7rem; opacity: 0.6;">*部分可安排視訊回診</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. Pre-Op Section --}}
<section id="pre-op" style="background-color: var(--light); padding-top: 5.5rem; padding-bottom: 5rem; overflow-x: hidden;">
    <div class="container">
        <div class="text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <span class="text-primary fw-medium text-uppercase d-block mb-2" style="letter-spacing: 0.18em; font-size: 0.78rem;">Pre-Operative</span>
            <h2 class="mb-0 mx-auto" style="font-family: 'Playfair Display', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem); font-weight: 300; max-width: 600px;">
                術前安全檢查與健康告知
            </h2>
        </div>

        <div class="row g-0 bg-white shadow-sm border border-light wow fadeInUp" data-wow-delay="0.3s">
            {{-- Left Col --}}
            <div class="col-lg-6 p-4 p-md-5 border-end-lg border-bottom border-bottom-lg-0 border-light d-flex flex-column">
                <h3 class="h4 fw-bold mb-4" style="color: var(--dark); font-family: 'Playfair Display', serif;">
                    術前檢查與用藥注意事項
                </h3>

                <div class="mb-4">
                    <h4 class="h6 fw-bold mb-2 text-dark">抽血檢查</h4>
                    <p class="small text-muted mb-0" style="line-height: 1.8;">
                        所有手術皆需於術前完成抽血檢查與完整衛教說明。<br>
                        為確保安全，抽血檢查需於手術前 <span class="fw-bold text-danger">至少 1–2 個工作天</span> 完成。
                    </p>
                </div>

                <div class="mt-2 mb-4">
                    <h4 class="h6 fw-bold text-danger mb-3 border-bottom pb-2">
                        術前一週須停止服用：
                    </h4>
                    <div class="row g-3 small text-muted">
                        <div class="col-6 col-md-4"><i class="fas fa-times-circle text-danger me-1" style="font-size: 0.7rem; opacity: 0.7;"></i>中藥</div>
                        <div class="col-6 col-md-4"><i class="fas fa-times-circle text-danger me-1" style="font-size: 0.7rem; opacity: 0.7;"></i>蜂膠</div>
                        <div class="col-6 col-md-4"><i class="fas fa-times-circle text-danger me-1" style="font-size: 0.7rem; opacity: 0.7;"></i>銀杏</div>
                        <div class="col-6 col-md-4"><i class="fas fa-times-circle text-danger me-1" style="font-size: 0.7rem; opacity: 0.7;"></i>四物</div>
                        <div class="col-6 col-md-4"><i class="fas fa-times-circle text-danger me-1" style="font-size: 0.7rem; opacity: 0.7;"></i>魚油</div>
                        <div class="col-6 col-md-4"><i class="fas fa-times-circle text-danger me-1" style="font-size: 0.7rem; opacity: 0.7;"></i>阿斯匹林</div>
                        <div class="col-6 col-md-4"><i class="fas fa-times-circle text-danger me-1" style="font-size: 0.7rem; opacity: 0.7;"></i>大蒜精</div>
                        <div class="col-6 col-md-4"><i class="fas fa-times-circle text-danger me-1" style="font-size: 0.7rem; opacity: 0.7;"></i>維他命 E</div>
                        <div class="col-6 col-md-4"><i class="fas fa-times-circle text-danger me-1" style="font-size: 0.7rem; opacity: 0.7;"></i>紅酒</div>
                        <div class="col-6 col-md-4"><i class="fas fa-times-circle text-danger me-1" style="font-size: 0.7rem; opacity: 0.7;"></i>活血性藥物</div>
                        <div class="col-12"><i class="fas fa-times-circle text-danger me-1" style="font-size: 0.7rem; opacity: 0.7;"></i>成分不明之營養補充食品</div>
                    </div>
                </div>

                <div class="mt-auto pt-4 p-3 rounded-0 bg-light" style="border-left: 3px solid var(--primary);">
                    <p class="small fw-bold mb-0" style="color: var(--primary); line-height: 1.6;">
                        ⚠️ 若您有固定服用藥物或補充品，請務必主動告知醫師，由醫師評估是否需停用或調整。
                    </p>
                </div>
            </div>

            {{-- Right Col --}}
            <div class="col-lg-6 p-4 p-md-5 d-flex flex-column position-relative">
                <h3 class="h4 fw-bold mb-4 position-relative z-1" style="color: var(--dark); font-family: 'Playfair Display', serif;">
                    健康狀況主動告知
                </h3>
                <p class="text-muted small mb-4 position-relative z-1" style="line-height: 1.8;">
                    手術前請務必主動告知醫師是否有以下情形，完整資訊有助於醫師進行安全評估與療程規劃：
                </p>

                <ul class="list-unstyled mb-4 position-relative z-1 small text-dark">
                    <li class="py-3 border-bottom border-light d-flex align-items-center">
                        <span class="text-primary me-3 fw-bold">01.</span>
                        <span class="fw-medium">慢性疾病或重大病史</span>
                    </li>
                    <li class="py-3 border-bottom border-light d-flex align-items-center">
                        <span class="text-primary me-3 fw-bold">02.</span>
                        <span class="fw-medium">特殊體質或過敏史</span>
                    </li>
                    <li class="py-3 border-bottom border-light d-flex align-items-center">
                        <span class="text-primary me-3 fw-bold">03.</span>
                        <span class="fw-medium">凝血功能異常</span>
                    </li>
                    <li class="py-3 border-bottom border-light d-flex align-items-center">
                        <span class="text-primary me-3 fw-bold">04.</span>
                        <span class="fw-medium">懷孕或備孕中</span>
                    </li>
                    <li class="py-3 d-flex align-items-center">
                        <span class="text-primary me-3 fw-bold">05.</span>
                        <span class="fw-medium">其他可能影響手術之狀況</span>
                    </li>
                </ul>

                <div class="mt-auto overflow-hidden">
                    <img src="{{ asset('images/about/brand4.jpg') }}" alt="Consultation" class="w-100 object-fit-cover lazy" style="height: 140px;" data-src="{{ asset('images/about/brand4.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 4. Risk & Disclaimer --}}
<section class="bg-white position-relative" style="padding-top: 4.5rem; padding-bottom: 4.5rem; border-top: 1px solid #f0f0f0; overflow-x: hidden;">
    <div class="container py-3">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-4 mb-4 mb-lg-0 pe-lg-5">
                <span class="text-primary fw-medium text-uppercase d-block mb-2" style="letter-spacing: 0.18em; font-size: 0.78rem;">Risk Notice</span>
                <h3 class="mb-0" style="font-family: 'Playfair Display', serif; font-weight: 300; font-size: clamp(1.6rem, 3vw, 2.2rem); color: var(--dark); line-height: 1.3;">
                    海外客人術後照護<br class="d-none d-lg-block">與風險說明
                </h3>
            </div>
            <div class="col-lg-8 border-start-lg border-light ps-lg-5">
                <p class="text-muted small mb-4" style="line-height: 1.85;">
                    海外客人需自行評估：
                    <span class="fw-bold text-dark border-bottom border-dark pb-1">術後照護條件與支援是否充足</span> 以及
                    <span class="fw-bold text-dark border-bottom border-dark pb-1">返國後是否具備即時醫療協助的能力</span>。
                </p>
                <div class="p-4 rounded-0 small text-muted" style="background-color: rgba(142, 111, 101, 0.04); border-left: 3px solid var(--primary); line-height: 1.85;">
                    若術後因個人恢復狀況，需接受其他輔助療程、額外治療或回診，其所衍生之：
                    <span class="fw-bold text-dark">交通費</span>、
                    <span class="fw-bold text-dark">住宿費</span>、
                    <span class="fw-bold text-dark">其他相關支出</span>，
                    將需由客人自行負擔，敬請理解。
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 5. Location & Transport --}}
<section id="location" style="background-color: var(--light); padding-top: 5rem; padding-bottom: 5rem; overflow-x: hidden;">
    <div class="container">
        <div class="mb-5 text-center wow fadeInUp" data-wow-delay="0.1s">
            <span class="text-primary fw-medium text-uppercase d-block mb-2" style="letter-spacing: 0.18em; font-size: 0.78rem;">Location & Transport</span>
            <h2 class="mb-3" style="font-family: 'Playfair Display', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem); font-weight: 300; color: var(--dark);">
                住宿與交通指南
            </h2>
            <p class="text-muted small mb-0 mx-auto" style="max-width: 600px; line-height: 1.8;">
                本院位於板橋車站正對面，三鐵共構交通樞紐，便利易達。
            </p>
        </div>

        <div class="row g-0 mb-5 pb-lg-3 align-items-stretch shadow-sm wow fadeIn" data-wow-delay="0.2s">
            <div class="col-lg-6">
                <div class="position-relative w-100 h-100 overflow-hidden intl-img-wrap">
                    <img src="{{ asset('images/about/brand2.jpg') }}" alt="Banqiao Area" class="position-absolute w-100 h-100 object-fit-cover lazy" data-src="{{ asset('images/about/brand2.jpg') }}">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 p-md-5" style="background: linear-gradient(to top, rgba(37,44,48,0.9) 0%, transparent 100%);">
                        <p class="text-white h4 mb-0 fw-light" style="font-family: 'Playfair Display', serif; letter-spacing: 1px;">板橋車站 / 新板特區周邊</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 bg-white p-4 p-md-5 d-flex flex-column justify-content-center">
                <h3 class="h4 mb-4 fw-light text-dark" style="font-family: 'Playfair Display', serif;">推薦住宿選擇</h3>
                <p class="text-muted small mb-4" style="line-height: 1.8;">
                    大多數住宿集中在板橋車站、府中站、富貴商圈周邊，交通極為方便。無論是搭乘捷運、公車或火車高鐵都很容易抵達。
                </p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="p-3 border border-light bg-light h-100 d-flex align-items-center transition-all hover-primary-border">
                            <span class="fw-bold text-dark small">板橋凱撒大飯店 <span class="text-muted" style="font-size: 0.7rem; font-weight: normal;">(Caesar Park Hotel Banqiao)</span></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border border-light bg-light h-100 d-flex align-items-center transition-all hover-primary-border">
                            <span class="fw-bold text-dark small">傑仕堡有氧酒店 <span class="text-muted" style="font-size: 0.7rem; font-weight: normal;">(Jasper Hotel Banqiao)</span></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border border-light bg-light h-100 d-flex align-items-center transition-all hover-primary-border">
                            <span class="fw-bold text-dark small">台北新板希爾頓酒店 <span class="text-muted" style="font-size: 0.7rem; font-weight: normal;">(Hilton Taipei Sinban)</span></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 border border-light bg-light h-100 d-flex align-items-center transition-all hover-primary-border">
                            <span class="fw-bold text-dark small">馥都飯店 <span class="text-muted" style="font-size: 0.7rem; font-weight: normal;">(Grand Forward Hotel)</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 rounded-0 shadow-sm bg-white wow fadeInUp" data-wow-delay="0.4s">
            <div class="card-body p-4 p-md-5">
                <h3 class="h5 mb-4 mb-md-5 pb-3 border-bottom border-light fw-bold text-dark" style="font-family: 'Playfair Display', serif;">
                    交通詳細指南
                </h3>

                <div class="row g-5">
                    <div class="col-lg-6 pe-lg-4">
                        <div class="mb-5 position-relative ps-4" style="border-left: 1px solid #f0f0f0;">
                            <div class="position-absolute bg-dark rounded-circle" style="width: 7px; height: 7px; left: -4px; top: 6px;"></div>
                            <h4 class="h6 fw-bold text-dark mb-3 text-uppercase" style="letter-spacing: 1px;">自行開車</h4>
                            <ul class="list-unstyled text-muted small mb-0" style="line-height: 1.8;">
                                <li class="mb-2">板橋車站 24 小時地下停車場。</li>
                                <li>
                                    <strong class="text-dark">診所一樓平面停車場</strong> (車位有限)：<br>
                                    收費 50元/小時。進場時從土地銀行旁邊巷子進來，右前方警衛哨(白爛貓咖啡廳對面)引導停車；離場時請於一樓大廳警衛處繳費。
                                </li>
                            </ul>
                        </div>

                        <div class="position-relative ps-4" style="border-left: 1px solid #f0f0f0;">
                            <div class="position-absolute bg-primary rounded-circle" style="width: 7px; height: 7px; left: -4px; top: 6px;"></div>
                            <h4 class="h6 fw-bold text-dark mb-3 text-uppercase" style="letter-spacing: 1px;">大眾捷運 / 公車</h4>
                            <ul class="list-unstyled text-muted small mb-0" style="line-height: 1.8;">
                                <li class="mb-2"><strong class="text-dark">台北捷運：</strong>板橋捷運站 3 號出口 (藍線、環狀線)，出站步行兩分鐘。</li>
                                <li><strong class="text-dark">公車：</strong>板橋車站站牌 (文化路)，步行一分鐘。</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 ps-lg-4">
                        <div class="mb-5 position-relative ps-4" style="border-left: 1px solid #f0f0f0;">
                            <div class="position-absolute bg-primary rounded-circle" style="width: 7px; height: 7px; left: -4px; top: 6px;"></div>
                            <h4 class="h6 fw-bold text-dark mb-3 text-uppercase" style="letter-spacing: 1px;">台鐵 / 高鐵</h4>
                            <ul class="list-unstyled text-muted small mb-0" style="line-height: 1.8;">
                                <li class="mb-2"><strong class="text-dark">台鐵：</strong>台鐵板橋站，北二門出站步行兩分鐘。</li>
                                <li><strong class="text-dark">高鐵：</strong>高鐵板橋站，北二門出站步行兩分鐘。</li>
                            </ul>
                        </div>

                        <div class="mb-5 position-relative ps-4" style="border-left: 1px solid #f0f0f0;">
                            <div class="position-absolute bg-primary rounded-circle" style="width: 7px; height: 7px; left: -4px; top: 6px;"></div>
                            <h4 class="h6 fw-bold text-dark mb-3 text-uppercase" style="letter-spacing: 1px;">機場交通</h4>
                            <ul class="list-unstyled text-muted small mb-0" style="line-height: 1.8;">
                                <li class="mb-2"><strong class="text-dark">台北松山機場 (TSA)：</strong>開車約 40 分鐘。</li>
                                <li><strong class="text-dark">桃園國際機場 (TPE)：</strong>開車約 50 分鐘。</li>
                            </ul>
                        </div>

                        <div class="p-4 bg-light" style="border-left: 3px solid var(--primary);">
                            <p class="small fw-bold text-dark mb-2 text-uppercase" style="letter-spacing: 1px;">
                                診所地址
                            </p>
                            <p class="small text-muted mb-0" style="line-height: 1.8;">
                                新北市板橋區文化路一段145號3樓之一<br>
                                (華新花園大廈，土地銀行樓上)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 6. Warm Reminder --}}
<section class="py-5 text-white position-relative overflow-hidden" style="background-color: var(--dark);">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-3 mb-4 mb-lg-0 wow fadeIn text-lg-end pe-lg-5 border-end-lg border-secondary" style="border-color: rgba(255,255,255,0.1) !important;" data-wow-delay="0.1s">
                <span class="h5 mb-0 fw-light text-primary" style="font-family: 'Playfair Display', serif; letter-spacing: 2px;"><i class="fas fa-heart me-2" style="font-size: 0.85rem; opacity: 0.8;"></i>溫馨提醒</span>
            </div>
            <div class="col-lg-9 wow fadeIn ps-lg-5" data-wow-delay="0.2s">
                <p class="small mb-3 text-light" style="line-height: 1.85; opacity: 0.85;">
                    醫療行為具有個別差異與風險，本院將依專業醫療判斷，為您把關安全與療程品質，也誠摯建議海外客人務必預留充足時間與彈性，以確保療程與恢復過程順利完成。
                </p>
                <p class="small mb-0 text-white" style="opacity: 0.95;">如有任何疑問，歡迎隨時透過官方 LINE 與我們聯繫。</p>
            </div>
        </div>
    </div>
</section>

@endsection

@push('custom_css')
<style>
    /* Global Variables & Reset for this page */
    :root {
        --primary: #8e6f65;
        --secondary: #8f8f8f;
        --light: #F5F8F2;
        --dark: #252C30;
    }

    /* ====== Hero ====== */
    .intl-hero {
        height: 36vh;
        min-height: 320px;
        background-color: var(--dark);
    }
    
    .intl-hero-title {
        font-size: clamp(1.8rem, 4vw, 3rem);
        line-height: 1.3;
    }
    
    .btn-consult {
        transition: background-color 0.35s cubic-bezier(.34,1.56,.64,1), color 0.35s ease;
    }
    .btn-consult:hover {
        background-color: var(--primary) !important;
        color: #fff !important;
    }

    /* ====== Process Cards ====== */
    .process-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        border: 1px solid transparent;
        transition: border-color 0.4s ease;
        pointer-events: none;
        z-index: 10;
    }
    .process-card:hover::before {
        border-color: var(--primary);
    }
    .process-card .card-body {
        transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.4s ease;
    }
    .process-card:hover .card-body {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }

    /* ====== Location / Images ====== */
    .intl-img-wrap {
        height: 100%;
        min-height: 350px;
    }

    .hover-primary-border {
        transition: border-color 0.3s ease, background-color 0.3s ease;
    }
    .hover-primary-border:hover {
        border-color: var(--primary) !important;
        background-color: #fff !important;
    }

    /* ====== Typography/Utilities ====== */
    .border-end-lg {
        border-right: 1px solid transparent;
    }
    .border-bottom-lg-0 {
        border-bottom: 1px solid transparent;
    }

    /* ====== Responsive Adjustments ====== */
    @media (min-width: 992px) {
        .border-end-lg {
            border-right-color: #f0f0f0 !important;
        }
        .border-bottom-lg-0 {
            border-bottom-color: transparent !important;
        }
        .border-start-lg {
            border-left: 1px solid #f0f0f0 !important;
        }
    }

    @media (max-width: 991.98px) {
        .intl-hero {
            height: auto;
            min-height: 380px;
            padding-top: 5rem;
            padding-bottom: 4rem;
        }
        .border-bottom-lg-0 {
            border-bottom-color: #f0f0f0 !important;
        }
        .intl-img-wrap {
            height: 300px;
            min-height: auto;
        }
    }

    @media (max-width: 768px) {
        .intl-hero {
            min-height: 340px;
        }
        #process { padding-top: 3.5rem !important; padding-bottom: 4rem !important; }
        #pre-op { padding-top: 4rem !important; padding-bottom: 3.5rem !important; }
        #location { padding-top: 3.5rem !important; padding-bottom: 4rem !important; }
        .process-card .card-body { padding: 2rem !important; }
    }
    
    @media (max-width: 575.98px) {
        .intl-hero-title { font-size: 1.5rem; }
    }
</style>
@endpush