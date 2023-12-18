<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ekta',
            'email' => 'ektamangal8076@gmail.com',
            'password' => bcrypt(value: 'qwerty7890'),
            'usertype' => 0,
            'phone' => 8076371375,
            'designation' => 'Super Admin',
            'booth' => '',
            'mandal_name' => '',
            'vidhan' => '',
            'zila' => '',
            'sambhag' => '',
            'pradesh' => 'Delhi'
        ]);
    }
}