<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class HomeController extends Controller
{

    public function showMenu(Request $request)
    {
        $menu = Menu::all();

        
   

        return view('home', compact('menu'));
    }

    public function addToCart(Request $request)

    {
        $menu = Menu::all();
        $cart = session('cart');

        $cart [] = [

            'food_name' => $menu->food_name,
            'price' => $menu->price,
            


        ];
    }
}
