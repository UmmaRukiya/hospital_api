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
        Schema::create('room_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('room_cat_id')->nullable();
            $table->integer('room_no')->nullable();
            $table->integer('floor_no')->nullable();
            $table->text('description')->nullable()->default('text');
            $table->integer('status')->default(0)->comment('0 Unavailable,1 Available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_lists');
    }
};
