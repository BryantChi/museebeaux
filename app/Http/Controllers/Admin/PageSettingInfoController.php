<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePageSettingInfoRequest;
use App\Http\Requests\Admin\UpdatePageSettingInfoRequest;
use App\Repositories\Admin\PageSettingInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PageSettingInfoController extends AppBaseController
{
    /** @var PageSettingInfoRepository $pageSettingInfoRepository*/
    private $pageSettingInfoRepository;

    public function __construct(PageSettingInfoRepository $pageSettingInfoRepo)
    {
        $this->pageSettingInfoRepository = $pageSettingInfoRepo;
    }

    /**
     * Display a listing of the PageSettingInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pageSettingInfos = $this->pageSettingInfoRepository->paginate(10);

        return view('admin.page_setting_infos.index')
            ->with('pageSettingInfos', $pageSettingInfos);
    }

    /**
     * Show the form for creating a new PageSettingInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.page_setting_infos.create');
    }

    /**
     * Store a newly created PageSettingInfo in storage.
     *
     * @param CreatePageSettingInfoRequest $request
     *
     * @return Response
     */
    public function store(CreatePageSettingInfoRequest $request)
    {
        $input = $request->all();

        $pageSettingInfo = $this->pageSettingInfoRepository->create($input);

        Flash::success('Page Setting Info saved successfully.');

        return redirect(route('admin.pageSettingInfos.index'));
    }

    /**
     * Display the specified PageSettingInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pageSettingInfo = $this->pageSettingInfoRepository->find($id);

        if (empty($pageSettingInfo)) {
            Flash::error('Page Setting Info not found');

            return redirect(route('admin.pageSettingInfos.index'));
        }

        return view('admin.page_setting_infos.show')->with('pageSettingInfo', $pageSettingInfo);
    }

    /**
     * Show the form for editing the specified PageSettingInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pageSettingInfo = $this->pageSettingInfoRepository->find($id);

        if (empty($pageSettingInfo)) {
            Flash::error('Page Setting Info not found');

            return redirect(route('admin.pageSettingInfos.index'));
        }

        return view('admin.page_setting_infos.edit')->with('pageSettingInfo', $pageSettingInfo);
    }

    /**
     * Update the specified PageSettingInfo in storage.
     *
     * @param int $id
     * @param UpdatePageSettingInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePageSettingInfoRequest $request)
    {
        $pageSettingInfo = $this->pageSettingInfoRepository->find($id);

        if (empty($pageSettingInfo)) {
            Flash::error('Page Setting Info not found');

            return redirect(route('admin.pageSettingInfos.index'));
        }

        $pageSettingInfo = $this->pageSettingInfoRepository->update($request->all(), $id);

        Flash::success('Page Setting Info updated successfully.');

        return redirect(route('admin.pageSettingInfos.index'));
    }

    /**
     * Remove the specified PageSettingInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pageSettingInfo = $this->pageSettingInfoRepository->find($id);

        if (empty($pageSettingInfo)) {
            Flash::error('Page Setting Info not found');

            return redirect(route('admin.pageSettingInfos.index'));
        }

        $this->pageSettingInfoRepository->delete($id);

        Flash::success('Page Setting Info deleted successfully.');

        return redirect(route('admin.pageSettingInfos.index'));
    }
}
