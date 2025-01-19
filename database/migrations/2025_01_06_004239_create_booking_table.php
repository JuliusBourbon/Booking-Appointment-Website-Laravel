<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Migration for Booking Table
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('address')->nullable();
            $table->unsignedBigInteger('roomid');
            $table->foreign('roomid')->references('roomid')->on('rooms')->onDelete('cascade');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('payment_method');
            $table->decimal('Total_Price');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
