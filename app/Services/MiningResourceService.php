<?php

namespace App\Services;

use App\Repositories\MiningResourceRepository;

class MiningResourceService
{
    private $repository;

    public function __construct(MiningResourceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function get($cols = ['*'])
    {
        return $this->repository->query()->get($cols);
    }

    public function getCodeDetails($code)
    {
        return $this->repository->query()->where('code', $code)->first();
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function update($date, $id)
    {
        $miningResource = $this->find($id);

        return $this->repository->update($date, $miningResource);
    }
    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }

}
