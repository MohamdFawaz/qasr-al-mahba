<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalSkinCategoryImage extends Model
{
    use HasFactory;

    protected $fillable = ['image'];

    public function getImageAttribute($image)
    {
        return asset($image);
    }
}
