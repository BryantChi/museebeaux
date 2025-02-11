<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateRedirectsInfoRequest;
use App\Http\Requests\Admin\UpdateRedirectsInfoRequest;
use App\Repositories\Admin\RedirectsInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RedirectsInfoController extends AppBaseController
{
    /** @var RedirectsInfoRepository $redirectsInfoRepository*/
    private $redirectsInfoRepository;

    public function __construct(RedirectsInfoRepository $redirectsInfoRepo)
    {
        $this->redirectsInfoRepository = $redirectsInfoRepo;
    }

    /**
     * Display a listing of the RedirectsInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $redirectsInfos = $this->redirectsInfoRepository->paginate(10);

        return view('admin.redirects_infos.index')
            ->with('redirectsInfos', $redirectsInfos);
    }

    /**
     * Show the form for creating a new RedirectsInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.redirects_infos.create');
    }

    /**
     * Store a newly created RedirectsInfo in storage.
     *
     * @param CreateRedirectsInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateRedirectsInfoRequest $request)
    {
        $input = $request->all();

        $redirectsInfo = $this->redirectsInfoRepository->create($input);

        Flash::success('Redirects Info saved successfully.');

        return redirect(route('admin.redirectsInfos.index'));
    }

    /**
     * Display the specified RedirectsInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $redirectsInfo = $this->redirectsInfoRepository->find($id);

        if (empty($redirectsInfo)) {
            Flash::error('Redirects Info not found');

            return redirect(route('admin.redirectsInfos.index'));
        }

        return view('admin.redirects_infos.show')->with('redirectsInfo', $redirectsInfo);
    }

    /**
     * Show the form for editing the specified RedirectsInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $redirectsInfo = $this->redirectsInfoRepository->find($id);

        if (empty($redirectsInfo)) {
            Flash::error('Redirects Info not found');

            return redirect(route('admin.redirectsInfos.index'));
        }

        return view('admin.redirects_infos.edit')->with('redirectsInfo', $redirectsInfo);
    }

    /**
     * Update the specified RedirectsInfo in storage.
     *
     * @param int $id
     * @param UpdateRedirectsInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRedirectsInfoRequest $request)
    {
        $redirectsInfo = $this->redirectsInfoRepository->find($id);

        if (empty($redirectsInfo)) {
            Flash::error('Redirects Info not found');

            return redirect(route('admin.redirectsInfos.index'));
        }

        $redirectsInfo = $this->redirectsInfoRepository->update($request->all(), $id);

        Flash::success('Redirects Info updated successfully.');

        return redirect(route('admin.redirectsInfos.index'));
    }

    /**
     * Remove the specified RedirectsInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $redirectsInfo = $this->redirectsInfoRepository->find($id);

        if (empty($redirectsInfo)) {
            Flash::error('Redirects Info not found');

            return redirect(route('admin.redirectsInfos.index'));
        }

        $this->redirectsInfoRepository->delete($id);

        Flash::success('Redirects Info deleted successfully.');

        return redirect(route('admin.redirectsInfos.index'));
    }
}
