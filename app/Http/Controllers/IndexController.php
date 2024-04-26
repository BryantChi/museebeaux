<?php

namespace App\Http\Controllers;

use App\Models\Admin\PageSettingInfo;
use App\Repositories\Admin\PageSettingInfoRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index()
    {
        $pageInfo = PageSettingInfoRepository::getInfo('/*');
        return view('index')->with('pageSettings', $pageInfo);
    }
}
