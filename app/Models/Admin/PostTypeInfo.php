<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class PostTypeInfo
 * @package App\Models\Admin
 * @version March 29, 2024, 11:47 pm CST
 *
 * @property string $type_name
 */
class PostTypeInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'post_type_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type_name' => 'required'
    ];

    public static $messages = [
        'type_name.required' => '分類名稱不得為空'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function postsInfo()
    {
        return $this->hasMany(PostsInfo::class);
    }


}
