<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('histories', function (Blueprint $table) {
            
        
            //reservations
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->date('reservation_date');
            $table->integer('table_number');
        
            //orders
            $table->date('order_date');
            $table->string('customer_username'); 
            $table->string('customer_phonenumber'); 
            $table->integer('quantity');
            $table->string('food_name');
            $table->unsignedBigInteger('food_id'); 
            
        
            
        });
        
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
