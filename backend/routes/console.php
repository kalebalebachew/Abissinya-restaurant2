<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\reservations;
use App\Models\orders;
use App\Models\History;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());

})->purpose('Display an inspiring quote');


Artisan::command('move-expired', function(){


    $expiredReservations = reservations::whereDate('day', '<', now()->toDateString())->get();

    foreach ($expiredReservations as $reservation) {
        History::create($reservation->toArray());
        $reservation->delete();
    }

    $expiredOrders = orders::whereDate('created_at', '<', now()->toDateString())->get();

    foreach ($expiredOrders as $order) {
        History::create($order->toArray());
        $order->delete();
    }

    $this->info('Expired reservations and orders moved to history successfully.');
})->daily();