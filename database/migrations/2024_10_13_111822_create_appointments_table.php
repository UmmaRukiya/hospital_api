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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->integer('paitent_id');
            $table->string('patient_contact');
            $table->foreignId('doctor_id')->constrained();
            $table->foreignId('department_id')->constrained();
            $table->date('app_date');
            $table->time('app_time')->nullable();
            $table->bigInteger('serial')->nullable();
            $table->text('problem')->nullable();
            $table->integer('status')->default(0)->comment('0 inactive,1 active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
