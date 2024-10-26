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
        Schema::create('appointment_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id');
            $table->foreignId('doctor_id')->constrained();
            $table->string('patient_name');
            $table->string('email', 100)->nullable();
            $table->string('contact_no', 100);
            $table->string('gender')->nullable();
            $table->string('age');
            $table->integer('blood_id')->nullable();
            $table->date('app_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_requests');
    }
};
