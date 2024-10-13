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
        Schema::create('invest_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('inv_cat_id')->nullable();
            $table->string('invset_name');
            $table->text('description')->nullable()->default('text');
            $table->decimal('price',6,2)->nullable();
            $table->integer('status')->default(0)->comment('0 inactive,1 active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invest_lists');
    }
};
