<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->hasMany(orders::class, 'food_name', 'food_name');
    }

    protected $fillable = [

        'food_id',
        'food_name',
        'price',

    ];
}
