<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Translatable;

    protected $fillable = ['image'];

    public $translatedAttributes = ['name'];

    /**
     * Get all of the AnimalSkinCategory that are assigned this product.
     */
    public function animalSkinCategories()
    {
        return $this->morphedByMany(AnimalSkinCategory::class, 'productable');
    }

    /**
     * Get all of the MiningProcess that are assigned this product.
     */
    public function miningProcesses()
    {
        return $this->morphedByMany(MiningProcess::class, 'productable');
    }

    public function getImageAttribute($image)
    {
        return asset($image);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class,'product_id');
    }
    public function deleteImage()
    {
        if(\File::exists($this->getRawOriginal('image'))) {
            \File::delete($this->getRawOriginal('image'));
        }
    }

}
