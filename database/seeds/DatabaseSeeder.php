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
        $this->call(ShopsSeeder::class);
        $this->call(LikeSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
