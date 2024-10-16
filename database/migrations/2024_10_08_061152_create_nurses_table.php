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
        Schema::create('nurses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id');
            $table->string('name_en');
            $table->string('name_bn')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_no_en');
            $table->string('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->bigInteger('blood_id')->nullable();
            $table->string('image')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->bigInteger('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nurses');
    }
};
