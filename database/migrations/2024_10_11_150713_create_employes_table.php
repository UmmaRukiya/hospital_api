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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id');
            $table->string('name_en');
            $table->string('email')->nullable();
            $table->bigInteger('contact_no_en');
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->binary('image')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->bigInteger('blood_id')->nullable();
            $table->bigInteger('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
