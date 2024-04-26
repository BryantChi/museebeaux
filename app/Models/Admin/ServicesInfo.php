<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class ServicesInfo
 * @package App\Models\Admin
 * @version March 30, 2024, 12:14 am CST
 *
 * @property string $service_name
 * @property string $service_icon
 * @property string $service_icon_alt
 * @property string $service_cover_front
 * @property string $service_cover_front_alt
 * @property string $service_description
 * @property string $service_sub_list
 */
class ServicesInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'services_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'service_name',
        'service_icon',
        'service_icon_alt',
        'service_cover_front',
        'service_cover_front_alt',
        'service_description',
        'service_sub_list'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'service_name' => 'string',
        'service_icon_alt' => 'string',
        'service_cover_front_alt' => 'string',
        'service_icon' => 'json',
        'service_cover_front' => 'json',
        'service_sub_list' => 'json'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'service_name' => 'required',
        'service_icon' => 'nullable|image|max:2048',
        'service_icon_alt' => 'nullable',
        'service_cover_front' => 'nullable|image|max:2048',
        'service_cover_front_alt' => 'nullable',
        'service_description' => 'nullable',
        'service_sub_list' => 'nullable'
    ];

    public static $messages = [
        'service_name.required' => '服務名稱必填',
        'service_icon.image' => '服務項目 Icon 必須為圖片檔案',
        'service_cover_front.image' => '服務項目 Cover 必須為圖片檔案',
    ];


}
