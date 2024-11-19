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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('room_id');
            $table->foreignId('client_id');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('date_in');
            $table->integer('date_out');
            $table->decimal('total_price', total: 6, places: 2); // 9999.99
            $table->string('status');
            $table->string('payment_method');
            $table->integer('number_of_guests');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
