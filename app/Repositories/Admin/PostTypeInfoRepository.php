<?php

namespace App\Repositories\Admin;

use App\Models\Admin\PostTypeInfo;
use App\Repositories\BaseRepository;

/**
 * Class PostTypeInfoRepository
 * @package App\Repositories\Admin
 * @version March 29, 2024, 11:47 pm CST
*/

class PostTypeInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type_name'
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
        return PostTypeInfo::class;
    }
}
