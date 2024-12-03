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
            $table->integer('doctor_id');
            $table->string('patient_name');
            $table->string('email', 100)->nullable();
            $table->string('patient_contact', 100);
            $table->string('gender')->nullable();
            $table->string('age');
            $table->integer('blood_id')->nullable();
            $table->date('app_date')->nullable();
            $table->integer('status')->default(1)->comment('0 expired,1 pending, 2 approved');
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
