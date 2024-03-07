<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\menu;

class OrdersController extends Controller
{
    public function placeOrder(Request $request)
    {
        
        $validatedData = $request->validate([
            'day' => 'required',
            'name' => 'required',
            'phone_number' => 'required',
            'quantity' => 'required',
            'food_name' => 'required',
        ]);

        // Retrieve the menu item based on the provided food name
        $menuItem = menu::where('food_name', $validatedData['food_name'])->first();

        if (!$menuItem) {
            return response()->json(['error' => 'Menu item not found'], 404);
        }

        // Create a new order record
        $order = new orders();
        $order->food_name = $validatedData['food_name'];
        $order->day = $validatedData['day'];
        $order->name = $validatedData['name'];
        $order->phone_number = $validatedData['phone_number'];
        $order->quantity = $validatedData['quantity'];
        $order->food_id = $menuItem->food_id; 

        $order->save();

        return response()->json(['success' => true, 'order' => $order]);
    }
}


