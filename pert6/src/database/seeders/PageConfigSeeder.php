<?php

namespace Database\Seeders;

use App\Models\PageConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(PageConfig::count()==0) {
            PageConfig::create([
                'title' => 'Welcome To My Website',
                'detail' => 'Data Employee Pt.DigitalEdu',
                'image' => '',
            ]);
        }
    }
}
