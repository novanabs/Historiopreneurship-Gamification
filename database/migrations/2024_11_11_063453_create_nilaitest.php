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
        Schema::create('nilaitest', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('email')->references('email')->on('users');
            $table->string('email')->index();
            $table->integer('pre1');
            $table->integer('post1');
            $table->integer('pre2');
            $table->integer('post2');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilaitest');
        
    }
};
