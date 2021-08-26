<?php

namespace App\Repositories;


use App\Models\AnimalSkinCategory;
use App\Models\MiningProcess;
use App\Models\Product;
use App\Models\Productable;

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

        $product->link = $newProduct->link;

        $product->image = isset($imageName) ? 'images/product/' . $imageName : null;

        foreach ($newProduct->name as $locale => $value) {
            $product->translateOrNew($locale)->name = $value;
        }


        $product->save();
        if ($newProduct->type == 'mining_process') {
            Productable::query()->create([
                'product_id' => $product->id,
                'productable_type' => MiningProcess::class,
                'productable_id' => $newProduct->productable_id
            ]);
        }else{
            Productable::query()->create([
                'product_id' => $product->id,
                'productable_type' => AnimalSkinCategory::class,
                'productable_id' => $newProduct->productable_id
            ]);
        }
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

        $product->link = $newProduct->link;

        foreach ($newProduct->name as $locale => $value) {
            $product->translateOrNew($locale)->name = $value;
        }

        $product->save();
        //todo only update in case of change
        $this->flushProductableById($id);
        if ($newProduct->type == 'mining_process') {
            Productable::query()->create([
                'product_id' => $product->id,
                'productable_type' => MiningProcess::class,
                'productable_id' => $newProduct->productable_id
            ]);
        }else{
            Productable::query()->create([
                'product_id' => $product->id,
                'productable_type' => AnimalSkinCategory::class,
                'productable_id' => $newProduct->productable_id
            ]);
        }
        return $product;
    }

    private function flushProductableById($id)
    {
        Productable::query()->where('product_id',$id)->delete();
    }
}
