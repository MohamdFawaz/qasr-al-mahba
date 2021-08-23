<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Translatable;

    protected $fillable = ['price', 'image','brand_name','brand_link','delivery_fees','animal_skin_category_id'];

    public $translatedAttributes = ['name','title', 'description'];


    public function getImageAttribute($image)
    {
        return asset($image);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class,'product_id');
    }

}
