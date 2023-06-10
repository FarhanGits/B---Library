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
        Schema::create('df_bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judulBuku');
            $table->string('namaPengarang');
            $table->longText('keteranganBuku');
            $table->integer('tahunTerbit');
            $table->string('genre');
            $table->string('images');
            $table->enum('status', ['Available', 'Not Available'])->default('Available');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('df_bukus');
    }
};
