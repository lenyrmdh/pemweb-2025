<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jabatan;

class JabatanSeeder extends Seeder
{
    public function run(): void
    {
        Jabatan::insert([
            ['nama' => 'Manager'],
            ['nama' => 'Supervisor'],
            ['nama' => 'Staff'],
            ['nama' => 'Admin HRD'],
        ]);
    }
}
