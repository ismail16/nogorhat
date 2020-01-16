<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function order_detail()
    {
        return $this->hasOne(Order_detail::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
