<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\PostsInfo as Posts;
use App\Models\Admin\PostTypeInfo;
use App\Repositories\Admin\PageSettingInfoRepository;

use function PHPSTORM_META\type;

class PostsController extends Controller
{
    //

    public function blog($type = null)
    {
        $typeSlug = $type;
        $postType = PostTypeInfo::where(function($query) {
            $query->whereNotNull('type_parent_id')
                ->whereNotIn('type_parent_id',
                PostTypeInfo::whereNull('type_parent_id')->where(function($query) {
                    $query->whereNotIn('id', [1, 3]);
                })->get('id')->toArray());
        })->orWhere(function($query) {
            $query->whereIn('id', [1, 3]);
        });

        if ($type == null) {
            $postTypes = $postType->get('id')->toArray();
            $postsInfo = Posts::whereIn('post_type', $postTypes)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $types = PostTypeInfo::where('type_slug', $type)->value('id');
            $postsInfo = Posts::where('post_type', $types)->orderBy('created_at', 'desc')->paginate(10);
        }

        $pagesInfo = PageSettingInfoRepository::getSubBanner('/blog');

        $typeInfo = array();
        foreach ($postType->get() as $value) {
            $type = new \StdClass();
            $type->id = $value->id;
            $type->type = $value->type_name;
            $type->count = Posts::where('post_type', $value->id)->count();
            array_push($typeInfo, $type);
        }

        return view('posts_grid')
            ->with('typeSlug', $typeSlug)
            ->with('pageSettings', $pagesInfo)
            ->with('typeInfo', $typeInfo)
            ->with('postsInfo', $postsInfo);
    }

    public function blogShow($type, $slug)
    {
        $typeSlug = $type;
        $types = PostTypeInfo::where('type_slug', $type)->value('id');
        $postInfo = Posts::where('post_type', $types)->where('post_slug', $slug)->firstOrFail();
        $pageInfo = PageSettingInfoRepository::getSubBanner('/blog');
        $pagesInfo = new \StdClass();
        $pagesInfo->title = ($postInfo->post_meta_title ?? '') != '' && $postInfo->post_seo_setting_customize == 1 ? $postInfo->post_meta_title : ($postInfo->post_title ?? '');
        // $pagesInfo->seo_title = ($postInfo->post_seo_title ?? '') != '' && $postInfo->post_seo_setting_customize == 1 ? $postInfo->post_seo_title : ($pageInfo->meta_title ?? '');
        $pagesInfo->meta_title = ($postInfo->post_meta_title ?? '') != '' && $postInfo->post_seo_setting_customize == 1 ? $postInfo->post_meta_title : ($postInfo->post_title ?? '');
        $pagesInfo->meta_description = ($postInfo->post_meta_description ?? '') != '' && $postInfo->post_seo_setting_customize == 1 ? $postInfo->post_meta_description : ($pageInfo->meta_description ?? '');
        $pagesInfo->meta_keywords = ($postInfo->post_meta_keywords ?? '') != '' && $postInfo->post_seo_setting_customize == 1 ? $postInfo->post_meta_keywords : ($pageInfo->meta_keywords ?? '');

        $pagesInfo->banner = $pageInfo->banner;
        $pagesInfo->banner_mob = $pageInfo->banner_mob;
        $pagesInfo->banner_alt = $pageInfo->banner_alt;
        $pagesInfo->banner_alt_mob = $pageInfo->banner_alt_mob;
        $pagesInfo->banner_link = $pageInfo->banner_link;
        $pagesInfo->banner_link_mob = $pageInfo->banner_link_mob;
        $pagesInfo->meta_google_site_verification = $pageInfo->meta_google_site_verification;
        $pagesInfo->header_anlytics_code = $pageInfo->header_anlytics_code ?? '';
        $pagesInfo->body_anlytics_code = $pageInfo->body_anlytics_code ?? '';


        $postType = PostTypeInfo::where(function($query) {
            $query->whereNotNull('type_parent_id')
                ->whereNotIn('type_parent_id',
                PostTypeInfo::whereNull('type_parent_id')->where(function($query) {
                    $query->whereNotIn('id', [1, 3]);
                })->get('id')->toArray());
        })->orWhere(function($query) {
            $query->whereIn('id', [1, 3]);
        });

        $typeInfo = array();
        foreach ($postType->get() as $value) {
            $type = new \StdClass();
            $type->id = $value->id;
            $type->type = $value->type_name;
            $type->count = Posts::where('post_type', $value->id)->count();
            array_push($typeInfo, $type);
        }

        return view('posts_detail')
            ->with('typeSlug', $typeSlug)
            ->with('pageSettings', $pagesInfo)
            ->with('typeInfo', $typeInfo)
            ->with('postInfo', $postInfo);
    }


