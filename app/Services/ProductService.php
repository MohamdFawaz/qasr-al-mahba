<?php

namespace App\Services;

use App\Models\ProductImage;
use App\Repositories\ProductRepository;

class ProductService
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function get($cols = ['*'])
    {
        return $this->repository->query()->get($cols);
    }

    public function getByCategoryId($categoryId)
    {
        return $this->repository->query()->where('animal_skin_category_id', $categoryId)->get();
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }

    public function find($id)
    {
        return $this->repository->query()->with(['animalSkinCategories','miningProcesses'])->find($id);
    }

    public function update($data, $id)
    {
        return $this->repository->update($data, $id);
    }

    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }

    public function deleteImage($id)
    {
        ProductImage::query()->where('id',$id)->delete();
    }

}
