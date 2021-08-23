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
        $product->price = $newProduct->price;
        $product->brand_name = $newProduct->brand_name;
        $product->brand_link = $newProduct->brand_link;
        $product->delivery_fees = $newProduct->delivery_fees;

        $product->image = isset($imageName) ? 'images/product/' . $imageName : null;

        foreach ($newProduct->name as $locale => $value) {
            $product->translateOrNew($locale)->name = $value;
        }

        foreach ($newProduct->title as $locale => $value) {
            $product->translateOrNew($locale)->title = $value;
        }

        foreach ($newProduct->description as $locale => $value) {
            $product->translateOrNew($locale)->description = $value;
        }

        $product->save();
        if ($newProduct->product_images) {
            $productImages = [];
            foreach ($newProduct->product_images as $image) {
                if (is_file($image)) {
                    $imageName = time() . random_int(0, 1000) . '.' . $image->extension();
                    $image->move(public_path('images/product'), $imageName);
                    $productImages[] = [
                        'product_id' => $product->id,
                        'image' => 'images/product/' . $imageName
                    ];
                }
            }

            if (count($productImages))
                $product->images()->insert($productImages);

        }
        return $product;

    }

    public function update($newProduct, $id)
    {
        $product = $this->model::query()->find($id);


        if ($newProduct->image) {
            $imageName = time() . '.' . $newProduct->image->extension();
            $newProduct->image->move(public_path('images/product'), $imageName);
            $product->image = 'images/product/' . $imageName;
            $product->deleteImage();
        }


        $product->animal_skin_category_id = $newProduct->animal_skin_category_id;
        $product->price = $newProduct->price;
        $product->brand_name = $newProduct->brand_name;
        $product->brand_link = $newProduct->brand_link;
        $product->delivery_fees = $newProduct->delivery_fees;

        foreach ($newProduct->title as $locale => $value) {
            $product->translateOrNew($locale)->title = $value;
        }

        foreach ($newProduct->name as $locale => $value) {
            $product->translateOrNew($locale)->name = $value;
        }

        foreach ($newProduct->description as $locale => $value) {
            $product->translateOrNew($locale)->description = $value;
        }

        $product->save();

        if ($newProduct->product_images) {

            foreach ($newProduct->product_images as $image) {
                if (is_file($image)) {
                    $imageName = time() . random_int(0, 1000) . '.' . $image->extension();
                    $image->move(public_path('images/product'), $imageName);
                    $productImages[] = [
                        'product_id' => $product->id,
                        'image' => 'images/product/' . $imageName
                    ];
                }
            }

            if (count($productImages))
                $product->images()->insert($productImages);
        }

        return $product;
    }

}
