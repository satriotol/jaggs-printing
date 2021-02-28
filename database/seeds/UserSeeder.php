<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => "Admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("1234567")
        ]);
        $admin->assignRole('admin');
        $suadmin = User::create([
            'name' => "Super Admin",
            "email" => "suadmin@gmail.com",
            "password" => Hash::make("1234567")
        ]);
        $suadmin->assignRole('superadmin');    }
}
