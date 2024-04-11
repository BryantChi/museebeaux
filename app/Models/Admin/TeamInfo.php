<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class TeamInfo
 * @package App\Models\Admin
 * @version April 10, 2024, 4:35 pm CST
 *
 * @property string $name
 * @property string $role
 * @property string $facebook
 * @property string $threads
 * @property string $line
 * @property string $instagram
 * @property string $youtube
 * @property string $tiktok
 * @property string $wechat
 * @property string $x_twitter
 * @property string $linkedin
 * @property string $github
 * @property string $telegram
 * @property string $introduce
 * @property string $degree
 * @property string $experience
 * @property string $expertise
 * @property string $certificate_license
 * @property string $headshots
 * @property string $headshots_alt
 * @property string $certificate_license_photos
 */
class TeamInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'team_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'role',
        'introduce',
        'degree',
        'experience',
        'expertise',
        'certificate_license',
        'headshots',
        'headshots_alt',
        'certificate_license_photos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role' => 'string',
        'facebook' => 'string',
        'threads' => 'string',
        'line' => 'string',
        'instagram' => 'string',
        'youtube' => 'string',
        'tiktok' => 'string',
        'wechat' => 'string',
        'x_twitter' => 'string',
        'linkedin' => 'string',
        'github' => 'string',
        'telegram' => 'string',
        'introduce' => 'string',
        'degree' => 'json',
        'experience' => 'json',
        'expertise' => 'json',
        'certificate_license' => 'json',
        'headshots' => 'json',
        'headshots_alt' => 'string',
        'certificate_license_photos' => 'json'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'role' => 'nullable',
        'facebook' => 'nullable|url',
        'threads' => 'nullable|url',
        'line' => 'nullable|url',
        'instagram' => 'nullable|url',
        'youtube' => 'nullable|url',
        'tiktok' => 'nullable|url',
        'wechat' => 'nullable|url',
        'x_twitter' => 'nullable|url',
        'linkedin' => 'nullable|url',
        'github' => 'nullable|url',
        'telegram' => 'nullable|url',
        'introduce' => 'nullable',
        'degree' => 'nullable',
        'expertise' => 'nullable',
        'certificate_license' => 'nullable',
        'headshots' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'headshots_alt' => 'nullable|string',
        'certificate_license_photos' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ];

}
