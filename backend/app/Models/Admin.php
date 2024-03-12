<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;




class Admin extends Model
{
    use HasApiTokens, HasFactory;

    
  

    protected $fillable = [
        'username',
        'password',
    ];
  

    
    
   

  
}

