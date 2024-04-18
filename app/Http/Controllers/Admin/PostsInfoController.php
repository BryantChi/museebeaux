<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePostsInfoRequest;
use App\Http\Requests\Admin\UpdatePostsInfoRequest;
use App\Repositories\Admin\PostsInfoRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\PostsInfo;
use App\Models\Admin\PostTypeInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Flash;
use Response;

class PostsInfoController extends AppBaseController
{
    /** @var PostsInfoRepository $postsInfoRepository*/
    private $postsInfoRepository;

    public function __construct(PostsInfoRepository $postsInfoRepo)
    {
        $this->postsInfoRepository = $postsInfoRepo;
    }

    /**
     * Display a listing of the PostsInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $postsInfos = $this->postsInfoRepository->paginate(10);

        return view('admin.posts_infos.index')
            ->with('postsInfos', $postsInfos);
    }

    /**
     * Show the form for creating a new PostsInfo.
     *
     * @return Response
     */
    public function create()
    {
        // $postsTypes = PostTypeInfo::get()->pluck('type_name', 'id')->toArray();
        $postsTypes = PostTypeInfo::getCategoriesDropdown();

        return view('admin.posts_infos.create', compact('postsTypes'));
    }

    /**
     * Store a newly created PostsInfo in storage.
     *
     * @param CreatePostsInfoRequest $request
     *
     * @return Response
     */
    public function store(CreatePostsInfoRequest $request)
    {
        $input = $request->all();

        $input['post_slug'] = Str::slug($input['post_slug'],language: 'zh_TW');

        $image_cover_front = $request->file('post_front_cover');

        if ($image_cover_front) {
            $path = public_path('uploads/images/post_front_cover') . '/';
            $filename = time() . '_' . $image_cover_front->getClientOriginalName();
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }
            // 壓縮圖片
            $image_cover_front = Image::make($image_cover_front)->orientate()->encode('jpg', 75);
            // ->resize(800, null, function ($constraint) {
            //     $constraint->aspectRatio();
            //     $constraint->upsize();
            // }); // 設定 JPG 格式和 75% 品質
            $image_cover_front->save($path.$filename);

            $input['post_front_cover'] = 'images/post_front_cover/' . $filename;
        } else {
            $input['post_front_cover'] = '';
        }

        $postsInfo = $this->postsInfoRepository->create($input);

        Flash::success('Posts Info saved successfully.');

        return redirect(route('admin.postsInfos.index'));
    }

    /**
     * Display the specified PostsInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $postsInfo = $this->postsInfoRepository->find($id);

        if (empty($postsInfo)) {
            Flash::error('Posts Info not found');

            return redirect(route('admin.postsInfos.index'));
        }

        return view('admin.posts_infos.show')->with('postsInfo', $postsInfo);
    }

    /**
     * Show the form for editing the specified PostsInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $postsInfo = $this->postsInfoRepository->find($id);

        // $postsTypes = PostTypeInfo::get()->pluck('type_name', 'id')->toArray();

        $postsTypes = PostTypeInfo::getCategoriesDropdown();

        if (empty($postsInfo)) {
            Flash::error('Posts Info not found');

            return redirect(route('admin.postsInfos.index'));
        }

        return view('admin.posts_infos.edit')
            ->with('postsInfo', $postsInfo)
            ->with('postsTypes', $postsTypes);
    }

    /**
     * Update the specified PostsInfo in storage.
     *
     * @param int $id
     * @param UpdatePostsInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostsInfoRequest $request)
    {
        $postsInfo = $this->postsInfoRepository->find($id);

        if (empty($postsInfo)) {
            Flash::error('Posts Info not found');

            return redirect(route('admin.postsInfos.index'));
        }

        $input = $request->all();

        if ($postsInfo->post_slug != $input['post_slug']) {
            $input['post_slug'] = Str::slug($input['post_slug'],language: 'zh_TW');
        }

        $image_cover_front = $request->file('post_front_cover');

        if ($image_cover_front) {
            $path = public_path('uploads/images/post_front_cover/');
            $filename = time() . '_' . $image_cover_front->getClientOriginalName();
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            if ($postsInfo['post_front_cover'] != null) {
                // 若已存在，則覆蓋原有圖片
                if (File::exists(public_path('uploads/' . $postsInfo['post_front_cover']))) {
                    File::delete(public_path('uploads/' . $postsInfo['post_front_cover']));
                }
            }
            // 壓縮圖片
            $image_cover_front = Image::make($image_cover_front)->orientate()->encode('jpg', 75);
            // ->resize(800, null, function ($constraint) {
            //     $constraint->aspectRatio();
            //     $constraint->upsize();
            // }); // 設定 JPG 格式和 75% 品質
            $image_cover_front->save($path.$filename);



            $input['post_front_cover'] = 'images/post_front_cover/' . $filename;
        } else {
            $input['post_front_cover'] = $postsInfo['post_front_cover'];
        }

        $postsInfo = $this->postsInfoRepository->update($input, $id);

        Flash::success('Posts Info updated successfully.');

        return redirect(route('admin.postsInfos.index'));
    }

    /**
     * Remove the specified PostsInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $postsInfo = $this->postsInfoRepository->find($id);

        if (empty($postsInfo)) {
            Flash::error('Posts Info not found');

            return redirect(route('admin.postsInfos.index'));
        }

        $this->postsInfoRepository->delete($id);

        Flash::success('Posts Info deleted successfully.');

        return redirect(route('admin.postsInfos.index'));
    }
}
