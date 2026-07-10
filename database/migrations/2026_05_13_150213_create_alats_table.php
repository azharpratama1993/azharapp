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
        Schema::create('alats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat', 100);
            $table->year('tahun_pembelian');
            $table->string('merek', 60);
            $table->string('tipe', 60);
            $table->string('no_seri', 60);
            $table->enum('kondisi_alat', ['Baik', 'Tidak Baik']);
            $table->string('lokasi', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alats');
    }
};
