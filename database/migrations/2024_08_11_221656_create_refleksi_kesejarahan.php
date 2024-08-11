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
        Schema::create('refleksi_kesejarahan', function (Blueprint $table) {
            $table->id('id_tabel_refleksi_kesejarahan');
            $table->enum('respon', ['sangat puas', 'puas', 'biasa saja', 'kurang puas', 'sangat kurang puas']);
            $table->enum('aspek', ['sudah dipelajari', 'dikuasai', 'belum dikuasai', 'upaya untuk menguasai']);
            $table->text('jawaban');
            $table->date('created_at');
            $table->string('created_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refleksi_kesejarahan');
    }
};
