<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pasiens = [
            [
                'nama' => 'John Smith',
                'nik' => '3201010101010001',
                'tanggal_lahir' => '1970-01-01',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Kebon Jeruk',
                'no_hp' => '081234567890',
            ],
            [
                'nama' => 'Andi Wijaya',
                'nik' => '3201010101010002',
                'tanggal_lahir' => '1985-03-15',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Melati No. 5',
                'no_hp' => '081234567891',
            ],
            [
                'nama' => 'Siti Aminah',
                'nik' => '3201010101010003',
                'tanggal_lahir' => '1992-07-12',
                'jenis_kelamin' => 'P',
                'alamat' => 'Jl. Mawar No. 10',
                'no_hp' => '081234567892',
            ],
            [
                'nama' => 'Budi Santoso',
                'nik' => '3201010101010004',
                'tanggal_lahir' => '1990-11-20',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Kenanga No. 8',
                'no_hp' => '081234567893',
            ],
            [
                'nama' => 'Dewi Lestari',
                'nik' => '3201010101010005',
                'tanggal_lahir' => '1988-09-05',
                'jenis_kelamin' => 'P',
                'alamat' => 'Jl. Anggrek No. 7',
                'no_hp' => '081234567894',
            ],
            [
                'nama' => 'Agus Pratama',
                'nik' => '3201010101010006',
                'tanggal_lahir' => '1995-06-25',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Dahlia No. 3',
                'no_hp' => '081234567895',
            ],
            [
                'nama' => 'Nurul Hidayah',
                'nik' => '3201010101010007',
                'tanggal_lahir' => '1997-01-30',
                'jenis_kelamin' => 'P',
                'alamat' => 'Jl. Teratai No. 9',
                'no_hp' => '081234567896',
            ],
            [
                'nama' => 'Fajar Nugroho',
                'nik' => '3201010101010008',
                'tanggal_lahir' => '1983-04-17',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Sawo No. 12',
                'no_hp' => '081234567897',
            ],
            [
                'nama' => 'Lina Marlina',
                'nik' => '3201010101010009',
                'tanggal_lahir' => '1991-10-10',
                'jenis_kelamin' => 'P',
                'alamat' => 'Jl. Durian No. 6',
                'no_hp' => '081234567898',
            ],
            [
                'nama' => 'Rudi Hartono',
                'nik' => '3201010101010010',
                'tanggal_lahir' => '1980-12-01',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Rambutan No. 2',
                'no_hp' => '081234567899',
            ],
        ];

        foreach ($pasiens as $pasien) {
            Pasien::create($pasien);
        }
    }
}
