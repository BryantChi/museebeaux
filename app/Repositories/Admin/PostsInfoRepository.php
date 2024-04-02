<?php

namespace App\Repositories\Admin;

use App\Models\Admin\PostsInfo;
use App\Repositories\BaseRepository;

/**
 * Class PostsInfoRepository
 * @package App\Repositories\Admin
 * @version March 31, 2024, 10:18 pm CST
*/

class PostsInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'post_title',
        'post_content',
        'post_type',
        'post_seo_setting_customize',
        'post_seo_title',
        'post_meta_title',
        'post_meta_description',
        'post_meta_keywords'
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
        return PostsInfo::class;
    }
}
