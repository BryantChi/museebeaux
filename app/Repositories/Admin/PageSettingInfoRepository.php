<?php

namespace App\Repositories\Admin;

use App\Models\Admin\PageSettingInfo;
use App\Repositories\BaseRepository;

/**
 * Class PageSettingInfoRepository
 * @package App\Repositories\Admin
 * @version March 22, 2024, 11:44 pm CST
*/

class PageSettingInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'url',
        'title',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_google_site_verification',
        'header_anlytics_code',
        'banner',
        'banner_mob',
        'banner_alt',
        'banner_link'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PageSettingInfo::class;
    }

    public static function getInfo($uri)
    {
        $pageSettingInfo = PageSettingInfo::where('url', $uri)->first();
        return $pageSettingInfo;
    }

    public static function getBannerInfo($uri)
    {
        $pageSettingInfo = PageSettingInfo::where('url', $uri)->first();
        return $pageSettingInfo['banner'];
    }

    public static function getSubBanner($uri)
    {
        $pageInfos = PageSettingInfo::where('url', '=', $uri)->first();
        $pageInfo = new \stdClass();

        $count = count($pageInfos->banner ?? []);
        $random_img_num = 0;
        if ($count > 0) {
            $random_img_num = rand(0, ($count - 1));
            $random_img = $pageInfos->banner[$random_img_num];
        } else {
            $random_img = '';
        }

        $count_mob = count($pageInfos->banner_mob ?? []);
        $random_img_mob_num = 0;
        if ($count_mob > 0) {
            $random_img_mob_num = rand(0, ($count_mob - 1));
            $random_img_mob = $pageInfos->banner_mob[$random_img_mob_num];
        } else {
            $random_img_mob = '';
        }
        $pageInfo->banner = $random_img;
        $pageInfo->banner_mob = $random_img_mob;

        $pageInfo->banner_alt = $pageInfos->banner_alt[$random_img_num] ?? '';
        $pageInfo->banner_alt_mob = $pageInfos->banner_alt[$random_img_mob_num] ?? '';
        $pageInfo->banner_link = $pageInfos->banner_link[$random_img_num] ?? '';
        $pageInfo->banner_link_mob = $pageInfos->banner_link[$random_img_mob_num] ?? '';
        $pageInfo->url = $pageInfos->url;
        $pageInfo->title = $pageInfos->title;
        $pageInfo->meta_title = $pageInfos->meta_title;
        $pageInfo->meta_description = $pageInfos->meta_description;
        $pageInfo->meta_keywords = $pageInfos->meta_keywords;
        $pageInfo->meta_google_site_verification = $pageInfos->meta_google_site_verification;

        return $pageInfo;
    }
}
