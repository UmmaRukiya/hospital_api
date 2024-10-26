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
        Schema::create('invest_cats', function (Blueprint $table) {
            $table->id();
            $table->string('invest_cat_name')->nullable();
            $table->integer('status')->default(1)->comment('0 Unavailable,1 Available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invest_cats');
    }
};
