<?php

namespace App\Services;

use App\Models\MiningProcessImage;
use App\Repositories\MiningProcessRepository;
use App\Repositories\MiningResourceRepository;

class MiningProcessService
{
    private $repository;

    public function __construct(MiningProcessRepository $repository)
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

    public function deleteImage($id)
    {
        $processImage = MiningProcessImage::query()->find($id);
        if ($processImage->delete()){
            $processImage->deleteImage();
        }
    }

}
