<?php

namespace App\Repositories;


use App\Models\MiningResource;

class MiningResourceRepository extends Repository
{
    protected $model;

    /**
     * MiningResourceRepository constructor.
     * @param MiningResource $model
     */
    public function __construct(MiningResource $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function store($newResource)
    {
        $miningResource = new $this->model;

        if ($newResource->image) {
            $imageName = time() . '.' . $newResource->image->extension();
            $newResource->image->move(public_path('images/mining_resources'), $imageName);
        }

        $miningResource->image = isset($imageName) ? 'images/mining_resources/' . $imageName : null;

        foreach ($newResource->title as $locale => $value) {
            $miningResource->translateOrNew($locale)->title = $value;
        }

        foreach ($newResource->description as $locale => $value) {
            $miningResource->translateOrNew($locale)->description = $value;
        }

        $miningResource->save();

        return $miningResource;

    }

    public function update($updatedResource, $miningResouce)
    {

        if ($updatedResource->image) {
            $imageName = time() . '.' . $updatedResource->image->extension();
            $updatedResource->image->move(public_path('images/mining_resources'), $imageName);
            $miningResouce->image = 'images/mining_resources/' . $imageName;
        }

        foreach ($updatedResource->title as $locale => $value) {
            $miningResouce->translateOrNew($locale)->title = $value;
        }

        foreach ($updatedResource->description as $locale => $value) {
            $miningResouce->translateOrNew($locale)->description = $value;
        }

        $miningResouce->save();
        return $miningResouce;

    }
    public function destroy($id)
    {
        $resource = $this->find($id);
        if ($resource->delete()) {
            $resource->deleteImage();
        }
    }


}
