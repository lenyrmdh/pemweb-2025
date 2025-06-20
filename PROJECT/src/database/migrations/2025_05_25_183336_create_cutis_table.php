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
        Schema::create('cutis', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pegawai_id')->constrained('data_pegawais')->onDelete('cascade');
        $table->date('tanggal_mulai');
        $table->date('tanggal_selesai');
        $table->text('alasan');
        $table->enum('status', ['Menunggu', 'Disetujui', 'Ditolak'])->default('Menunggu');
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutis');
    }
};
