<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function product_image()
    {
        return $this->hasMany(ProductImage::class);
    }
}
