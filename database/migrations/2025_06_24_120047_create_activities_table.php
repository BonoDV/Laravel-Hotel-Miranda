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
        Schema::create('activities', function (Blueprint $table) {
            $table->enum('type', ['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon']);
            $table->foreignId('user_id')->constrained('users');
            $table->dateTime('date_time');
            $table->timestamps(precision: 0);
            $table->boolean('paid')->default(true);
            $table->string('notes');
            $table->unsignedTinyInteger('satisfaction')->nullable()->default(null);

            $table->primary(['user_id', 'date_time']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
