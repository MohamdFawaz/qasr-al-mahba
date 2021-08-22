<?php

namespace App\Services;

use App\Repositories\MiningLicenseCodeRepository;

class MiningLicenseCodeService
{
    private $repository;

    public function __construct(MiningLicenseCodeRepository $repository)
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
        return $this->repository->create($data->only('code'));
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }

}
