<?php

namespace App\Http\Controllers;

use App\Models\Admin\TeamInfo;
use App\Repositories\Admin\PageSettingInfoRepository;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    //
    public function index()
    {
        $pageInfo = PageSettingInfoRepository::getSubBanner('/teams');
        $teamsInfo = TeamInfo::paginate(10);
        return view('teams')->with('pageSettings', $pageInfo)->with('teamsInfo', $teamsInfo);
    }
}
