<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Translatable;

    protected $fillable = ['image','animal_skin_category_id'];

    public $translatedAttributes = ['name'];



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
