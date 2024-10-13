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
        Schema::create('patient_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->date('date')->nullable();
            $table->decimal('amount',10,2)->nullable();
            $table->integer('admit_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_payments');
    }
};
