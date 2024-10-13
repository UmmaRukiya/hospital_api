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
        Schema::create('patient_test_details', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_test_id')->nullable();
            $table->integer('inv_list_id')->nullable();
            $table->decimal('amount',8,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_test_details');
    }
};
