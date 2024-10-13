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
            $table->integer('patient_id');
            $table->integer('employ_id');
            $table->date('app_date');
            $table->bigInteger('serial')->nullable();
            $table->text('problem')->nullable();
            $table->string('approve')->nullable();
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
