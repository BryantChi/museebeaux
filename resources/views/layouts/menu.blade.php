<li class="nav-item mb-4">
    <a href="javascript:void(0)" target="_blank" class="nav-link">
        <span class="h5 mr-2 brand-image"><i class="fas fa-external-link-alt"></i></span>
        <p class="h5"> 瀏覽網站</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.adminUsers.index') }}"
        class="nav-link {{ Request::is('admin/adminUsers*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-users-cog"></i></span>
        <p> 管理員</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.pageSettingInfos.index') }}"
        class="nav-link {{ Request::is('admin/pageSettingInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fab fa-pagelines"></i></span>
        <p> 頁面設定</p>
    </a>
</li>

<li class="nav-item">
    @php
    $about = DB::table('about_us_infos')->get();
    if (count($about) == 0) {
        # code...
        $route_about = route('admin.aboutUsInfos.create');
    } else {
        $route_about = route('admin.aboutUsInfos.edit', 1);
    }
    @endphp
    <a href="{{ $route_about }}" class="nav-link {{ Request::is('admin/aboutUsInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-hospital-alt"></i></span>
        <p> 關於我們</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.servicesInfos.index') }}"
        class="nav-link {{ Request::is('admin/servicesInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-stethoscope"></i></span>
        <p> 療程項目</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.postTypeInfos.index') }}"
        class="nav-link {{ Request::is('admin/postTypeInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-sitemap"></i></span>
        <p> 文章分類</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.postsInfos.index') }}"
        class="nav-link {{ Request::is('admin/postsInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-file-alt"></i></span>
        <p> 文章資訊</p>
    </a>
</li>


<li class="nav-item">
    <?php
    $company = DB::table('company_infos')->get();
    if (count($company) == 0) {
        # code...
        $route_company = route('admin.companyInfos.create');
    } else {
        $route_company = route('admin.companyInfos.edit', 1);
    }
    ?>
    <a href="{{ $route_company }}" class="nav-link {{ Request::is('admin/companyInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-building"></i></span>
        <p> 公司資訊</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.teamInfos.index') }}"
        class="nav-link {{ Request::is('admin/teamInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-portrait"></i></span>
        <p> 團隊資訊</p>
    </a>
</li>
