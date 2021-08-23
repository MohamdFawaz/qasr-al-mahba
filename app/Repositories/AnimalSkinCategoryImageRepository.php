<?php

namespace App\Repositories;


use App\Models\AnimalSkinCategory;
use App\Models\AnimalSkinCategoryImage;

class AnimalSkinCategoryImageRepository extends Repository
{
    protected $model;

    /**
     * AnimalSkinCategoryImageRepository constructor.
     * @param AnimalSkinCategoryImage $model
     */
    public function __construct(AnimalSkinCategoryImage $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }



}
