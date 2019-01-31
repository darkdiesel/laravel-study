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
        // clear users table before inserting data
        if (DB::table('users')) {
            DB::table('users')->truncate();
        }

        DB::table('users')->insert([
            'name' => 'Example Admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456q'), // secret
            'remember_token' => str_random(10),
            'created_at' => now()
        ]);
    }
}
