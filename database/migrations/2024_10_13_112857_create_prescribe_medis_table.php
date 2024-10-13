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
        Schema::create('prescribe_medis', function (Blueprint $table) {
            $table->id();
            $table->integer('prescribe_id');
            $table->integer('medicine_cat_id');
            $table->string('medi_name');
            $table->string('dose')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescribe_medis');
    }
};
