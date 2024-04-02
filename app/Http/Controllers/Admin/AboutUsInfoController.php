<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateAboutUsInfoRequest;
use App\Http\Requests\Admin\UpdateAboutUsInfoRequest;
use App\Repositories\Admin\AboutUsInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AboutUsInfoController extends AppBaseController
{
    /** @var AboutUsInfoRepository $aboutUsInfoRepository*/
    private $aboutUsInfoRepository;

    public function __construct(AboutUsInfoRepository $aboutUsInfoRepo)
    {
        $this->aboutUsInfoRepository = $aboutUsInfoRepo;
    }

    /**
     * Display a listing of the AboutUsInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $aboutUsInfos = $this->aboutUsInfoRepository->paginate(10);

        return view('admin.about_us_infos.index')
            ->with('aboutUsInfos', $aboutUsInfos);
    }

    /**
     * Show the form for creating a new AboutUsInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.about_us_infos.create');
    }

    /**
     * Store a newly created AboutUsInfo in storage.
     *
     * @param CreateAboutUsInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateAboutUsInfoRequest $request)
    {
        $input = $request->all();

        $aboutUsInfo = $this->aboutUsInfoRepository->create($input);

        Flash::success('About Us Info saved successfully.');

        return redirect(route('admin.aboutUsInfos.edit', $aboutUsInfo->id));
    }

    /**
     * Display the specified AboutUsInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aboutUsInfo = $this->aboutUsInfoRepository->find($id);

        if (empty($aboutUsInfo)) {
            Flash::error('About Us Info not found');

            return redirect(route('admin.aboutUsInfos.create'));
        }

        return view('admin.about_us_infos.show')->with('aboutUsInfo', $aboutUsInfo);
    }

    /**
     * Show the form for editing the specified AboutUsInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aboutUsInfo = $this->aboutUsInfoRepository->find($id);

        if (empty($aboutUsInfo)) {
            Flash::error('About Us Info not found');

            return redirect(route('admin.aboutUsInfos.create'));
        }

        return view('admin.about_us_infos.edit')->with('aboutUsInfo', $aboutUsInfo);
    }

    /**
     * Update the specified AboutUsInfo in storage.
     *
     * @param int $id
     * @param UpdateAboutUsInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAboutUsInfoRequest $request)
    {
        $aboutUsInfo = $this->aboutUsInfoRepository->find($id);

        if (empty($aboutUsInfo)) {
            Flash::error('About Us Info not found');

            return redirect(route('admin.aboutUsInfos.create'));
        }

        $aboutUsInfo = $this->aboutUsInfoRepository->update($request->all(), $id);

        // Flash::success('About Us Info updated successfully.');
        Flash::success('關於我們 - 更新成功！');

        return redirect(route('admin.aboutUsInfos.edit', $aboutUsInfo->id));
    }

    /**
     * Remove the specified AboutUsInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aboutUsInfo = $this->aboutUsInfoRepository->find($id);

        if (empty($aboutUsInfo)) {
            Flash::error('About Us Info not found');

            return redirect(route('admin.aboutUsInfos.create'));
        }

        $this->aboutUsInfoRepository->delete($id);

        Flash::success('About Us Info deleted successfully.');

        return redirect(route('admin.aboutUsInfos.create'));
    }
}
