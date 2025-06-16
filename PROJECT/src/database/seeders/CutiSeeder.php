<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cuti;

class CutiSeeder extends Seeder
{
    public function run(): void
    {
        Cuti::create([
            'pegawai_id' => 2,
            'tanggal_mulai' => now()->subDays(5),
            'tanggal_selesai' => now()->subDays(3),
            'alasan' => 'Cuti pribadi',
        ]);
    }
}
