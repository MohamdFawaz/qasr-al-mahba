<?php

namespace App\Repositories;


use App\Models\AnimalSkinCategory;

class AnimalSkinCategoryRepository extends Repository
{
    protected $model;

    /**
     * AnimalSkinCategoryRepository constructor.
     * @param AnimalSkinCategory $model
     */
    public function __construct(AnimalSkinCategory $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function store($newCategory)
    {
        $miningResource = new $this->model;

        if ($newCategory->image) {
            $imageName = time() . '.' . $newCategory->image->extension();
            $newCategory->image->move(public_path('images/animal_skin_category'), $imageName);
        }

        $miningResource->image = isset($imageName) ? 'images/animal_skin_category/' . $imageName : null;

        foreach ($newCategory->name as $locale => $value) {
            $miningResource->translateOrNew($locale)->name = $value;
        }

        foreach ($newCategory->title as $locale => $value) {
            $miningResource->translateOrNew($locale)->title = $value;
        }

        foreach ($newCategory->description as $locale => $value) {
            $miningResource->translateOrNew($locale)->description = $value;
        }

        $miningResource->save();

        return $miningResource;

    }

    public function update($newCategory, $id)
    {
        $category = $this->model::query()->find($id);

        $imageName = '';

        if ($newCategory->image) {
            $imageName = time() . '.' . $newCategory->image->extension();
            $newCategory->image->move(public_path('images/animal_skin_category'), $imageName);
            $category->deleteImage();
        }

        $category->image = 'images/animal_skin_category/' . $imageName;

        foreach ($newCategory->title as $locale => $value) {
            $category->translateOrNew($locale)->title = $value;
        }

        foreach ($newCategory->name as $locale => $value) {
            $category->translateOrNew($locale)->name = $value;
        }

        foreach ($newCategory->description as $locale => $value) {
            $category->translateOrNew($locale)->description = $value;
        }

        $category->save();
        return $category;
    }


    public function destroy($id)
    {
        $category = $this->find($id);
        if ($category->delete()) {
            $category->deleteImage();
        }
    }


}
