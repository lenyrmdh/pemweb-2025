<?php

namespace Database\Seeders;

use App\Models\RiwayatMedis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiwayatMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
{
    RiwayatMedis::create([
        'kunjungan_id' => 1,
        'dokter_id' => 2, // dokter
        'diagnosa' => 'Infeksi ringan',
        'resep' => 'Paracetamol 500mg',
        'saran' => 'Istirahat cukup',
    ]);
}

}
