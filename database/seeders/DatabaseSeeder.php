<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'uname' => 'bakpau1',
            'name' => 'bakpau1',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'Super Admin',
            'alamat' => 'Jalan, Bakpau1',
            'telp' => '123456781234',
            'gender' => 'Perempuan',
            'tempat' => 'Balikpapan',
            'tl' => '2016-12-02',
            'image' => 'post-images/5Vrwaa5XoeFedYEYVYhpv2jLeRe7uFafaGh8ZY56.jpg',
        ]);

        User::create([
            'uname' => 'bakpau2',
            'name' => 'bakpau2',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'Manager',
            'alamat' => 'Jalan, Bakpau2',
            'telp' => '123456781234',
            'gender' => 'Perempuan',
            'tempat' => 'Balikpapan',
            'tl' => '2016-12-02',
            'image' => 'post-images/5Vrwaa5XoeFedYEYVYhpv2jLeRe7uFafaGh8ZY56.jpg',
        ]);

        User::create([
            'uname' => 'bakpau3',
            'name' => 'bakpau3',
            'email' => 'seniormanager@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'Senior Manager',
            'alamat' => 'Jalan, Bakpau3',
            'telp' => '123456781234',
            'gender' => 'Laki-laki',
            'tempat' => 'Balikpapan',
            'tl' => '2016-12-02',
            'image' => 'post-images/5Vrwaa5XoeFedYEYVYhpv2jLeRe7uFafaGh8ZY56.jpg',
        ]);

        User::create([
            'uname' => 'bakpau4',
            'name' => 'bakpau4',
            'email' => 'teknisi@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'Teknisi',
            'alamat' => 'Jalan, Bakpau3',
            'telp' => '123456781234',
            'gender' => 'Laki-laki',
            'tempat' => 'Balikpapan',
            'tl' => '2016-12-02',
            'image' => 'post-images/5Vrwaa5XoeFedYEYVYhpv2jLeRe7uFafaGh8ZY56.jpg',
        ]);

        User::create([
            'uname' => 'bakpau5',
            'name' => 'bakpau5',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'Staff',
            'alamat' => 'Jalan, Bakpau3',
            'telp' => '123456781234',
            'gender' => 'Laki-laki',
            'tempat' => 'Balikpapan',
            'tl' => '2016-12-02',
            'image' => 'post-images/5Vrwaa5XoeFedYEYVYhpv2jLeRe7uFafaGh8ZY56.jpg',
        ]);
    }
}
