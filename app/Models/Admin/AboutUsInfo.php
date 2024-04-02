<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class AboutUsInfo
 * @package App\Models\Admin
 * @version March 19, 2024, 3:04 pm CST
 *
 * @property string $contents
 */
class AboutUsInfo extends Model
{
    use SoftDeletes;


    public $table = 'about_us_infos';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'contents'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
