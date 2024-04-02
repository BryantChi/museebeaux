<?php

namespace App\Repositories\Admin;

use App\Models\Admin\PageSettingInfo;
use App\Repositories\BaseRepository;

/**
 * Class PageSettingInfoRepository
 * @package App\Repositories\Admin
 * @version March 22, 2024, 11:44 pm CST
*/

class PageSettingInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'url',
        'title',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_google_site_verification'
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
        return PageSettingInfo::class;
    }
}
