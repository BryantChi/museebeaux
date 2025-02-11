<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class RedirectsInfo
 * @package App\Models\Admin
 * @version February 12, 2025, 3:23 am CST
 *
 * @property string $old_url
 * @property string $new_url
 */
class RedirectsInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'redirects_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'old_url',
        'new_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'old_url' => 'string',
        'new_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    // 新增時的驗證規則
    public static $rules = [
        'old_url' => 'required|string|unique:redirects_infos,old_url',
        'new_url' => 'required|string',
    ];

    // 更新時的驗證規則，注意此處使用了 :id 作為 placeholder，
    // 後續在 Form Request 中會替換成實際 id
    public static $updatesRules = [
        'old_url' => 'required|string|unique:redirects_infos,old_url,:id',
        'new_url' => 'required|string',
    ];



}
