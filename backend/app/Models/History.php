<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'reservation_date',
        'table_number',
        'order_date',
        'order_name',
        'order_phone_number',
        'order_quantity',
        'food_name',
        'food_id',
        
    ];
}
