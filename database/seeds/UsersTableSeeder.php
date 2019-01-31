<?php

use App\Models\User;
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

        User::create([
            'name' => 'Example Admin',
            'email' => 'admin@example.com',
            'password' => '123456q',
        ]);
    }
}
