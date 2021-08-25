<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningProcess extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['name','title', 'description'];

    public function getImageAttribute($image)
    {
        return asset($image);
    }

    public function getCoverImageAttribute($image)
    {
        return asset($image);
    }

    public function deleteImage()
    {
        if(\File::exists($this->getRawOriginal('image'))) {
            \File::delete($this->getRawOriginal('image'));
        }
    }

    public function deleteCover()
    {
        if(\File::exists($this->getRawOriginal('cover_image'))) {
            \File::delete($this->getRawOriginal('cover_image'));
        }
    }
    public function images()
    {
        return $this->hasMany(MiningProcessImage::class,'mining_process_id');
    }
}
