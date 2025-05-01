<?php

namespace Database\Seeders;

use App\Models\PageConfig;
use Illuminate\Database\Seeder;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageConfig::create([
            'title' => 'HELLO THERE',
            'detail' => 'IM POCOYO, LETS SEE LENY PROFILE',
            'image' => '',
        ]);
    }
}
