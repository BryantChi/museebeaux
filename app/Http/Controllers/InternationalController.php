<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\PageSettingInfoRepository;
use Illuminate\Http\Request;

class InternationalController extends Controller
{
    //
    public function index()
    {
        $pageInfo = PageSettingInfoRepository::getSubBanner('/international');
        return view('international')->with('pageSettings', $pageInfo);
    }
}
