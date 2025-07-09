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
        Schema::create('bookings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('image')->nullable();
            $table->date('order_date');
            $table->date('check_in');
            $table->date('check_out');
            $table->boolean('special_request_status')->default(false);
            $table->text('special_request_text')->nullable();
            $table->string('room_type');
            $table->string('status');
            $table->string('phone');
            $table->string('email');
            $table->integer('room_number');

            $table->foreign('room_number')->references('room_number')->on('rooms');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};