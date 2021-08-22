<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningResource extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'description'];

    public function getImageAttribute($image)
    {
        return asset($image);
    }

}
