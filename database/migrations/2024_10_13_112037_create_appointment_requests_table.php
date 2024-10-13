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
            $table->string('name')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('gender')->nullable();
            $table->integer('blood_id')->nullable();
            $table->text('details')->nullable()->default('text');
            $table->date('appdate')->nullable();
            $table->integer('status')->default(0)->comment('0 inactive,1 active');
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
