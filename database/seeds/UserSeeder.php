<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $data = ['name' => 'admin', 'email' => 'admin@sport.com', 'password' => Hash::make('rahasia'), 'role' => 'admin'];
        User::insert($data);
    }
}
