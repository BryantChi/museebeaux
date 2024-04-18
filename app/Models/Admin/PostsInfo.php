<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class PostsInfo
 * @package App\Models\Admin
 * @version March 31, 2024, 10:18 pm CST
 *
 * @property \App\Models\Admin\PostTypeInfo $id
 * @property string $post_title
 * @property string $post_slug
 * @property string $post_front_cover
 * @property string $post_content
 * @property string $post_type
 * @property boolean $post_seo_setting_customize
 * @property string $post_seo_title
 * @property string $post_meta_title
 * @property string $post_meta_description
 * @property string $post_meta_keywords
 */
class PostsInfo extends EloquentModel
{


    public $table = 'posts_infos';




    public $fillable = [
        'post_title',
        'post_slug',
        'post_front_cover',
        'post_content',
        'post_type',
        'post_seo_setting_customize',
        'post_seo_title',
        'post_meta_title',
        'post_meta_description',
        'post_meta_keywords'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'post_title' => 'string',
        'post_slug' => 'string',
        'post_front_cover' => 'json',
        'post_type' => 'string',
        'post_seo_setting_customize' => 'boolean',
        'post_seo_title' => 'string',
        'post_meta_title' => 'string',
        'post_meta_keywords' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'post_title' => 'string',
        'post_slug' => 'string',
        'post_front_cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'post_content' => 'nullable',
        'post_type' => 'nullable',
        'post_seo_setting_customize' => 'boolean',
        'post_seo_title' => 'nullable',
        'post_meta_title' => 'nullable',
        'post_meta_description' => 'nullable',
        'post_meta_keywords' => 'nullable'
    ];

    public static $messages = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function postTypeInfo(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\PostTypeInfo::class, 'id', 'id');
    }
}
