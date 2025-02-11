<?php

namespace App\Repositories\Admin;

use App\Models\Admin\RedirectsInfo;
use App\Repositories\BaseRepository;

/**
 * Class RedirectsInfoRepository
 * @package App\Repositories\Admin
 * @version February 12, 2025, 3:23 am CST
*/

class RedirectsInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'old_url',
        'new_url'
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
        return RedirectsInfo::class;
    }
}
