<?php

use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * This method will seed the likes table on the database.
     *
     * @return void
     */
    public function run()
    {
        \App\Like::query()->truncate();
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 1,
                'like' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 2,
                'like' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 3,
                'like' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 4,
                'like' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 5,
                'like' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        DB::table('likes')->insert(
            [
                'user_id' => 1,
                'shop_id' => 6,
                'like' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
    }
}
