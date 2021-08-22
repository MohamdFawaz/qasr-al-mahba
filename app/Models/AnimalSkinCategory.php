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

    public function getImageAttribute($image)
    {
        return asset($image);
    }

    public function deleteImage()
    {
        if(\File::exists($this->getRawOriginal('image'))) {
            \File::delete($this->getRawOriginal('image'));
        }
    }
}
