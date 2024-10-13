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
            $table->integer('patient_id');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('husband_name')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('doctor_ref')->nullable();
            $table->text('problem')->nullable()->default('text');
            $table->date('admit_date')->nullable();
            $table->date('release_date')->nullable();
            $table->integer('room_id')->nullable();
            $table->string('guardian')->nullable();
            $table->string('relation')->nullable();
            $table->string('condition')->nullable();
            $table->integer('status')->default(0)->comment('0 inactive,1 active');
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
