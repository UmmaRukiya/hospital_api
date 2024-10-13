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
        Schema::create('deaths', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->date('death_date')->nullable();
            $table->text('description')->nullable()->default('text');
            $table->string('doc_ref')->nullable();
            $table->integer('status')->default(0)->comment('0 inactive,1 active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deaths');
    }
};
