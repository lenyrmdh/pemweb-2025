<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataPegawai;
use Illuminate\Support\Facades\Hash;

class DataPegawaiSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        DataPegawai::create([
            'nip' => '19870001',
            'nama' => 'Admin Sistem',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '1990-01-01',
            'alamat' => 'Jl. Raya No. 1, Tangerang',
            'no_hp' => '081234567890',
            'jabatan_id' => 1, // pastikan id 1 ada di tabel jabatans
            'divisi_id' => 1,  // pastikan id 1 ada di tabel divis
        ]);

        // Pegawai 1
        DataPegawai::create([
            'nip' => '19870002',
            'nama' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'password' => Hash::make('password'),
            'role' => 'pegawai',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '1992-06-15',
            'alamat' => 'Jl. Melati No. 5, Bekasi',
            'no_hp' => '081298765432',
            'jabatan_id' => 2,
            'divisi_id' => 2,
        ]);

        // Pegawai 2
        DataPegawai::create([
            'nip' => '19870003',
            'nama' => 'Siti Aminah',
            'email' => 'siti@example.com',
            'password' => Hash::make('password'),
            'role' => 'pegawai',
            'jenis_kelamin' => 'P',
            'tanggal_lahir' => '1994-08-20',
            'alamat' => 'Jl. Mawar No. 9, Depok',
            'no_hp' => '082123456789',
            'jabatan_id' => 3,
            'divisi_id' => 3,
        ]);
    }
}
