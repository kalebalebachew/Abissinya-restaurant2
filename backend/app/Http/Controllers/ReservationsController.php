<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservations;

class ReservationsController extends Controller
{
    

    public function reserveTable(Request $request)
    {
     
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:10',
            'table_number' => 'required|integer',
            'time' => 'required',
            'day' => 'required',
        ]);
    
      
        $reservation = new reservations();
        $reservation->customer_name = $validatedData['customer_name'];
        $reservation->customer_phone = $validatedData['customer_phone'];
        $reservation->table_number = $validatedData['table_number'];
        $reservation->time = $validatedData['time'];
        $reservation->day = $validatedData['day'];
    
      
        $reservation->save();
    
      
        return redirect('/')->with('message', 'Reservation successfully booked!');
    }
    
}
