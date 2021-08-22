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
        $newMiningLicense = $data->only('code', 'link', 'google_link');
        [$lat, $lng] = $this->getLatLngFromGMapsURL($data->google_link);
        $newMiningLicense['lat'] = $lat;
        $newMiningLicense['lng'] = $lng;
        return $this->repository->create($newMiningLicense);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }

    private function getLatLngFromGMapsURL($gmapsURL)
    {
        $path = parse_url($gmapsURL)['path'];
        $latLngPath = substr($path, strpos($path, "@") + 1);
        $lat = explode(',', $latLngPath)[0];
        $lng = explode(',', $latLngPath)[1];
        return [$lat, $lng];
    }

}
