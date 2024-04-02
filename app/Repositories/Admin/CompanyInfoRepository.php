<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CompanyInfo;
use App\Repositories\BaseRepository;

/**
 * Class CompanyInfoRepository
 * @package App\Repositories\Admin
 * @version April 1, 2024, 3:52 am CST
*/

class CompanyInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_name',
        'company_address',
        'company_map_url',
        'company_map_iframe',
        'company_phone',
        'company_fax',
        'company_facebook',
        'company_instagram',
        'company_line',
        'company_youtube',
        'company_x',
        'company_id_number'
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
        return CompanyInfo::class;
    }
}
