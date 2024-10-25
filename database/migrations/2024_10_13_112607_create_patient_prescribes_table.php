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
        Schema::create('patient_prescribes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->string('cc')->nullable();
            $table->integer('inv_list_id')->nullable();
            $table->text('advice')->nullable()->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_prescribes');
    }
};
