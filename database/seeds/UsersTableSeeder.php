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
            'name' => 'administrator',
            'first_name' => 'Igor',
            'last_name' => 'Peshkov',
            'email' => 'admin@laravel-study.loc',
            'password' => '123456q',
        ]);
    }
}
