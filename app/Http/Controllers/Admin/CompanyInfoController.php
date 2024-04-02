<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCompanyInfoRequest;
use App\Http\Requests\Admin\UpdateCompanyInfoRequest;
use App\Repositories\Admin\CompanyInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CompanyInfoController extends AppBaseController
{
    /** @var CompanyInfoRepository $companyInfoRepository*/
    private $companyInfoRepository;

    public function __construct(CompanyInfoRepository $companyInfoRepo)
    {
        $this->companyInfoRepository = $companyInfoRepo;
    }

    /**
     * Display a listing of the CompanyInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $companyInfos = $this->companyInfoRepository->paginate(10);

        return view('admin.company_infos.index')
            ->with('companyInfos', $companyInfos);
    }

    /**
     * Show the form for creating a new CompanyInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.company_infos.create');
    }

    /**
     * Store a newly created CompanyInfo in storage.
     *
     * @param CreateCompanyInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateCompanyInfoRequest $request)
    {
        $input = $request->all();

        $companyInfo = $this->companyInfoRepository->create($input);

        Flash::success('Company Info saved successfully.');

        return redirect(route('admin.companyInfos.edit', $companyInfo->id));
    }

    /**
     * Display the specified CompanyInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $companyInfo = $this->companyInfoRepository->find($id);

        if (empty($companyInfo)) {
            Flash::error('Company Info not found');

            return redirect(route('admin.companyInfos.create'));
        }

        return view('admin.company_infos.show')->with('companyInfo', $companyInfo);
    }

    /**
     * Show the form for editing the specified CompanyInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $companyInfo = $this->companyInfoRepository->find($id);

        if (empty($companyInfo)) {
            Flash::error('Company Info not found');

            return redirect(route('admin.companyInfos.index'));
        }

        return view('admin.company_infos.edit')->with('companyInfo', $companyInfo);
    }

    /**
     * Update the specified CompanyInfo in storage.
     *
     * @param int $id
     * @param UpdateCompanyInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompanyInfoRequest $request)
    {
        $companyInfo = $this->companyInfoRepository->find($id);

        if (empty($companyInfo)) {
            Flash::error('Company Info not found');

            return redirect(route('admin.companyInfos.create'));
        }

        $companyInfo = $this->companyInfoRepository->update($request->all(), $id);

        Flash::success('Company Info updated successfully.');

        return redirect(route('admin.companyInfos.edit', $companyInfo->id));
    }

    /**
     * Remove the specified CompanyInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $companyInfo = $this->companyInfoRepository->find($id);

        if (empty($companyInfo)) {
            Flash::error('Company Info not found');

            return redirect(route('admin.companyInfos.create'));
        }

        $this->companyInfoRepository->delete($id);

        Flash::success('Company Info deleted successfully.');

        return redirect(route('admin.companyInfos.index'));
    }
}
