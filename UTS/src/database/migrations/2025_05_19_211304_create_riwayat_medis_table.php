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
    Schema::create('riwayat_medis', function (Blueprint $table) {
        $table->id();
        $table->foreignId('kunjungan_id')->constrained('kunjungans')->onDelete('cascade');
        $table->foreignId('dokter_id')->constrained('penggunas')->onDelete('cascade');
        $table->text('diagnosa');
        $table->text('resep')->nullable();
        $table->text('saran')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_medis');
    }
};
