<?php

namespace App\Repositories\Admin;

use App\Models\Admin\TeamInfo;
use App\Repositories\BaseRepository;

/**
 * Class TeamInfoRepository
 * @package App\Repositories\Admin
 * @version April 10, 2024, 4:35 pm CST
*/

class TeamInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'role',
        'introduce',
        'degree',
        'expertise',
        'certificate_license'
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
        return TeamInfo::class;
    }
}
