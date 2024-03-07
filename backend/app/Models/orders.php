<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    public function menu()
    {
        return $this->belongsTo(menu::class, 'food_name', 'food_name');
    }

    protected $fillable = [


    ];
}
