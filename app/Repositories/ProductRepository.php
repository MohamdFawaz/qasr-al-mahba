<?php

namespace App\Repositories;


use App\Models\Product;

class ProductRepository extends Repository
{
    protected $model;

    /**
     * ProductRepository constructor.
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function store($newProduct)
    {
        /** @var Product $product */
        $product = new $this->model;

        if ($newProduct->image) {
            $imageName = time() . '.' . $newProduct->image->extension();
            $newProduct->image->move(public_path('images/product'), $imageName);
        }

        $product->animal_skin_category_id = $newProduct->animal_skin_category_id;
        $product->link = $newProduct->link;

        $product->image = isset($imageName) ? 'images/product/' . $imageName : null;

        foreach ($newProduct->name as $locale => $value) {
            $product->translateOrNew($locale)->name = $value;
        }


        $product->save();
        return $product;

    }

    public function update($newProduct, $id)
    {

        /** @var Product $newProduct */
        /** @var Product $product */
        $product = $this->model::query()->find($id);


        if ($newProduct->image) {
            $imageName = time() . '.' . $newProduct->image->extension();
            $newProduct->image->move(public_path('images/product'), $imageName);
            $product->image = 'images/product/' . $imageName;
            $product->deleteImage();
        }

        $product->animal_skin_category_id = $newProduct->animal_skin_category_id;
        $product->link = $newProduct->link;

        foreach ($newProduct->name as $locale => $value) {
            $product->translateOrNew($locale)->name = $value;
        }

        $product->save();

        return $product;
    }

}
