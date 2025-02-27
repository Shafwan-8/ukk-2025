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
        Schema::create('tbl_siswa', function (Blueprint $table) {
            $table->id()->primary();
            $table->string("nis", 7);
            $table->string('nama', 100);
            $table->enum('jk', ['L', 'P']);
            $table->enum('tingkatan', ['1', '2', '3']);
            $table->string('jurusan', 20);
            $table->enum('aktif', ['0', '1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_siswa');
    }
};
