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
        Schema::create('jadwal_mahasiswa', function (Blueprint $table) {
            $table->string('npm');
            $table->unsignedBigInteger('id_prodi');
            $table->unsignedBigInteger('id_matakuliah');
            $table->string('ruangan');
            $table->time('jam');
            $table->string('dosen');

            $table->foreign('npm')->references('npm')->on('mahasiswa');
            $table->foreign('id_prodi')->references('id')->on('prodi');
            $table->foreign('id_matakuliah')->references('id')->on('matakuliah');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_mahasiswa');
    }
};
