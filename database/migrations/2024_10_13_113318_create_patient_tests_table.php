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
        Schema::create('patient_tests', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->integer('admit_id')->nullable();
            $table->date('test_date')->nullable();
            $table->decimal('sub_price',6,2)->nullable();
            $table->decimal('vat',6,2)->comment('in %');
            $table->decimal('discount',6,2)->nullable();
            $table->decimal('total_amount',8,2)->nullable();
            $table->decimal('paid',8,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_tests');
    }
};
