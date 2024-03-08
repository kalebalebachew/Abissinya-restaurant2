<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\menu;
use App\Models\orders;
use App\Models\reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    //Admin Login
   
   
    public function adminLogin(Request $request)
    {
        $fields = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $admin = Admin::where('username', $fields['username'])->first();
    
        if (!$admin || $fields['password'] !== $admin->password) {
            return response()->json(['error' => 'Invalid username or password'], 401);
        }
    
        $token = $admin->createToken('kalebtoken')->plainTextToken;
    
        $response = [
            'admin' => $admin,
            'token' => $token,
        ];
    
        return response()->json($response, 200);
    }
    
    // display all the datas for the admin
    public function index(Request $request){
        $menu = menu::all();
        $orders = orders::all();
        $reservations = reservations::all();
    
        
        $data = [
            'menu' => $menu,
            'orders' => $orders,
            'reservations' => $reservations
        ];
    
        
        return response()->json($data);

    }

    // add a new item in the menu
    public function addMenuItem(Request $request)
{
    $fields = $request->validate([
        'food_name' => 'required',
        'price' => 'required',
    ]);

    $menu = new Menu();

    $menu->food_name = $fields['food_name'];
    $menu->price = $fields['price'];

    $menu->save();

    // Return the saved menu item in the response
    return response()->json([
        'food_name' => $menu->food_name,
        'price' => $menu->price,
    ], 200);
}
public function updateMenuItem(Request $request)
{
    $fields = $request->validate([
        'food_name' => 'required',
        'price' => 'required',
    ]);

    $menu = new Menu();

    $menu->food_name = $fields['food_name'];
    $menu->price = $fields['price'];

    $menu->save();

    // Return the saved menu item in the response
    return response()->json([
        'food_name' => $menu->food_name,
        'price' => $menu->price,
    ], 200);
   
}


    public function deleteMenuItem(Request $request, string $id){


            
        
    }
}
