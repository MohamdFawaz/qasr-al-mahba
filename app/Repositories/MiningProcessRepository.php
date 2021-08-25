<?php

namespace App\Repositories;


use App\Models\MiningProcess;

class MiningProcessRepository extends Repository
{
    protected $model;

    /**
     * MiningProcessRepository constructor.
     * @param MiningProcess $model
     */
    public function __construct(MiningProcess $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function store($newProcess)
    {
        $miningProcess = new $this->model;

        if ($newProcess->image) {
            $imageName = time() . '.' . $newProcess->image->extension();
            $newProcess->image->move(public_path('images/mining_process'), $imageName);
        }

        if ($newProcess->cover_image) {
            $coverImageName = time() . '.' . $newProcess->cover_image->extension();
            $newProcess->cover_image->move(public_path('images/mining_process/cover'), $coverImageName);
        }

        $miningProcess->image = isset($imageName) ? 'images/mining_process/' . $imageName : null;
        $miningProcess->cover_image = isset($coverImageName) ? 'images/mining_process/cover/' . $coverImageName : null;

        foreach ($newProcess->name as $locale => $value) {
            $miningProcess->translateOrNew($locale)->name = $value;
        }

        foreach ($newProcess->title as $locale => $value) {
            $miningProcess->translateOrNew($locale)->title = $value;
        }

        foreach ($newProcess->description as $locale => $value) {
            $miningProcess->translateOrNew($locale)->description = $value;
        }

        $miningProcess->save();


        $processImages = [];
        if ($newProcess->images) {
            foreach ($newProcess->images as $key => $image) {
                if (is_file($image)) {
                    $imageName = time() . random_int(0, 1000) . '.' . $image->extension();
                    $image->move(public_path('images/mining_process'), $imageName);
                    $processImages[] = [
                        'mining_process_id' => $miningProcess->id,
                        'name' => $newProcess->names[$key],
                        'image' => 'images/mining_process/' . $imageName
                    ];
                }
            }
        }

            if (count($processImages))
                $miningProcess->images()->insert($processImages);

        return $miningProcess;

    }

    public function update($updatedProcess, $miningProcess)
    {

        if ($updatedProcess->image) {
            $imageName = time() . '.' . $updatedProcess->image->extension();
            $updatedProcess->image->move(public_path('images/mining_process'), $imageName);
            $miningProcess->image = 'images/mining_process/' . $imageName;
        }

        if ($updatedProcess->cover_image) {
            $coverImageName = time() . '.' . $updatedProcess->cover_image->extension();
            $updatedProcess->cover_image->move(public_path('images/mining_process'), $coverImageName);
            $miningProcess->cover_image = 'images/mining_process/' . $coverImageName;
        }

        foreach ($updatedProcess->name as $locale => $value) {
            $miningProcess->translateOrNew($locale)->name = $value;
        }

        foreach ($updatedProcess->title as $locale => $value) {
            $miningProcess->translateOrNew($locale)->title = $value;
        }

        foreach ($updatedProcess->description as $locale => $value) {
            $miningProcess->translateOrNew($locale)->description = $value;
        }

        $miningProcess->save();
        $processImages = [];
        if ($updatedProcess->images) {
            foreach ($updatedProcess->images as $key => $image) {
                if (is_file($image)) {
                    $imageName = time() . random_int(0, 1000) . '.' . $image->extension();
                    $image->move(public_path('images/mining_process'), $imageName);
                    $processImages[] = [
                        'mining_process_id' => $miningProcess->id,
                        'name' => $updatedProcess->names[$key],
                        'image' => 'images/mining_process/' . $imageName
                    ];
                }
            }
        }

        if (count($processImages))
            $miningProcess->images()->insert($processImages);

        return $miningProcess;

    }
    public function destroy($id)
    {
        $process = $this->find($id);
        if ($process->delete()) {
            $process->deleteImage();
        }
    }


}
