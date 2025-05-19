<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Panggil dulu RoleSeeder agar role sudah ada di DB
        $this->call([
            RoleSeeder::class,
        ]);

        // Buat user admin
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password123'), // jangan lupa password
        ]);
        $admin->assignRole('super_admin'); // assign role admin

        // Buat user dokter
        $dokter = User::factory()->create([
            'name' => 'Dokter',
            'email' => 'dokter@dokter.com',
            'password' => bcrypt('dokter123'),
        ]);
        $dokter->assignRole('dokter'); // assign role dokter

        // Seeder lain dipanggil setelah user dan role sudah siap
        $this->call([
            ProductSeeder::class,
            SeoSeeder::class,
            PageConfigSeeder::class,
            LogoSeeder::class,
            FooterSeeder::class,
            PenggunaSeeder::class,
            PasienSeeder::class,
            KunjunganSeeder::class,
            RiwayatMedisSeeder::class,
        ]);
    }
}
           