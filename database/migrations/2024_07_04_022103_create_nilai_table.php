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
        Schema::create('nilai', function (Blueprint $table) {
            $table->string('email')->index();
            $table->unsignedBigInteger('id_soal')->index();
            $table->id();
            $table->json('data_jawaban_penilai');
            $table->integer('nilai_akhir');
            $table->integer('percobaan_ke');
            $table->integer('lama_waktu_pengerjaan');
            $table->date('waktu_selesai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