    public function case()
    {
        $postsInfo = Posts::where('post_type', 2)->orderBy('created_at', 'desc')->paginate(10);
        $pagesInfo = PageSettingInfoRepository::getSubBanner('/case');

        $postType = PostTypeInfo::all();

        $typeInfo = array();
        foreach ($postType as $value) {
            $type = new \StdClass();
            $type->id = $value->id;
            $type->type = $value->type_name;
            $type->count = Posts::where('post_type', $value->id)->count();
            array_push($typeInfo, $type);
        }

        return view('case_grid')
            ->with('pageSettings', $pagesInfo)
            ->with('typeInfo', $typeInfo)
            ->with('postsInfo', $postsInfo);
    }

    public function caseShow($slug)
    {
        $postInfo = Posts::where('post_type', 2)->where('post_slug', $slug)->firstOrFail();
        $pageInfo = PageSettingInfoRepository::getSubBanner('/blog');
        $pagesInfo = new \StdClass();
        $pagesInfo->title = ($postInfo->post_meta_title ?? '') != '' && $postInfo->post_seo_setting_customize == 1 ? $postInfo->post_meta_title : ($postInfo->post_title ?? '');
        // $pagesInfo->seo_title = ($postInfo->post_seo_title ?? '') != '' && $postInfo->post_seo_setting_customize == 1 ? $postInfo->post_seo_title : ($pageInfo->meta_title ?? '');
        $pagesInfo->meta_title = ($postInfo->post_meta_title ?? '') != '' && $postInfo->post_seo_setting_customize == 1 ? $postInfo->post_meta_title : ($postInfo->post_title ?? '');
        $pagesInfo->meta_description = ($postInfo->post_meta_description ?? '') != '' && $postInfo->post_seo_setting_customize == 1 ? $postInfo->post_meta_description : ($pageInfo->meta_description ?? '');
        $pagesInfo->meta_keywords = ($postInfo->post_meta_keywords ?? '') != '' && $postInfo->post_seo_setting_customize == 1 ? $postInfo->post_meta_keywords : ($pageInfo->meta_keywords ?? '');

        $pagesInfo->banner = $pageInfo->banner;
        $pagesInfo->banner_mob = $pageInfo->banner_mob;
        $pagesInfo->banner_alt = $pageInfo->banner_alt;
        $pagesInfo->banner_alt_mob = $pageInfo->banner_alt_mob;
        $pagesInfo->banner_link = $pageInfo->banner_link;
        $pagesInfo->banner_link_mob = $pageInfo->banner_link_mob;
        $pagesInfo->meta_google_site_verification = $pageInfo->meta_google_site_verification;
        $pagesInfo->header_anlytics_code = $pageInfo->header_anlytics_code ?? '';
        $pagesInfo->body_anlytics_code = $pageInfo->body_anlytics_code ?? '';

        $postType = PostTypeInfo::all();

        $typeInfo = array();
        foreach ($postType as $value) {
            $type = new \StdClass();
            $type->id = $value->id;
            $type->type = $value->type_name;
            $type->count = Posts::where('post_type', $value->id)->count();
            array_push($typeInfo, $type);
        }

        return view('case_detail')
            ->with('pageSettings', $pagesInfo)
            ->with('typeInfo', $typeInfo)
            ->with('postInfo', $postInfo);
    }
}
