<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Migration for Room Table
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('roomid');
            $table->string('roomnumber')->unique();
            // Menggunakan 'roomtype_id' agar mengikuti konvensi Laravel
            $table->unsignedBigInteger('roomtypeid');
            $table->foreign('roomtypeid')->references('roomtypeid')->on('roomtypes')->onDelete('cascade');

            $table->enum('status', ['available', 'booked'])->default('available');
            $table->timestamps();
        });        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
