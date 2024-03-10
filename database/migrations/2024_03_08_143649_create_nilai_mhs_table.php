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
        Schema::create('nilai_mhs', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->integer('nim');
            $table->integer('jurusan_id');
            $table->string('kota', 50);
            $table->string('provinsi', 50);
            $table->integer('matakuliah_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_mhs');
    }
};