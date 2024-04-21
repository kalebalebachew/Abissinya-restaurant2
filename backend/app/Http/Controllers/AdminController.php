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

  


 
    public function showLogin (Request $request){


    return view('login');
        

    }

    // public function dashboard(){
        
    //     return view('dashboard');
    // }
    
    //Admin Login
    public function adminLogin(Request $request )
    {
        $fields = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $admin = Admin::where('username', $fields['username'])->first();
    
        if (!$admin || $fields['password'] !== $admin->password) {
            return response()->json(['error' => 'Invalid username or password'], 401);
        }
    
        $token = $admin->createToken('admin')->plainTextToken;
        $request->session()->put('token', $token);
      

      

       
        $menus = menu::all();
        
        $orders = orders::all();

        $reservations = reservations::all();


       
       
        
      
       return view('dashboard', compact('menus', 'orders', 'reservations'))->with('token',$token);
    }

    
  

    // add a new item in the menu
    public function addMenu(Request $request)
    {
      
      
        $fields = $request->validate([
            'food_name' => 'required',
            'price' => 'required',
        ]);
    
     
        $menu = new Menu();
    
       
        $menu->food_name = $fields['food_name'];
        $menu->price = $fields['price'];
    
       
        $menu->save();
    
      
    
       
        return redirect()->route('dashboard'); 
    }
    
    
public function updateMenuItem(Request $request, string $food_id)
{
    $menu = menu::find($food_id);
    $menu->update($request->all());
    return response()->json(['success' => 'food updated successfully', 
        'food_name' => $menu->food_name, 
        'price' => $menu->price,
]);
}
 
   



public function deleteMenuItem(string $food_id)
{
    $menu = menu::destroy($food_id);
    return response()->json(['success' => 'food deleted successfully']);
}


}
