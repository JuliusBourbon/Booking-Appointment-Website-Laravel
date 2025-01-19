<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Migration for RoomType Table
    public function up()
    {
        Schema::create('roomtypes', function (Blueprint $table) {
            $table->id('roomtypeid');
            $table->string('typename');
            $table->text('desc');
            $table->text('size');
            $table->string('img');
            $table->decimal('price', 15, 2);
            $table->integer('stock');
            $table->string('bed');
            $table->string('smoking');
            $table->string('person');
            $table->string('bathroom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomtypes');
    }
};
