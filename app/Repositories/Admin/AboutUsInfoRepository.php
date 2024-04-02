<?php

namespace App\Repositories\Admin;

use App\Models\Admin\AboutUsInfo;
use App\Repositories\BaseRepository;

/**
 * Class AboutUsInfoRepository
 * @package App\Repositories\Admin
 * @version March 19, 2024, 3:04 pm CST
*/

class AboutUsInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'contents'
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
        return AboutUsInfo::class;
    }
}
