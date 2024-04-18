<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePostTypeInfoRequest;
use App\Http\Requests\Admin\UpdatePostTypeInfoRequest;
use App\Models\Admin\PostTypeInfo;
use App\Repositories\Admin\PostTypeInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Flash;
use Response;

class PostTypeInfoController extends AppBaseController
{
    /** @var PostTypeInfoRepository $postTypeInfoRepository*/
    private $postTypeInfoRepository;

    public function __construct(PostTypeInfoRepository $postTypeInfoRepo)
    {
        $this->postTypeInfoRepository = $postTypeInfoRepo;
    }

    /**
     * Display a listing of the PostTypeInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $postTypeInfos = $this->postTypeInfoRepository->paginate(10);

        $postTypeInfos = $this->fetchCategories();
        // dd($postTypeInfos);

        return view('admin.post_type_infos.index')
            ->with('postTypeInfos', $postTypeInfos);
    }

    /**
     * Show the form for creating a new PostTypeInfo.
     *
     * @return Response
     */
    public function create()
    {
        $parentTypes = PostTypeInfo::where('type_parent_id', null)->get()->pluck('type_name', 'id')->toArray();
        return view('admin.post_type_infos.create')->with('parentTypes', $parentTypes);
    }

    /**
     * Store a newly created PostTypeInfo in storage.
     *
     * @param CreatePostTypeInfoRequest $request
     *
     * @return Response
     */
    public function store(CreatePostTypeInfoRequest $request)
    {
        $input = $request->all();

        $input['type_slug'] = Str::slug($input['type_slug'],language: 'zh_TW');

        $postTypeInfo = $this->postTypeInfoRepository->create($input);

        Flash::success('Post Type Info saved successfully.');

        return redirect(route('admin.postTypeInfos.index'));
    }

    /**
     * Display the specified PostTypeInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $postTypeInfo = $this->postTypeInfoRepository->find($id);

        if (empty($postTypeInfo)) {
            Flash::error('Post Type Info not found');

            return redirect(route('admin.postTypeInfos.index'));
        }

        return view('admin.post_type_infos.show')->with('postTypeInfo', $postTypeInfo);
    }

    /**
     * Show the form for editing the specified PostTypeInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $postTypeInfo = $this->postTypeInfoRepository->find($id);

        if (empty($postTypeInfo)) {
            Flash::error('Post Type Info not found');

            return redirect(route('admin.postTypeInfos.index'));
        }

        $parentTypes = PostTypeInfo::where('type_parent_id', null)->get()->pluck('type_name', 'id')->toArray();

        return view('admin.post_type_infos.edit')
            ->with('parentTypes', $parentTypes)
            ->with('postTypeInfo', $postTypeInfo);
    }

    /**
     * Update the specified PostTypeInfo in storage.
     *
     * @param int $id
     * @param UpdatePostTypeInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostTypeInfoRequest $request)
    {
        $postTypeInfo = $this->postTypeInfoRepository->find($id);

        if (empty($postTypeInfo)) {
            Flash::error('Post Type Info not found');

            return redirect(route('admin.postTypeInfos.index'));
        }

        $input = $request->all();

        if ($postTypeInfo->type_slug != $input['type_slug']) {
            $input['type_slug'] = Str::slug($input['type_slug'],language: 'zh_TW');
        }

        $postTypeInfo = $this->postTypeInfoRepository->update($input, $id);

        Flash::success('Post Type Info updated successfully.');

        return redirect(route('admin.postTypeInfos.index'));
    }

    /**
     * Remove the specified PostTypeInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $postTypeInfo = $this->postTypeInfoRepository->find($id);

        if (empty($postTypeInfo)) {
            Flash::error('Post Type Info not found');

            return redirect(route('admin.postTypeInfos.index'));
        }

        $this->postTypeInfoRepository->delete($id);

        Flash::success('Post Type Info deleted successfully.');

        return redirect(route('admin.postTypeInfos.index'));
    }


    public function fetchCategories($parentId = null, $prefix = '') {
        $categories = PostTypeInfo::where('type_parent_id', $parentId)->orderBy('type_name')->get();
        $result = [];
        foreach ($categories as $category) {
            $category->type_name = $prefix . $category->type_name;
            $result[] = $category;
            $result = array_merge($result, self::fetchCategories($category->id, $prefix . '&emsp;→&emsp;')); // →
        }
        return $result;
    }
}
