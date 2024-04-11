<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservations;

class ReservationsController extends Controller
{
    

    public function reserveTable(Request $request){

        $validatedData = $request->validate([

            'customer_name' => 'required|string',
            'customer_phone' => 'required|string',
            'day' => 'required|string',
            'table_number' => 'required|string',
          

        ]);
        
        $reservation = new reservations();

        $reservation->customer_name = $validatedData['customer_name'];
        $reservation->customer_phone = $validatedData['customer_phone'];
        $reservation->day = $validatedData['day'];
        $reservation->table_number = $validatedData['table_number'];
       


        $reservation->save();

        return response()->json(['success' => true, 'reservation' => $reservation]);


    }
}
