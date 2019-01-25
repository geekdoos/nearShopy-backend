<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * This method will seed the users table on the database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::query()->truncate();
        DB::table('users')->insert([
            'name' => 'Admin admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
        ]);
    }
}
