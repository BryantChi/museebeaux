<li class="nav-item mb-4">
    <a href="javascript:void(0)"
       class="nav-link">
        <p class="h5"><span><i class="fas fa-external-link-alt"></i></span> 瀏覽網站</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.adminUsers.index') }}"
       class="nav-link {{ Request::is('admin/adminUsers*') ? 'active' : '' }}">
        <p>管理員</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.pageSettingInfos.index') }}"
       class="nav-link {{ Request::is('admin/pageSettingInfos*') ? 'active' : '' }}">
        <p>頁面設定</p>
    </a>
</li>

<li class="nav-item">
    <?php
     $about = DB::table('about_us_infos')->get();
     if (count($about) == 0) {
        # code...
        $route_about = route('admin.aboutUsInfos.create');
     }else{
        $route_about = route('admin.aboutUsInfos.edit', 1);
     }
    ?>
    <a href="{{ $route_about }}"
       class="nav-link {{ Request::is('admin/aboutUsInfos*') ? 'active' : '' }}">
        <p>關於我們</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.servicesInfos.index') }}"
       class="nav-link {{ Request::is('admin/servicesInfos*') ? 'active' : '' }}">
        <p>服務項目</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.postTypeInfos.index') }}"
       class="nav-link {{ Request::is('admin/postTypeInfos*') ? 'active' : '' }}">
        <p>文章分類</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.postsInfos.index') }}"
       class="nav-link {{ Request::is('admin/postsInfos*') ? 'active' : '' }}">
        <p>文章資訊</p>
    </a>
</li>


<li class="nav-item">
    <?php
     $company = DB::table('company_infos')->get();
     if (count($company) == 0) {
        # code...
        $route_company = route('admin.companyInfos.create');
     }else{
        $route_company = route('admin.companyInfos.edit', 1);
     }
    ?>
    <a href="{{ $route_company }}"
       class="nav-link {{ Request::is('admin/companyInfos*') ? 'active' : '' }}">
        <p>公司資訊</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.teamInfos.index') }}"
       class="nav-link {{ Request::is('admin/teamInfos*') ? 'active' : '' }}">
        <p>團隊資訊</p>
    </a>
</li>


