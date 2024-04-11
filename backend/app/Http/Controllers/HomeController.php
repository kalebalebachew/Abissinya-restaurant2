<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class HomeController extends Controller
{
    
    public function showMenu(Request $request)
    {
        $menu = Menu::all(); 
    
       
        $formattedMenu = [];
        foreach ($menu as $menuItem) {
            $formattedMenu[] = [
               
                'food_name' => $menuItem->food_name,
                'price' => $menuItem->price, 
            ];
        }
    
        return view('welcome', compact('formattedMenu')); 
    }

        public function addToCart(Request $request)

         {



      
    }

}
