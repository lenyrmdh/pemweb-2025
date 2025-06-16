<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gaji;
use Carbon\Carbon;

class GajiSeeder extends Seeder
{
    public function run(): void
    {
        Gaji::insert([
            [
                'pegawai_id' => 1, // pastikan ID ini sesuai dengan data_pegawais
                'periode' => Carbon::create(2025, 4, 1),
                'gaji_pokok' => 5000000,
                'tunjangan' => 1000000,
                'potongan' => 500000,
                'total_gaji' => 5500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pegawai_id' => 2,
                'periode' => Carbon::create(2025, 4, 1),
                'gaji_pokok' => 4000000,
                'tunjangan' => 500000,
                'potongan' => 0,
                'total_gaji' => 4500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pegawai_id' => 3,
                'periode' => Carbon::create(2025, 4, 1),
                'gaji_pokok' => 4200000,
                'tunjangan' => 600000,
                'potongan' => 200000,
                'total_gaji' => 4600000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
