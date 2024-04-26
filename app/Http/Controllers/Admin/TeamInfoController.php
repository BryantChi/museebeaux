<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateTeamInfoRequest;
use App\Http\Requests\Admin\UpdateTeamInfoRequest;
use App\Repositories\Admin\TeamInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Admin\TeamInfo;
use Intervention\Image\Facades\Image;
use Flash;
use Illuminate\Support\Facades\File;
use Response;

class TeamInfoController extends AppBaseController
{
    /** @var TeamInfoRepository $teamInfoRepository*/
    private $teamInfoRepository;

    public function __construct(TeamInfoRepository $teamInfoRepo)
    {
        $this->teamInfoRepository = $teamInfoRepo;
    }

    /**
     * Display a listing of the TeamInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $teamInfos = $this->teamInfoRepository->paginate(10);

        return view('admin.team_infos.index')
            ->with('teamInfos', $teamInfos);
    }

    /**
     * Show the form for creating a new TeamInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.team_infos.create');
    }

    /**
     * Store a newly created TeamInfo in storage.
     *
     * @param CreateTeamInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateTeamInfoRequest $request)
    {
        $input = $request->all();

        $image_headshots = $request->file('headshots');

        if ($image_headshots) {
            $path = public_path('uploads/images/teams/headshots') . '/';
            $filename = time() . '_' . $image_headshots->getClientOriginalName();
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }
            // 壓縮圖片
            $image_headshots = Image::make($image_headshots)->orientate()->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 75); // 設定 JPG 格式和 75% 品質
            $image_headshots->save($path.$filename);

            $input['headshots'] = 'images/teams/headshots/' . $filename;
        } else {
            $input['headshots'] = '';
        }

        $teamInfo = $this->teamInfoRepository->create($input);

        Flash::success('Team Info saved successfully.');

        return redirect(route('admin.teamInfos.index'));
    }

    /**
     * Display the specified TeamInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teamInfo = $this->teamInfoRepository->find($id);

        if (empty($teamInfo)) {
            Flash::error('Team Info not found');

            return redirect(route('admin.teamInfos.index'));
        }

        return view('admin.team_infos.show')->with('teamInfo', $teamInfo);
    }

    /**
     * Show the form for editing the specified TeamInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teamInfo = $this->teamInfoRepository->find($id);

        if (empty($teamInfo)) {
            Flash::error('Team Info not found');

            return redirect(route('admin.teamInfos.index'));
        }

        return view('admin.team_infos.edit')->with('teamInfo', $teamInfo);
    }

    /**
     * Update the specified TeamInfo in storage.
     *
     * @param int $id
     * @param UpdateTeamInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeamInfoRequest $request)
    {
        $teamInfo = $this->teamInfoRepository->find($id);

        if (empty($teamInfo)) {
            Flash::error('Team Info not found');

            return redirect(route('admin.teamInfos.index'));
        }

        $input = $request->all();

        $image_headshots = $request->file('headshots');

        if ($image_headshots) {
            $path = public_path('uploads/images/teams/headshots/');
            $filename = time() . '_' . $image_headshots->getClientOriginalName();
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            if ($teamInfo['headshots'] != null) {
                // 若已存在，則覆蓋原有圖片
                if (File::exists(public_path('uploads/' . $teamInfo['headshots']))) {
                    File::delete(public_path('uploads/' . $teamInfo['headshots']));
                }
            }
            // 壓縮圖片
            $image_headshots = Image::make($image_headshots)->orientate()->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 75); // 設定 JPG 格式和 75% 品質
            $image_headshots->save($path.$filename);



            $input['headshots'] = 'images/teams/headshots/' . $filename;
        } else {
            $input['headshots'] = $teamInfo['headshots'];
        }

        $teamInfo = $this->teamInfoRepository->update($input, $id);

        Flash::success('Team Info updated successfully.');

        return redirect(route('admin.teamInfos.index'));
    }

    /**
     * Remove the specified TeamInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teamInfo = $this->teamInfoRepository->find($id);

        if (empty($teamInfo)) {
            Flash::error('Team Info not found');

            return redirect(route('admin.teamInfos.index'));
        }

        $this->teamInfoRepository->delete($id);

        Flash::success('Team Info deleted successfully.');

        return redirect(route('admin.teamInfos.index'));
    }
}
