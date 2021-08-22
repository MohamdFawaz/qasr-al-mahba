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


}
