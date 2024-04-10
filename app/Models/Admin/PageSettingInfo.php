<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class PageSettingInfo
 * @package App\Models\Admin
 * @version March 22, 2024, 11:44 pm CST
 *
 * @property string $url
 * @property string $title
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $meta_google_site_verification
 * @property string $header_anlytics_code
 * @property string $banner
 * @property string $banner_mob
 * @property string $banner_alt
 * @property string $banner_link
 */
class PageSettingInfo extends Model
{
    use SoftDeletes;


    public $table = 'page_setting_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'url' => 'string',
        'title' => 'string',
        'meta_title' => 'string',
        'meta_description' => 'string',
        'meta_keywords' => 'string',
        'meta_google_site_verification' => 'string',
        'header_anlytics_code' => 'string',
        'banner' => 'json',
        'banner_mob' => 'json',
        'banner_alt' => 'string',
        'banner_link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'url' => 'required',
        'title' => 'required'
    ];

    public static $messages = [
        'url.required' => '網址 為必填欄位',
        'title.required' => '標題 為必填欄位',
        // 'required' => ':attribute 為必填欄位'
    ];
}
