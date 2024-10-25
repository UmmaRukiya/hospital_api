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
        Schema::create('patient_admits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('husband_name')->nullable();
            $table->string('marital_status')->nullable();
            $table->foreignId('doctor_id')->constrained();
            $table->text('problem')->nullable()->default('text');
            $table->date('admit_date')->nullable();
            $table->date('release_date')->nullable();
            $table->integer('room_id')->nullable();
            $table->string('guardian')->nullable();
            $table->string('relation')->nullable();
            $table->string('condition')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_admits');
    }
};
