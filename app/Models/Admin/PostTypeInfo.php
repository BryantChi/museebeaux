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
 * @property string $type_slug
 * @property string $type_parent_id
 */
class PostTypeInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'post_type_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type_name',
        'type_slug',
        'type_parent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_name' => 'string',
        'type_slug' => 'string',
        'type_parent_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type_name' => 'required',
        'type_slug' => 'required',
        'type_parent_id' => 'nullable'
    ];

    public static $messages = [
        'type_name.required' => '分類名稱不得為空',
        'type_slug.required' => '分類網址不得為空'
    ];

    public static function getCategoriesDropdown($parentId = null, $prefix = '') {
        $categories = PostTypeInfo::where('type_parent_id', $parentId)->orderBy('type_name')->get();
        $result = [];
        foreach ($categories as $category) {
            $result[$category->id] = $prefix . $category->type_name;
            $children = self::getCategoriesDropdown($category->id, $prefix . '-- ');
            foreach ($children as $key => $value) {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function postsInfo()
    {
        return $this->hasMany(PostsInfo::class);
    }


}
