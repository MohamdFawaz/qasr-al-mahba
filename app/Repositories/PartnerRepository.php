<?php

namespace App\Repositories;


use App\Models\Partner;

class PartnerRepository extends Repository
{
    protected $model;

    /**
     * PartnerRepository constructor.
     * @param Partner $model
     */
    public function __construct(Partner $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function destroy($id)
    {
        $partner = $this->find($id);
        if ($partner->delete()) {
            $partner->deleteImage();
        }
    }

}
