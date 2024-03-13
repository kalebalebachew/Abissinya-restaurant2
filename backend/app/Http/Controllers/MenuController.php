<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class MenuController extends Controller
{
   
    public function searchMenuItem($food_name)
{
    $foodName = strtolower(request()->input('food_name')); 
    $menus = menu::where('food_name', 'like', "%$foodName%")->get();

    return $menus;

   
}

    
}
