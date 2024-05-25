@extends('layouts.app')

@section('content')
<div class="container justify-content-center align-content-center h-100" style="min-height: 80vh">
    <div class="row align-content-center px-md-5 px-3 mx-md-3 mx-2" style="min-height: 80vh">
        <div class="col-md-12 text-center mb-4 text-primary-emphasis">
            <h1>WELCOME TO {{ config('app.name') }}</h1>
        </div>
        <div class="col-md-4 text-center" >
            <a href="{{ route('admin.adminUsers.index') }}">
                <div class="card py-5 text-brown">
                    <p class="h2 mb-3"><i class="fas fa-users-cog"></i></p>
                    <h3>管理員</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4 text-center" >
            <a href="{{ route('admin.pageSettingInfos.index') }}">
                <div class="card py-5 text-brown">
                    <p class="h2 mb-3"><i class="fab fa-pagelines"></i></p>
                    <h3>頁面設定</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4 text-center" >
            <?php
            $about = DB::table('about_us_infos')->get();
            if (count($about) == 0) {
                # code...
                $route_about = route('admin.aboutUsInfos.create');
            }else{
                $route_about = route('admin.aboutUsInfos.edit', 1);
            }
            ?>
            <a href="{{ $route_about }}">
                <div class="card py-5 text-brown">
                    <p class="h2 mb-3"><i class="fas fa-hospital-alt"></i></p>
                    <h3>診所資訊</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4 text-center" >
            <a href="{{ route('admin.servicesInfos.index') }}">
                <div class="card py-5 text-brown">
                    <p class="h2 mb-3"><i class="fas fa-stethoscope"></i></p>
                    <h3>療程項目</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4 text-center" >
            <a href="{{ route('admin.postTypeInfos.index') }}">
                <div class="card py-5 text-brown">
                    <p class="h2 mb-3"><i class="fas fa-sitemap"></i></p>
                    <h3>文章分類</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4 text-center" >
            <a href="{{ route('admin.postsInfos.index') }}">
                <div class="card py-5 text-brown">
                    <p class="h2 mb-3"><i class="fas fa-file-alt"></i></p>
                    <h3>文章資訊</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4 text-center" >
            <?php
            $company = DB::table('company_infos')->get();
            if (count($company) == 0) {
                # code...
                $route_company = route('admin.companyInfos.create');
            }else{
                $route_company = route('admin.companyInfos.edit', 1);
            }
            ?>
            <a href="{{ $route_company }}">
                <div class="card py-5 text-brown">
                    <p class="h2 mb-3"><i class="fas fa-building"></i></p>
                    <h3>聯絡資訊</h3>
                </div>
            </a>
        </div>
        <div class="col-md-4 text-center" >
            <a href="{{ route('admin.teamInfos.index') }}">
                <div class="card py-5 text-brown">
                    <p class="h2 mb-3"><i class="fas fa-portrait"></i></p>
                    <h3>團隊資訊</h3>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
