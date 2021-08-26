<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productable extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','productable_type','productable_id'];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
