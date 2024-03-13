<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $primaryKey = 'food_id';
 

    public function orders()
    {
        return $this->hasMany(orders::class, 'food_name', 'food_name');
    }

    protected $fillable = [

       'food_name',
       'price'

    ];

    protected $hidden = [
        'food_id',
        'created_at',
        'updated_at',
    ];
}
