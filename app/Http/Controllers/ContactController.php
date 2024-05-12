<?php

namespace App\Http\Controllers;

use App\Models\Admin\CompanyInfo;
use App\Repositories\Admin\PageSettingInfoRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $pagesetting = PageSettingInfoRepository::getSubBanner('/contact');
        $companyInfo = CompanyInfo::first();
        return view('contact')
            ->with('pageSettings', $pagesetting)
            ->with('companyInfo', $companyInfo);
    }
}
