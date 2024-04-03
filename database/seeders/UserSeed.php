<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $UserData = [
            [
                'id' => '1',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ],
            [
                'id' => '2',
                'name' => 'anggota',
                'email' => 'anggota@gmail.com',
                'password' => bcrypt('anggota123'),
                'role' => 'anggota'
            ],
            [
                'id' => '3',
                'name' => 'Wahyudi',
                'email' => 'wahyudi@gmail.com',
                'password' => bcrypt('wahyudi123'),
                'role' => 'anggota'
            ],
            [
                'id' => '4',
                'name' => 'Wardianto',
                'email' => 'wardianto@gmail.com',
                'password' => bcrypt('wardianto123'),
                'role' => 'anggota'
            ],
            [
                'id' => '5',
                'name' => 'Linda',
                'email' => 'linda@gmail.com',
                'password' => bcrypt('linda123'),
                'role' => 'anggota'
            ],
            [
                'id' => '6',
                'name' => 'Suwarno',
                'email' => 'suwarno@gmail.com',
                'password' => bcrypt('suwarno123'),
                'role' => 'anggota'
            ],
            [
                'id' => '7',
                'name' => 'Tabroni',
                'email' => 'tabroni@gmail.com',
                'password' => bcrypt('tabroni123'),
                'role' => 'anggota'
            ],
            [
                'id' => '8',
                'name' => 'Ridwan',
                'email' => 'ridwan@gmail.com',
                'password' => bcrypt('ridwan123'),
                'role' => 'anggota'
            ],
            [
                'id' => '9',
                'name' => 'Rosali',
                'email' => 'rosali@gmail.com',
                'password' => bcrypt('rosali123'),
                'role' => 'anggota'
            ],
            [
                'id' => '10',
                'name' => 'Anggi',
                'email' => 'anggi@gmail.com',
                'password' => bcrypt('anggi123'),
                'role' => 'anggota'
            ],
            [
                'id' => '11',
                'name' => 'Syivana',
                'email' => 'syivana@gmail.com',
                'password' => bcrypt('syivana123'),
                'role' => 'anggota'
            ],
            [
                'id' => '12',
                'name' => 'Asep',
                'email' => 'asep@gmail.com',
                'password' => bcrypt('asep123'),
                'role' => 'anggota'
            ],
        ];
        foreach ($UserData as $key => $value) {
            User::create($value);
        }
    }
}
