<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lembur;

class LemburSeeder extends Seeder
{
    public function run(): void
    {
        Lembur::create([
            'pegawai_id' => 3,
            'tanggal' => now()->subDays(2),
            'jam_mulai' => '18:00',
            'jam_selesai' => '21:00',
            'keterangan' => 'Lembur akhir bulan',
        ]);
    }
}
