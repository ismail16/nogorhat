<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
