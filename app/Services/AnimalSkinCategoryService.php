<?php

namespace App\Services;

use App\Repositories\AnimalSkinCategoryRepository;

class AnimalSkinCategoryService
{
    private $repository;

    public function __construct(AnimalSkinCategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function get($cols = ['*'])
    {
        return $this->repository->query()->get($cols);
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function update($data, $id)
    {
        return $this->repository->update($data, $id);
    }

    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }

}
