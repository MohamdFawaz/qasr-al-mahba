<?php

namespace App\Services;

use App\Repositories\PartnerRepository;

class PartnerService
{
    private $repository;

    public function __construct(PartnerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function get($cols = ['*'])
    {
        return $this->repository->query()->get($cols);
    }

    public function store($partner)
    {
        $imageName = $this->uploadImage($partner);

        return $this->repository->create(['image' => $imageName, 'link' => $partner->link]);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function update($data, $id)
    {
        $videoLink = $this->repository->find($id);

        $videoLink->image = $data['link'];
        $videoLink->link = $data['link'];

        $videoLink->save();

        return $videoLink;
    }

    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }

    private function uploadImage($request): ?string
    {
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/partners'), $imageName);
            return 'images/partners/' . $imageName;
        }
        return null;
    }
}
