<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name');
            $table->string('role_identity');
            $table->timestamps();
        });

        DB::table('roles')->insert([
            ['role_name' => 'Super Admin',
            'role_identity' => 'superadmin',
            'created_at' => Carbon::now(),
        ],[
            'role_name' => 'Doctor',
            'role_identity' => 'doctor',
            'created_at' => Carbon::now(),
        ],[
            'role_name' => 'Receptionist',
            'role_identity' => 'receptionist',
            'created_at' => Carbon::now(),
        ],[
            'role_name' => 'Accountant',
            'role_identity' => 'accountant',
            'created_at' => Carbon::now(),
        ]]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
