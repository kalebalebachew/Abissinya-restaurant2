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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('day');
            $table->string('name');
            $table->string('phone_number');
            $table->integer('quantity');
            $table->unsignedBigInteger('food_id'); 
            $table->foreign('food_id')->references('food_id')->on('menus'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['food_id']); 
        });
        Schema::dropIfExists('orders');
    }
};
