<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Migration for Payment Table
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id('paymentid');
            $table->unsignedBigInteger('bookid');
            $table->timestamp('paymentdate')->useCurrent();
            $table->enum('paymentmethod', ['creditCard', 'bankTransfer']);
            $table->decimal('amount', 8, 2);

            $table->foreign('bookid')->references('bookingid')->on('booking');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
