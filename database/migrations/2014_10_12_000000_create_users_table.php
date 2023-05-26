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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('namaAnggota');
            $table->bigInteger('NIK');
            $table->string('alamatPengguna');
            $table->string('noTelepon');
            // $table->string('fotoProfil');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('jenisKelamin', ['Pria', 'Wanita']);
            $table->enum('role', ['User', 'Admin']);
            $table->timestamp('email_verified_at')->nullable();
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
