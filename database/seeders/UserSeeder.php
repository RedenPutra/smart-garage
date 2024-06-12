<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User;
        $user->nama = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('1234');
        $user->role = "Admin";
        $user->save();

        $user = new User;
        $user->nama = "Staff";
        $user->email = "staff@gmail.com";
        $user->password = bcrypt('1234');
        $user->role = "Staff";
        $user->save();

        $user = new User;
        $user->nama = "Hanzo";
        $user->email = "hanzo@gmail.com";
        $user->password = bcrypt('1234');
        $user->role = "Pengguna";
        $user->save();

        $user = new User;
        $user->nama = "Ling";
        $user->email = "ling@gmail.com";
        $user->password = bcrypt('1234');
        $user->role = "Pengguna";
        $user->save();
    }
}