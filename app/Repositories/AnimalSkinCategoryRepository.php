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
        /** @var AnimalSkinCategory $category */
        $category = new $this->model;

        if ($newCategory->image) {
            $imageName = time() . '.' . $newCategory->image->extension();
            $newCategory->image->move(public_path('images/animal_skin_category'), $imageName);
        }


        $category->image = isset($imageName) ? 'images/animal_skin_category/' . $imageName : null;

        foreach ($newCategory->name as $locale => $value) {
            $category->translateOrNew($locale)->name = $value;
        }

        foreach ($newCategory->title as $locale => $value) {
            $category->translateOrNew($locale)->title = $value;
        }

        foreach ($newCategory->description as $locale => $value) {
            $category->translateOrNew($locale)->description = $value;
        }

        $category->save();
        if ($newCategory->category_images) {
            $categoryImages = [];
            foreach ($newCategory->category_images as $image) {
                if (is_file($image)) {
                    $imageName = time() . random_int(0, 1000) . '.' . $image->extension();
                    $image->move(public_path('images/animal_skin_category'), $imageName);
                    $categoryImages[] = [
                        'animal_skin_category_id' => $category->id,
                        'image' => 'images/animal_skin_category/' . $imageName
                    ];
                }
            }

            if (count($categoryImages))
                $category->images()->insert($categoryImages);
        }
        return $category;

    }

    public function update($updatedCategory, $id)
    {
        $category = $this->model::query()->find($id);


        if ($updatedCategory->image) {
            $imageName = time() . '.' . $updatedCategory->image->extension();
            $updatedCategory->image->move(public_path('images/animal_skin_category'), $imageName);
            $category->image = 'images/animal_skin_category/' . $imageName;
            $category->deleteImage();
        }


        foreach ($updatedCategory->title as $locale => $value) {
            $category->translateOrNew($locale)->title = $value;
        }

        foreach ($updatedCategory->name as $locale => $value) {
            $category->translateOrNew($locale)->name = $value;
        }

        foreach ($updatedCategory->description as $locale => $value) {
            $category->translateOrNew($locale)->description = $value;
        }

        $category->save();
        if ($updatedCategory->category_images) {
            $categoryImages = [];
            foreach ($updatedCategory->category_images as $image) {
                if (is_file($image)) {
                    $imageName = time() . random_int(0, 1000) . '.' . $image->extension();
                    $image->move(public_path('images/animal_skin_category'), $imageName);
                    $categoryImages[] = [
                        'animal_skin_category_id' => $category->id,
                        'image' => 'images/animal_skin_category/' . $imageName
                    ];
                }
            }

            if (count($categoryImages))
                $category->images()->insert($categoryImages);
        }

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
