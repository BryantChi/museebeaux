<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateServicesInfoRequest;
use App\Http\Requests\Admin\UpdateServicesInfoRequest;
use App\Repositories\Admin\ServicesInfoRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\PostsInfo;
use App\Models\Admin\PostTypeInfo;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Flash;
use Response;

class ServicesInfoController extends AppBaseController
{
    /** @var ServicesInfoRepository $servicesInfoRepository*/
    private $servicesInfoRepository;

    public function __construct(ServicesInfoRepository $servicesInfoRepo)
    {
        $this->servicesInfoRepository = $servicesInfoRepo;
    }

    /**
     * Display a listing of the ServicesInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $servicesInfos = $this->servicesInfoRepository->paginate(10);

        return view('admin.services_infos.index')
            ->with('servicesInfos', $servicesInfos);
    }

    /**
     * Show the form for creating a new ServicesInfo.
     *
     * @return Response
     */
    public function create()
    {
        $postsTypes = PostTypeInfo::getCategoriesDropdown();
        $posts = PostsInfo::all();

        return view('admin.services_infos.create')
            ->with('postsTypes', $postsTypes)
            ->with('posts', $posts);
    }

    /**
     * Store a newly created ServicesInfo in storage.
     *
     * @param CreateServicesInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateServicesInfoRequest $request)
    {
        $input = $request->all();

        // $today = Carbon::now()->format('Y-m-d');

        $image_icon = $request->file('service_icon');

        if ($image_icon) {
            $path = public_path('uploads/images/service_icon') . '/';
            $filename = time() . '_' . $image_icon->getClientOriginalName();
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }
            // 壓縮圖片
            $image_icon = Image::make($image_icon)->orientate()->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 75); // 設定 JPG 格式和 75% 品質
            $image_icon->save($path.$filename);

            $input['service_icon'] = 'images/service_icon/' . $filename;
        } else {
            $input['service_icon'] = '';
        }

        $image_cover_front = $request->file('service_cover_front');

        if ($image_cover_front) {
            $path = public_path('uploads/images/service_cover_front') . '/';
            $filename = time() . '_' . $image_cover_front->getClientOriginalName();
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }
            // 壓縮圖片
            $image_cover_front = Image::make($image_cover_front)->orientate()->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 75); // 設定 JPG 格式和 75% 品質
            $image_cover_front->save($path.$filename);

            $input['service_cover_front'] = 'images/service_cover_front/' . $filename;
        } else {
            $input['service_cover_front'] = '';
        }

        $servicesInfo = $this->servicesInfoRepository->create($input);

        Flash::success('Services Info saved successfully.');

        return redirect(route('admin.servicesInfos.index'));
    }

    /**
     * Display the specified ServicesInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicesInfo = $this->servicesInfoRepository->find($id);

        if (empty($servicesInfo)) {
            Flash::error('Services Info not found');

            return redirect(route('admin.servicesInfos.index'));
        }

        return view('admin.services_infos.show')->with('servicesInfo', $servicesInfo);
    }

    /**
     * Show the form for editing the specified ServicesInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicesInfo = $this->servicesInfoRepository->find($id);

        if (empty($servicesInfo)) {
            Flash::error('Services Info not found');

            return redirect(route('admin.servicesInfos.index'));
        }

        $postsTypes = PostTypeInfo::getCategoriesDropdown();
        $posts = PostsInfo::all();

        return view('admin.services_infos.edit')
            ->with('postsTypes', $postsTypes)
            ->with('posts', $posts)
            ->with('servicesInfo', $servicesInfo);
    }

    /**
     * Update the specified ServicesInfo in storage.
     *
     * @param int $id
     * @param UpdateServicesInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServicesInfoRequest $request)
    {
        $input = $request->all();

        $servicesInfo = $this->servicesInfoRepository->find($id);

        if (empty($servicesInfo)) {
            Flash::error('Services Info not found');

            return redirect(route('admin.servicesInfos.index'));
        }

        $image_icon = $request->file('service_icon');

        if ($image_icon) {
            $path = public_path('uploads/images/service_icon/');
            $filename = time() . '_' . $image_icon->getClientOriginalName();
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            if ($servicesInfo['service_icon'] != null) {
                // 若已存在，則覆蓋原有圖片
                if (File::exists(public_path('uploads/' . $servicesInfo['service_icon']))) {
                    File::delete(public_path('uploads/' . $servicesInfo['service_icon']));
                }
            }
            // 壓縮圖片
            $image_icon = Image::make($image_icon)->orientate()->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 75); // 設定 JPG 格式和 75% 品質
            $image_icon->save($path.$filename);



            $input['service_icon'] = 'images/service_icon/' . $filename;
        } else {
            $input['service_icon'] = $servicesInfo['service_icon'];
        }

        $image_cover_front = $request->file('service_cover_front');

        if ($image_cover_front) {
            $path = public_path('uploads/images/service_cover_front/');
            $filename = time() . '_' . $image_cover_front->getClientOriginalName();
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            if ($servicesInfo['service_cover_front'] != null) {
                // 若已存在，則覆蓋原有圖片
                if (File::exists(public_path('uploads/' . $servicesInfo['service_cover_front']))) {
                    File::delete(public_path('uploads/' . $servicesInfo['service_cover_front']));
                }
            }
            // 壓縮圖片
            $image_cover_front = Image::make($image_cover_front)->orientate()->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 75); // 設定 JPG 格式和 75% 品質
            $image_cover_front->save($path.$filename);



            $input['service_cover_front'] = 'images/service_cover_front/' . $filename;
        } else {
            $input['service_cover_front'] = $servicesInfo['service_cover_front'];
        }

        $servicesInfo = $this->servicesInfoRepository->update($input, $id);

        Flash::success('Services Info updated successfully.');

        return redirect(route('admin.servicesInfos.index'));
    }

    /**
     * Remove the specified ServicesInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicesInfo = $this->servicesInfoRepository->find($id);

        if (empty($servicesInfo)) {
            Flash::error('Services Info not found');

            return redirect(route('admin.servicesInfos.index'));
        }

        $this->servicesInfoRepository->delete($id);

        Flash::success('Services Info deleted successfully.');

        return redirect(route('admin.servicesInfos.index'));
    }
}
