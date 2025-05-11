<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Employee::count()==0) {
            Employee::create([
                'name' => 'Leny Ramadhani Setiawan',
                'position' => 'Developer',
                'division' => 'Engenering',
                'city' => 'Tangerang',
                'birthdate' =>  date('Y-m-d', strtotime('01 November 2005')),
                'photo' => '',
            ]);

            Employee::create([
            'name' => 'Adam Putra Pratama',
            'position' => 'Infrastructure & Networking Engineer',
            'division' => 'Infrastruktur Jaringan',
            'city' => 'Tangerang',
            'birthdate' =>  date('Y-m-d', strtotime('06 December 2004')),
            'photo' => '',
            ]);

            Employee::create([
                'name' => 'Anel Safitri',
                'position' => 'Data Analyst',
                'division' => 'Analisis Data',
                'city' => 'Tangerang',
                'birthdate' =>  date('Y-m-d', strtotime('07 June 2005')),
                'photo' => '',  
            ]);
        }
    }
}
