<?php

namespace App\Repositories;


use App\Models\MiningLicenseCode;

class MiningLicenseCodeRepository extends Repository
{
    protected $model;

    /**
     * MiningLicenseCodeRepository constructor.
     * @param MiningLicenseCode $model
     */
    public function __construct(MiningLicenseCode $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }


}
