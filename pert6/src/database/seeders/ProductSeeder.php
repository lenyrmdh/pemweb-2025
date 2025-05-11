<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Product::count()==0) {
            Product::create([
                'name' => 'MyTeam',
                'description' => 'Kenali Leny (Web Developer), Adam (Network Engineer) dan Anel (Data Analyst Specialist), — tiga talenta IT berbakat dari Tangerang yang siap membangun solusi digital terbaik.',
                'image' => '',
            ]);
        }
    }
}