<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        // Buat user terlebih dahulu
        $user1 = User::updateOrCreate([
            'name' => 'Joko Anwar',
            'email' => 'Joko@example.com',
            'password' => Hash::make('password'), // Jangan lupa hash!
            'role' => 'employee', // pastikan field role ada
        ]);

        // Baru buat employee dan kaitkan dengan user
        Employee::updateOrCreate([
            'user_id' => $user1->id,
            'name' => 'Joko Anwar',
            'position' => 'Developer',
            'division' => 'Engineering',
            'city' => 'Tangerang',
            'salary' => '9800000',
            'birthdate' => '2005-11-01',
            'photo' => 'test.jpg',
        ]);

                // === 2 ===
        $user2 = User::updateOrCreate([
            'email' => 'andi1@example.com',
        ], [
            'name' => 'Andi',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user2->id,
        ], [
            'name' => 'Andi',
            'position' => 'UI/UX Designer',
            'division' => 'Product',
            'city' => 'Bandung',
            'salary' => '7503613',
            'birthdate' => '1991-06-08',
            'photo' => 'employee1.jpg',
        ]);

        // === 3 ===
        $user3 = User::updateOrCreate([
            'email' => 'budi2@example.com',
        ], [
            'name' => 'Budi',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user3->id,
        ], [
            'name' => 'Budi',
            'position' => 'UI/UX Designer',
            'division' => 'Product',
            'city' => 'Bandung',
            'salary' => '9485522',
            'birthdate' => '1993-11-19',
            'photo' => 'employee2.jpg',
        ]);

        // === 4 ===
        $user4 = User::updateOrCreate([
            'email' => 'budi2@example.com',
        ], [
            'name' => 'Budi',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user4->id,
        ], [
            'name' => 'Budi',
            'position' => 'UI/UX Designer',
            'division' => 'Product',
            'city' => 'Bandung',
            'salary' => '9485522',
            'birthdate' => '1993-11-19',
            'photo' => 'employee2.jpg',
        ]);

        // === 5 ===
        $user5 = User::updateOrCreate([
            'email' => 'budi2@example.com',
        ], [
            'name' => 'Budi',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user5->id,
        ], [
            'name' => 'Budi',
            'position' => 'UI/UX Designer',
            'division' => 'Product',
            'city' => 'Bandung',
            'salary' => '9485522',
            'birthdate' => '1993-11-19',
            'photo' => 'employee2.jpg',
        ]);

        // === 6 ===
        $user6 = User::updateOrCreate([
            'email' => 'budi2@example.com',
        ], [
            'name' => 'Budi',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user6->id,
        ], [
            'name' => 'Budi',
            'position' => 'UI/UX Designer',
            'division' => 'Product',
            'city' => 'Bandung',
            'salary' => '9485522',
            'birthdate' => '1993-11-19',
            'photo' => 'employee2.jpg',
        ]);

                
        Employee::updateOrCreate([
            'user_id' => $user6->id,
        ], [
            'name' => 'Fajar Hidayat',
            'position' => 'DevOps Engineer',
            'division' => 'Infrastructure',
            'city' => 'Depok',
            'salary' => '9900000',
            'birthdate' => '1992-07-25',
            'photo' => 'employee6.jpg',
        ]);

        // === 7 ===
        $user7 = User::updateOrCreate([
            'email' => 'employee7@example.com',
        ], [
            'name' => 'Gita Sari',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user7->id,
        ], [
            'name' => 'Gita Sari',
            'position' => 'QA Engineer',
            'division' => 'Quality Assurance',
            'city' => 'Makassar',
            'salary' => '9100000',
            'birthdate' => '1994-03-30',
            'photo' => 'employee7.jpg',
        ]);

        // === 8 ===
        $user8 = User::updateOrCreate([
            'email' => 'employee8@example.com',
        ], [
            'name' => 'Hendri Saputra',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user8->id,
        ], [
            'name' => 'Hendri Saputra',
            'position' => 'Data Scientist',
            'division' => 'Data',
            'city' => 'Medan',
            'salary' => '12000000',
            'birthdate' => '1987-11-12',
            'photo' => 'employee8.jpg',
        ]);

        // === 9 ===
        $user9 = User::updateOrCreate([
            'email' => 'employee9@example.com',
        ], [
            'name' => 'Intan Nuraini',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user9->id,
        ], [
            'name' => 'Intan Nuraini',
            'position' => 'Content Writer',
            'division' => 'Marketing',
            'city' => 'Palembang',
            'salary' => '8200000',
            'birthdate' => '1995-05-18',
            'photo' => 'employee9.jpg',
        ]);

        // === 10 ===
        $user10 = User::updateOrCreate([
            'email' => 'employee10@example.com',
        ], [
            'name' => 'Joko Rahmat',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user10->id,
        ], [
            'name' => 'Joko Rahmat',
            'position' => 'IT Support',
            'division' => 'Support',
            'city' => 'Bekasi',
            'salary' => '7900000',
            'birthdate' => '1990-02-14',
            'photo' => 'employee10.jpg',
        ]);

                // === 11 ===
        $user11 = User::updateOrCreate([
            'email' => 'employee11@example.com',
        ], [
            'name' => 'Kiki Amelia',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user11->id,
        ], [
            'name' => 'Kiki Amelia',
            'position' => 'Backend Developer',
            'division' => 'Engineering',
            'city' => 'Surabaya',
            'salary' => '9400000',
            'birthdate' => '1993-09-02',
            'photo' => 'employee11.jpg',
                ]);

        // === 12 ===
        $user12 = User::updateOrCreate([
            'email' => 'employee12@example.com',
        ], [
            'name' => 'Lutfi Azhar',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user12->id,
        ], [
            'name' => 'Lutfi Azhar',
            'position' => 'Frontend Developer',
            'division' => 'Engineering',
            'city' => 'Jakarta',
            'salary' => '9500000',
            'birthdate' => '1994-12-11',
            'photo' => 'employee12.jpg',
        ]);

        // === 13 ===
        $user13 = User::updateOrCreate([
            'email' => 'employee13@example.com',
        ], [
            'name' => 'Maya Salsabila',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user13->id,
        ], [
            'name' => 'Maya Salsabila',
            'position' => 'Graphic Designer',
            'division' => 'Creative',
            'city' => 'Bogor',
            'salary' => '8700000',
            'birthdate' => '1995-08-07',
            'photo' => 'employee13.jpg',
        ]);

        // === 14 ===
        $user14 = User::updateOrCreate([
            'email' => 'employee14@example.com',
        ], [
            'name' => 'Nanda Pratama',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user14->id,
        ], [
            'name' => 'Nanda Pratama',
            'position' => 'Cybersecurity Analyst',
            'division' => 'Security',
            'city' => 'Depok',
            'salary' => '11300000',
            'birthdate' => '1991-05-29',
            'photo' => 'employee14.jpg',
        ]);

        // === 15 ===
        $user15 = User::updateOrCreate([
            'email' => 'employee15@example.com',
        ], [
            'name' => 'Oktavia Putri',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user15->id,
        ], [
            'name' => 'Oktavia Putri',
            'position' => 'Business Analyst',
            'division' => 'Business',
            'city' => 'Cimahi',
            'salary' => '10200000',
            'birthdate' => '1992-01-17',
            'photo' => 'employee15.jpg',
        ]);

        // === 16 ===
        $user16 = User::updateOrCreate([
            'email' => 'employee16@example.com',
        ], [
            'name' => 'Putra Nugraha',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user16->id,
        ], [
            'name' => 'Putra Nugraha',
            'position' => 'Data Analyst',
            'division' => 'Data',
            'city' => 'Bandung',
            'salary' => '10800000',
            'birthdate' => '1989-06-18',
            'photo' => 'employee16.jpg',
        ]);

        // === 17 ===
        $user17 = User::updateOrCreate([
            'email' => 'employee17@example.com',
        ], [
            'name' => 'Qory Rahmawati',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user17->id,
        ], [
            'name' => 'Qory Rahmawati',
            'position' => 'Content Strategist',
            'division' => 'Marketing',
            'city' => 'Bekasi',
            'salary' => '8600000',
            'birthdate' => '1996-03-22',
            'photo' => 'employee17.jpg',
        ]);

        // === 18 ===
        $user18 = User::updateOrCreate([
            'email' => 'employee18@example.com',
        ], [
            'name' => 'Rizky Maulana',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user18->id,
        ], [
            'name' => 'Rizky Maulana',
            'position' => 'Product Owner',
            'division' => 'Product',
            'city' => 'Tangerang',
            'salary' => '11500000',
            'birthdate' => '1990-10-04',
            'photo' => 'employee18.jpg',
        ]);

        // === 19 ===
        $user19 = User::updateOrCreate([
            'email' => 'employee19@example.com',
        ], [
            'name' => 'Santi Lestari',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user19->id,
        ], [
            'name' => 'Santi Lestari',
            'position' => 'HR Specialist',
            'division' => 'HR',
            'city' => 'Cilegon',
            'salary' => '8900000',
            'birthdate' => '1988-02-20',
            'photo' => 'employee19.jpg',
        ]);

        // === 20 ===
        $user20 = User::updateOrCreate([
            'email' => 'employee20@example.com',
        ], [
            'name' => 'Tegar Firmansyah',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user20->id,
        ], [
            'name' => 'Tegar Firmansyah',
            'position' => 'Mobile Developer',
            'division' => 'Engineering',
            'city' => 'Bogor',
            'salary' => '9600000',
            'birthdate' => '1995-04-27',
            'photo' => 'employee20.jpg',
        ]);

                // === 21 ===
        $user21 = User::updateOrCreate([
            'email' => 'employee21@example.com',
        ], [
            'name' => 'Umar Alfarizi',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user21->id,
        ], [
            'name' => 'Umar Alfarizi',
            'position' => 'System Analyst',
            'division' => 'IT',
            'city' => 'Jakarta',
            'salary' => '10000000',
            'birthdate' => '1991-07-13',
            'photo' => 'employee21.jpg',
        ]);

        // === 22 ===
        $user22 = User::updateOrCreate([
            'email' => 'employee22@example.com',
        ], [
            'name' => 'Vina Mareta',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user22->id,
        ], [
            'name' => 'Vina Mareta',
            'position' => 'SEO Specialist',
            'division' => 'Marketing',
            'city' => 'Semarang',
            'salary' => '8800000',
            'birthdate' => '1993-05-09',
            'photo' => 'employee22.jpg',
        ]);

        // === 23 ===
        $user23 = User::updateOrCreate([
            'email' => 'employee23@example.com',
        ], [
            'name' => 'Wahyu Ramadhan',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user23->id,
        ], [
            'name' => 'Wahyu Ramadhan',
            'position' => 'Software Engineer',
            'division' => 'Engineering',
            'city' => 'Depok',
            'salary' => '10400000',
            'birthdate' => '1989-09-11',
            'photo' => 'employee23.jpg',
        ]);

        // === 24 ===
        $user24 = User::updateOrCreate([
            'email' => 'employee24@example.com',
        ], [
            'name' => 'Xenia Prameswari',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user24->id,
        ], [
            'name' => 'Xenia Prameswari',
            'position' => 'Project Manager',
            'division' => 'Management',
            'city' => 'Yogyakarta',
            'salary' => '12300000',
            'birthdate' => '1987-10-23',
            'photo' => 'employee24.jpg',
        ]);

        // === 25 ===
        $user25 = User::updateOrCreate([
            'email' => 'employee25@example.com',
        ], [
            'name' => 'Yusuf Hidayat',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user25->id,
        ], [
            'name' => 'Yusuf Hidayat',
            'position' => 'Cloud Engineer',
            'division' => 'Infrastructure',
            'city' => 'Bandung',
            'salary' => '11600000',
            'birthdate' => '1990-11-08',
            'photo' => 'employee25.jpg',
        ]);

        // === 26 ===
        $user26 = User::updateOrCreate([
            'email' => 'employee26@example.com',
        ], [
            'name' => 'Zahra Andini',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user26->id,
        ], [
            'name' => 'Zahra Andini',
            'position' => 'QA Engineer',
            'division' => 'Engineering',
            'city' => 'Tangerang',
            'salary' => '9500000',
            'birthdate' => '1994-03-05',
            'photo' => 'employee26.jpg',
        ]);

        // === 27 ===
        $user27 = User::updateOrCreate([
            'email' => 'employee27@example.com',
        ], [
            'name' => 'Agus Prasetyo',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user27->id,
        ], [
            'name' => 'Agus Prasetyo',
            'position' => 'IT Support',
            'division' => 'Support',
            'city' => 'Bogor',
            'salary' => '7800000',
            'birthdate' => '1992-06-25',
            'photo' => 'employee27.jpg',
        ]);

        // === 28 ===
        $user28 = User::updateOrCreate([
            'email' => 'employee28@example.com',
        ], [
            'name' => 'Bella Sari',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user28->id,
        ], [
            'name' => 'Bella Sari',
            'position' => 'Marketing Executive',
            'division' => 'Marketing',
            'city' => 'Bekasi',
            'salary' => '8300000',
            'birthdate' => '1996-08-14',
            'photo' => 'employee28.jpg',
        ]);

        // === 29 ===
        $user29 = User::updateOrCreate([
            'email' => 'employee29@example.com',
        ], [
            'name' => 'Candra Wijaya',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user29->id,
        ], [
            'name' => 'Candra Wijaya',
            'position' => 'Scrum Master',
            'division' => 'Agile',
            'city' => 'Cirebon',
            'salary' => '10100000',
            'birthdate' => '1988-01-10',
            'photo' => 'employee29.jpg',
        ]);

        // === 30 ===
        $user30 = User::updateOrCreate([
            'email' => 'employee30@example.com',
        ], [
            'name' => 'Dewi Kartika',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user30->id,
        ], [
            'name' => 'Dewi Kartika',
            'position' => 'Admin Officer',
            'division' => 'Operations',
            'city' => 'Tegal',
            'salary' => '7200000',
            'birthdate' => '1997-12-01',
            'photo' => 'employee30.jpg',
        ]);

                // === 31 ===
        $user31 = User::updateOrCreate([
            'email' => 'employee31@example.com',
        ], [
            'name' => 'Eka Putri',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user31->id,
        ], [
            'name' => 'Eka Putri',
            'position' => 'Business Analyst',
            'division' => 'Business',
            'city' => 'Pontianak',
            'salary' => '9400000',
            'birthdate' => '1991-09-14',
            'photo' => 'employee31.jpg',
        ]);

        // === 32 ===
        $user32 = User::updateOrCreate([
            'email' => 'employee32@example.com',
        ], [
            'name' => 'Fajar Nugroho',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user32->id,
        ], [
            'name' => 'Fajar Nugroho',
            'position' => 'Frontend Developer',
            'division' => 'Engineering',
            'city' => 'Magelang',
            'salary' => '8700000',
            'birthdate' => '1993-02-07',
            'photo' => 'employee32.jpg',
        ]);

        // === 33 ===
        $user33 = User::updateOrCreate([
            'email' => 'employee33@example.com',
        ], [
            'name' => 'Gita Aprilia',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user33->id,
        ], [
            'name' => 'Gita Aprilia',
            'position' => 'Backend Developer',
            'division' => 'Engineering',
            'city' => 'Malang',
            'salary' => '9200000',
            'birthdate' => '1992-10-02',
            'photo' => 'employee33.jpg',
        ]);

        // === 34 ===
        $user34 = User::updateOrCreate([
            'email' => 'employee34@example.com',
        ], [
            'name' => 'Hendra Wijaya',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user34->id,
        ], [
            'name' => 'Hendra Wijaya',
            'position' => 'Mobile Developer',
            'division' => 'Engineering',
            'city' => 'Manado',
            'salary' => '9400000',
            'birthdate' => '1990-04-21',
            'photo' => 'employee34.jpg',
        ]);

        // === 35 ===
        $user35 = User::updateOrCreate([
            'email' => 'employee35@example.com',
        ], [
            'name' => 'Intan Lestari',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user35->id,
        ], [
            'name' => 'Intan Lestari',
            'position' => 'Graphic Designer',
            'division' => 'Design',
            'city' => 'Madiun',
            'salary' => '8300000',
            'birthdate' => '1996-03-30',
            'photo' => 'employee35.jpg',
        ]);

        // === 36 ===
        $user36 = User::updateOrCreate([
            'email' => 'employee36@example.com',
        ], [
            'name' => 'Joko Purwanto',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user36->id,
        ], [
            'name' => 'Joko Purwanto',
            'position' => 'Product Manager',
            'division' => 'Product',
            'city' => 'Pekanbaru',
            'salary' => '11000000',
            'birthdate' => '1988-07-19',
            'photo' => 'employee36.jpg',
        ]);

        // === 37 ===
        $user37 = User::updateOrCreate([
            'email' => 'employee37@example.com',
        ], [
            'name' => 'Kartika Dewi',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user37->id,
        ], [
            'name' => 'Kartika Dewi',
            'position' => 'HR Specialist',
            'division' => 'HR',
            'city' => 'Serang',
            'salary' => '8800000',
            'birthdate' => '1994-05-25',
            'photo' => 'employee37.jpg',
        ]);

        // === 38 ===
        $user38 = User::updateOrCreate([
            'email' => 'employee38@example.com',
        ], [
            'name' => 'Lukman Hakim',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user38->id,
        ], [
            'name' => 'Lukman Hakim',
            'position' => 'System Administrator',
            'division' => 'Infrastructure',
            'city' => 'Surabaya',
            'salary' => '9600000',
            'birthdate' => '1991-11-11',
            'photo' => 'employee38.jpg',
        ]);

        // === 39 ===
        $user39 = User::updateOrCreate([
            'email' => 'employee39@example.com',
        ], [
            'name' => 'Maya Sari',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user39->id,
        ], [
            'name' => 'Maya Sari',
            'position' => 'Customer Service',
            'division' => 'Support',
            'city' => 'Palembang',
            'salary' => '7400000',
            'birthdate' => '1995-06-18',
            'photo' => 'employee39.jpg',
        ]);

        // === 40 ===
        $user40 = User::updateOrCreate([
            'email' => 'employee40@example.com',
        ], [
            'name' => 'Nugroho Wicaksono',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user40->id,
        ], [
            'name' => 'Nugroho Wicaksono',
            'position' => 'Tech Lead',
            'division' => 'Engineering',
            'city' => 'Salatiga',
            'salary' => '12000000',
            'birthdate' => '1985-12-20',
            'photo' => 'employee40.jpg',
        ]);

                // === 41 ===
        $user41 = User::updateOrCreate([
            'email' => 'employee41@example.com',
        ], [
            'name' => 'Rizky Pratama',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user41->id,
        ], [
            'name' => 'Rizky Pratama',
            'position' => 'Content Writer',
            'division' => 'Marketing',
            'city' => 'Yogyakarta',
            'salary' => '7000000',
            'birthdate' => '1995-04-15',
            'photo' => 'employee41.jpg',
        ]);

        // === 42 ===
        $user42 = User::updateOrCreate([
            'email' => 'employee42@example.com',
        ], [
            'name' => 'Sari Dewi',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user42->id,
        ], [
            'name' => 'Sari Dewi',
            'position' => 'QA Tester',
            'division' => 'Quality Assurance',
            'city' => 'Bandung',
            'salary' => '7500000',
            'birthdate' => '1991-07-21',
            'photo' => 'employee42.jpg',
        ]);

        // === 43 ===
        $user43 = User::updateOrCreate([
            'email' => 'employee43@example.com',
        ], [
            'name' => 'Teguh Santoso',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user43->id,
        ], [
            'name' => 'Teguh Santoso',
            'position' => 'Network Engineer',
            'division' => 'IT Support',
            'city' => 'Jakarta',
            'salary' => '9000000',
            'birthdate' => '1989-10-05',
            'photo' => 'employee43.jpg',
        ]);

        // === 44 ===
        $user44 = User::updateOrCreate([
            'email' => 'employee44@example.com',
        ], [
            'name' => 'Ulfa Rahma',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user44->id,
        ], [
            'name' => 'Ulfa Rahma',
            'position' => 'Business Analyst',
            'division' => 'Business Development',
            'city' => 'Surabaya',
            'salary' => '9800000',
            'birthdate' => '1990-03-22',
            'photo' => 'employee44.jpg',
        ]);

        // === 45 ===
        $user45 = User::updateOrCreate([
            'email' => 'employee45@example.com',
        ], [
            'name' => 'Vina Kusuma',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user45->id,
        ], [
            'name' => 'Vina Kusuma',
            'position' => 'Graphic Designer',
            'division' => 'Design',
            'city' => 'Bandung',
            'salary' => '8500000',
            'birthdate' => '1994-09-30',
            'photo' => 'employee45.jpg',
        ]);

        // === 46 ===
        $user46 = User::updateOrCreate([
            'email' => 'employee46@example.com',
        ], [
            'name' => 'Wahyu Hidayat',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user46->id,
        ], [
            'name' => 'Wahyu Hidayat',
            'position' => 'Data Scientist',
            'division' => 'Data Analytics',
            'city' => 'Jakarta',
            'salary' => '12000000',
            'birthdate' => '1987-12-11',
            'photo' => 'employee46.jpg',
        ]);

        // === 47 ===
        $user47 = User::updateOrCreate([
            'email' => 'employee47@example.com',
        ], [
            'name' => 'Xavier Pratama',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user47->id,
        ], [
            'name' => 'Xavier Pratama',
            'position' => 'Mobile Developer',
            'division' => 'Engineering',
            'city' => 'Bali',
            'salary' => '10500000',
            'birthdate' => '1993-06-18',
            'photo' => 'employee47.jpg',
        ]);

        // === 48 ===
        $user48 = User::updateOrCreate([
            'email' => 'employee48@example.com',
        ], [
            'name' => 'Yuniarti S',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user48->id,
        ], [
            'name' => 'Yuniarti S',
            'position' => 'Customer Service',
            'division' => 'Support',
            'city' => 'Malang',
            'salary' => '6700000',
            'birthdate' => '1995-08-23',
            'photo' => 'employee48.jpg',
        ]);

        // === 49 ===
        $user49 = User::updateOrCreate([
            'email' => 'employee49@example.com',
        ], [
            'name' => 'Zainal Arifin',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user49->id,
        ], [
            'name' => 'Zainal Arifin',
            'position' => 'IT Support',
            'division' => 'IT Support',
            'city' => 'Jakarta',
            'salary' => '7500000',
            'birthdate' => '1990-01-14',
            'photo' => 'employee49.jpg',
        ]);

        // === 50 ===
        $user50 = User::updateOrCreate([
            'email' => 'employee50@example.com',
        ], [
            'name' => 'Ani Lestari',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        Employee::updateOrCreate([
            'user_id' => $user50->id,
        ], [
            'name' => 'Ani Lestari',
            'position' => 'Digital Marketing',
            'division' => 'Marketing',
            'city' => 'Jakarta',
            'salary' => '8800000',
            'birthdate' => '1992-11-29',
            'photo' => 'employee50.jpg',
        ]);



        
    }
}
