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
        Schema::create('rooms', function (Blueprint $table) {
            $table->integer('room_number')->unique()->primary();
            $table->string('room_type')->nullable();
            $table->string('bed_type')->nullable();
            $table->string('room_floor')->nullable();
            $table->json('photos')->nullable();
            $table->text('description')->nullable();
            $table->enum('offer', ['YES', 'NO'])->default('NO');
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('discount', 8, 2)->nullable();
            $table->string('cancellation')->nullable();
            $table->json('amenities')->nullable();
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