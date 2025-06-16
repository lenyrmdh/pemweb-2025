<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Absensi;
use Carbon\Carbon;

class AbsensiSeeder extends Seeder
{
    public function run(): void
    {
        Absensi::insert([
            [
                'pegawai_id' => 2,
                'tanggal' => Carbon::now()->subDays(1)->toDateString(),
                'status' => 'hadir',
            ],
            [
                'pegawai_id' => 3,
                'tanggal' => Carbon::now()->subDays(1)->toDateString(),
                'status' => 'izin',
            ],
        ]);
    }
}
