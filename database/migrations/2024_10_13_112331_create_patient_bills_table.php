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
        Schema::create('patient_bills', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->decimal('sub_amount',10,2)->nullable();
            $table->decimal('discount',10,2)->nullable();
            $table->decimal('tax',10,2)->nullable();
            $table->decimal('total_amount',10,2)->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_bills');
    }
};
