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
            $table->foreignId('patient_id')->constrained();
            $table->decimal('sub_amount',10,2)->nullable();
            $table->decimal('discount',10,2)->nullable();
            $table->decimal('tax',10,2)->comment('in %');
            $table->decimal('total_amount',10,2)->nullable();
            $table->decimal('grand_total',10,2);
            $table->decimal('due',10,2)->nullable();
            $table->decimal('pay',10,2)->nullable();
            $table->date('bill_date')->nullable();
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
