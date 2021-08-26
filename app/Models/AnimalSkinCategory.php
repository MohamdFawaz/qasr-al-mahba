<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalSkinCategory extends Model
{
    use HasFactory, Translatable;

    protected $fillable = ['image'];

    public $translatedAttributes = ['name','title', 'description'];

    /**
     * Get all of the process's products.
     */
    public function products()
    {
        return $this->morphMany(Product::class, 'productable');
    }

    public function getImageAttribute($image)
    {
        return asset($image);
    }

    public function images()
    {
        return $this->hasMany(AnimalSkinCategoryImage::class,'animal_skin_category_id');
    }

    public function deleteImage()
    {
        if(\File::exists($this->getRawOriginal('image'))) {
            \File::delete($this->getRawOriginal('image'));
        }
    }
}
