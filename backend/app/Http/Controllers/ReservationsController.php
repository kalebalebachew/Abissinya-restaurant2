<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservations;

class ReservationsController extends Controller
{
    

    public function reserveTable(Request $request){

        $validatedData = $request->validate([

            'customer_name' => 'required',
            'customer_phone' => 'required',
            'day' => 'required',
          

        ]);
        
        $reservation = new reservations();

        $reservation->customer_name = $validatedData['customer_name'];
        $reservation->customer_phone = $validatedData['customer_phone'];
        $reservation->day = $validatedData['day'];
       


        $reservation->save();

        return response()->json(['success' => true, 'reservation' => $reservation]);


    }
}
