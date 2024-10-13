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
        Schema::create('prescription_medis', function (Blueprint $table) {
            $table->id();
            $table->integer('prescription_id');
            $table->string('medi_name')->nullable();
            $table->string('type')->nullable();
            $table->string('dose')->nullable();
            $table->text('note')->nullable();
            $table->string('duration')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescription_medis');
    }
};
