<?php

namespace App\Repositories\Admin;

use App\Models\Admin\TeamInfo;
use App\Repositories\BaseRepository;

/**
 * Class TeamInfoRepository
 * @package App\Repositories
 * @version April 10, 2024, 5:29 pm CST
*/

class TeamInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'role',
        'facebook',
        'threads',
        'line',
        'instagram',
        'youtube',
        'tiktok',
        'wechat',
        'x_twitter',
        'linkedin',
        'github',
        'telegram',
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
