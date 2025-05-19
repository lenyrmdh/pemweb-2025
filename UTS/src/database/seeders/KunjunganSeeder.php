<?php

namespace Database\Seeders;

use App\Models\Kunjungan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KunjunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
{
    Kunjungan::create([
        'pasien_id' => 1,
        'tanggal_kunjungan' => now(),
        'keluhan' => 'Pusing dan demam',
        'tindakan_awal' => 'Diberi paracetamol',
    ]);
}

}
