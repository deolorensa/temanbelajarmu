<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //pengguna
        User::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => bcrypt('password'),
            'is_admin' => 1,
        ]);
        // User::create([
        //     'name' => "deo",
        //     'email' => "deo@gmail.com",
        //     'password' => bcrypt('password'),
        // ]);
        User::create([
            'name' => "fahri",
            'email' => "fahri@gmail.com",
            'password' => bcrypt('password'),
        ]);
        Quiz::create([
            'name' => "Komunikasi Data",
            'description' => "Komunikasi data adalah pertukaran data antara dua perangkat atau lebih yang tersambung melalui jaringan, baik itu jaringan lokal maupun jaringan internet. Contoh perangkat komunikasi data yang biasa kita gunakan adalah komputer, laptop, smartphone, dan tablet.",
            'minutes' => 5,
            'pdf' => "materi1.pdf",
        ]);
        Quiz::create([
            'name' => "Standar Komunikasi Data",
            'description' => "Standar komunikasi adalah protokol, nah protokol merupakan sebuah aturan atau standar yang mengatur atau mengijinkan terjadinya hubungan, komunikasi, dan perpindahan data antara dua atau lebih titik komputer. Protokol dapat diterapkan pada perangkat keras, perangkat lunak atau kombinasi dari keduanya. Pada tingkatan yang terendah, protokol mendefinisikan koneksi perangkat keras.",
            'minutes' => 5,
            'pdf' => "materi2.pdf",
        ]);
        // $admin = new User();
        // $admin->name = "admin";
        // $admin->email = "admin123@gmail.com";
        // $admin->password = bcrypt('password');
        // $admin->visible_password = "password";
        // $admin->email_verified_at = NOW();
        // $admin->occupation = "CEO";
        // $admin->address = "India";
        // $admin->phone = "8580541646";
        // $admin->is_admin = 1;
        // $admin->save();
        //php artisan db:seed
    }
}
