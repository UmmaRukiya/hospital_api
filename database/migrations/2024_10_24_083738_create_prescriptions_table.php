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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained();
            $table->foreignId('patient_id')->constrained();
            $table->string('age');
            $table->string('temp')->nullable();
            $table->string('weight')->nullable();
            $table->string('bp')->nullable();
            $table->string('cc')->nullable();
            $table->string('inv')->nullable();
            $table->string('mh')->nullable();
            $table->string('de')->nullable();
            $table->string('advice')->nullable();
            $table->date('follow_up')->nullable();
            $table->date('issue_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
