<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Product::count() == 0) {
            Product::create([
                'name' => 'Leadership Team',
                'description' => 'Tim pimpinan kami berpengalaman dan berdedikasi, memimpin perusahaan menuju sukses. CEO Adam Putra Pratama fokus pada visi jangka panjang, COO Leny Ramadhani Setiawan mengelola operasional, dan CFO Anel Safitri bertanggung jawab atas keuangan.',
                'image' => '',
            ]);

            Product::create([
                'name' => 'Contact Us',
                'description' => 'Hubungi kami untuk pertanyaan, saran, atau kerjasama. Tim kami siap membantu melalui email digital@edu.com atau melalui telepon di (021) 123-4567.',
                'image' => '',
            ]);
        }
    }
}
