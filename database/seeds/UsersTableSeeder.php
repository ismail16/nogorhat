<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'phone' => '123456789',
            'address' => 'Dhaka',
            'password' => bcrypt('11111111'),
            'status' => 1,
        ]);
        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'author',
            'email' => 'author@email.com',
            'phone' => '987654321',
            'address' => 'Dhaka',
            'password' => bcrypt('22222222'),
            'status' => 1,
        ]);
    }
}
