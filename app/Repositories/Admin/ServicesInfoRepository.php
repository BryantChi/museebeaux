<?php

namespace App\Repositories\Admin;

use App\Models\Admin\ServicesInfo;
use App\Repositories\BaseRepository;

/**
 * Class ServicesInfoRepository
 * @package App\Repositories\Admin
 * @version March 30, 2024, 12:14 am CST
*/

class ServicesInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'service_name',
        'service_icon',
        'service_icon_alt',
        'service_cover_front',
        'service_cover_front_alt',
        'service_description',
        'service_sub_list'
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
        return ServicesInfo::class;
    }
}
