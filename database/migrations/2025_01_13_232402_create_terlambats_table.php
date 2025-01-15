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
        Schema::create('terlambats', function (Blueprint $table) {
            $table->id('id_terlambat')->primary();
            $table->char('nis', 7);
            $table->string('kelas', 10);
            $table->string('semester', 20);
            $table->string('tapel', 10);
            $table->foreignId('id_alasan')->references('id_alasan')->on('alasans')->onDelete('cascade');
            $table->date('tanggal')->default(new DateTime());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terlambats');
    }
};
