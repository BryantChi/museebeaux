<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePostsInfoRequest;
use App\Http\Requests\Admin\UpdatePostsInfoRequest;
use App\Repositories\Admin\PostsInfoRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\PostTypeInfo;
use Illuminate\Http\Request;
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
        $postsTypes = PostTypeInfo::get()->pluck('type_name', 'id')->toArray();

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

        $postsTypes = PostTypeInfo::get()->pluck('type_name', 'id')->toArray();

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

        $postsInfo = $this->postsInfoRepository->update($request->all(), $id);

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
