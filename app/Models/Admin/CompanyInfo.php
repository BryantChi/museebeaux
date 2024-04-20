<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class CompanyInfo
 * @package App\Models\Admin
 * @version April 1, 2024, 3:52 am CST
 *
 * @property string $company_name
 * @property string $company_mail
 * @property string $company_address
 * @property string $company_map_url
 * @property string $company_map_iframe
 * @property string $company_phone
 * @property string $company_fax
 * @property string $company_facebook
 * @property string $company_instagram
 * @property string $company_line
 * @property string $company_youtube
 * @property string $company_x
 * @property string $company_id_number
 */
class CompanyInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'company_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'company_name',
        'company_mail',
        'company_address',
        'company_map_url',
        'company_map_iframe',
        'company_phone',
        'company_fax',
        'company_facebook',
        'company_instagram',
        'company_line',
        'company_youtube',
        'company_x',
        'company_id_number'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_name' => 'string',
        'company_mail' => 'string',
        'company_address' => 'string',
        'company_map_url' => 'string',
        'company_phone' => 'string',
        'company_fax' => 'string',
        'company_facebook' => 'string',
        'company_instagram' => 'string',
        'company_line' => 'string',
        'company_youtube' => 'string',
        'company_x' => 'string',
        'company_id_number' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'company_email' => 'nullable',
        'company_address' => 'nullable',
        'company_map_url' => 'nullable',
        'company_map_iframe' => 'nullable',
        'company_phone' => 'nullable',
        'company_fax' => 'nullable',
        'company_facebook' => 'nullable',
        'company_instagram' => 'nullable',
        'company_line' => 'nullable',
        'company_youtube' => 'nullable',
        'company_x' => 'nullable',
        'company_id_number' => 'nullable'
    ];


}
