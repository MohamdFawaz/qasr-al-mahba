<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningProcessImage extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name'];

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
