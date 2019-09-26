<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'phone' => '123456789',
            'address' => 'Dhaka',
            'password' => bcrypt('11111111'),
            'role' => 1,
            'status' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@email.com',
            'phone' => '98765465',
            'address' => 'Dhaka',
            'password' => bcrypt('22222222'),
            'role' => 2,
            'status' => 1,
        ]);
    }
}
